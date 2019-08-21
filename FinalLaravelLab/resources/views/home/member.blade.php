<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h1 align="center">Welcome Home! {{session('user')}} [ {{session('type')}} ] [ {{session('id')}} ]</h1> 

	
	<!-- <a href="/add">Add</a> |
	<a href="/eList">Employee List</a> | -->
	<!-- <a href="/manage/{{session('id')}}">Update profile</a> |
	
	
	<a href="/ride/{{session('id')}}">Free Ride</a> |
	<a href="/bonus/{{session('id')}}">Salary & Bonus</a> |
	<a href="/rate/{{session('id')}}">Rating</a> |
	<a href="/overtime/{{session('id')}}">Overtime</a> |

	<a href="/logout">logout</a> --><br><br><br>

<form>
	@csrf
	<table border="1" align="center">

		<tr>
			<td colspan="6">
				<a href="/manageM/{{session('id')}}">Manage profile</a> |
	
				<a href="/showorder">Curt</a> |
				<!-- <a href="/ride/{{session('id')}}">Free Ride</a> |
				<a href="/bonus/{{session('id')}}">Salary & Bonus</a> |
				<a href="/rate/{{session('id')}}">Rating</a> |
				<a href="/overtime/{{session('id')}}">Overtime</a> | -->

				<a href="/logout">logout</a>
			</td>
		</tr>

		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Type</td>
			<td>Cost</td>
			<td>Available</td>
			<td>Action</td>

		</tr>
		@foreach($pas as $detail)		
		<tr>
			<td>{{$detail['id']}}</td>
			<td>{{$detail['name']}}</td>
			<td>{{$detail['type']}}</td>
			<td>{{$detail['cost']}}</td>
			<td>{{$detail['available']}}</td>
			@if($detail['available']=='Yes')
			<td><a href="/order/{{$detail['id']}}">Order</a></td>
			@else
			<td>Can not Order</td>
			@endif
				
		</tr>		
		@endforeach
	</table>
</form>

</body>
</html>