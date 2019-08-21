<!DOCTYPE html>
<html>
<head>
	<title>Car Edit</title>
</head>
<body>

	<h2>Car Edit</h2>

	<a href="/car">Back</a> |
	<a href="/logout">logout</a>

	
	<form method="post">
		@csrf
		<table border="0">

			<tr>
				<td>Name :</td>
				<td><input type="text" name="name" value="{{$rt['name']}}"></td>
			</tr>
			<tr>
				<td>Type :</td>
				<td><input type="text" name="type" value="{{$rt['type']}}" readonly="readonly"></td>
				<td>
						<input type="radio" value="Private car" name="available">Private car<br>
						<input type="radio" value="Microbus" name="available">Microbus<br>
						<input type="radio" value="Pick-up" name="available">Pick-up<br>
					
				</td>
			</tr>
			<tr>
				<td>Cost :</td>
				<td><input type="text" name="cost" value="{{$rt['cost']}}"></td>
			</tr>
			<tr>
				<td>Availability :</td>
				<td><input type="text" name="type" value="{{$rt['available']}}" readonly="readonly"></td>
				<td>
					
						<input type="radio" value="Yes" name="available">Yes
						<input type="radio" value="No" name="available">No
					
				</td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Update"></td>
			</tr>


		
		</table>
	</form>
	

</body>
</html>