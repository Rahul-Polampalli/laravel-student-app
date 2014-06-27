@extends('layouts.master')

@section('title')
Edit Student
@stop

@section('content')
<h2>Edit Student</h2><hr>
<div class="rowC">
	<form role="form" class="form-horizontal" method="post" action="{{URL::to('students/save') }}">
		<div class="form-group col-xs-12">
			<label class="control-label col-xs-4">Name:</label>
			<div class="col-xs-4">
				<input class="form-control" type="text" value="{{ $student['name'] }}" name="name" />
			</div>
		</div>
		<div class="form-group col-xs-12">
			<label class="control-label col-xs-4">Phone:</label>
			<div class="col-xs-4">
				<input class="form-control" type="text" value="{{ $student['phone'] }}" name="phone"/>
			</div>
		</div>
		<div class="form-group col-xs-12">
			<label class="control-label col-xs-4">City:</label>
			<div class="col-xs-4">
				<input class="form-control" type="text" value="{{ $student['city'] }}" name="city"/>
			</div>
		</div>
		<div class="form-group col-xs-12">
			<label class="control-label col-xs-4">Branch:</label>
			<div class="col-xs-4">
				<input class="form-control" type="text" value="{{ $student['branch'] }}" name="branch"/>
			</div>
		</div>
		<input type="hidden" name="id" value="{{ $student['id'] }}">
		<div class="form-group col-xs-12">
			<input class="btn btn-sm btn-primary col-xs-offset-7" type="submit" value="Edit Student">
		</div>
	</form>
</div>
@stop

@section('css')
	<link rel="stylesheet" href="/css/bootstrap.min.css"/>
@stop