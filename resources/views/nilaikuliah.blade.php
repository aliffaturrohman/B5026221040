@extends('master')

@section('title', 'Nilai Kuliah')


@section('konten')
    <h3>Nilai Kuliah Mahasiswa</h3>
    <a href="/nilaikuliah/tambah" class="btn btn-primary"> + Tambah Data Baru</a>
    <br>
    <br>

    <table class="table table-striped table-hover rounded">
        <tr class="bg-primary text-white text-center row">
            <th class="col">ID</th>
            <th class="col">NRP</th>
            <th class="col">Nilai Angka</th>
            <th class="col">SKS</th>
            <th class="col">Nilai Huruf</th>
            <th class="col">Bobot</th>
        </tr>
        @foreach ($nilaikuliah as $nilai)
            <tr class="row text-center">
                <td class="col">{{ $nilai->ID }}</td>
                <td class="col">{{ $nilai->NRP }}</td>
                <td class="col">{{ $nilai->NilaiAngka }}</td>
                <td class="col">{{ $nilai->SKS }}</td>

                @if ($nilai->NilaiAngka <= 40)
                    <td class="col"> D </td>
                @elseif ($nilai->NilaiAngka > 40 && $nilai->NilaiAngka <= 60)
                    <td class="col"> C </td>
                @elseif ($nilai->NilaiAngka > 60 && $nilai->NilaiAngka <= 80)
                    <td class="col"> B </td>
                @else
                    <td class="col"> A </td>
                @endif

                <td class="col"> {{$nilai->NilaiAngka * $nilai->SKS}} </td>
            </tr>
        @endforeach
    </table>
@endsection
