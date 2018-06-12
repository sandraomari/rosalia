<!DOCTYPE html>
<html>
<head>
	<title>Search student records</title>
</head>
<body>
<a href="/fees"><button>back</button></a><br>
<a href="/viewall/fees_payment"><button>View all Students</button></a><br>

<table>
	<form action="/search/fees_payment" method="get">
		{{csrf_field()}}
		<label>Student No</label>
		<input type="number" name="student_no">
		<input type="submit" name="search">
	</form>
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
<h1>Total Amount Paid:{{$sum}}</h1>
</body>
</html>