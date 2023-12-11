@extends('master')

@section('title', 'Edit Data Mahasiswa')


@section('konten')

    <h3>Edit Data Mahasiswa</h3>

    <a href="/mahasiswa"> Kembali</a>

    <br />
    <br />
    <div>
        @foreach ($mahasiswa as $m)
            <form action="/mahasiswa/update" method="post" class="form-horizontal col-5">
                {{ csrf_field() }}
                    <input type="text" hidden class="col form-control" required="required" name="NRP" value="{{ $m->NRP}}"> <br />
                <div class="form-group row">
                    <label class="col">Nama</label>
                    <input type="text" class="col form-control" required="required" name="Nama" value="{{ $m->Nama }}">
                </div>
                <div class="form-group row">
                    <label class="col">Jurusan</label>
                    <input type="text" class="col form-control" required="required" name="Jurusan" value="{{ $m->Jurusan}}"> <br />

                </div>
                <div class="form-group row">
                    <label class="col">IPK</label>
                    <input class="col form-control" type="number" step="0.01" required="required" name="IPK" value="{{ $m->IPK}}">
                </div>
                <input type="submit" class="btn btn-primary" value="Simpan Data">

            </form>
        @endforeach
    </div>
@endsection
