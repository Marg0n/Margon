
<!DOCTYPE html>
<html>
<head>
	<title>Details Member</title>
</head>
<body>

	<h2>Details Member</h2>

	<a href="/home">Back</a> |
	<a href="/logout">logout</a>

	@csrf
	<table border="1">

		<tr>
			<td>ID</td>
			<td>User Name</td>
			
			<td>User Type</td>
			<td>Action</td>
		</tr>
		@foreach($stuff as $detail)
		@if($detail['type']=='Member')
		<tr>
			<td>{{$detail['id']}}</td>
			<td>{{$detail['username']}}</td>
			
			<td>{{$detail['type']}}</td>
				<td><a href="/details/{{$detail['id']}}">Delete</a></td>
		</tr>
		
		@endif
		@endforeach
		
</table>

</body>
</html>