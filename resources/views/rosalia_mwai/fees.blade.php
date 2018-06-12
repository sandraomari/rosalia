<!DOCTYPE html>
<html>
<head>
	<title>Fees</title>
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
 	<a href="search/fees_payment"><button>Search</button></a>
<form action="fees_payment" method="post">
	       {{csrf_field()}}
	<h2>Fees Payment Form</h2>
	<label>Student Admission Number</label>
	<input type="number" name="student_no"><br><br>
	<label>Full Name:</label> 
	<input type="text" name="Name"><br><br>
	<label>Date Of Payment</label>
	<input type="date" name="Payment_Date"><br><br>
	<label>Amount</label>
	<input type="number" name="Amount"><br><br>
	<input type="submit" name="Submit"><br><br>
		 
</form>
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
<a href="/"><button>Home</button></a>

</div>
</body>
</html>