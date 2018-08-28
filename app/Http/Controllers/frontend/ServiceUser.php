<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DhrUser;
use App\Models\Worker;
use App\Models\UserInfo;
use Mail;
use Carbon;
use DB;
class ServiceUser extends Controller
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

    public function hireService_route(Request $request)
    {
      if($request->session()->has('u_session')){
        $userinfo= $request->session()->get('u_session')->userId;
        // dd($userinfo);

        $user_get=DB::table('dhr_users')->where('userId',$userinfo)->first();
        $user_get_info=DB::table('service_user_infos')->where('f_userId',$userinfo)->first();
        // dd($user_get_info);

        return view('accounts.hireService',compact('user_get','user_get_info', '$user_get_info1'));


      }else {

        return redirect('/accounts/login');
      }

    }


    public function serviceUser_dashboard_route(Request $request)
    {
      if($request->session()->has('u_session')){
        $userinfo= $request->session()->get('u_session')->userId;
        // dd($userinfo);

        $user_get=DB::table('dhr_users')->where('userId',$userinfo)->first();
        $user_get_info=DB::table('service_user_infos')->where('f_userId',$userinfo)->first();
        // dd($user_get_info);

        return view('accounts.userDashboard',compact('user_get','user_get_info'));


      }else {

        return redirect('/accounts/login');
      }

    }


    public function service_personal_info(Request $request)
    {
      // dd($request->all());
      $usersession= $request->session()->get('u_session');
      $nameinfo['f_name'] = $request->get('name');
      $nameinfo['phone'] = $request->get('phone');
      $nameinfo['email'] = $request->get('email');
      $userinfo_tbl['dob'] = $request->get('dob');
      $userinfo_tbl['gender'] = $request->get('gender');
      $userinfo_tbl['location'] = $request->get('location');
      $userinfo_tbl['address'] = $request->get('address');


    // $nameinfo = array('f_name'=> $name, 'phone' => $phone, 'email' => $email );
    $getuser=DB::table('dhr_users')->where('userId',$usersession->userId)->update($nameinfo);
    //dd($getuser);
    $user_info=DB::table('service_user_infos')->where('f_userId',$usersession->userId)->first();

    if($user_info != Null || $user_info != "" ){
      $user_info=DB::table('service_user_infos')->where('f_userId',$usersession->userId)->update($userinfo_tbl);
    }
    else{
      $userinfo_tbl['f_userId']=$usersession->userId;
        $user_info=DB::table('service_user_infos')->where('f_userId',$usersession->userId)->insert($userinfo_tbl);
    }
    //dd($user_info);

      echo "successfully";
    }



    public function service_detail_info(Request $request)
    {
      // dd($request->all());
      $usersession= $request->session()->get('u_session');
      $userinfo_tbl['currency_type'] = $request->get('currency_type');
      $userinfo_tbl['amount'] = $request->get('amount');
      $userinfo_tbl['service_category'] = $request->get('service_category');
      $userinfo_tbl['time'] = $request->get('time');
      $userinfo_tbl['end_time'] = $request->get('end_time');
      $userinfo_tbl['people'] = $request->get('people');
      $userinfo_tbl['start_date'] = $request->get('start_date');
      $userinfo_tbl['end_date'] = $request->get('end_date');
      $userinfo_tbl['total'] = $request->get('total');
      $image = $request->file('image');
      if ($image !="") {



  $profilePicture = 'profile-'.time().'-'.rand(000000,999999).'.'.$image->getClientOriginalExtension();

  $destinationPath = public_path('img/serviceUser_profile');
  $image->move($destinationPath, $profilePicture);
 // dd($profilePicture);
  $userinfo_tbl['image']=$profilePicture;
}

    // $getuser=DB::table('dhr_users')->where('userId',$usersession->userId)->update($nameinfo);
    //dd($getuser);
    $user_info=DB::table('service_user_infos')->where('f_userId',$usersession->userId)->first();

    if($user_info != Null || $user_info != "" ){
      $user_info=DB::table('service_user_infos')->where('f_userId',$usersession->userId)->update($userinfo_tbl);
    }
    else{
      $userinfo_tbl['f_userId']=$usersession->userId;
        $user_info=DB::table('service_user_infos')->where('f_userId',$usersession->userId)->insert($userinfo_tbl);
    }
    //dd($user_info);

      echo "successfully";
    }




    public function service_dashboard_info(Request $request)
    {
      // dd($request->all());
      $usersession= $request->session()->get('u_session');
      $nameinfo['f_name'] = $request->get('name');
      $nameinfo['email'] = $request->get('email');
      $userinfo_tbl['time'] = $request->get('time');
      $userinfo_tbl['end_time'] = $request->get('end_time');
      $userinfo_tbl['start_date'] = $request->get('start_date');
      $userinfo_tbl['end_date'] = $request->get('end_date');
      $userinfo_tbl['amount'] = $request->get('amount');
      $userinfo_tbl['location'] = $request->get('location');
      $userinfo_tbl['address'] = $request->get('address');
      // $userinfo_tbl['total'] = $request->get('total');


    // $nameinfo = array('f_name'=> $name, 'phone' => $phone, 'email' => $email );
    $getuser=DB::table('dhr_users')->where('userId',$usersession->userId)->update($nameinfo);
    //dd($getuser);
    $user_info=DB::table('service_user_infos')->where('f_userId',$usersession->userId)->first();

    if($user_info != Null || $user_info != "" ){
      $user_info=DB::table('service_user_infos')->where('f_userId',$usersession->userId)->update($userinfo_tbl);
    }
    else{
      $userinfo_tbl['f_userId']=$usersession->userId;
        $user_info=DB::table('service_user_infos')->where('f_userId',$usersession->userId)->insert($userinfo_tbl);
    }
    //dd($user_info);

      echo "successfully";
    }


    public function service_dashboard_image(Request $request)
    {
      // dd($request->all());
      $usersession= $request->session()->get('u_session');
      // $userinfo_tbl['location'] = $request->get('location');
      $image = $request->file('image');
      $profilePicture = 'profile-'.time().'-'.rand(000000,999999).'.'.$image->getClientOriginalExtension();

      $destinationPath = public_path('img/serviceUser_profile');
      $image->move($destinationPath, $profilePicture);
    //  dd($profilePicture);
      $userinfo_tbl['image']=$profilePicture;
    // $nameinfo = array('f_name'=> $name, 'phone' => $phone, 'email' => $email );
    // $getuser=DB::table('dhr_users')->where('userId',$usersession->userId)->update($nameinfo);
    //dd($getuser);
    $user_info=DB::table('service_user_infos')->where('f_userId',$usersession->userId)->first();

    if($user_info != Null || $user_info != "" ){
      $user_info=DB::table('service_user_infos')->where('f_userId',$usersession->userId)->update($userinfo_tbl);
    }
    else{
      $userinfo_tbl['f_userId']=$usersession->userId;
        $user_info=DB::table('service_user_infos')->where('f_userId',$usersession->userId)->insert($userinfo_tbl);
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

       $validator =  $this->validate($request,[
     'phone' => 'required|unique:dhr_users,phone|min:11|max:15',
     'password' => 'required|min:6'
   ]);
   $email['email'] = $request->input('email');
   $toemail =$email['email'];
       $user = new DhrUser;
       $user->f_name = $request->input('f_name');
       $user->phone = $request->input('phone');
       $user->email = $request->input('email');
       $user->password = md5($request->input('password'));
       $user->type = $request->input('type');
       $user->token = $request->_token;
       $ip= \Request::ip();
       // dd($ip);
       $data = \Location::get($ip);
       // dd($data->countryCode);
       $user->country = $data->countryCode;
       Mail::send('mail.verify',['token' =>$request->_token],
       function ($message) use ($toemail)
       {

         $message->subject('E-dehari.com - Account Verifaction');
         $message->from('nabeelirbab@gmail.com', 'E-dehari');
         $message->to($toemail);
       });
       // dd($request->_token);
       $user->save();
       return redirect('/accounts/login')->with('success','Please verify your account');
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
