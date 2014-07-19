<?php namespace LM\Models;

class Blog extends \Eloquent {

	protected $guarded = array('category');
	protected $fillable = array();
	public function categories()
    {
        return $this->belongsToMany('LM\Models\Category', 'blog_categories');
    }

    public function user()
    {
        return $this->belongsTo('LM\Models\User');
    }
}