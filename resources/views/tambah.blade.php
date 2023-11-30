@extends('master')

@section('title', 'Data Pegawai')


@section('konten')

    <h3>Data Pegawai</h3>

    <a href="/pegawai"> Kembali</a>

    <br />
    <br />

    <form action="/pegawai/store" method="post" class="form-horizontal col-5">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="nama" class="col">Nama</label>
            <input type="text" class="form-control col" placeholder="Masukkan Nama" name="nama">
        </div>
        <div class="form-group row">
            <label for="jabatan" class="col">Jabatan</label>
            <input type="text" class="form-control col" placeholder="Masukkan Jabatan" name="jabatan">
        </div>
        <div class="form-group row">
            <label for="umur" class="col">Umur</label>
            <input type="number" class="form-control col" placeholder="Umur" name="umur">
        </div>
        <div class="form-group row">
            <label for="alamat" class="col">Alamat</label>
            <textarea class="form-control col" name="alamat" rows="3"></textarea>
        </div>

        <input type="submit" class="btn btn-primary" value="Simpan Data">

    </form>


@endsection
