
<!DOCTYPE html>
<html>
<head>
	<title>Edit Student</title>
</head>
<body>

	<h2>Edit Student</h2>

	<a href="/eList">Back</a> |
	<a href="/logout">logout</a>

<form method="post">
	@csrf
	<table border="0">
		<tr>
			<td>id</td>
			<td>{{$std['id']}}</td>
		</tr>
		<tr>
			<td>Employee</td>
			<td><input type="text" name="ename" value="{{$std['ename']}}"></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="uname" value="{{$std['uname']}}"></td>
		</tr>
		<tr>
			<td>Contacts</td>
			<td><input type="text" name="contacts" value="{{$std['contacts']}}"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password" value="{{$std['password']}}"></td>
		</tr>
		
		<tr>
			<td></td>
			<td><input type="submit" name="save" value="Save"></td>
		</tr>
</table>
</form>
</body>
</html>