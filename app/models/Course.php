<?php
class Course extends Eloquent {
	protected $table = 'courses';
	
	public function modules()
    {
        return $this->hasMany('Module');
    }
    public function category(){
    	return $this->belongsTo('Category');
    }
    public function notifications(){
    	return $this->hasMany("Notification");
    }
    public function posts(){
    	return $this->hasMany('Post');
    }
    public function usercourses(){
    	return $this->hasMany('UserCourse');
    }

}