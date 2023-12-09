@extends('master')

@section('title','Data Baju')


@section('konten')
    <h3>Data Pegawai</h3>


    <a href="/baju/tambah" class="btn btn-primary"> + Tambah Data Baju</a>

    <br/>
    <p>Cari Data Baju Berdasarkan Nama Merk:</p>
	<form action="/baju/cari" method="GET">
		<input class="form-control fluid" type="text" name="cari" placeholder="Cari Merk Baju" value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input class="btn btn-primary " type="submit" value="CARI">
	</form>
    <br/>

    <table class="table table-striped table-hover rounded">
        <tr class="bg-primary text-white text-center row">
            <th class="col-2">Kode Baju</th>
            <th class="col-2">Merk Baju</th>
            <th class="col-2">Stock Baju</th>
            <th class="col-3">Ketersediaan</th>
            <th class="col-3">Opsi</th>
        </tr>
        @foreach ($baju as $b)
            <tr class="row">
                <td class="col-2 text-center">{{ $b->kodebaju }}</td>
                <td class="col-2 text-center">{{ $b->merkbaju }}</td>
                <td class="col-2 text-center">{{ $b->stockbaju }}</td>
                <td class="col-3 text-center">
                     @if ($b->tersedia == 'Y') Tersedia
                     @else Tidak Tersedia
                     @endif
                </td>
                <td class="col-3 text-center">
                    <a href="/baju/view/{{ $b->kodebaju }}" class="btn btn-success">View</a>
                    <a href="/baju/edit/{{ $b->kodebaju }}" class="btn btn-warning">Edit</a>
                    <a href="/baju/hapus/{{ $b->kodebaju }} " class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{$baju->links()}}
@endsection
