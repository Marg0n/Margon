<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<h1 align="center">LOGIN PAGE</h1><br>

	<form method="post">

		<!--{{csrf_field()}} -->
		<!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --> 
		@csrf
		
		<table align="center">
			<!-- <tr>
				<td>Employee</td>
				<td><input type="text" name="ename"></td>
			</tr> -->
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<!-- <tr>
				<td>Contact</td>
				<td><input type="text" name="contact"></td>
			</tr> -->
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				
				<td><input type="submit" name="submit" value="Submit"></td>
				<!-- <td><button><a href="/login/forgot">Forgot password?</a></button></td> -->
			</tr>
		</table>
	</form>

	<div>
		{{session('msg')}}
	</div>
</body>
</html>