@extends('layouts.master')

@section('header')
	<h1 class="blog-title">Edit Post</h1>
@stop

@section('content')
<div class="blog-post">
	{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'put', 'class'=>'form-horizontal')) }}
	<div class="form-group">
	    {{ Form::text('title', $post->title, $attributes = array('class' => 'col-sm-2 control-label', 'placeholder' => 'Title')) }}
	    {{ $errors->has('title') ? "<p><span class='help-block'>:message</span></p>" : "" }}
		<div class="col-sm-10">
			{{ Form::textarea('body', $post->body, $attributes = array('class' => 'form-control', 'placeholder'=>'body')) }}
			{{ $errors->has('body') ? "<p><span class='help-block'>:message</span></p>" : "" }}	    
	</div>
	</div>

	  <!-- <div class="form-group">
	    <label for="body" class="col-sm-2 control-label">Body</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="body" name="body" placeholder="Body" value="{{{ Input::old('body') }}}">
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <div class="checkbox">
	        <label>
	          <input type="checkbox"> Remember me
	        </label>
	      </div>
	    </div>
	  </div> -->
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default">Update Post</button>
	    </div>
	  </div>
	{{ Form::close() }}

@stop