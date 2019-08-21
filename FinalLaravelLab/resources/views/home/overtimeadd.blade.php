
<!DOCTYPE html>
<html>
<head>
	<title>Gain Overtime</title>
</head>
<body>

	<h2>Gain Overtime</h2>

	<a href="/overtime/{{session('id')}}">Back</a> |
	<a href="/logout">logout</a>

	
	<form method="post">
		@csrf
		<table border="0">

			<tr>
				<td>Overtime :</td>
				<td><input type="text" name="Overtime" value="{{$rt['Overtime']+1}}" readonly="readonly"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Gain Overtime"></td>
			</tr>


		
		</table>
	</form>
	

</body>
</html>