
<!DOCTYPE html>
<html>
<head>
	<title>Free Ride</title>
</head>
<body>

	<h2>Free Ride</h2>

	<a href="/ride/{{session('id')}}">Back</a> |
	<a href="/logout">logout</a>

	
	<form method="post">
		@csrf
		<table border="0">

			<tr>
				<td>FreeRide :</td>
				<td><input type="text" name="FreeRide" value="{{$rt['FreeRide']+1}}" readonly="readonly"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Gain FreeRide"></td>
			</tr>


		
		</table>
	</form>
	

</body>
</html>