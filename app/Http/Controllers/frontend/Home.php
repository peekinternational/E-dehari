<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DhrUser;
use App\Models\Worker;
class Home extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
          return redirect('/accounts/frenchise');
        }elseif ($userType->type == "company") {
          return redirect('/accounts/frenchise');
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
          return redirect('/accounts/frenchise');
        }elseif ($userType->type == "company") {
          return redirect('/accounts/frenchise');
        }
      }else {
        return view('accounts.login');
      }

    }



    public function individual_route(Request $request)
    {
      if($request->session()->has('u_session')){
        return view('accounts.individual');


      }else {

        return redirect('/accounts/login');
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

      $validator =  $this->validate($request,[
    'email_phone' => 'required|unique:dhr_users,email_phone',
    'password' => 'required|min:6'
  ]);

      $user = new DhrUser;
      $user->email_phone = $request->input('email_phone');
      $user->password = md5($request->input('password'));
      $user->type = $request->input('type');

      $user->save();
      return redirect('/accounts/login')->with('success','You are successfully Registered');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create_worker(Request $request)
    {

      $validator =  $this->validate($request,[
    'w_name' => 'required',
    'w_designation' => 'required'
  ]);
        $userinfo= $request->session()->get('u_session');

      $user = new Worker;
      $user->w_name = $request->input('w_name');
      $user->w_designation = $request->input('w_designation');
      $user->w_mobile = $request->input('w_mobile');
      $user->w_gender = $request->input('w_gender');
      $user->w_image = $request->input('w_image');
      $user->userId = $userinfo->userId;

      $user->save();
      return redirect('/accounts/frenchise')->with('success','You have added new worker successfully');
    }

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
  $email_phone  = $request->input('email_phone');
  $password = md5($request->input('password'));
  // dd($request->all());
  $user1 = DhrUser::whereemail_phone($email_phone)->first();

  if (!empty($user1->email_phone)) {
    if ($email_phone == $user1->email_phone) {
      if ($password == ($user1->password)) {
        $request->session()->put('u_session', $user1);
        // $request->session()->put('type', $user1->type);
        // $request->session()->put('name', $user1->name);
        $val = $request->session()->get('u_session');

        $user = DhrUser::find($val->userId);
        // $message = "you are successfully logged in";
        // $request->session()->put('success', "you are successfully logged in");
        if ($user->type == "individual") {
          return redirect('/accounts/individual');
        }elseif ($user->type == "shop") {
          // return view('accounts.frenchise', compact('user'));
          return redirect('/accounts/frenchise');

        }elseif ($user->type == "company") {
          // return view('accounts.frenchise', compact('user'));
          return redirect('/accounts/company');

        }

        // return view('index', compact('user'));

      }else {
        return redirect('/login')->with('red-alert', 'Incorrect Password');
      }
    }
    }else {
      return redirect('/login')->with('red-alert', 'Incorrect Phone');
  }
}


public function Logout()
{
  session()->flush();
  session()->forget('u_session');
  return redirect('/accounts/login');
}

}
