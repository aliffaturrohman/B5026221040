<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MahasiswaController extends Controller
{
	public function mahasiswa()
	{
    	// mengambil data dari table nilaikuliah
		// $nilaikuliah = DB::table('nilaikuliah')->get();
        $mahasiswa = DB::table('mahasiswa')
                    ->get();

    	// mengirim data nilaikuliah ke view index
		return view('mahasiswa',['mahasiswa' => $mahasiswa]);

	}

    public function editmahasiswa($NRP)
	{
		// mengambil data mahasiswa berdasarkan id yang dipilih
		$mahasiswa = DB::table('mahasiswa')->where('NRP',$NRP)->get();
		// passing data mahasiswa yang didapat ke view edit.blade.php
		return view('editmahasiswa',['mahasiswa' => $mahasiswa]);

	}

	public function updatemahasiswa(Request $request)
    {
    // update data mahasiswa
    DB::table('mahasiswa')->where('NRP',$request->NRP)->update([
        'NRP' => $request->NRP,
        'Nama' => $request->Nama,
        'Jurusan' => $request->Jurusan,
        'IPK' => $request->IPK,
    ]);
    // alihkan halaman ke halaman mahasiswa
    return redirect('/mahasiswa');
    }

    public function viewmahasiswa($NRP)
	{
		// mengambil data mahasiswa berdasarkan id yang dipilih
		$mahasiswa = DB::table('mahasiswa')->where('NRP',$NRP)->first();
		// passing data mahasiswa yang didapat ke view view.blade.php
		return view('viewmahasiswa',['mahasiswa' => $mahasiswa]);

	}

}
