
<!DOCTYPE html>
<html>
<head>
	<title>Manage</title>
</head>
<body>

	<h2>Manage</h2>

	<a href="/home">Back</a> |
	<a href="/logout">logout</a>

	@csrf
	<table border="0">

		<tr>
			<td>ID :</td>
			<td>{{$rt['id']}}</td>
		</tr>
		<tr>
			<td>Username :</td>
			<td>{{$rt['username']}}</td>
		</tr>
		<tr>
			<td>Password :</td>
			<td>{{$rt['password']}}</td>
		</tr>
		<tr>
			
			<td><a href="/manage/manageedit/{{session('id')}}">Edit or Update</a></td>
		</tr>
		
</table>

</body>
</html>