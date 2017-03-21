<!DOCTYPE html>
<html>
<head>
	<title>Complete</title>
	<link href="/css/app.css" rel="stylesheet">
</head>
<body>
<div class="container">
		<table class="table table-striped table-hover">
			<tr>
				<th hidden>ID</th>
				<th>ID number</th>
				<th>First name</th>
				<th>Last name</th>
				<th>Course</th>
				<th>City</th>
				<th>Guardian</th>
				<th>Contact number</th>
				<th></th><th></th>
			</tr>
				@foreach($students as $student)
			<tr>	
					<td hidden>{{$student->id}}</td>
					<td>{{$student->id_number}}</td>
					<td>{{$student->first_name}}</td>
					<td>{{$student->last_name}}</td>
					<td>{{$student->course}}</td>
					<td>{{$student->city}}</td>
					<td>{{$student->guardian}}</td>
					<td>{{$student->contact_number}}</td>
					<td><a href="/students/{{$student->id}}"><input type="submit" value="Update" class="btn btn-primary"></a></td>
					<td><a href="/delete/{{$student->id}}"><input type="submit" value="Delete" class="btn btn-danger"></a></td>
			</tr>
				@endforeach
		</table>
		<a href="/students/add"><button class="btn btn-success">Add User</button></a>
</div>
</body>
</html>