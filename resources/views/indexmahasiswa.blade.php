@extends('master2')

@section('title', 'Data Mahasiswa')

@section('konten')
	<h3>Data Mahasiswa</h3>

	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>NRP Mahasiswa</th>
			<th>Nama Mahasiswa</th>
			<th>Jurusan Mahasiswa</th>
			<th>IPK Mahasiswa</th>
			<th>Opsi</th>
		</tr>
		@foreach($mahasiswa as $m)
		<tr>
			<td>{{ $m->NRP }}</td>
			<td>{{ $m->Nama }}</td>
			<td>{{ $m->Jurusan }}</td>
			<td>{{ $m->IPK }}</td>
			<td>
				<a href="/mahasiswa/lihatmahasiswa/{{ $m->NRP }}" class="btn btn-success">View</a>
				|
                <a href="/mahasiswa/editmahasiswa/{{ $m->NRP }}" class="btn btn-warning">Edit</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection
