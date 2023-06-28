@extends('layouts.master')
@section('headtitle', 'Data Siswa')
@section('page', 'Siswa')
@section('subtitle', 'Data Siswa')
@section('content')

<section class="content">

    <div class="row">
        <div class="col s12">
            @if(session('pesan'))
                <div class="alert alert-success">
                    {{ session('pesan') }}
                </div>
            @endif
            <div class="card">
                <div class="card-content">
                    <form action="/import" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col s10">
                                <h3 class="box-title">@yield('headtitle') Aktif</h3>

                            </div>

                            <div class="col s2">
                                <a href="/siswa/create" class="btn blue pull-right" > Tambah Siswa </a>

                            </div>
                        </div>
                    </form><br>

                    <table id="example" class="table table-striped table-bordered display" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NISN</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($getdatasiswa as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->nisn }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->tingkatan_kelas }} {{ $data->nama_jurusan }}
                                        {{ $data->nomor_kelas }}</td>
                                    <td>{{ $data->tipe }}</td>
                                    <td>
                                        @if($data->tipe_siswa ==  1)

                                            <a href="/nonaktif/{{ $data->nisn }}"
                                                class="btn materialize-red btn-xs mb-5"
                                                onclick="return confirm('Apakah anda yakin?')">Nonaktifkan</a>

                                        @endif

                                        @if($data->tipe_siswa ==  3)

                                            <a href="/aktif/{{ $data->nisn }}" class="btn green btn-xs mb-5"
                                                onclick="return confirm('Apakah anda yakin?')">Aktifkan</a>

                                        @endif

                                        | <a href="/siswa/{{ $data->nisn }}" class="btn blue btn-xs mb-5"><i
                                                class="fa fa-bullet"></i> Detail</a>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>



                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <form action="/import" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col 8">
                                <h3 class="box-title">@yield('headtitle') Non Aktif</h3>
                            </div>
                            <!-- <div class="col-4">
										<input type="file" class="custom-file-input" name="file" id="validatedCustomFile" required>
   										 <label class="custom-file-label mt-1" style="background:transparent !important; color:white !important" for="validatedCustomFile">Choose file...</label>
									</div>
									<div class="col-2">
										<input type="submit" class="btn btn-secondary pull-right">
									</div> -->
                        </div>
                    </form><br>

                    <table id="example10" class=" table table-striped table-bordered display">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NISN</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($getdatasiswanon as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->nisn }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->tingkatan_kelas }} {{ $data->nama_jurusan }}
                                        {{ $data->nomor_kelas }}</td>
                                    <td>{{ $data->tipe }}</td>
                                    <td>
                                        @if($data->tipe_siswa ==  1)

                                            <a href="/nonaktif/{{ $data->nisn }}"
                                                class="btn red btn-xs mb-5"
                                                onclick="return confirm('Apakah anda yakin?')">Nonaktifkan</a>

                                        @endif

                                        @if($data->tipe_siswa ==  3)

                                            <a href="/aktif/{{ $data->nisn }}" class="btn green btn-xs mb-5"
                                                onclick="return confirm('Apakah anda yakin?')">Aktifkan</a>

                                        @endif

                                        | <a href="/siswa/{{ $data->nisn }}" class="btn blue btn-xs mb-5"><i
                                                class="fa fa-bullet"></i> Detail</a>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @endsection
