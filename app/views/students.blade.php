@extends('layouts.master')

@section('title')
Students
@stop

@section('content')
<h2>Student List</h2><hr>
<div class="rowC">
	<table class="table table-striped table-condensed">
		<tr>
			<th>Name</th>
			<th>Contact</th>
			<th>City</th>
			<th>Branch</th>
			<th>Action</th>
		</tr>
		@foreach($students as $student)
			<tr>
				<td>{{ $student->name }}</td>
				<td>{{ $student->phone }}</td>
				<td>{{ $student->city }}</td>
				<td>{{ $student->branch }}</td>
				<td>
					<button class="btn btn-xs btn-primary" onclick="location.href='students/new';">Add</button>
					<button class="btn btn-xs btn-primary" onclick="location.href='students/edit/{{ $student->id }}';">Edit</button>
					<button class="btn btn-xs btn-danger" onclick="location.href='students/delete/{{ $student->id }}';">Delete</button>
				</td>
			</tr>
		@endforeach
	</table>
</div>
@stop

@section('css')
	<link rel="stylesheet" href="/css/bootstrap.min.css"/>
@stop