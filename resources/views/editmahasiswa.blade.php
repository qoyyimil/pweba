@extends('master2')

@section('title', 'Edit Data Mahasiswa')

@section('konten')
    <h3>Edit Data Mahasiswa</h3>

    <a href="/mahasiswa">Kembali</a>

    <br />
    <br />

    @foreach ($mahasiswa as $m)
        <form action="/mahasiswa/update" class="form-horizontal" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $m->NRP }}"> <br />
            <div class="form-group row">
                {{-- field input nrp mahasiswa --}}
                <label class="control-label col-2" for="nrp">NRP Mahasiswa:</label>
                <div class="col-md-10">
                    <input class="form-control" type="text" required="required" name="nrp" value="{{ $m->NRP }}">
                </div>
            </div>
            <div class="form-group row">
                {{-- field input nama mahasiswa --}}
                <label class="control-label col-2" for="nama">Nama Mahasiswa:</label>
                <div class="col-md-10">
                    <input class="form-control" type="text" required="required" name="nama" value="{{ $m->Nama }}">
                </div>
            </div>
            <div class="form-group row">
                {{-- field input jurusan mahasiswa --}}
                <label class="control-label col-2" for="jurusan">Jurusan Mahasiswa:</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="jurusan" name="jurusan" value="{{ $m->Jurusan }}">
                </div>
            </div>
            <div class="form-group row">
                {{-- field input ipk mahasiswa --}}
                <label class="control-label col-2" for="ipk">IPK Mahasiswa:</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="ipk" name="ipk" value="{{ $m->IPK }}">
                </div>
            </div>
            <div class="text-right">
                <input class="btn btn-primary" type="submit" value="Simpan Data Mahasiswa">
            </div>
        </form>
    @endforeach
@endsection
