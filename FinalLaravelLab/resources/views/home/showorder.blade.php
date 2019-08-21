
<!DOCTYPE html>
<html>
<head>
	<title>Details Cart</title>
</head>
<body>

	<h2 align="center">Details Cart</h2>

	

	@csrf
	<table border="1" align="center">
		<tr>
			<td colspan="4">
				<a href="/home/member">Back</a> |
				<a href="/logout">logout</a>
			</td>
		</tr>

		<tr>
			
			<td>Name</td>
			
			<td>Type</td>
			<td>Cost</td>
			<td>Payment</td>
			
		</tr>
		@foreach($detail as $detail)
		<tr>
			
			<td>{{$detail['name']}}</td>
			
			<td>{{$detail['type']}}</td>
			<td>{{$detail['cost']}}</td>
			<td>{{$detail['payment']}}</td>
			
		</tr>
		
		@endforeach
		
</table>

</body>
</html>