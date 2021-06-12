<!DOCTYPE html>
<html>
<head>
	<title>Export Laporan Excel Pada Laravel</title>
</head>
<body>

	<div class="container">
		<center>
			<h4>Export Laporan Excel Pada Laravel</h4>
		</center>
		
		<a href="/jenis_buku/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
		
		<table class='table table-bordered'>
			<thead>
				<tr>
					<th>ID</th>
					<th>JENIS</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1 @endphp
				@foreach($jenis_buku as $s)
				<tr>
					<td>{{ $i++ }}</td>
					<td>{{$s->jenis}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

</body>
</html>

