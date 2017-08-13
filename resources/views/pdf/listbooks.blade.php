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
		<caption style="font-size: 30px">LIST BOOKS</caption>
		<thead>
			<tr>
				<th>NAME</th>
				<th>AUTHOR</th>
			</tr>
		</thead>
		<tbody>
			@foreach($books as $book)
			<tr>
				<td>{{ $book->name }}</td>
				<td>{{ $book->author->name }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>