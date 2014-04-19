@extends('layouts.master')

@section('content')
	{{ Form::open(array('action' => 'HomeController@createaccount', 'class' => 'form-signin', 'role' => 'form')) }}
        <h2 class="form-signin-heading">Register</h2>
        <input type="first_name" class="form-control" placeholder="First Name" required autofocus name="first_name">
        <input type="last_name" class="form-control" placeholder="Last Name" required name="last_name">
        <input type="email" class="form-control" placeholder="Email address" required autofocus name="email">
        <input type="password" class="form-control" placeholder="Password" required name="password">
        <!-- <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label> -->
        <button class="btn btn-lg btn-primary btn-block" type="submit">Create Account</button>
    {{ Form::close() }}

@stop