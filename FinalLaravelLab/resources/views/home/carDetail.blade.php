
<!DOCTYPE html>
<html>
<head>
	<title>Car Details</title>
</head>
<body>

	<h2>Car Details</h2>

	<a href="/home">Back</a> |
	<a href="/logout">logout</a>

	@csrf
	<table border="1">

		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Type</td>
			<td>Cost</td>
			<td>Available</td>
			<td>Action 1</td>
			<td>Action 2</td>

		</tr>
		@foreach($pas as $detail)		
		<tr>
			<td>{{$detail['id']}}</td>
			<td>{{$detail['name']}}</td>
			<td>{{$detail['type']}}</td>
			<td>{{$detail['cost']}}</td>
			<td>{{$detail['available']}}</td>
			<td><a href="/caredit/{{$detail['id']}}">Edit</a></td>
			<td><a href="/cardlt/{{$detail['id']}}">Delete</a></td>			
		</tr>		
		@endforeach
</table>

</body>
</html>