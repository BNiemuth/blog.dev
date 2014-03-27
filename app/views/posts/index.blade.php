@extends('layouts.master')

@section('header')
	<h1 class="blog-title">Welcome to my Blog</h1>
@stop

@section('content')

	@foreach ($posts as $post)
	<div class="blog-post">
		<h2 class="blog-post-title">{{$post->title}}<h2>
			<p class ="blog-post-meta">{{$post->body}}</p>
	</div>
	
	<p>{{{ $post->body }}}</p>
	@endforeach

@stop