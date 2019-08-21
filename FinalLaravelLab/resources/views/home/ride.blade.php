
<!DOCTYPE html>
<html>
<head>
	<title>Free Ride</title>
</head>
<body>

	<h2>Free Ride</h2>

	<a href="/home">Back</a> |
	<a href="/logout">logout</a>

	@csrf
	<table border="1">

		<tr>
			<td>ID :</td>
			<td>{{$rt['id']}}</td>
		</tr>
		<tr>
			<td>Username :</td>
			<td>{{$rt['username']}}</td>
		</tr>
		<tr>
			<td>Stuff Type :</td>
			<td>{{$rt['StuffType']}}</td>
		</tr>
		@if($rt['FreeRide']!='1')
		<tr>
			<td>Free Ride :</td>
			<td><a href="/ride/rideadd/{{session('id')}}">Free Ride</a></td>
		</tr>
		@else
		<tr>
			<td>Free Ride :</td>
			<td>{{$rt['FreeRide']}}</td>
		</tr>
		@endif
</table>

</body>
</html>