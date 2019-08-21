
<!DOCTYPE html>
<html>
<head>
	<title>Details Supervisor</title>
</head>
<body>

	<h2>Details Supervisor</h2>

	<a href="/home">Back</a> |
	<a href="/logout">logout</a>

	@csrf
	<table border="1">

		<tr>
			<td>ID</td>
			<td>User Name</td>
			
			<td>Stuff Type</td>
		</tr>
		@foreach($sup as $detail)
		@if($detail['StuffType']=='Supervisor')
		<tr>
			<td>{{$detail['id']}}</td>
			<td>{{$detail['username']}}</td>
			
			<td>{{$detail['StuffType']}}</td>
			
		</tr>
		@endif
		@endforeach
</table>

</body>
</html>