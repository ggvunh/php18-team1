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
		body{
		    font-family: 'Lato';
		}
	</style>
</head>
<body>
	<table>
	<caption style="font-size: 30px">LIST AUTHORS</caption>
		<thead>
			<tr>
				<th>NAME</th>
				<th>EMAIL</th>
				<th>PHONE</th>
				<th>ADDRESS</th>
			</tr>
		</thead>
		<tbody>
			@foreach($authors as $author)
			<tr>
				<td>{{ $author->name }}</td>
				<td>{{ $author->email }}</td>
				<td>{{ $author->phone }}</td>
				<td>{{ $author->address }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>