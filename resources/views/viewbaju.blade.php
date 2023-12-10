@extends('master')

@section('title', 'Lihat Data Baju')


@section('konten')


    <a href="/baju"> Kembali</a>

    <br />
    <br />
    <div>
        <div class="container border border-grey" style="height: 72.5vh; border-radius:1vh;">
            <div class="row h-75">
                    <div class="col bg-dark" style="height: 72.5vh;border-radius:1vh;">
                        <h3 class="text-white ml-3 mt-5">Data Baju</h3>
                        <div class="container h-75 w-75 bg-light mt-3" style="border-radius:1vh;"></div>
                    </div>
                    <div class="col pl-5">
                        <h3 class="mt-5">Rincian</h3>
                        <table class="w-50 mt-5">
                            <tr>
                                <td class="">Kode Baju:</td>
                                <td class="form-label">{{ $baju->kodebaju }}</td>
                            </tr>
                            <tr>
                                <td class="">Merk Baju:</td>
                                <td class="">{{ $baju->merkbaju }}</td>
                            </tr>
                            <tr>
                                <td class="">Stock Baju:</td>
                                <td class="">{{ $baju->stockbaju }}</td>
                            </tr>
                            <tr>
                                <td class="">Ketersediaan:</td>
                                <td class="">
                                    @if ($baju->tersedia == 'Y')tersedia
                                    @else Tidak tersedia
                                    @endif</td>

                            </tr>
                        </table>
                        <div class="d-flex justify-content-end mr-5 mt-5 ">
                            <a href="/baju" class="btn btn-warning text-light">OKE</a>

                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
