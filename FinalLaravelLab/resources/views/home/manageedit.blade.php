
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body>

	<h2>Update</h2>

	<a href="/manage/{{session('id')}}">Back</a> |
	<a href="/logout">logout</a>

	
	<form method="post">
		@csrf
		<table border="0">

			<tr>
				<td>Name :</td>
				<td><input type="text" name="username" value="{{$rt['username']}}"></td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input type="text" name="password" value="{{$rt['password']}}"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Update"></td>
			</tr>


		
		</table>
	</form>
	

</body>
</html>