<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DhrUser;
use App\Models\Worker;
use App\Models\UserInfo;
use App\Models\Service;
use Mail;
use DB;

class Home extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_route(Request $request)
    {
        $user_skill_info=DB::table('skills')->get();
        return view('index',compact('user_skill_info'));
    }


    public function skill_route(Request $request, $skill)
    {
        $userdata=DB::table('user_infos')->where('skill',$skill)->get();
        // dd(count($userdata));
        $keyword='';
        $sk = $skill;
        // dd($userdata);
        return view('accounts.skill_search',compact('userdata', 'keyword', 'sk'));
    }

    public function password_route(Request $request)
    {
      if($request->session()->has('u_session')){
        $userinfo= $request->session()->get('u_session')->userId;
        // dd($userinfo);

        $user_get=DB::table('dhr_users')->where('userId',$userinfo)->first();
        // $user_get_info=DB::table('user_infos')->where('f_userId',$userinfo)->first();
        // $user_skill_info=DB::table('skills')->get();
        // dd($user_get_info);

        return view('accounts.changePassword',compact('user_get'));


      }else {

        return redirect('/accounts/login');
      }

    }

     public function PasswordChange(Request $request)
    {
      $old_password = md5($request->get('old_password'));
      $new_password = $request->get('new_password');
      $confirm_password = $request->get('confirm_password');

      $usersession= $request->session()->get('u_session');
      if ($old_password == ($usersession->password)) {
        if ($new_password == $confirm_password) {
          $nameinfo['password'] = md5($request->get('new_password'));
          $getuser=DB::table('dhr_users')->where('userId',$usersession->userId)->update($nameinfo);

          echo "successfully";
        }else {
          echo "not_confirm";
        }
        // dd(md5($usersession->password));
        // $nameinfo['password'] = $request->get('new_password');
        // dd($nameinfo['password']);

      }else {
        echo "incorrect";
      }



    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      if($request->session()->has('u_session')){
    $userType = $request->session()->get('u_session');
        if ($userType->type == "individual") {
          return redirect('/accounts/individual');
        }elseif ($userType->type == "shop") {
          return redirect('/accounts/franchise');
        }elseif ($userType->type == "company") {
          return redirect('/accounts/company');
        }elseif ($userType->type == "serviceUser") {
          return redirect('/accounts/hireService');
        }elseif ($userType->type == "admin") {
          return redirect('/admin/dashboard');
        }
      }else {
        return view('accounts.signup');
      }

    }


    public function login_route(Request $request)
    {
      if($request->session()->has('u_session')){
    $userType = $request->session()->get('u_session');
        if ($userType->type == "individual") {
          return redirect('/accounts/individual');
        }elseif ($userType->type == "shop") {
          return redirect('/accounts/franchise');
        }elseif ($userType->type == "company") {
          return redirect('/accounts/company');
        }elseif ($userType->type == "serviceUser") {
          return redirect('/accounts/hireService');
        }elseif ($userType->type == "admin") {
          return redirect('/admin/dashboard');
        }
      }else {
        return view('accounts.login');
      }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // dd($request->_token);
      $validator =  $this->validate($request,[
        'phone' => 'required|unique:dhr_users,phone|min:10|max:15',
        'password' => 'required|min:6'
      ]);

    $email['email'] = $request->input('email');
      $user = new DhrUser;
      $user->phone = $request->input('phone');
      $user->email = $request->input('email');
      $user->password = md5($request->input('password'));
      $user->type = $request->input('type');
      $user->token = $request->_token;
      $user->save();
      Mail::send('mail.verify',['token' =>$request->_token],
      function ($message) use ($user)
      {

        $message->subject('E-dehari.com - Account Verifaction');
        $message->from('nabeelirbab@gmail.com', 'E-dehari');
        $message->to(['email' => $request->input('email')]);
      });
      return redirect('/accounts/login')->with('success','Please verify your account');
    }



    public function searching(Request $request)
    {
      // dd($request->all());
    $keyword = $request->input('skill');
    $all=DB::table('user_infos');
    if($keyword != ''){
   $all->where(function ($query) use ($keyword) {
    $expl = @explode(' ', $keyword);
    foreach($expl as $kw){
     $query->orWhere('skill','LIKE','%'.$kw.'%');
     $query->orWhere('w_name','LIKE','%'.$kw.'%');
    }
   });
 }
 $userdata=$all->get();
 $sk='';
    // dd($userdata);
      return view('accounts.skill_search', compact('userdata', 'keyword', 'sk'));
    }


    public function change_status(Request $request, $token)
    {
      $token =trim($request->segment(2));
      dd($token);
      // $token = $request->_token;
      $user['status'] = 'Y';
      $getuser=DB::table('dhr_users')->where('token',$token)->update($user);

      return redirect('/accounts/login')->with('success','Your account has been verified');
    }





    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // Login Function
public function login(Request $request)
{
  $phone  = $request->input('phone');
  $password = md5($request->input('password'));
  // dd($request->all());
  $userphone = DhrUser::wherephone($phone)->first();
  $useremail = DhrUser::whereemail($phone)->first();
  if (count($userphone) !=0) {
    if ($phone == $userphone->phone) {
      if ($password == ($userphone->password)) {
        $request->session()->put('u_session', $userphone);
        $val = $request->session()->get('u_session');

        $user = DhrUser::find($val->userId);
        if ($user->type == "individual") {
          return redirect('/accounts/individual');
        }elseif ($user->type == "shop") {
          return redirect('/accounts/franchise');

        }elseif ($user->type == "company") {
          return redirect('/accounts/company');

        }elseif ($user->type == "serviceUser") {
          return redirect('/accounts/hireService');

        }elseif ($user->type == "admin") {
          return redirect('/admin/dashboard');

        }

      }else {
        return redirect('/accounts/login')->with('red-alert', 'Incorrect Password');
      }
    }
  }
  elseif(count($useremail) != 0) {

    if ($phone == $useremail->email) {
      if ($password == ($useremail->password)) {
        $request->session()->put('u_session', $useremail);
        $val = $request->session()->get('u_session');

        $user = DhrUser::find($val->userId);
        if ($user->type == "individual") {
          return redirect('/accounts/individual');
        }elseif ($user->type == "shop") {
          return redirect('/accounts/franchise');

        }elseif ($user->type == "company") {
          return redirect('/accounts/company');

        }elseif ($user->type == "serviceUser") {
          return redirect('/accounts/hireService');

        }elseif ($user->type == "admin") {
          return redirect('/admin/dashboard');

        }

      }else {
        return redirect('/accounts/login')->with('red-alert', 'Incorrect Password');
      }
    }
  }else{
    return redirect('/accounts/login')->with('red-alert', 'Incorrect Phone or Email');
  }

}


public function Logout()
{
  session()->flush();
  session()->forget('u_session');
  return redirect('/accounts/login');
}



}
