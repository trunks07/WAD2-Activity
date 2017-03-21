<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<link href="/css/app.css" rel="stylesheet">
</head>
<body>
<div class="container">
	<form action="/students/save" method="POST">

	{{ csrf_field() }}

		<table class="table table-hover">
			<input type="hidden" name="id" value="{{$students->id}}">
			<tr>
				<td>ID number</td>
				<td><input type="text" name="id_number" value="{{$students->id_number}}"></td>
			</tr>
			<tr>
				<td>First name</td>
				<td><input type="text" name="first_name" value="{{$students->first_name}}"></td>
			</tr>
			<tr>
				<td>Last name</td>
				<td><input type="text" name="last_name" value="{{$students->last_name}}"></td>
			</tr>
			<tr>
				<td>Course</td>
				<td><input type="text" name="course" value="{{$students->course}}"></td>
			</tr>
			<tr>
				<td>City</td>
				<td><input type="text" name="city" value="{{$students->city}}"></td>
			</tr>
			<tr>
				<td>Guardian </td>
				<td><input type="text" name="guardian" value="{{$students->guardian}}"></td>
			</tr>
			<tr>
				<td>Contact number</td>
				<td><input type="number" name="contact_number" value="{{$students->contact_number}}"></td>
			</tr>
			<tr>		 
				<td><input type="submit" value="Save" class="btn btn-success"></td>
			</tr>
		</table>
	</form>
</div>
</body>
</html>