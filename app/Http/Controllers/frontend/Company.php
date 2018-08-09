<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DhrUser;
use App\Models\Worker;
use App\Models\UserInfo;
use App\Models\Service;
use DB;
class Company extends Controller
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

    public function company_route(Request $request)
    {
      if($request->session()->has('u_session')){
        $userinfo= $request->session()->get('u_session')->userId;
        // dd($userinfo);

        $user_get=DB::table('dhr_users')->where('userId',$userinfo)->first();
      ///  dd($user_get);

        $user_get_info=DB::table('user_infos')->where('f_userId',$userinfo)->first();
        $user_skill_info=DB::table('skills')->get();
        // dd($user_skill_info);

      return view('accounts.company',compact('user_get','user_get_info', 'user_skill_info'));


      }else {

        return redirect('/accounts/login');
      }

    }

    public function create_worker(Request $request)
    {
       //dd($request->all());
      $validator =  $this->validate($request,[
    'w_name' => 'required',
    'w_designation' => 'required'
  ]);
        $userinfo= $request->session()->get('u_session');
      $wid = $request->input('id');
      // dd($wid);
      $nameinfo['w_name'] = $request->input('w_name');
      // dd($nameinfo['f_name']);
      $nameinfo['skill'] = $request->input('w_designation');
      $nameinfo['w_phone'] = $request->input('w_mobile');
      $nameinfo['gender'] = $request->input('w_gender');
      $nameinfo['dob'] = $request->input('dob');
      $nameinfo['experience'] = $request->input('experience');
      $nameinfo['location'] = $request->input('location');
      $nameinfo['w_email'] = $request->input('w_email');
      // dd($nameinfo['email']);
      // ->f_userId = $userinfo->userId;
      // $user->image =  $request->file('w_image');
      $image = $request->file('w_image');
      if ($image !="") {
      $profilePicture = 'profile-'.time().'-'.rand(000000,999999).'.'.$image->getClientOriginalExtension();
      $destinationPath = public_path('img/individual_profile');
      $image->move($destinationPath, $profilePicture);
    //  dd($profilePicture);
      $nameinfo['image']=$profilePicture;
    }
      if ($wid) {
        // echo $wid;
        // $user = new Worker;

    $user_info=DB::table('user_infos')->where('info_id',$wid)->where('f_userId',$userinfo->userId)->update($nameinfo);
      // $worker =  $user->update();
      if ($user_info == true) {
        echo "1";
      }else {
        echo "0";
      }

      }

      else {
        $nameinfo['f_userId']=$userinfo->userId;
      $user_info=DB::table('user_infos')->insert($nameinfo);
      if ($user_info == true) {
        echo "1";
      }else {
        echo "0";
      }
      }

      // dd($worker);

    }



    public function create_service(Request $request)
    {
        $userinfo= $request->session()->get('u_session');

      $user = new Service;
      $user->service_category = $request->input('srv_category');
      $user->amount = $request->input('amount');
      $user->wages = $request->input('wages');
      $user->currency_type = $request->input('currency_type');
      $user->f_userId = $userinfo->userId;

      $service =  $user->save();
      // dd($worker);
      if ($service == true) {
        echo "1";
      }else {
        echo "0";
      }

    }


    public function company_info(Request $request)
    {
      // dd($request->all());
      // $name = $request->get('name');
      // $phone = $request->get('phone');
      // $email = $request->get('email');
      // $dob = $request->get('dob');
      $usersession= $request->session()->get('u_session');
      $nameinfo['f_name'] = $request->get('name');
      $nameinfo['phone'] = $request->get('phone');
      $nameinfo['email'] = $request->get('email');
      $nameinfo['dob'] = $request->get('dob');

    // $nameinfo = array('f_name'=> $name, 'phone' => $phone, 'email' => $email );
    $getuser=DB::table('dhr_users')->where('userId',$usersession->userId)->update($nameinfo);
    //dd($getuser);

      echo "successfully";
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
}
