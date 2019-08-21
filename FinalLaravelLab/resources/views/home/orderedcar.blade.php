
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
			<td colspan="5">
				<a href="/home">Back</a> |
				<a href="/logout">logout</a>
			</td>
		</tr>

		<tr>
			<td>Ordered By</td>
			<td>Name</td>
			
			<td>Type</td>
			<td>Cost</td>
			<td>Payment</td>
			
		</tr>
		@foreach($detail as $detail)
		<tr>
			<td>{{$detail['orderedby']}}</td>
			<td>{{$detail['name']}}</td>
			
			<td>{{$detail['type']}}</td>
			<td>{{$detail['cost']}}</td>
			<td>{{$detail['payment']}}</td>
			
		</tr>
		
		@endforeach
		
</table>

</body>
</html>