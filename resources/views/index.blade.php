<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2>www.malasngoding.com</h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>
	
	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($supir as $p)
		<tr>
			<td>{{ $p->kecamatan }}</td>
			<td>{{ $p->desa }}</td>
			<td>{{ $p->nama }}</td>
			<td>{{ $p->panjang }}</td>
			<td>
				{{-- <a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a> --}}
				|
				{{-- <a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a> --}}
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>