@extends('layouts.master')

@section('title')
Groups
@stop

@section('content')
<h2>Groups List</h2><hr>
<div class="rowC" style="width:968px;margin:0 auto;">
	<table class="table table-striped table-condensed">
		<th>Group Name</th>
		<th>Action</th>
		@foreach($groups as $group)
			<tr>
				<td>{{ $group->name }}</td>
				<td>
					<button style="margin-right:5px;" class="btn btn-xs btn-primary pull-left" onclick="location.href='groups/new';">Add</button>
					<button  class="btn btn-xs btn-primary" onclick="location.href='groups/edit/{{ $group->id }}';">Edit</button>
					<button style="padding-left:5px;" class="btn btn-xs btn-danger" onclick="location.href='groups/delete/{{ $group->id }}';">Delete</button>
				</td>
			</tr>
		@endforeach
	</table>
</div>
@stop

@section('css')
	<link rel="stylesheet" href="/css/bootstrap.min.css"/>
@stop