<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaiKuliahController extends Controller
{
	public function nilaikuliah()
	{
    	// mengambil data dari table nilaikuliah
		// $nilaikuliah = DB::table('nilaikuliah')->get();
        $nilaikuliah = DB::table('nilaikuliah')
                    ->get();

    	// mengirim data nilaikuliah ke view index
		return view('nilaikuliah',['nilaikuliah' => $nilaikuliah]);

	}

    public function tambahdata()
	{

		// memanggil view tambah
		return view('tambahdata');

	}

    public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('nilaikuliah')->insert([
            'ID' => $request-> ID,
            'NRP' => $request-> NRP,
            'NilaiAngka' => $request-> NilaiAngka,
            'SKS' => $request-> SKS
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/nilaikuliah');

	}

}
