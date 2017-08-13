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
				<th>ID</th>
				<th>ORDER_DATE</th>
				<th>STATUS_ORDER</th>
				<th>PHONE</th>
				<th>STATUS_SHIPPING</th>
				<th>NOTE</th>
				<th>ADDRESS</th>
				<th>NAME</th>
			</tr>
		</thead>
		<tbody>
			 @foreach($order as $od)
           <tr class="even pointer">
            <td class=" ">{{ $od->id }}</td>
            <td class=" ">{{ $od->order_date }}</td>
            <td class=" ">
              @if ($od->status_order == 1)
              {{ "Đa thanh toan" }}
              @else
              {{ "Chua thanh toan" }}
              @endif
            </td>
            <td class=" ">{{ $od->user->phone}}</td>
            <td class=" ">
             @if ($od->shipping_status == 1)  
             {{ "Đa chuyen" }}
             @elseif($od->status_order == 0)
             {{ "Chua chuyen" }}
             @else
             {{ "Chua chuyen" }}
             @endif
           </td>
           @php
           $url=url('order/'.$od->id).'/orderdetail';
           @endphp
           <td class=" ">{{ $od->note }}</td>
           <td class=" ">{{ $od->address }}</td>
           <td class=" ">{{ ucwords($od->user->name) }}</td>
          </tr>
          @endforeach
		</tbody>
	</table>

</body>
</html>