@extends('layouts.master')

@section('content')
	<h1>{{{ $post->title }}}</h1>
		<p>
			{{{ $post->body }}}
		</p>
		<hr>
		<p><a href="{{{ action('PostsController@index') }}}">Return to posts listing</a></p>
@stop		