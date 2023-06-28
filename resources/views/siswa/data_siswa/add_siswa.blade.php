@extends('layouts.master')
@section('headtitle','Tambah Siswa')
@section('page','Siswa')
@section('subtitle','Tambah Siswa')
@section('content')

<section class="content">
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <h5 class="card-title">Download Template</h5>
                    <form action="/template_excel" method="post">
                        @csrf
                        <div class="col-12">
                            <div class="row">
                                <div class="col s4">
                                    <div class="form-group">
                                        <label>kelas</label>
                                        <input type="text" class="form-control" name="tingkatan_kelas" value="10" readonly>                                        
                                    </div>
                                </div>
                                <div class="col s4">
                                    <div class="form-group">
                                        <label>Jurusan</label>
                                        <select class="form-control" name="jurusan">
                                            <option value="0">Pilih disini</option>
                                            <option value="MIPA">MIPA</option>
                                            <option value="IPS">IPS</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col s3">
                                    <div class="form-group">
                                        <label>No</label>
                                        <select class="form-control" name="nomor_kelas">
                                            <option value="0">Pilih disini</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col s1 m-t-30">
                                    <div class="form-group" style="text-align: right;">
                                        <input type="submit" class="btn btn-sm blue col-12" value="Filter">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form><br>
                    @if( $import == true )
                        <div class="" style="text-align: right;">
                            <a href="{{ asset('templatex') }}/{{ $tk }}_{{ $jr }}_{{ $nk }}.xlsx"
                                download="{{$tk}}_{{$jr}}_{{$nk}}.xlsx" class="btn green">Download
                                Template</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <div class="row">
                        <div class="col s10">
                            <h5 class="card-title">Import Excel (Data Siswa)</h5>
                        </div>
                    </div>
                    <form class="m-t-40" method="post" action="/import" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col s10">
                                <div class="file-field input-field">
                                    <div class="btn blue darken-1">
                                        <span>File</span>
                                        <input type="file" required="" name="file" multiple>
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text"
                                            placeholder="Pilih File Untuk Di Upload">

                                    </div>
                                </div>
                            </div>
                            <div class="col s2" style="text-align: right;">
                                <input type="submit" class="col-sm-12 btn blue m-t-25" value="Kirim">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <h5 class="card-title">Tambah Data</h5>
                    <form action="/siswa" method="post">
                        @csrf
                        <div class="row">
                            <div class="col s6">
                                <br>
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="nama" placeholder="Nama" required=""><br>

                                <label for="">NISN</label>
                                <input type="number" class="form-control" name="nisn" required=""
                                    placeholder="NISN"><br>

                                <label for="">Kelas</label>
                                <select name="tingkatan" class="form-control" id="">
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                                <br>

                                <label for="">Jurusan</label>
                                <select name="jurusan" class="form-control" required="" id="">
                                    @foreach($getdatasiswa as $data):
                                        <option value="{{ $data->id_jurusan }}">{{ $data->nama_jurusan }}</option>
                                    @endforeach

                                </select>
                                <br>

                                <label for="">Tanggal Lahir</label>
                                <input type="date" class="form-control" required="" name="tanggal_lahir"
                                    placeholder="Tanggal Lahir"><br>
                            </div>

                            <div class="col s6">
                                <br>
                                <label for="">NIS</label>
                                <input type="number" class="form-control" required="" name="nis" placeholder="NIS"><br>

                                <label for="">No Hp</label>
                                <input type="number" class="form-control" required="" name="nohp"
                                    placeholder="No Hp"><br>

                                <label for="">Jenis Kelamin</label>
                                <select name="jk" class="form-control" id="">
                                    <option value="L">L</option>
                                    <option value="P">P</option>
                                </select><br>

                                <label for="">Nomor Kelas</label>
                                <select name="nomor" required="" class="form-control" id="">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select><br>

                                <label for="">Tahun Masuk</label>
                                <input type="date" class="form-control" required="" name="tahun_masuk"
                                    placeholder="Tahun Masuk">
                            </div>

                            <div class="col s4">
                                <br>
                                <input type="submit" class="col-s12 btn blue" value="Kirim">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
