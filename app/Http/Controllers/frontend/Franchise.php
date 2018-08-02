<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DhrUser;
use App\Models\Worker;
use App\Models\UserInfo;
use App\Models\Service;
use DB;
class Franchise extends Controller
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


    public function franchise_route(Request $request)
    {
      if($request->session()->has('u_session')){
        $userinfo= $request->session()->get('u_session')->userId;
        // dd($userinfo);

        $user_get=DB::table('dhr_users')->where('userId',$userinfo)->first();
        $user_get_info=DB::table('user_infos')->where('f_userId',$userinfo)->first();
        // dd($user_get_info);

        return view('accounts.franchise',compact('user_get','user_get_info'));


      }else {

        return redirect('/accounts/login');
      }

    }


    public function create_worker(Request $request)
    {
      // dd($request->all());
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
      $user->f_userId = $userinfo->userId;
      // $user->image =  $request->file('w_image');
      $image = $request->file('w_image');
      if ($image !="") {



  $profilePicture = 'profile-'.time().'-'.rand(000000,999999).'.'.$image->getClientOriginalExtension();

  $destinationPath = public_path('img/workers_profile');
  $image->move($destinationPath, $profilePicture);
//  dd($profilePicture);
  $user->w_image=$profilePicture;
}
    $worker =  $user->save();
      // dd($worker);
      if ($worker == true) {
        echo "1";
      }else {
        echo "0";
      }

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


    public function franchise_info(Request $request)
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
      $userinfo_tbl['dob'] = $request->get('dob');

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
