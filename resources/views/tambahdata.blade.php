@extends('master')

@section('title','Nilai Kuliah')

@section('konten')

<h3>Tambah Data Nilai Kuliah</h3>
<br>
<br>
<form action="/nilaikuliah/store" method="post" class="form-horizontal col-5">
    {{ csrf_field() }}
    <div class="form-group row">
        <label for="NRP" class="col">NRP</label>
        <input type="text" class="form-control col" placeholder="Masukkan NRP" name="NRP">
    </div>

    <div class="form-group row">
        <label for="NilaiAngka" class="col">Nilai Angka</label>
        <input type="number" class="form-control col" placeholder="Masukkan Nilai Angka" name="NilaiAngka">
    </div>
    <div class="form-group row">
        <label for="SKS" class="col">SKS</label>
        <input type="number" class="form-control col" placeholder="Masukkan SKS" name="SKS">
    </div>

    <input type="submit" class="btn btn-primary" value="Simpan Data">

</form>



@endsection
