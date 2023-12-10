<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BajuController extends Controller
{
	public function indexbaju()
	{
    	// mengambil data dari table baju
		// $baju = DB::table('baju')->get();
        $baju = DB::table('baju')
                    ->orderBy('merkbaju', 'asc')
                    ->paginate(10);

    	// mengirim data baju ke view index
		return view('baju',['baju' => $baju]);

	}

	// method untuk menampilkan view form tambah baju
	public function tambahbaju()
	{

		// memanggil view tambah
		return view('tambahbaju');

	}

	// method untuk insert data ke table baju
    public function storebaju(Request $request)
    {
        // insert data ke table baju
        DB::table('baju')->insert([
            'merkbaju' => $request->merkbaju,
            'stockbaju' => $request->stockbaju,
            'tersedia' => ($request->stockbaju > 0) ? 'Y' : 'N',
        ]);
        // alihkan halaman ke halaman baju
        return redirect('/baju');
    }


	// method untuk edit data baju
	public function editbaju($kodebaju)
	{
		// mengambil data baju berdasarkan id yang dipilih
		$baju = DB::table('baju')->where('kodebaju',$kodebaju)->get();
		// passing data baju yang didapat ke view edit.blade.php
		return view('editbaju',['baju' => $baju]);

	}

	// update data baju
	public function updatebaju(Request $request)
{
    // update data baju
    DB::table('baju')->where('kodebaju',$request->id)->update([
        'merkbaju' => $request->merkbaju,
        'stockbaju' => $request->stockbaju,
        'tersedia' => ($request->stockbaju > 0) ? 'Y' : 'N',
    ]);
    // alihkan halaman ke halaman baju
    return redirect('/baju');
}

	// method untuk hapus data baju
	public function hapusbaju($kodebaju)
	{
		// menghapus data baju berdasarkan id yang dipilih
		DB::table('baju')->where('kodebaju',$kodebaju)->delete();

		// alihkan halaman ke halaman baju
		return redirect('/baju');
	}

    public function caribaju(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table baju sesuai pencarian data
		$baju = DB::table('baju')
		            ->where('merkbaju','like',"%".$cari."%")
                    ->orderBy('merkbaju', 'asc')
                    ->paginate(10);

    		// mengirim data baju ke view index
		return view('baju',['baju' => $baju, 'cari' => $cari]);
	}

    // method untuk menampilkan view form tambah baju
	public function viewbaju($kodebaju)
	{
		// mengambil data baju berdasarkan id yang dipilih
		$baju = DB::table('baju')->where('kodebaju',$kodebaju)->first();
		// passing data baju yang didapat ke view view.blade.php
		return view('viewbaju',['baju' => $baju]);

	}
}
