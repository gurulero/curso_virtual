<?php
class UserCourse extends Eloquent {
	protected $table='user_courses'
	public function user(){
		return $this->belongsTo('user');
	}
	public function course(){
		return $this->belongsTo('course');
	}
}