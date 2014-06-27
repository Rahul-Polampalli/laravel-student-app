<?php

class Student extends Eloquent {

	protected $fillable = array('name', 'phone', 'city', 'branch');
	
	public $timestamps = false;


}
