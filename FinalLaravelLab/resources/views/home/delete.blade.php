
<!DOCTYPE html>
<html>
<head>
	<title>Delete Student</title>
</head>
<body>

	<h2>Delete Student</h2>

	<a href="/details/{{$details['id']}}">Back</a> |
	<a href="/logout">logout</a>

<form method="post">
	@csrf
	<table border="0">
		<tr>
			<td>Employee :</td>
			<td>{{$std['ename']}}</td>
		</tr>
		<tr>
			<td>Username :</td>
			<td>{{$std['uname']}}</td>
		</tr>
		<tr>
			<td>Contacts :</td>
			<td>{{$std['contacts']}}</td>
		</tr>
		<tr>
			<td>Password :</td>
			<td>{{$std['password']}}</td>
		</tr>
		
</table>
	<h3>Are you sure?</h3>
	<input type="submit" name="delete" value="Confirm">
</form>
</body>
</html>