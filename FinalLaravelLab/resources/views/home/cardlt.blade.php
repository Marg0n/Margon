<!DOCTYPE html>
<html>
<head>
	<title>Car Delete</title>
</head>
<body>

	<h2>Car Delete</h2>

	<a href="/car">Back</a> |
	<a href="/logout">logout</a>

	
	<form method="post">
		@csrf
		<table border="0">

			<tr>
				<td>Name :</td>
				<td>{{$rt['name']}}</td>
			</tr>
			<tr>
				<td>Type :</td>
				<td>{{$rt['type']}}</td>
			</tr>
			<tr>
				<td>Cost :</td>
				<td>{{$rt['cost']}}</td>
			</tr>
			<tr>
				<td>Availability :</td>
				<td>{{$rt['available']}}</td>
				
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Delete"></td>
			</tr>


		
		</table>
	</form>
	

</body>
</html>