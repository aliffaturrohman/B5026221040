@extends('master')

@section('title', 'Data Mahasiswa')


@section('konten')

<a href="/mahasiswa"> Kembali</a>
<br>
<br>

<div class="card bg-primary shadow" style="border-radius: 3vh; height:75vh;">
    <div class="row">
        <div class="col ">
            <div class=" px-5 pb-5 flex bg-white border shadow-sm" style="border-radius: 3vh; height:74.75vh;">
                <center>
                    <div class="border-dark mt-5 mb-3 rounded-circle bg-secondary d-flex align-items-center justify-content-center" style="height: 20vh; width:20vh; border: solid 0.5vh">
                        <i class="fa-solid fa-user fa-5x text-light"></i>
                    </div>
                    <div class="w-75 mb-2"><h3>{{ $mahasiswa->Nama }}</h3></div>
                    <p>{{$mahasiswa->NRP}}</p>
                </center>

            </div>

        </div>
        <div class="col p-5 text-white form-horizontal">
            <div class="row">
                <h1>Data Mahasiswa</h1>
            </div>
            <br>
            <div class="row mb-3">
                <div class="col-3 font-weight-bold">Nama</div>
                <div class="col-7 form-label border rounded bg-white text-dark" type="text">{{ $mahasiswa->Nama }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-3 font-weight-bold">NRP</div>
                <div class="col-7 form-label border rounded bg-white text-dark" type="text">{{ $mahasiswa->NRP }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-3 font-weight-bold">Jurusan</div>
                <div class="col-7 form-label border rounded bg-white text-dark" type="text">{{ $mahasiswa->Jurusan }}</div>
            </div>
            <div class="row">
                <div class="col-3 font-weight-bold">IPK</div>
                <div class="col-7 form-label border rounded bg-white text-dark" rows="3" style="resize: none;">{{ $mahasiswa->IPK }} / 4.0</div>
            </div>
            <div class="row">
                <div class="col-3"></div>
                <div class="col-7 text-right">
                    <a href="/mahasiswa" class=" mt-5 btn btn-warning">Oke</a>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
