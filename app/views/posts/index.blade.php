@extends('layouts.master')

@section('header')
	<h1 class="blog-title">Welcome to my Blog</h1>
@stop

@section('content')
	{{ Form::open(array('action' => array ('PostsController@index'), 'method' => 'GET')) }}
	{{ Form::text('search', 'Search Posts') }}
	{{ Form::submit('Search') }}
{{ Form::close() }}
<h1>List Posts</h1>

	@foreach ($posts as $post)
	<div class="blog-post">
		<h3 class="blog-post-title"><a href="{{{ action('PostsController@show', $post->id) }}}">{{$post->title}}</a><h3>
		<p>{{Str::words($post->body, 10) }}</p>
		{{ $post->created_at->format('l, F jS, Y @ h:i A') }}</p>
		<p class ="blog-post-meta">{{$post->body}}</p>
	</div>
	
	@endforeach

	{{ $posts->links() }}
	<hr>
		<a href="{{{ action('PostsController@create') }}}"><h3>Create New Post</h3></a>
		<p>
@stop