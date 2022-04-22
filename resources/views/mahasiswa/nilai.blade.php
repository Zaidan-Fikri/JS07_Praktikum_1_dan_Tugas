{{-- @extends('mahasiswa.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
        </div>
        <div class="pull-left mt-2">
            <h2 class="text-center">KARTU HASIL STUDI (KHS)</h2>
        </div>
    </div>
</div> --}}
@extends('mahasiswa.layout')

@section('content')
<div class="container">
    <div class="justify-content-center align-items-center">
        <div class="d-flex justify-content-center mt-1">
            <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
        </div>
        <div class="d-flex justify-content-center my-5">
            <h1 class="text-center">KARTU HASIL STUDI (KHS)</h1>
        </div>
        <div class="row mb-2">
            <ul class="" style="list-style-type: none;">
                <li class=""><b>Nama: </b>{{$data->mahasiswa->nama}}</li>
                <li class=""><b>Nim: </b>{{$data->mahasiswa->nim}}</li>
                <li class=""><b>Kelas: </b>{{$data->mahasiswa->kelas->nama_kelas}}</li>
            </ul>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Mata Kuliah</th>
                    <th scope="col">SKS</th>
                    <th scope="col">Semester</th>
                    <th scope="col">Nilai</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $da)
                <tr scope="row">
                    <td>
                        {{$da->matakuliah->nama_matkul}}
                    </td>
                    <td>
                        {{$da->matakuliah->sks}}
                    </td>
                    <td>
                        {{$da->matakuliah->semester}}
                    </td>
                    <td>
                        {{$da->nilai}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection