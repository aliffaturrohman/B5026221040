@extends('master')

@section('title','Data Pegawai')


@section('konten')
    <h3>Data Pegawai</h3>


    <a href="/pegawai/tambah" class="btn btn-primary"> + Tambah Pegawai Baru</a>

    <br/>
    <p>Cari Data Pegawai Berdasarkan Nama:</p>
	<form action="/pegawai/cari" method="GET">
		<input class="form-control fluid" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input class="btn btn-primary " type="submit" value="CARI">
	</form>
    <br/>

    <table class="table table-striped table-hover rounded">
        <tr class="bg-primary text-white row">
            <th class="col-2">Nama</th>
            <th class="col-2">Jabatan</th>
            <th class="col-1">Umur</th>
            <th class="col-4">Alamat</th>
            <th class="col-3">Opsi</th>
        </tr>
        @foreach ($pegawai as $p)
            <tr class="row">
                <td class="col-2">{{ $p->pegawai_nama }}</td>
                <td class="col-2">{{ $p->pegawai_jabatan }}</td>
                <td class="col-1">{{ $p->pegawai_umur }}</td>
                <td class="col-4">{{ $p->pegawai_alamat }}</td>
                <td class="col-3">
                    <a href="/pegawai/view/{{ $p->pegawai_id }}" class="btn btn-success">View</a>
                    <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/pegawai/hapus/{{ $p->pegawai_id }} " class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{$pegawai->links()}}
@endsection
