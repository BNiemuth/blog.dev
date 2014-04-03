@extends('layouts.master')

@section('content')
	
	<div>
	<h1>{{{ $post->title }}}</h1>
		<p>{{{ $post->body }}}</p>
		<p>By: {{{ $post->user->email }}}</P>
		<p>{{ $post->created_at->format('l, F jS, Y @ h:i A') }}</p>
		<img src="{{{ $post->post_image }}}">
		<hr>
		<p><a href="{{{ action('PostsController@index') }}}"><h3>Return to posts listing</h3></a></p>
	</div>

<a href="#" id="btnDeletePost">Delete</a>
<a href="{{{ action('PostsController@edit', $post->id )}}}" class="btn">Edit</a>

{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'delete', 'id'=> 'formDeletePost')) }}
{{ Form::close() }}

@stop

@section('bottomscript')

<script>

$('#btnDeletePost').on('click', function (e) {
	e.preventDefault();
	if(confirm('Are you sure you want to delete this post?')) {
		$('#formDeletePost').submit();
	}
});

</script>

@stop