@extends('master2')

@section('title', 'Data Kursi')

@section('konten')
    <h3>Tambah Kursi</h3>

    <a href="/kursi"> Kembali</a>

    <br />
    <br />

    <form action="/kursi/store" class="form-horizontal" method="post">
        {{ csrf_field() }}
        <div class="form-group row">
            {{-- field input merk kursi --}}
            <label class="control-label col-2" for="merkkursi">Merk Kursi:</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="merkkursi" placeholder="Masukkan Merk Kursi" name="merkkursi">
            </div>
        </div>
        <div class="form-group row">
            {{-- field input stock kursi --}}
            <label class="control-label col-2" for="stockkursi">Stock Kursi:</label>
            <div class="col-md-10">
                <input type="number" class="form-control" id="stockkursi" placeholder="Masukkan Stock Kursi" name="stockkursi">
            </div>
        </div>
        <div class="form-group row">
            {{-- field input ketersediaan --}}
            <label class="control-label col-2" for="tersedia">Ketersediaan:</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="tersedia" placeholder="Ketersediaan" name="tersedia">
            </div>
        </div>
        <div class="col-sm-10">
            <input class="btn btn-primary" type="submit" value="Simpan Data">
        </div>
    </form>
@endsection
