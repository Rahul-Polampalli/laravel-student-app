@extends('layouts.master')

@section('title')
Add New Group
@stop

@section('content')
<h2>Add New Group</h2><hr>
<div class="rowC">
	<form class="form-horizontal" role="form" method="post" action="add">
		<label class="control-label col-xs-offset-4 col-xs-8" style="text-align:left;">Name:</label>
		<div class="col-xs-offset-4 col-xs-4">
			<input class="form-control" type="text" value="" name="name" />
		</div>
		<input class="btn btn-sm btn-primary" type="submit" value="Add Group">
	</form>
</div>
@stop

@section('css')
	<link rel="stylesheet" href="/css/bootstrap.min.css"/>
@stop