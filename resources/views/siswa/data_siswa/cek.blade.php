@extends('layouts.master')
@section('headtitle', 'Tanggungan Dan SPP Siswa')
@section('page', 'Siswa')
@section('subtitle', 'Tanggungan Dan SPP Siswa')
@section('content')

<div class="row">
    <div class="col s12">
        <div class="card">
            <div class="card-content">
                <h5 class="card-title">Filter</h5>
                <form action="/spp/kelas" method="post">
                    @csrf
                    <div class="col-12">
                        <div class="row">
                            <div class="col s4">
                                <div class="form-group">
                                    <label>kelas</label>
                                    <select required="" class="form-control" name="tingkatan_kelas">
                                        <option value="">Pilih disini</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col s4">
                                <div class="form-group">
                                    <label>Jurusan</label>
                                    <select required="" class="form-control" name="jurusan">
                                        <option value="">Pilih disini</option>
                                        <option value="1">MIPA</option>
                                        <option value="2">IPS</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col s2">
                                <div class="form-group">
                                    <label>No</label>
                                    <select required="" class="form-control" name="nomor_kelas">
                                        <option value="">Pilih disini</option>
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

<div class="row">
    <div class="col s12">
        <div class="card">
            <div class="card-content">
                 <table id="example" class=" table table-striped table-bordered display">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nis</th>
                            <th>Nama</th>
                            <th>kelas</th>
                            <th>SPP</th>
                            <th>Total Bayar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($getdatasiswa as $ds)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $ds->nis }}</td>
                                <td>{{ $ds->nama }}</td>
                                <td>{{ $ds->tingkatan_kelas }} {{ $ds->nama_jurusan }}
                                    {{ $ds->nomor_kelas }}</td>
                                <td> {{ $ds->totalspp }} bulan</td>
                                <td style="text-align:right">
                                    <p class="font-bold">@currency($ds->jumlah),-</p>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                    <tr>
                        <td colspan="5">Total</td>
                        <td colspan="2">
                            <p class="font-bold" style="text-align:right;">@currency($total),-</p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
