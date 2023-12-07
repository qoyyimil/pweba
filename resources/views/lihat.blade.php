@extends('master2')

@section('title', 'View Data Pegawai')

@section('konten')
    <h3>Data Pegawai</h3>
    @foreach ($pegawai as $p)
        <div class="container">
            <div class="row">
                <div class="col border">
                </div>
                <div class="col">
                    <form>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" value="{{ $p->pegawai_nama }}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jabatan" class="col-sm-2 col-form-label">Jabatan:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="jabatan" value="{{ $p->pegawai_jabatan }}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="umur" class="col-sm-2 col-form-label">Umur:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="umur" value="{{ $p->pegawai_umur }}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="alamat" value="{{ $p->pegawai_alamat }}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <a href="/pegawai" class="btn btn-success">OK</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
