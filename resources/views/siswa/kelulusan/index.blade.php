@extends('layouts.master')
@section('headtitle', 'Kelulusan Siswa')
@section('page', 'Siswa')
@section('subtitle', 'Kelulusan Siswa')

@section('content')

    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <h5 class="card-title">Filter</h5>
                    <form action="/kelulusan/siswa" method="post">
                        @csrf
                        <div class="col-12">
                            <div class="row">
                                <div class="col s4">
                                    <div class="form-group">
                                        <label>Kelas</label>
                                        <input type="text" name="tingkatan_kelas" value="12" class="form-control"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col s4">
                                    <div class="form-group">
                                        <label>Jurusan</label>
                                        <select class="form-control" name="jurusan">
                                            <option value="0">Pilih disini</option>
                                            <option value="1">MIPA</option>
                                            <option value="2">IPS</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col s2">
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
                                <div class="col s2 m-t-30">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-sm blue col-12" value="Filter">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @if($istable == true)

        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                        <h5 class="card-title">Lulus</h5>
                        <form action="/kelulusan/act" method="post">
                            @csrf
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <label>
                                                        <input type="checkbox" onClick="toggle(this)" />
                                                        <span>Pilih Semua</span>
                                                    </label>
                                                </th>
                                                <th>No</th>
                                                <th>Nis</th>
                                                <th>Nama</th>
                                                <th>kelas</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($datasiswa as $ds)
                                                <tr>
                                                    <th>
                                                        <label>
                                                            <input type="hidden" name="nomor[]"
                                                                value="{{ $ds->nomor_kelas }}">
                                                            <input type="checkbox" id="{{ $ds->id_siswa }}"
                                                                name="id_siswa[]" value="{{ $ds->id_siswa }}">
                                                            <span> </span>
                                                        </label>
                                                    </th>
                                                    <th>{{ $loop->iteration }}</th>
                                                    <th>{{ $ds->nis }}</th>
                                                    <th>{{ $ds->nama }}</th>
                                                    <th>{{ $ds->tingkatan_kelas }} {{ $ds->nama_jurusan }}
                                                        {{ $ds->nomor_kelas }}</th>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="box-footer with-border">
                                <div class="pull-right">
                                    <input type="submit" class="btn blue" value="Lulus"
                                        onclick="return confirm('Apakah anda yakin?')">
                                </div><br><br>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script language="JavaScript">
            function toggle(source) {
                checkboxes = document.getElementsByName('id_siswa[]');
                for (var i = 0, n = checkboxes.length; i < n; i++) {
                    checkboxes[i].checked = source.checked;
                }
            }

            function togle(source) {
                checkboxes = document.getElementsByName('idsiswa[]');
                for (var i = 0, n = checkboxes.length; i < n; i++) {
                    checkboxes[i].checked = source.checked;
                }
            }
        </script>
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                        <h5 class="card-title">Tidak Lulus</h5>
                        <form action="/kelulusan/none" method="post">
                            @csrf
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <label>
                                                        <label>
                                                            <input type="checkbox" onClick="togle(this)" />
                                                            <span>Pilih Semua</span>
                                                        </label>
                                                    </label>
                                                </th>
                                                <th>No</th>
                                                <th>Nis</th>
                                                <th>Nama</th>
                                                <th>kelas</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($datasiswa as $ds)
                                                <tr>
                                                    <th>
                                                        <label>
                                                            <input type="checkbox" onClick="togle(this)" />
                                                            <span></span>
                                                        </label>
                                                    </th>
                                                    <th>{{ $loop->iteration }}</th>
                                                    <th>{{ $ds->nis }}</th>
                                                    <th>{{ $ds->nama }}</th>
                                                    <th>{{ $ds->tingkatan_kelas }} {{ $ds->nama_jurusan }}
                                                        {{ $ds->nomor_kelas }}</th>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="box-footer with-border">
                                <div class="pull-right">
                                    <input type="submit" class="btn red" value="Tidak Lulus"
                                        onclick="return confirm('Apakah anda yakin?')">
                                </div><br><br>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    @endif

@endsection
