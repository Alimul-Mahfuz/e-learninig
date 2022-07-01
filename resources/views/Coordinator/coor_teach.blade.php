<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Courses</title>
	</head>
	<body>
		@extends('layouts.coordinator_nav2')
        @section('content')
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">sl#</th>
					<th scope="col">Image</th>
					<th scope="col">Teacher Name</th>
					<th scope="col">Email</th>
					<th scope="col">Mobile no</th>
					<th scope="col">Date of birth</th>
					<th scope="col">Gender</th>
					<th scope="col">Degree</th>
					<th scope="col">Address</th>
					<th scope="col">Joined date</th>
				</tr>
			</thead>
			<tbody>
				@foreach($teacher as $t)
				<tr>
					<th scope="row">{{$loop->iteration}}</th>
					<td><img src="{{$t->profile_image}}" alt="{{$t->teacher_name}} Profile Image"></td>
					<td>{{$t->teacher_name}}</td>
					<td>{{$t->email}}</td>
					<td>{{$t->phone}}</td>
					<td>{{$t->dob}}</td>
					<td>{{$t->gender}}</td>
					<td>{{$t->degree}}</td>
					<td>{{$t->address}}</td>
					<td>{{$t->created_at}}</td>
				@endforeach
			</tbody>
		</table>
		@endsection
	</body>
</html>