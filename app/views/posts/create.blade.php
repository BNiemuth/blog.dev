@extends('layouts.master')

@section('header')
	<h1 class="blog title">Create a New Post</h1>
@stop

@section('content')
<div class="blog-post">
	<form class="form-horizontal" role="form" action="{{{ action('PostsController@store') }}}" method="post"
	  <div class="form-group">
	    <label for="title" class="col-sm-2 control-label">Title</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="title" name="title" placeholder="Title">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="body" class="col-sm-2 control-label">Post</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="body" name="body" placeholder="Body">
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
	</form>

@stop