<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Test PDF</title>
	<style type="text/css" media="screen">
		table{
			border-collapse:collapse;
		}
		table,th, td {border: 1px solid #333;}
		td {padding:2px;}
		table .title{ font-size: 30px }
	</style>
	<link rel="stylesheet" href="">
</head>
<body>
	<table>
		<caption style="font-size: 30px">LIST ORDERS PENDING</caption>
		<thead>
			<tr>
				<th>NAME</th>
				<th>CREATED_AT</th>
				<th>ADDRESS</th>
				<th>NOTE</th>
			</tr>
		</thead>
		<tbody>
			@foreach($orders as $order)
			<tr>
				<td>{{ $order->user->name }}</td>
				<td>{{ $order->created_at }}</td>
				<td>{{ $order->address }}</td>
				<td>{{ $order->note }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>