@extends('layouts.global')

@section('title')
Create User
@endsection

@section('content')
<div class="col-md-8">
    @if (session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
    @endif
    <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('users.store')}}" method="post">
        @csrf

        <label for="name">Name</label>
        <input type="text" class="form-control {{$errors->first('name') ? 'is-invalid' : ''}}" placeholder="Full Name"
            name="name" id="name" value="{{old('name')}}">
        <div class="invalid-feedback">
            {{$errors->first('name')}}
        </div>
        <br>

        <label for="username">Username</label>
        <input value="{{old('username')}}" type="text"
            class="form-control {{$errors->first('username') ? 'is-invalid' : ''}}" placeholder="Username"
            name="username" id="username">
        <div class="invalid-feedback">
            {{$errors->first('username')}}
        </div>
        <br>

        <label>Roles</label>
        <br>
        <input type="checkbox" name="roles[]" id="ADMIN" value="ADMIN"
            class="form-control {{$errors->first('roles') ? 'is-invalid' : ''}}">
        <label for="ADMIN">Administrator</label>

        <input type="checkbox" name="roles[]" id="STAFF" value="STAFF"
            class="form-control {{$errors->first('roles') ? 'is-invalid' : ''}}">
        <label for="STAFF">Staff</label>

        <input type="checkbox" name="roles[]" id="CUSTOMER" value="CUSTOMER"
            class="form-control {{$errors->first('roles') ? 'is-invalid' : ''}}">
        <label for="CUSTOMER">Customer</label>

        <div class="invalid-feedback">
            {{$errors->first('roles')}}
        </div>
        <br>
        <br>

        <label for="phone">Phone Number</label>
        <br>
        <input value="{{old('phone')}}" type="text" name="phone"
            class="form-control {{$errors->first('phone') ? 'is-invalid' : ''}}"">
            <div class=" invalid-feedback">
        {{$errors->first('phone')}}
</div>
<br>

<label for=" address">Address</label>
<textarea value="{{old('address')}}" name="address" id="address"
    class="form-control {{$errors->first('address') ? 'is-invalid' : ''}}""></textarea>
            <div class=" invalid-feedback">
                {{$errors->first('address')}}
            </div>
        <br>

        <label for=" avatar">Avatar Image</label>
        <br>
        <input value="{{old('avatar')}}" type="file" id="avatar" name="avatar" class="form-control {{$errors->first('avatar') ? 'is-invalid' : ''}}"">
        <div class="invalid-feedback">
            {{$errors->first('avatar')}}
        </div>
        <hr class="my-3">

        <label for="email">Email</label>
        <input value="{{old('email')}}" type="text" class="form-control {{$errors->first('email') ? 'is-invalid' : ''}}"" placeholder="user@mail.com" name="email" id="email">
        <div class="invalid-feedback">
            {{$errors->first('email')}}
        </div>
        <br>

        <label for="password">Password</label>
        <input value="{{old('password')}}" type="password" class="form-control {{$errors->first('password') ? 'is-invalid' : ''}}"" placeholder="Password" name="password" id="password">
        <div class="invalid-feedback">
            {{$errors->first('password')}}
        </div>
        <br>

        <label for="password_confirmation">Password Confirmation</label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control {{$errors->first('password_confirmation') ? 'is-invalid' : ''}}""
            placeholder="Password Confirmation">
            <div class="invalid-feedback">
                {{$errors->first('password_confirmation')}}
            </div>
        <br>

        <input type="submit" class="btn btn-primary" value="Save">
    </form>
</div>
@endsection