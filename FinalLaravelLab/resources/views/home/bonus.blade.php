
<!DOCTYPE html>
<html>
<head>
	<title>Salary & Bonus</title>
</head>
<body>

	<h2>Salary & Bonus</h2>

	<a href="/home">Back</a> |
	<a href="/logout">logout</a>

	
	<form method="post">
		@csrf
		<table border="1">

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
			<tr>
				<td>Salary :</td>
				<td>{{$rt['Salary']}}</td>
			</tr>
			@if($rt['Rating']>='4.5' && $rt['Bonus']!='500')
			<tr>
				<td>Bonus :</td>
				<td><a href="/bonus/bonusadd/{{session('id')}}">Gain Bonus</a></td>
			</tr>
			@else
			<tr>
				<td>Bonus :</td>
				<td>{{$rt['Bonus']}}</td>
			</tr>
			@endif

			@if($rt['Rating']<='3' && $rt['Penalty']!='500')
			<tr>
				<td>Penalty :</td>
				<td><a href="/bonus/penaltyadd/{{session('id')}}">Get penalty</a></td>
			</tr>
			@else
			<tr>
				<td>Penalty :</td>
				<td>{{$rt['Penalty']}}</td>
			</tr>
			@endif
	 	</table>
	 </form>

</body>
</html>