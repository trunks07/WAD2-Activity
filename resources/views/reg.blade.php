<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link href="/css/app.css" rel="stylesheet">
</head>
<body>
	<div id="holder">
		<form action="/students/process" method="POST">
			{{csrf_field()}}
				<table class="table table-hover">
					<tr>
						<td>ID Number</td>
						<td><input type="text" name="id_number" required></td>
					</tr>
					<tr>
						<td>First Name</td>
						<td><input type="text" name="first_name" required></td>
					</tr>
					<tr>
						<td>Last Name</td>
						<td><input type="text" name="last_name" required></td>
					</tr>
					<tr>
						<td>Course</td>
						<td><input type="text" name="course" required></td>
					</tr>
					<tr>
						<td>City</td>
						<td><input type="text" name="city" required></td>
					</tr>
					<tr>
						<td>Guardian</td>
						<td><input type="text" name="guardian" required></td>
					</tr>
					<tr>
						<td>Contact Number</td>
						<td><input type="number" name="contact_number" required></td>
					</tr>
					<tr>
						<td><input type="submit" value="Register" class="btn btn-success" ></td>
					</tr>
				</table>
		</form>
	</div>
</body>
</html>