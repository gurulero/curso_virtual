<?php
class Module extends Eloquent {
	protected $table = 'module';
	public function course()
    {
        return $this->belongsTo('Course');
    }
    public function contents(){
    	return $this->hasMany('ModuleContent');
    }

}