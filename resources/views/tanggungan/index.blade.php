@extends('layouts.master')
@section ('headtitle','Data Tanggungan')
@section ('page','SPP')
@section ('subtitle','Data Tanggungan')
@section('content')

<div class="row">
    <div class="col s12">
        <div class="card">
            <div class="card-content">
                <h5 class="card-title">Tambah Tanggungan</h5>
                <form action="/tanggungan" method="post">
                    @csrf
                    <div class="row">


                        <div class="col s6 mt-3">
                            <label class="mt-3" for="">Nama Tanggungan</label>
                            <input type="text" class="form-control" placeholder="Nama Tanggungan"
                                name="nama_jenis_tanggungan" required="">
                        </div>
                        <div class="col s6 mt-3">
                            <label class="mt-3" for="">Jangka Waktu Pembayaran</label>
                            <select name="jangka_waktu" class="form-control" id="">
                                <option value="1">Dicicil selama 1 tahun di masing-masing tingkat </option>
                                <option value="2">Dicicil selama 3 tahun</option>
                                <option value="3">Dicicil per bulan hingga 3 semester</option>
                            </select>
                        </div>
                        <div class="col s4 mt-3">
                            <label class="mt-3" for="">Nominal Kelas 10</label>
                            <input type="number" class="form-control" placeholder="0 kan jika tidak ada nilai" value="0"
                                name="nominal_kls_10" required="">
                        </div>
                        <div class="col s4 mt-3">
                            <label class="mt-3" for="">Nominal Kelas 11</label>
                            <input type="number" class="form-control" placeholder="0 kan jika tidak ada nilai" value="0"
                                name="nominal_kls_11" required="">
                        </div>
                        <div class="col s4 mt-3">
                            <label class="mt-3" for="">Nominal Kelas 12</label>
                            <input type="number" class="form-control" placeholder="0 kan jika tidak ada nilai" value="0"
                                name="nominal_kls_12" required="">
                        </div>
                        <div class="col s6 mt-3">
                            <label class="mt-3" for="">Awal Aktif Tanggungan</label>
                            <input type="date" class="form-control" placeholder="Awal Aktif Tanggungan"
                                name="awal_aktif_tanggungan" required="">
                        </div>
                        <div class="col s6 mt-3">
                            <label class="mt-3" for="">Akhir Aktif Tanggungan</label>
                            <input type="date" class="form-control" placeholder="Akhir Aktif Tanggungan"
                                name="akhir_aktif_tanggungan" required="">
                        </div>
                        <div class="col s12"><br>
                            <input type="submit" class="btn btn-primary mt-3 col-sm-12" value="Tambah">
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
                 <table id="example" class=" table table-striped table-bordered display">
                    <thead>
                        <tr>
                            <th>Nama Tanggungan</th>
                            <th>Nominal Kelas 10</th>
                            <th>Nominal Kelas 11</th>
                            <th>Nominal Kelas 12</th>
                            <th>Awal Aktif</th>
                            <th>Akhir Aktif</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($getdatatanggungan as $data)
                            <tr>
                                <td>{{ $data->nama_jenis_tanggungan }}</td>
                                <td>
                                    <p class="pull-right font-bold">Rp. {{ $data->nominal_kls_10 }},-</p>
                                </td>
                                <td>
                                    <p class="pull-right font-bold">Rp. {{ $data->nominal_kls_11 }},-</p>
                                </td>
                                <td>
                                    <p class="pull-right font-bold">Rp. {{ $data->nominal_kls_12 }},-</p>
                                </td>
                                <td>
                                    <p>{{ date('l, d F Y', strtotime($data->awal_aktif_tanggungan)) }}</p>
                                </td>
                                <td>
                                    <p>{{ date('l, d F Y', strtotime($data->akhir_aktif_tanggungan)) }}</p>
                                </td>
                                <td>{{ $data->keterangan }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
