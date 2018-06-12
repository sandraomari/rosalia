<!DOCTYPE html>
<html>
<head>
	<title>All student records</title>
</head>
<body>
<a href="search"><button>Search</button></a>
<a href="/"><button>Home</button></a>
<table>
	<tr>
		<th>Student No</th>
		<th>Name</th>
		<th>Payment Date</th>
		<th>Amount</th>
	</tr>
	@foreach($payment as $value)
	<tr>
		<td>{{$value->student_no}}</td>
		<td>{{$value->Name}}</td>
		<td>{{$value->Payment_date}}</td>
		<td>{{$value->Amount}}</td>
	</tr>
	@endforeach
</table>
<p>Total Amount Paid:{{$sum}}</p>
</body>
</html>