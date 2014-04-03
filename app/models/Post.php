<?php

use Carbon\Carbon;

class Post extends BaseModel 
{

    protected $table = 'posts';

    public function user()
    {
    	return $this->belongsTo('User');
    }

	public static $rules = array(
        'title'      => 'required|max:100',
        'body'       => 'required|max:10000');

    public function assignImage($inputFile)
    {
                $destinationPath = public_path() . '/uploads/';
                $extension = $inputFile->getClientOriginalExtension();
                $filename = uniqid() . '.' . $extension;
                $inputFile->move($destinationPath, $filename);
                $this->attributes['post_image'] = '/uploads/' . $filename;
    }
}