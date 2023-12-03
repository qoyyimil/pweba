@extends('master2')

@section('title', 'View Data Pegawai')

@section('konten')
    <h3>Data Pegawai</h3>
    @foreach ($pegawai as $p)
        <div class="container">
            <div class="row">
                <div class="col">
                    Box Kosong
                </div>
                <div class="col">
                    <ul>
                        Nama : {{ $p->pegawai_nama }} <br>
                        Jabatan : {{ $p->pegawai_jabatan }} <br>
                        Umur : {{ $p->pegawai_umur }} <br>
                        Alamat : {{ $p->pegawai_alamat }}
                    </ul>
                    <div class="col-sm-10">
                        <a href="/pegawai" class="btn btn-success">OK</a>
                    </div>
                </div>
            </div>
        </div>

    @endforeach
@endsection
