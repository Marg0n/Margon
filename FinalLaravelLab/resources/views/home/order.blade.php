<!DOCTYPE html>
<html>
<head>
	<title>Order</title>
</head>
<body>

	<h2>Order</h2>

	<a href="/home/member">Back</a> |
	<a href="/logout">logout</a>

	
	<form method="post">
		@csrf
		<table border="0">

			<tr>
				<td>Name :</td>
				<td><input type="text" name="name" value="{{$rt['name']}}"></td>
			</tr>
			<tr>
				<td>Type :</td>
				<td><input type="text" name="type" value="{{$rt['type']}}" readonly="readonly"></td>
				
			</tr>
			<tr>
				<td>Cost :</td>
				<td><input type="text" name="cost" value="{{$rt['cost']}}"></td>
			</tr>
			
			<tr>
				<td>Ordered By :</td>
				<td><input type="text" name="orderedby" value="{{session('user')}}" readonly="readonly"></td>
				
			</tr>
			<tr>
				<td>
					
						<input type="radio" value="payed" name="payment">pay
						<input type="radio" value="due" name="payment">due
					
				</td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Order"></td>
			</tr>


		
		</table>
	</form>
	

</body>
</html>