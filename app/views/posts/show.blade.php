@extends('layouts.master')

@section('content')
	<h1>{{{ $post->title }}}</h1>
		<p>
			{{{ $post->body }}}
		</p>
		<hr>
		<p><a href="{{{ action('PostsController@index') }}}"><h3>Return to posts listing</h3></a></p>
@stop		