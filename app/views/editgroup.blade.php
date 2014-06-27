@extends('layouts.master')

@section('title')
Edit Group
@stop

@section('content')
<h2>Edit Group</h2><hr>
<div class="rowC">
	<form class="form-horizontal" role="form" method="post" action="{{URL::to('groups/save') }}">
		<label class="contorl-label col-xs-offset-4 col-xs-8">Name:</label>
		<div class="col-xs-offset-4 col-xs-4">
			<input class="form-control" type="text" value="{{ $group['name'] }}" name="name" />
		</div>
		<input class="form-control" type="hidden" name="id" value="{{ $group['id'] }}">
		<input class="btn btn-sm btn-primary" type="submit" value="Update">
	</form>
</div>
@stop

@section('css')
	<link rel="stylesheet" href="/css/bootstrap.min.css"/>
@stop