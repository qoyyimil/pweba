@extends('master2')

@section('title', 'Edit Data Pegawai')

@section('konten')
    <h3>Edit Pegawai</h3>

    <a href="/pegawai"> Kembali</a>

    <br />
    <br />

    @foreach ($pegawai as $p)
        <form action="/pegawai/update" class="form-horizontal" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br />
            <div class="form-group">
                {{-- field input nama --}}
                <label class="control-label col-sm-2" for="nama">Nama</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}">
                </div>
            </div>
            <div class="form-group">
                {{-- field input jabatan --}}
                <label class="control-label col-sm-2" for="jabatan">Jabatan:</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}">
                </div>
            </div>
            <div class="form-group">
                {{-- field input umur --}}
                <label class="control-label col-sm-2" for="umur">Umur:</label>
                <div class="col-sm-10">
                    <input class="form-control" type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}">
                </div>
            </div>
            <div class="form-group">
                {{-- field input alamat --}}
                <label class="control-label col-sm-2" for="alamat">Alamat:</label>
                <div class="col-sm-10">
                    <textarea class="form-control" required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea>
                </div>
            </div>
            <div class="col-sm-10">
                <input class="btn btn-primary" type="submit" value="Simpan Data">
            </div>
        </form>
    @endforeach
@endsection
