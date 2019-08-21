<!DOCTYPE html>
<html>
<head>
	<title>Forgot password</title>
</head>
<body>
	<h1>Forgot password</h1>

	<a href="/login">Back</a>

	<form method="post">

		<!--{{csrf_field()}} -->
		<!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --> 
		@csrf
		
		<table>
			
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>StuffType</td>

				<td><input type="radio" value="Driver" name="StuffType">Driver<br>
					<input type="radio" value="Supervisor" name="StuffType">Supervisor<br>
				</td>
			</tr>

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