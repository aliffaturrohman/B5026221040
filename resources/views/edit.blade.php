@extends('master')

@section('title', 'Edit Data Pegawai')


@section('konten')

    <h3>Edit Data Pegawai</h3>

    <a href="/pegawai"> Kembali</a>

    <br />
    <br />
    <div>
        @foreach ($pegawai as $p)
            <form action="/pegawai/update" method="post" class="form-horizontal col-5">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br />
                <div class="form-group row">
                    <label class="col">Nama</label>
                    <input type="text" class="col form-control" required="required" name="nama" value="{{ $p->pegawai_nama }}">
                </div>
                <div class="form-group row">
                    <label class="col">Jabatan</label>
                    <input type="text" class="col form-control" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br />
                </div>
                <div class="form-group row">
                    <label class="col">Umur</label>
                    <input type="number" class="col form-control" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br />

                </div>
                <div class="form-group row">
                    <label class="col">Alamat</label>
                    <textarea class="col form-control" required="required" rows="3" name="alamat">{{ $p->pegawai_alamat }}</textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="Simpan Data">

            </form>
        @endforeach
    </div>
@endsection
