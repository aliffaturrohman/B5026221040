@extends('master')

@section('title', 'Tambah Data Baju')


@section('konten')

    <h3>TambahData Baju</h3>

    <a href="/pegawai"> Kembali</a>

    <br />
    <br />

    <form action="/baju/store" method="post" class="form-horizontal col-5">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="merkbaju" class="col">merk baju</label>
            <input type="text" class="form-control col" placeholder="Masukkan merk baju" name="merkbaju">
        </div>
        <div class="form-group row">
            <label for="stockbaju" class="col">stock baju</label>
            <input type="number" class="form-control col" placeholder="Masukkan stock" name="stockbaju">
        </div>

        <input type="submit" class="btn btn-primary" value="Simpan Data">

    </form>


@endsection
