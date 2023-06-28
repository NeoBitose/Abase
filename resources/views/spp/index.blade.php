@extends('layouts.master')
@section('headtitle','Data PSM')
@section('page','SPP')
@section('subtitle','Data PSM')
@section('content')

<div class="row">
    <div class="col s12">
        <div class="card">
            <div class="card-content">
                <h5 class="card-title">Tambah PSM</h5><br>
                <form action="/spp" method="post">
                    @csrf
                    <div class="row">
                        <div class="col s6 mt-3">
                            <label class="mt-3" for="">Nominal</label>
                            <input type="number" class="form-control" placeholder="Nominal" name="nominal_spp"
                                required="">
                        </div>
                        <div class="col s6 mt-3">
                            <label class="mt-3" for="">Tahun Masuk Siswa</label>
                            <input type="number" class="form-control" placeholder="Tahun" name="tahun" required="">
                        </div>
                        <div class="col s12"><br>
                            <input type="submit" class="btn blue mt-3 col-sm-12" value="Tambah">
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
                <h5 class="card-title">Data PSM</h5><br>
                <table id="example" class=" table table-striped table-bordered display">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama PSM</th>
                            <th>Nominal</th>
                            <th>Tahun</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($getdataspp as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->nama_spp }}</td>
                                <td class="font-bold" style="text-align:right">@currency($data->nominal_spp),-</td>
                                <td>{{ $data->tahun }}</td>
                                <!-- <td>aktif</td>
                                <td><a href="" class="btn red mt-3 col-sm-12">Nonaktifkan</a></td> -->
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
