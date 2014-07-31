<?php
class ModuleContent extends Eloquent {
	protected $table = 'module_contents';
	public function module()
    {
        return $this->belongsTo('Module');
    }

}