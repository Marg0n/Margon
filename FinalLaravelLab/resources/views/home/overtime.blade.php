
<!DOCTYPE html>
<html>
<head>
	<title>Overtime</title>
</head>
<body>

	<h2>Overtime</h2>

	<a href="/home">Back</a> |
	<a href="/logout">logout</a>

	@csrf
	<table border="0">

		<tr>
			<td>ID :</td>
			<td>{{$rt['id']}}</td>
		</tr>
		<tr>
			<td>Username :</td>
			<td>{{$rt['username']}}</td>
		</tr>
		<tr>
			<td>Stuff Type :</td>
			<td>{{$rt['StuffType']}}</td>
		</tr>
		@if($rt['Rating']<='4.5' && $rt['Overtime']!='2')
		<tr>
			<td>Overtime :</td>
			<td>{{$rt['Overtime']}}</td>
			<td><a href="/overtime/overtimeadd/{{session('id')}}">Get Overtime</a></td>
		</tr>
		@elseif($rt['Rating']>='4.5' && $rt['Overtime']!='4')
		<tr>
			<td>Overtime :</td>
			<td>{{$rt['Overtime']}}</td>
			<td><a href="/overtime/overtimeadd/{{session('id')}}">Get Overtime</a></td>
		</tr>
		@else
		<tr>
			<td>Overtime :</td>
			<td>{{$rt['Overtime']}}</td>
		</tr>
		@endif

		
		
</table>

</body>
</html>