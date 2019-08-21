<!DOCTYPE html>
<html>
<head>
	<title>New Car Entry</title>
</head>
<body>
	<h1 align="center">New Car Entry</h1><br>


	<form method="post">

		<!--{{csrf_field()}} -->
		<!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --> 
		@csrf
		
		<table align="center">
			<tr>
				<td><a href="/home">Back</a></td>
				<td><a href="/logout">logout</a></td>
			</tr>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Type</td>
				<td>
						<input type="radio" value="Private car" name="type">Private car<br>
						<input type="radio" value="Microbus" name="type">Microbus<br>
						<input type="radio" value="Pick-up" name="type">Pick-up<br>
					
				</td>
			</tr>
			<tr>
				<td>Cost</td>
				<td><input type="text" name="cost"></td>
			</tr>
			<tr>
				<td>Availability</td>
				<td>
					
						<input type="radio" value="Yes" name="available">Yes<br>
						<input type="radio" value="No" name="available">No<br>
					
				</td>
			</tr>
			<tr>
				
				<td><input type="submit" name="submit" value="Save"></td>
				
			</tr>
		</table>
	</form>

	<div>
		{{session('msg')}}
	</div>
</body>
</html>