@extends('master2')

@section('title', 'Edit Data Kursi')

@section('konten')
    <h3>Edit Data Kursi</h3>

    <a href="/kursi">Kembali</a>

    <br />
    <br />

    @foreach ($kursi as $k)
        <form action="/kursi/update" class="form-horizontal" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $k->kodekursi }}"> <br />
            <div class="form-group row">
                {{-- field input merk kursi --}}
                <label class="control-label col-2" for="merkkursi">Merk Kursi:</label>
                <div class="col-md-10">
                    <input class="form-control" type="text" required="required" name="merkkursi" value="{{ $k->merkkursi }}">
                </div>
            </div>
            <div class="form-group row">
                {{-- field input stock kursi --}}
                <label class="control-label col-2" for="stockkursi">Stock Kursi:</label>
                <div class="col-md-10">
                    <input class="form-control" type="text" required="required" name="stockkursi" value="{{ $k->stockkursi }}">
                </div>
            </div>
            <div class="form-group row">
                {{-- field input ketersediaan --}}
                <label class="control-label col-2" for="tersedia">Ketersediaan:</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="tersedia" name="tersedia" value="{{ $k->tersedia }}">
                </div>
            </div>
            <div class="col-sm-10">
                <input class="btn btn-primary" type="submit" value="Simpan Data">
            </div>
        </form>
    @endforeach
@endsection
