<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DhrUser;
use App\Models\Worker;
use App\Models\UserInfo;
use DB;
class Individual extends Controller
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


    public function individual_route(Request $request)
    {
      if($request->session()->has('u_session')){
        $userinfo= $request->session()->get('u_session')->userId;
        // dd($userinfo);

        $user_get=DB::table('dhr_users')->where('userId',$userinfo)->first();
        $user_get_info=DB::table('user_infos')->where('f_userId',$userinfo)->first();
        // dd($user_get_info);

        return view('accounts.individual',compact('user_get','user_get_info'));


      }else {

        return redirect('/accounts/login');
      }

    }



    public function ind_dashboard_route(Request $request)
    {
      if($request->session()->has('u_session')){
        $userinfo= $request->session()->get('u_session')->userId;
        // dd($userinfo);

        $user_get=DB::table('dhr_users')->where('userId',$userinfo)->first();
        $user_get_info=DB::table('user_infos')->where('f_userId',$userinfo)->first();
        // dd($user_get_info);

        return view('accounts.individualDashboard',compact('user_get','user_get_info'));


      }else {

        return redirect('/accounts/login');
      }

    }



    public function individual_info(Request $request)
    {
      // dd($request->all());
      $usersession= $request->session()->get('u_session');
      $nameinfo['f_name'] = $request->get('name');
      $nameinfo['phone'] = $request->get('phone');
      $nameinfo['email'] = $request->get('email');
      $userinfo_tbl['dob'] = $request->get('dob');
      $userinfo_tbl['dob'] = $request->get('dob');
      $userinfo_tbl['gender'] = $request->get('gender');
      $userinfo_tbl['nationality'] = $request->get('nationality');


    // $nameinfo = array('f_name'=> $name, 'phone' => $phone, 'email' => $email );
    $getuser=DB::table('dhr_users')->where('userId',$usersession->userId)->update($nameinfo);
    //dd($getuser);
    $user_info=DB::table('user_infos')->where('f_userId',$usersession->userId)->first();

    if($user_info != Null || $user_info != "" ){
      $user_info=DB::table('user_infos')->where('f_userId',$usersession->userId)->update($userinfo_tbl);
    }
    else{
      $userinfo_tbl['f_userId']=$usersession->userId;
        $user_info=DB::table('user_infos')->where('f_userId',$usersession->userId)->insert($userinfo_tbl);
    }
    //dd($user_info);

      echo "successfully";
    }





    public function individual_Professional_info(Request $request)
    {

      $usersession= $request->session()->get('u_session');
      $userinfo_tbl['skill'] = $request->get('skill');
      $userinfo_tbl['education'] = $request->get('education');
      $userinfo_tbl['experience'] = $request->get('experience');
      $userinfo_tbl['availability'] = $request->get('availability');
      $userinfo_tbl['currency_type'] = $request->get('currency_type');
      $userinfo_tbl['amount'] = $request->get('amount');
      $userinfo_tbl['wages'] = $request->get('wages');


    // $nameinfo = array('f_name'=> $name, 'phone' => $phone, 'email' => $email );
    // $getuser=DB::table('dhr_users')->where('userId',$usersession->userId)->update($nameinfo);
    //dd($getuser);
    $user_info=DB::table('user_infos')->where('f_userId',$usersession->userId)->first();

    if($user_info != Null || $user_info != "" ){
      $user_info=DB::table('user_infos')->where('f_userId',$usersession->userId)->update($userinfo_tbl);
    }
    else{
      $userinfo_tbl['f_userId']=$usersession->userId;
        $user_info=DB::table('user_infos')->where('f_userId',$usersession->userId)->insert($userinfo_tbl);
    }
    //dd($user_info);

      echo "successfully";
    }





    public function individual_location_info(Request $request)
    {

      $usersession= $request->session()->get('u_session');
      $userinfo_tbl['location'] = $request->get('location');



    // $nameinfo = array('f_name'=> $name, 'phone' => $phone, 'email' => $email );
    // $getuser=DB::table('dhr_users')->where('userId',$usersession->userId)->update($nameinfo);
    //dd($getuser);
    $user_info=DB::table('user_infos')->where('f_userId',$usersession->userId)->first();

    if($user_info != Null || $user_info != "" ){
      $user_info=DB::table('user_infos')->where('f_userId',$usersession->userId)->update($userinfo_tbl);
    }
    else{
      $userinfo_tbl['f_userId']=$usersession->userId;
        $user_info=DB::table('user_infos')->where('f_userId',$usersession->userId)->insert($userinfo_tbl);
    }
    //dd($user_info);

      echo "successfully";
    }



    public function individual_dashbord(Request $request)
    {
      // dd($request->all());
      $usersession= $request->session()->get('u_session');

      $nameinfo['f_name'] = $request->get('name');
      // dd($nameinfo['f_name']);
      $nameinfo['email'] = $request->get('email');
      $userinfo_tbl['education'] = $request->get('education');
      $userinfo_tbl['experience'] = $request->get('experience');
      $userinfo_tbl['skill'] = $request->get('skill');
      $userinfo_tbl['availability'] = $request->get('availability');
      $userinfo_tbl['currency_type'] = $request->get('currency_type');
      $userinfo_tbl['amount'] = $request->get('amount');
      $userinfo_tbl['wages'] = $request->get('wages');
      $userinfo_tbl['location'] = $request->get('location');
    // $nameinfo = array('f_name'=> $name, 'phone' => $phone, 'email' => $email );
    $getuser=DB::table('dhr_users')->where('userId',$usersession->userId)->update($nameinfo);
    //dd($getuser);
    $user_info=DB::table('user_infos')->where('f_userId',$usersession->userId)->first();

    if($user_info != Null || $user_info != "" ){
      $user_info=DB::table('user_infos')->where('f_userId',$usersession->userId)->update($userinfo_tbl);
    }
    else{
      $userinfo_tbl['f_userId']=$usersession->userId;
        $user_info=DB::table('user_infos')->where('f_userId',$usersession->userId)->insert($userinfo_tbl);
    }
    //dd($user_info);

      echo "successfully";
    }


    public function individual_image(Request $request)
    {
      // dd($request->all());
      $usersession= $request->session()->get('u_session');
      // $userinfo_tbl['location'] = $request->get('location');
      $image = $request->file('image');
      $profilePicture = 'profile-'.time().'-'.rand(000000,999999).'.'.$image->getClientOriginalExtension();

      $destinationPath = public_path('img/Individual_Profile');
      $image->move($destinationPath, $profilePicture);
    //  dd($profilePicture);
      $userinfo_tbl['image']=$profilePicture;
    // $nameinfo = array('f_name'=> $name, 'phone' => $phone, 'email' => $email );
    // $getuser=DB::table('dhr_users')->where('userId',$usersession->userId)->update($nameinfo);
    //dd($getuser);
    $user_info=DB::table('user_infos')->where('f_userId',$usersession->userId)->first();

    if($user_info != Null || $user_info != "" ){
      $user_info=DB::table('user_infos')->where('f_userId',$usersession->userId)->update($userinfo_tbl);
    }
    else{
      $userinfo_tbl['f_userId']=$usersession->userId;
        $user_info=DB::table('user_infos')->where('f_userId',$usersession->userId)->insert($userinfo_tbl);
    }
    //dd($user_info);

      echo $profilePicture;
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
