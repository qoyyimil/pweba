@extends('master2')

@section('title', 'Data Kursi')

@section('konten')
	<h3>Data Kursi</h3>

	<a href="/kursi/tambahkursi" class="btn btn-primary"> + Tambah Data Kursi</a>

	<br/>
    <p>Cari Data Kursi :</p>
	<form class="form-inline" action="/kursi/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Kursi.." value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input class="btn btn-info" type="submit" value="CARI">
	</form>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Kursi</th>
			<th>Merk Kursi</th>
			<th>Stock Kursi</th>
			<th>Ketersediaan</th>
			<th>Opsi</th>
		</tr>
		@foreach($kursi as $k)
		<tr>
			<td>{{ $k->kodekursi }}</td>
			<td>{{ $k->merkkursi }}</td>
			<td>{{ $k->stockkursi }}</td>
			<td>
                <input class="form-check-input" type="checkbox" value="" {{ $k->tersedia === 'Y' ? 'checked' : '' }} id="flexCheckDefault">
            </td>
			<td>
				<a href="/kursi/lihatkursi/{{ $k->kodekursi }}" class="btn btn-success">View</a>
				|
                <a href="/kursi/editkursi/{{ $k->kodekursi }}" class="btn btn-warning">Edit</a>
				|
				<a href="/kursi/hapus/{{ $k->kodekursi }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection
