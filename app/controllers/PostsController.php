<?php

class PostsController extends \BaseController {

	public function __construct()
	{
		parent::__construct();

		$this->beforeFilter('auth', ['except' => ['index', 'show']]);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$search = Input::get('search');
		$query = Post::orderBy('created_at', 'desc');
		if (is_null($search))
		{
			$posts = $query->paginate(5);
		} else 
			{
				$posts = $query->where('title', 'LIKE', "%{$search}%")
								->orWhere('body', 'LIKE', "%{$search}%")
								->paginate(5);
			}
			return View::make('posts.index')->with(array('posts' => $posts));
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts/create')->with('post', new Post());
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */

	public function store()
	{
		$validator = Validator::make(Input::all(), Post::$rules);

		if ($validator->fails())
		{
			Session::flash('errorMessage', 'Post could not be created - See form errors');
			return Redirect::back()->withInput()->withErrors($validator);
		}	
		else
		{
			$post = new Post();
			$post->user_id = Auth::user()->id;
			$post->title = Input::get('title');
			$post->body = Input::get('body');

			if (Input::hasFile('image'))
			{
				$post->assignImage(Input::file('image'));
			}

			$post->save();

			Session::flash('successMessage', 'Post created successfully');
			return Redirect::action('PostsController@index');
		}
	}
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user_rights = false;
		$post = Post::findOrFail($id);
		if (Auth::guest()) {
			$user_rights = false;
		}
		elseif (Auth::user()->admin == "y" || $post->user_id == Auth::user()->id) {
			$user_rights = true;
		}
		$array = array('post'=>$post, 'user_rights'=>$user_rights);
		return View::make('posts.show')->with($array);

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::findOrFail($id);
		return View::make('posts.edit')->with('post', $post);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::findOrFail($id);
		$validator = Validator::make(Input::all(), Post::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withInput()->withErrors($validator);
		}	
		else
		{
		
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			if (Input::hasFile('image'))
			{
				$post->assignImage(Input::file('image'));
			}
			$post->save();
			Session::flash('successMessage', 'Post updated successfully');
			return Redirect::action('PostsController@index');
		}
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Post::find($id)->delete();
		return Redirect::action('PostsController@index');
	}
}