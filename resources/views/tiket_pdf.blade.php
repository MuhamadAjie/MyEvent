<html>
<head>
	<title>Bukti Pembayaran</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
			<h4>Bukti Pembayaran</h4>
	</center>
	<table class='table table-bordered'>
        <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>No Telephone</th>
            <th>No Rekening</th>
        </tr>
        </thead>
        <tbody>
        @php $i=1 @endphp
        @foreach($kupon as $p)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{$p->name}}</td>
            <td>{{$p->email}}</td>
            <td>{{$p->pay->no_tlp}}</td>
            <td>{{$p->pay->akun_bank}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>