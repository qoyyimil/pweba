@extends('master2')

@section('title', 'View Data Kursi')

@section('konten')
    <h3>Data Kursi</h3>
    @foreach ($kursi as $k)
        <div class="container">
            <form>
                <div class="form-group row">
                    <label for="merkkursi" class="col-sm-2 col-form-label">Merk Kursi:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="merkkursi" value="{{ $k->merkkursi }}" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="stockkursi" class="col-sm-2 col-form-label">Stock Kursi:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="stockkursi" value="{{ $k->stockkursi }}" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tersedia" class="col-sm-2 col-form-label">Ketersediaan:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tersedia" value="{{ $k->tersedia }}" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col">
                        <a href="/kursi" class="btn btn-success">OK</a>
                    </div>
                </div>
            </form>
        </div>
    @endforeach
@endsection
