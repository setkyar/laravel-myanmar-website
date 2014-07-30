<?php namespace LM\Models;

class Faq extends \Eloquent {

	protected $guarded = array();
	protected $fillable = array();

	public function user()
    {
        return $this->belongsTo('LM\Models\User');
    }
}
