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
				<th>Số thứ tự</th>
				<th>Thể loại</th>
			</tr>
		</thead>
		<tbody>
			@foreach($topics as $top)
			<tr>
				<td>{{ $top->id }}</td>
				<td>{{ $top->name }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>