
<!DOCTYPE html>
<html>
<head>
	<title>Details Delete</title>
</head>
<body>

	<h2>Details Delete</h2>

	<a href="/MemberDetail">Back</a> |
	<a href="/logout">logout</a>

<form method="post">
	@csrf
	<table border="0">

		<tr>
			<td>ID :</td>
			<td>{{$stf['id']}}</td>
		</tr>
		
		<tr>
			<td>Username :</td>
			<td>{{$stf['username']}}</td>
		</tr>
		<tr>
			<td>Type :</td>
			<td>{{$stf['type']}}</td>
		</tr>
		<tr>
			<td>Password :</td>
			<td>{{$stf['password']}}</td>
		</tr>
		<!-- <tr>
			<td>
				<a href="/delete/{{$stf['id']}}">Delete</a>
			</td>
		</tr> -->
	</table>
	<h3>Are you sure?</h3>
	<input type="submit" name="delete" value="Confirm">
</form>
</body>
</html>