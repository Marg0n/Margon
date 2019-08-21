<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>
<body>
	<h1 align="center">Registration PAGE</h1>

	<form method="post">

		<!--{{csrf_field()}} -->
		<!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --> 
		@csrf
		
		<table align="center">
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>User Type</td>
				<td>
					
						<input type="radio" value="Admin" name="type">Admin<br>
						<input type="radio" value="Member" name="type">Member
					<br>
					
				</td>
			</tr>
			<!-- <tr>
				<td>Contact</td>
				<td><input type="text" name="contact"></td>
			</tr> -->
			
			<tr>
				<td><input type="submit" name="submit" value="Submit"></td>
				<td></td>
			</tr>
		</table>
	</form>

	<div>
		{{session('msg')}}
	</div>
</body>
</html>