<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h1>Welcome Home! {{session('user')}} [ {{session('type')}} ] [ {{session('id')}} ]</h1> 

	
	<!-- <a href="/add">Add</a> |
	<a href="/eList">Employee List</a> | -->
	<a href="/manage/{{session('id')}}">Manage profile</a> |
	<a href="/MemberDetail">Check Member details</a> |
	<!-- <a href="/Supervisor">Check Supervisor details</a> | -->
	<a href="/car">Check Car details</a> |
	<a href="/entry">New Car Entry</a> |
	<!-- <a href="/bonus/{{session('id')}}">Salary & Bonus</a> |
	<a href="/rate/{{session('id')}}">Rating</a> |
	<a href="/overtime/{{session('id')}}">Overtime</a> | -->
	<a href="/orderedcar">Ordered Car</a> |

	<a href="/logout">logout</a>


</body>
</html>