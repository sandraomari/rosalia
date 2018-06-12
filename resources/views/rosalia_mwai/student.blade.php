<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<style type="text/css">
	
	div
	{
		background-color: white;
		width: 80%;



	}
</style>
<body align="center"> 
	<div>
		<p>Register Student</p>
		<form action="student_register" method="post">
			{{csrf_field()}}
			Student Number:<input type="number" name="student_no"><br><br>
			Full Name:<input type="text" name="Name"><br><br>
			Address:<input type="text" name="Physical_Address"><br><br>
			Date of Birth:<input type="date" name="DOB"><br><br>
			<input type="submit" name="Register"><br><br>
			@if ($errors->any())
		<div>
			<ul>
			@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
    
		</div>
	</div>
    @endif
		</form>
		 <a href="/"><button>Home</button></a>
</body>
</html>