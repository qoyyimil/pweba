<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KursiController extends Controller
{
	public function index()
    {
        // mengambil data dari table kursi
        $kursi = DB::table('kursi')->get();

        // mengirim data kursi ke view index
        return view('indexkursi', ['kursi' => $kursi]);
    }

    public function viewKursi($id)
    {
        // mengambil data kursi berdasarkan id yang dipilih
        $kursi = DB::table('kursi')->where('kodekursi', $id)->get();

        // passing data kursi yang didapat ke view lihatkursi.blade.php
        return view('lihatkursi', ['kursi' => $kursi]);
    }

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahkursi');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
        // insert data ke table pegawai
		DB::table('kursi')->insert([
			'merkkursi' => $request->merkkursi,
			'stockkursi' => $request->stockkursi,
            'tersedia' => $request->tersedia,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/kursi');

	}

	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$kursi = DB::table('kursi')->where('kodekursi',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('editkursi',['kursi' => $kursi]);

	}

	// update data pegawai
	public function update(Request $request)
	{
        // update data pegawai
		DB::table('kursi')->where('kodekursi',$request->id)->update([
			'merkkursi' => $request->merkkursi,
			'stockkursi' => $request->stockkursi,
            'tersedia' => $request->tersedia,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/kursi');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('kursi')->where('kodekursi',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/kursi');
	}

    // method untuk cari data pegawai
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$kursi = DB::table('kursi')
		->where('merkkursi','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('indexkursi',['kursi' => $kursi, 'cari' => $cari]);

	}
}
