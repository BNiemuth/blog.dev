@extends('layouts.master')

@section('header')
	<h1 class="blog-title">Welcome to my Blog</h1>
@stop

@section('content')

	@foreach ($posts as $post)
	<div class="blog-post">
		<h2 class="blog-post-title"><a href="{{{ action('PostsController@show', $post->id) }}}">{{$post->title}}</a><h2>
			<p class ="blog-post-meta">{{$post->body}}</p>
	</div>
	
	@endforeach
	<hr>
		<a href="{{{ action('PostsController@create') }}}">Create New Post</a>

@stop