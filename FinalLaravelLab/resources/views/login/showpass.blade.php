
<!DOCTYPE html>
<html>
<head>
	<title>Show Password</title>
</head>
<body>

	<h2>Show Password</h2>

	<!-- <a href="/login">Back</a> -->
	<a href="/logout">logout</a>

	@csrf
	<table border="1">

 		<tr>
			<td>ID :</td>
			<td>{{session('id')}}</td>
		</tr>
		<tr>
			<td>Username :</td>
			<td>{{session('user')}}</td>
		</tr>
		
		<tr>
			<td>Password :</td>
			<td>{{session('password')}}</td>
		</tr>
</table>

</body>
</html>