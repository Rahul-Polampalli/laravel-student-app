<?php

class StudentController extends BaseController {

	protected $layout = 'layouts.master';
	
	public function getIndex()
	{
		$data = Student::all();
		return View::make('students', array('students'=> $data));
	}
	
	public function getNew()
	{
		return View::make('addnewstudent');
	}
	
	public function postAdd()
	{
		$data = array();
		$data['name']  = (Input::has('name'))?Input::get('name'):'';
		$data['phone'] = (Input::has('phone'))?Input::get('phone'):'';
		$data['city']  = (Input::has('city'))?Input::get('city'):'';
		$data['branch']= (Input::has('branch'))?Input::get('branch'):'';
		Student::create($data);
		return Redirect::to('students');
	}
	
	public function getEdit($id)
	{
		$data = Student::find($id);
		return View::make('editstudent', array('student'=>$data));
	}
	
	public function postSave()
	{
		$id = Input::get('id');
		$st = Student::find($id);
		$st->name  = (Input::has('name'))?Input::get('name'):'';
		$st->phone = (Input::has('phone'))?Input::get('phone'):'';
		$st->city  = (Input::has('city'))?Input::get('city'):'';
		$st->branch= (Input::has('branch'))?Input::get('branch'):'';
		$st->save();
		return Redirect::to('students');
	}
	
	public function getDelete($id)
	{
		$st = Student::find($id);
		$st->delete();
		return Redirect::to('students');
	}
}
