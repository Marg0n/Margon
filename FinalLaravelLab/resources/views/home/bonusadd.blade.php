
<!DOCTYPE html>
<html>
<head>
	<title>Bonus</title>
</head>
<body>

	<h2>Bonus</h2>

	<a href="/bonus/{{session('id')}}">Back</a> |
	<a href="/logout">logout</a>

	
	<form method="post">
		@csrf
		<table border="0">

			<tr>
				<td>Bonus :</td>
				<td><input type="text" name="Bonus" value="{{$rt['Bonus']+500}}" readonly="readonly"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Gain Bonus"></td>
			</tr>


		
		</table>
	</form>
	

</body>
</html>