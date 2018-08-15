<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DhrUser;
use App\Models\Worker;
use App\Models\UserInfo;
// use App\Models\Service;
use Mail;
use Carbon;
use DB;
class Admin extends Controller
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


     public function show_user()
     {
       $user_get=DhrUser::all();
       return view('admin.admin_account.user',compact('user_get'));
     }

     public function admin_edit_route(Request $request, $id)
     {

       if($request->session()->has('u_session')){
         $userinfo= $request->session()->get('u_session')->userId;
         // dd($userinfo);
         $user_get=DB::table('dhr_users')->where('userId',$id)->first();
         // $user_get_info=DB::table('user_infos')->where('f_userId',$userinfo)->first();
         // $user_worker_info=DB::table('user_infos')->where('info_id',$id)->first();
         // $user_skill_info=DB::table('skills')->get();
         // dd($user_skill_info);
         // dd($user_get_info);

         return view('admin.admin_account.editUser',compact('user_get'));


       }else {

         return redirect('/accounts/login');
       }

     }



     public function admin_create_route(Request $request)
     {

       if($request->session()->has('u_session')){
         $userinfo= $request->session()->get('u_session')->userId;

         return view('admin.admin_account.create_user');


       }else {

         return redirect('/accounts/login');
       }

     }



     public function admin_edit_user(Request $request)
     {
        // dd($request->all());
       $validator =  $this->validate($request,[
     'f_name' => 'required',
     'phone' => 'required|min:10|max:15'
   ]);
      // dd($request->all());
         $userinfo= $request->session()->get('u_session');
       $wid = $request->input('id');
       // dd($wid);
       $nameinfo['f_name'] = $request->input('f_name');
       // dd($nameinfo['f_name']);
       $nameinfo['phone'] = $request->input('phone');
       $nameinfo['email'] = $request->input('email');
       $mytime = Carbon\Carbon::now();
       $mytime->toDateTimeString();
       // dd($mytime);
       $nameinfo['updated_at'] = $mytime;

       // dd($nameinfo['email']);
       // ->f_userId = $userinfo->userId;
       // $user->image =  $request->file('w_image');
       if ($wid) {
         // echo $wid;
         // $user = new Worker;

     $user_info=DB::table('dhr_users')->where('userId',$wid)->update($nameinfo);
       // $worker =  $user->update();
       if ($user_info == true) {
         echo "1";
       }else {
         echo "0";
       }

       }

       else {
         // $nameinfo['f_userId']=$userinfo->userId;
         $nameinfo['type'] = $request->input('type');
         $nameinfo['created_at'] = $mytime;

       $user_info=DB::table('dhr_users')->insert($nameinfo);
       Mail::send('mail.sendmail',$nameinfo,function ($message) use ($nameinfo)
       {

         $message->subject('E-dehari.com - Account Sign in');
         $message->from($nameinfo['email']);
         $message->to('nabeelirbab@gmail.com', 'Job Call Me');
       });
       if ($user_info == true) {
         echo "1";
       }else {
         echo "0";
       }
       }

       // dd($worker);

     }


     public function admin_delete_user(Request $request, $id)
     {


         // dd($id);
         $user_get=DB::table('dhr_users')->where('userId',$id)->delete();


        // dd($user_get);
        echo $user_get;

       }





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