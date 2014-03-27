@extends('layouts.master')

@section('header')
	<h1 class="blog-title">Create a New Post</h1>
@stop

@section('content')
<div class="blog-post">
	{{ Form::open(array('action' => 'PostsController@store')) }}
	<div class="form-group">
	    {{ Form::label('title', 'Title', $attributes = array('class' => 'col-sm-2 control-label')) }}
	   	<div class="col-sm-10">
	    {{ Form::text('title', null, $attributes = array('class' => 'form-control', 'placeholder'=>'Title')) }}
	      {{ $errors->first('title', '<p><span class="help-block">:message</span></p>') }}	    </div>
	  </div>

	  <div class="form-group">
	    <label for="body" class="col-sm-2 control-label">Body</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="body" name="body" placeholder="Body" value="{{{ Input::old('body') }}}">
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <div class="checkbox">
	        <!-- <label>
	          <input type="checkbox"> Remember me
	        </label> -->
	      </div>
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default">Create Post</button>
	    </div>
	  </div>
	{{ Form::close() }}
	<!-- <form class="form-horizontal" role="form" action="{{{ action('PostsController@store') }}}" method="post">
	  
	</form> -->

@stop