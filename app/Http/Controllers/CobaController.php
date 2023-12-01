<?php

namespace App\Http\Controllers; //package

use Illuminate\Http\Request; //import

class CobaController extends Controller {
    public function index(){
        return "<h2>Halo ini adalah method index, dalam controller CobaController</h2>";
    }

    public function viewController(){
        //biasanya ada logika pemrograman disini
        $nama = "Qoyyimil Jamilah";
        $alamat = "Sumenep";
        $umur = 20;
        $pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];
    	return view('viewController', ['nama' => $nama, 'alamat' => $alamat, 'umur' => $umur, 'matkul' => $pelajaran]); //asign value dalam array pake '=>'
    }

    public function showjam($jam){
        return "<h3>Sekarang jam</h3>" . $jam;
    }

    public function proses(Request $request){
        $nama = $request->input('nama');
     	$alamat = $request->input('alamat');
        $nrp = $request->input('nrp');
        return "Anda telah mengisikan <br>Nama : " .$nama. ", Alamat : " .$alamat. ", NRP : " .$nrp. "<br> Isi asli class request : " .$request;
    }

    public function formulir(){
        return view('formulir');
    }

    public function home(){
		return view('home');
	}

	public function tentang(){
		return view('tentang');
	}

	public function kontak(){
		return view('kontak');
	}
}
