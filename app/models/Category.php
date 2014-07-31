<?php
class Category extends Eloquent {
	protected $table="categories";
	public function courses(){
		return $this->hasMany('Course');
	}
}