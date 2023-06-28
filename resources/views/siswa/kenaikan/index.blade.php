@extends('layouts.master')
@section('headtitle', 'Kenaikan Kelas')
@section('page', 'Siswa')
@section('subtitle', 'Kenaikan Kelas')
@section('content')

    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <h5 class="card-title">Filter</h5>
                    <form action="/kenaikan/kelas" method="post">
                        @csrf
                        <div class="col-12">
                            <div class="row">
                                <div class="col s4">
                                    <div class="form-group">
                                        <label>kelas</label>
                                        <select class="form-control" name="tingkatan_kelas">
                                            <option value="0">Pilih disini</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                        </select>
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
                    <h5 class="card-title">Naik Kelas</h5>
                    <form action="/kenaikan/act" method="post">
                        @csrf
                        <table class="">
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
                                        <td>
                                            <label>
                                                <input type="checkbox" onClick="toggle(this)" />
                                                <span>Pilih Semua</span>
                                            </label>
                                        </td>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $ds->nis }}</td>
                                        <td>{{ $ds->nama }}</td>
                                        <td>{{ $ds->tingkatan_kelas }} {{ $ds->nama_jurusan }}
                                            {{ $ds->nomor_kelas }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table><br>
                        <div class="box-footer with-border">
                            <div class="pull-right">
                                <input type="submit" class="btn blue" value="Naik Kelas"
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
        for (var i = 0, n = checkboxes.length; i < n; i++) { checkboxes[i].checked=source.checked; } }
    </script>
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <h5 class="card-title">Tinggal Kelas</h5>
                    <form action="/kenaikan/none" method="post">
                        @csrf
                        <table class="">
                            <thead>
                                <tr>
                                    <th>
                                        <label>
                                            <input type="checkbox" onClick="togle(this)" />
                                            <span></span>
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
                                        <td>
                                            <label>
                                                <input type="checkbox" id="tn{{ $ds->id_siswa }}" name="idsiswa[]"
                                                    value="{{ $ds->id_siswa }}">
                                                <span> </span>
                                            </label>
                                        </td>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $ds->nis }}</td>
                                        <td>{{ $ds->nama }}</td>
                                        <td>{{ $ds->tingkatan_kelas }} {{ $ds->nama_jurusan }}
                                            {{ $ds->nomor_kelas }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table><br>
                        <div class="box-footer with-border">
                            <div class="pull-right">
                                <input type="submit" class="btn red" value=" Tidak Naik Kelas"
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
