@extends('layouts.master')

@section('title')
Add New Student
@stop

@section('content')
<h2>Add New Student</h2><hr>
<div class="rowC">
	<form role="form" class="form-horizontal" method="post" action="add">
		<div class="form-group col-xs-12">
			<label class="control-label col-xs-4">Name:</label> 
			<div class="col-xs-4">
				<input class="form-control" type="text" value="" name="name" />
			</div>
		</div>
		<div class="form-group col-xs-12">
			<label class="control-label col-xs-4">Phone:</label>
			<div class="col-xs-4">
				<input class="form-control" type="text" value="" name="phone"/>
			</div>
		</div>
		<div class="form-group col-xs-12">
			<label class="control-label col-xs-4">City:</label>
			<div class="col-xs-4">
				<input class="form-control" type="text" value="" name="city"/>
			</div>
		</div>
		<div class="form-group col-xs-12">
			<label class="control-label col-xs-4">Branch:</label>
			<div class="col-xs-4">
				<input class="form-control" type="text" value="" name="branch"/>
			</div>
		</div>
		<div class="form-group col-xs-12">
			<input class="btn btn-sm btn-primary col-xs-offset-7" type="submit" value="Add Student">
		</div>
	</form>
</div>
@stop

@section('css')
	<link rel="stylesheet" href="/css/bootstrap.min.css"/>
@stop