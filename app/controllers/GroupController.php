<?php

class GroupController extends BaseController {

	protected $layout = 'layouts.master';
	
	public function getIndex()
	{
		$data = Group::all();
		return View::make('groups', array('groups'=> $data));
	}
	
	public function getNew()
	{
		return View::make('addnewgroup');
	}
	
	public function postAdd()
	{
		$data = array();
		$data['name']  = (Input::has('name'))?Input::get('name'):'';
		
		Group::create($data);
		return Redirect::to('groups');
	}
	
	public function getEdit($id)
	{
		$data = Group::find($id);
		return View::make('editgroup', array('group'=>$data));
	}
	
	public function postSave()
	{
		$id = Input::get('id');
		$st = Group::find($id);
		$st->name  = (Input::has('name'))?Input::get('name'):'';
		$st->save();
		return Redirect::to('groups');
	}
	
	public function getDelete($id)
	{
		$st = Group::find($id);
		$st->delete();
		return Redirect::to('groups');
	}
}
