@extends('master')

@section('title', 'Edit Data Baju')


@section('konten')

    <h3>Edit Data Baju</h3>

    <a href="/baju"> Kembali</a>

    <br />
    <br />
    <div>
        @foreach ($baju as $b)
        <form action="/baju/update" method="post" class="form-horizontal col-5">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$b -> kodebaju}}">
            <div class="form-group row">
                <label for="merkbaju" class="col">merk baju</label>
                <input type="text" class="form-control col" placeholder="Masukkan merk baju" name="merkbaju" value="{{$b -> merkbaju}}">
            </div>
            <div class="form-group row">
                <label for="stockbaju" class="col">stock baju</label>
                <input type="number" class="form-control col" placeholder="Masukkan stock" name="stockbaju" value="{{$b -> stockbaju}}">
            </div>

            <input type="submit" class="btn btn-primary" value="Simpan Data">

        </form>
        @endforeach
    </div>
@endsection
