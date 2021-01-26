@extends('admin::layouts.master')

@section('title', 'Shibaji Debnath - Admin & Dashboard')

@section('content')
  <div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <x-admin-breadcrumb
            title="My Profile"
            item1="Admin"
            :link1="config('admin.prefix', 'admin')"
            />
        </div><!--end col-->
    </div>
    <!-- end page title end breadcrumb -->

    @if (session('status'))
        <x-admin-alert type="success" message="{{ session('status') }}" />
    @endif

    <div class="row justify-content-md-center">
        <div class="col-md-9">
            <div class="card card-body">
                <form action="{{route('admin.profile.post')}}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$user->id}}">
                    <h3>My Profile</h3>
                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="userFullName">Full Name</label>
                            <input type="text" class="form-control" name="name" id="userFullName" value="{{$user->name}}">
                        </div>
                        <div class="form-group col-12">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$user->email}}">
                            {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                        </div>
                        <div class="form-group col-12">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                        </div>
                        <div class="form-group col-12">
                            <label for="exampleInputPassword2">Confirm Password</label>
                            <input type="password" class="form-control" name="confirm-password" id="exampleInputPassword2">
                        </div>
                    </div>
                    <h3>My Details</h3>
                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="profile_photo">Profile Photo</label>
                            <input type="file" class="form-control" name="profile_photo" id="profile_photo" value="{{$user->profile_photo_url}}">
                        </div>
                        <div class="form-group col-12">
                            <label for="address">Address</label>
                            <textarea class="form-control" name="address" id="address">{{$user->address}}</textarea>
                        </div>
                        <div class="form-group col-12">
                            <label for="contact_no">Contact No</label>
                            <input type="text" class="form-control" required name="contact_no" id="contact_no" value="{{$user->contact_no}}">
                        </div>
                        <div class="form-group col-12">
                            <label for="whatsapp_no">Whatsapp No</label>
                            <input type="text" class="form-control" name="whatsapp_no" id="whatsapp_no" value="{{$user->whatsapp_no}}">
                        </div>
                        <div class="form-group col-12">
                            <label for="skype_id">Skype Id</label>
                            <input type="text" class="form-control" name="skype_id" id="skype_id" value="{{$user->skype_id}}">
                        </div>
                        <div class="form-group col-12">
                            <label for="is_active">Is Active</label>
                            <select class="form-control" name="is_active" id="is_active">
                                <option @if($user->is_active == 1) selected @endif value="1">Yes</option>
                                <option @if($user->is_active == 0) selected @endif value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <div name="footer">
                        <button class="btn btn-success" type="submit">Submit</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-body">
                <h4>User Role: {{ Str::ucfirst($user->roles[0]->name) }}</h4>
                <div>
                    <strong>Last Login IP:</strong><br>
                    {{$user->last_login_ip}}
                </div>
                <div>
                    <strong>Last Login Date:</strong><br>
                    {{$user->last_login_date}}
                </div>
                <div>
                    <h4>User Permissions</h4>
                    <ul>
                        @foreach ($user->getAllPermissions() as $item)
                            <li>{{$item->name}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop
