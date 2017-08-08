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
	<h2>Hiên thị</h2>
	<table>
		<thead>
			<tr>
				<th>Tên nhà xuât bản</th>
				<th>Email</th>
				<th>Số điện thoại</th>
				<th>Địa chỉ</th>
			</tr>
		</thead>
		<tbody>
			@foreach($companies as $com)
			<tr>
				<td>{{ $com->name }}</td>
				<td>{{ $com->email }}</td>
				<td>{{ $com->phone }}</td>
				<td>{{ $com->address }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>