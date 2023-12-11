@extends('master')

@section('title','Data Mahasiswa')


@section('konten')
    <h3>Data Mahasiswa</h3>

    <br/>
    <br/>

    <table class="table table-striped table-hover rounded">
        <tr class="bg-primary text-white text-center row">
            <th class="col-2">NRP</th>
            <th class="col-2">Nama</th>
            <th class="col-2">Jurusan </th>
            <th class="col-3">IPK</th>
            <th class="col-3">Opsi</th>
        </tr>
        @foreach ($mahasiswa as $m)
            <tr class="row">
                <td class="col-2 text-center">{{ $m->NRP }}</td>
                <td class="col-2 text-center">{{ $m->Nama }}</td>
                <td class="col-2 text-center">{{ $m->Jurusan }}</td>
                <td class="col-3 text-center">{{ $m->IPK }}</td>
                <td class="col-3 text-center">
                    <a href="/mahasiswa/view/{{ $m->NRP }}" class="btn btn-success">View</a>
                    <a href="/mahasiswa/edit/{{ $m->NRP }}" class="btn btn-warning">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
