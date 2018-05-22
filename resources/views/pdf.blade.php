<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Judul</title>
		    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

	</head>
<body>
<h1>Ini table</h1>
<table class="table table-bordered">
	<thead>
		<tr>		
            <th>ID</th>
            <th>NPM</th>
            <th>Sholat Wajib</th>
            <th>Sholat Berjamaah Awal Waktu</th>
            <th>Sholat Subuh Berjamaah</th>
            <th>Qiyamul Lail</th>
            <th>Witir</th>
            <th>Istighfar</th>
            <th>Puasa Sunah</th>
            <th>Tilawah</th>
            <th>Matsurat</th>
            <th>Sholat Duha</th>
            <th>Baca Buku Islam</th>
            <th>Hafalan Quran</th>
            <th>Hafalan Hadist</th>
            <th>Minggu</th>
		</tr>
		<!-- <td>Password</td> -->
	</thead>
	@foreach($mutabaahs as $mutabaah)
	<tr>
        <td>{{$mutabaah['id']}}</td>
        <td>{{$mutabaah['npm']}}</td>
        <td>{{$mutabaah['sholat_wajib']}}</td>
        <td>{{$mutabaah['jamaah_awal_waktu']}}</td>
        <td>{{$mutabaah['subuh_jamaah']}}</td>
        <td>{{$mutabaah['qiyamul_lail']}}</td>
        <td>{{$mutabaah['witir']}}</td>
        <td>{{$mutabaah['istighfar']}}</td>
        <td>{{$mutabaah['puasa_sunah']}}</td>
        <td>{{$mutabaah['tilawah']}}</td>
        <td>{{$mutabaah['matsurat']}}</td>
        <td>{{$mutabaah['duha']}}</td>
        <td>{{$mutabaah['baca_buku_islam']}}</td>
        <td>{{$mutabaah['hafalan_quran']}}</td>
        <td>{{$mutabaah['hafalan_hadis']}}</td>
        <td>{{$mutabaah['minggu']}}</td>
	</tr>
	@endforeach
</table>
</body>
</html>