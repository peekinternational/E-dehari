<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DhrUser;
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
    'email_phone' => 'required|unique:dhr_users,email_phone',
    'password' => 'required|min:6'
  ]);

      $user = new DhrUser;
      $user->email_phone = $request->input('email_phone');
      $user->password = $request->input('password');
      $user->type = $request->input('type');

      $user->save();
      return redirect('/accounts/login')->with('success','You are successfully Registered');
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
  $password = $request->input('password');
  // dd($request->all());
  $user1 = DhrUser::whereemail_phone($email_phone)->first();

  if (!empty($user1->email_phone)) {
    if ($email_phone == $user1->email_phone) {
      if ($password == $user1->password) {
        $request->session()->put('ses', $user1->userId);
        // $request->session()->put('name', $user1->name);
        $val = $request->session()->get('ses');

        $user = DhrUser::find($val);
        // $message = "you are successfully logged in";
        $request->session()->put('success', "you are successfully logged in");

        return view('index', compact('user'));

      }else {
        return redirect('/login')->with('red-alert', 'Incorrect Password');
      }
    }
    }else {
      return redirect('/login')->with('red-alert', 'Incorrect Phone');
  }
}

}
