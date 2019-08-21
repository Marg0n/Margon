<!DOCTYPE html>
<html>
<head>
	<title>Add</title>
</head>
<body>

	<h2>Create</h2>

	<a href="{{route('home.index')}}">Back</a> |
	<a href="/logout">logout</a>

<form method="post">
	@csrf
	<table border="0">
		<tr>
			<td>Employee</td>
			<td><input type="text" name="ename"></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="uname"></td>
		</tr>
		<tr>
			<td>Contact</td>
			<td><input type="text" name="contact"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Submit"></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="save" value="Save"></td>
		</tr>
</table>
</form>
</body>
</html>