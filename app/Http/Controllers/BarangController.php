<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BarangController extends Controller
{
	public function index()
	{
        //mengambil data dari table pegawai
        $keranjangbelanja = DB::table('keranjangbelanja')->get();
        // mengirim data pegawai ke view index
        return view('indexbarang',['keranjangbelanja' => $keranjangbelanja]);
	}

	// update data barang
	public function update(Request $request)
	{
		// update data barang
		DB::table('keranjangbelanja')->where('ID',$request->id)->update([
			'ID' => $request->ID,
			'KodeBarang' => $request->KodeBarang,
			'Jumlah' => $request->Jumlah,
			'Harga' => $request->Harga
		]);
		// alihkan halaman ke halaman barang
		return redirect('/barang');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('ID',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/barang');
	}

    public function tambahbarang()
	{
		// memanggil view tambah
		return view('tambahbarang');
	}

	// method untuk insert data ke database
	public function storebarang(Request $request)
	{
		// insert data ke table pegawai
		DB::table('keranjangbelanja')->insert([
			'ID' => $request->ID,
			'KodeBarang' => $request->KodeBarang,
			'Jumlah' => $request->Jumlah,
			'Harga' => $request->Harga
		]);
		// alihkan halaman ke halaman awal
		return redirect('/barang');

	}
}
