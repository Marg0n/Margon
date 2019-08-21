
<!DOCTYPE html>
<html>
<head>
	<title>Rating</title>
</head>
<body>

	<h2>Rating</h2>

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
		<tr>
			<td>Rating :</td>
			<td>{{$rt['Rating']}}</td>
		</tr>
</table>

</body>
</html>