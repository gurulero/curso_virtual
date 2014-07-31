<?php
class Post extends Eloquent {
	protected $table='posts';
	public function user(){
		return $this->belongsTo('user');
	}
	public function course(){
		return $this->belongsTo('course');
	}
}