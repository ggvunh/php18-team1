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
		<caption style="font-size: 30px">LIST ORDER</caption>
		<thead>
			<tr>
				<th>ACCOUNT</th>
				<th>ORDER DATE</th>
				<th>ADDRESS</th>
				<th>NOTE</th>
				<th>STATUS ORDER</th>
				<th>STATUS SHIPPING</th>
			</tr>
		</thead>
		<tbody>
			@foreach($orders as $od)
			<tr>
				<td>{{ $od->user->name }}</td>
				<td>{{ $od->created_at }}</td>
				<td>{{ $od->address }}</td>
				<td>{{ $od->note }}</td>
				<td class=" ">
					@if ($od->status_order == 1)
					{{ "Đã thanh toán" }}
					@else
					{{ "Chưa thanh toán" }}
					@endif
				</td>
				<td class=" ">
					@if ($od->shipping_status == 1)  
					{{ "Đã chuyển" }}
					@elseif($od->status_order == 0)
					{{ "Chưa chuyển" }}
					@else
					{{ "Chưa chuyển" }}
					@endif
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>