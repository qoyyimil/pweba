@extends('master2')

@section('title', 'View Data Mahasiswa')

@section('konten')
    <h3>Data Mahasiswa</h3>
    @foreach ($mahasiswa as $m)
        <div class="container">
            <form>
                <div class="form-group row">
                    <label for="nrp" class="col-sm-2 col-form-label">NRP Mahasiswa:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nrp" value="{{ $m->NRP }}" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Mahasiswa:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" value="{{ $m->Nama }}" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jurusan" class="col-sm-2 col-form-label">Jurusan Mahasiswa:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jurusan" value="{{ $m->Jurusan }}" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ipk" class="col-sm-2 col-form-label">IPK Mahasiswa:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="ipk" value="{{ $m->IPK }}" readonly>
                    </div>
                </div>
                <div class="text-right">
                    <a href="/mahasiswa" class="btn btn-primary">Kembali</a>
                </div>
            </form>
        </div>
    @endforeach
@endsection
