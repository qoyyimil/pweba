@extends('master2')

@section('title', 'Data Pegawai')

@section('konten')
    <h3>Tambah Data Pegawai</h3>

    <a href="/pegawai"> Kembali</a>

    <br />
    <br />

    <form action="/pegawai/store" class="form-horizontal" method="post">
        {{ csrf_field() }}
        <div class="form-group row">
            <label class="control-label col-2" for="nama">Nama:</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
            </div>
        </div>
        <div class="form-group row">
            {{-- field input jabatan --}}
            <label class="control-label col-2" for="jabatan">Jabatan:</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="jabatan" placeholder="Masukkan Jabatan" name="jabatan">
            </div>
        </div>
        <div class="form-group row">
            {{-- field input umur --}}
            <label class="control-label col-2" for="umur">Umur:</label>
            <div class="col-md-10">
                <input type="number" class="form-control" id="umur" placeholder="Masukkan Umur" name="umur">
            </div>
        </div>
        <div class="form-group row">
            {{-- field input alamat --}}
            <label class="control-label col-2" for="alamat">Alamat:</label>
            <div class="col-md-10">
                <textarea class="form-control" id="alamat" placeholder="Masukkan Alamat" name="alamat"></textarea>
            </div>
        </div>
        <div class="col-sm-10">
            <input class="btn btn-primary" type="submit" value="Simpan Data">
        </div>
        {{-- </div> --}}
    </form>
@endsection
