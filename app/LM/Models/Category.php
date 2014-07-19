<?php namespace LM\Models;

class Category extends \Eloquent {

	protected $table = 'categories';
	protected $guarded = array();
	protected $fillable = array();
	public $timestamps = false;

	public function blogs()
    {
        return $this->belongsToMany('LM\Models\Blog', 'blog_categories');
    }
}