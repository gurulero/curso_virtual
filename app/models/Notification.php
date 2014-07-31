<?php
class Notification extends Eloquent {
	protected $table='notifications';
	public function course(){
    	return $this->belongsTo("Course");
    }
}