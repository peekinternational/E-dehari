@extends('admin.layouts.app')
@section('content')
<div class="main-panel">
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">All Users</h4>
                        <div class="col-md-2 col-md-offset-10">
                          <a href="{{url('/admin/creatUser')}}" class="btn btn-success" type="button" name="button" style="Background: #87CB16; color: white; margin-top: -45px;">Add New</a>
                        </div>
                        <!-- <p class="category">Here is a subtitle for this table</p> -->
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>ID</th>
                              <th>Name</th>
                              <th>Phone</th>
                              <th>Type</th>
                              <th>Register Date</th>
                              <th colspan="2">Action</th>
                            </thead>
                            <tbody>
                              @if(count($user_get)>0)
                              @foreach($user_get as $user)
                                <tr>
                                  <td>{{$user->userId}}</td>
                                  <td>{{$user->f_name}}</td>
                                  <td>{{$user->phone}}</td>
                                  <td>{{$user->type}}</td>
                                  <td>{{$user->created_at}}</td>
                                  <td><a href="{{url('/admin/editUser/'.$user->userId)}}"><span class='fa fa-edit'></td>
                                  <td><a href=""><span class='fa fa-remove' style="color: red;"></td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
