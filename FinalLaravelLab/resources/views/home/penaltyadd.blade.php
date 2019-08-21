
<!DOCTYPE html>
<html>
<head>
	<title>Penalty</title>
</head>
<body>

	<h2>Penalty</h2>

	<a href="/bonus/{{session('id')}}">Back</a> |
	<a href="/logout">logout</a>

	
	<form method="post">
		@csrf
		<table border="0">

			<tr>
				<td>Penalty :</td>
				<td><input type="text" name="Penalty" value="{{$rt['Penalty']+500}}" readonly="readonly"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Gain Penalty"></td>
			</tr>


		
		</table>
	</form>
	

</body>
</html>