@extends('layouts.master')
@section('headtitle','Riwayat Pembayaran PSM')
@section('page','Siswa')
@section('subtitle','Riwayat Pembayaran PSM')
@section('content')

@if(auth()->user()->level == 1)
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <form action="/filter/tanggal/spp" method="get">
                        <div class="row">
                            <div class="col s5">
                                <label for="">Dari</label>
                                <input type="date" style="margin-top:3px" name="dari" class="form-control">
                            </div>
                            <div class="col s5">
                                <label for="">Sampai</label>
                                <input type="date" style="margin-top:3px" name="sampai" class="form-control">
                            </div>
                            <div class="col s2 m-t-10">
                                <input type="submit" class="btn blue" value="filter">
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
                    <h5 class="card-title">Riwayat Pembayaran PSM</h5><br>
                    <table id="example" class=" table table-striped table-bordered display">
                        <thead>
                            <tr>
                                <th>Nama Siswa</th>
                                <th>Kelas</th>
                                <th>Nama Pembayaran</th>
                                <th>Penerima</th>
                                <th>Waktu Pembayaran</th>
                                <th>Nominal Pembayaran</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($getdatapembayaran as $data)
                                <tr>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->tingkatan_kelas }} {{ $data->nama_jurusan }}
                                        {{ $data->nomor_kelas }}</td>
                                    <td>@if(($data->bulan)==1)
                                        PSM Bulan Juli
                                        @endif

                                    @if(($data->bulan)==2)
                                        PSM Bulan Agustus
                                    @endif

                                    @if(($data->bulan)==3)
                                        PSM Bulan September
                                    @endif

                                    @if(($data->bulan)==4)
                                        PSM Bulan Oktober
                                    @endif

                                    @if(($data->bulan)==5)
                                        PSM Bulan November
                                    @endif

                                    @if(($data->bulan)==6)
                                        PSM Bulan Desember
                                    @endif

                                    @if(($data->bulan)==7)
                                        PSM Bulan Januari
                                    @endif

                                    @if(($data->bulan)==8)
                                        PSM Bulan Februari
                                    @endif

                                    @if(($data->bulan)==9)
                                        PSM Bulan Maret
                                    @endif

                                    @if(($data->bulan)==10)
                                        PSM Bulan Apri
                                    @endif

                                    @if(($data->bulan)==11)
                                        PSM Bulan Mei
                                    @endif

                                    @if(($data->bulan)==12)
                                        PSM Bulan Juni
                                    @endif

                                    </td>

                                    <td>{{ $data->name }}</td>
                                    <td>{{ date('l, d F Y', strtotime($data->waktu_pembayaran)) }}
                                    </td>
                                    <td style="text-align:right">
                                        <p class="pull-right font-bold">@currency($data->nominal_pembayaran),-</p>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tr>
                            <td colspan="5">Total</td>
                            <td colspan="2">
                                <p class="font-bold" style="text-align:right">@currency($total),-</p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endif

@if(auth()->user()->level == 2)
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <h5 class="card-title">Riwayat Pembayaran PSM</h5><br>
                    <div class="row">
                        <div class="col s12">
                            <form action="/filadminpsm" method="post">
                                @csrf
                                <div class="col s7"></div>
                                <div class="col s4">
                                    <div class="form-group">
                                        <input type="date" name="waktu_pembayaran" class="form-control">
                                    </div>
                                </div>
                                <div class="col s1">
                                    <input type="submit" class="btn btn-sm blue col-12" value="Cari">
                                </div>
                            </form>
                        </div>                        
                    </div>

                    <table id="example10" class=" table table-striped table-bordered display">
                        <thead>
                            <tr>
                                <th>Nama Siswa</th>
                                <th>Kelas</th>
                                <th>Nama Pembayaran</th>
                                <th>Penerima</th>
                                <th>Waktu Pembayaran</th>
                                <th>Nominal Pembayaran</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dataadmin as $da)
                                <tr>
                                    <td>{{ $da->nama }}</td>
                                    <td>{{ $da->tingkatan_kelas }} {{ $da->nama_jurusan }}
                                        {{ $da->nomor_kelas }}</td>
                                    <td>@if(($da->bulan)==1)
                                        PSM Bulan Juli
                                        @endif

                                        @if(($da->bulan)==2)
                                            PSM Bulan Agustus
                                        @endif

                                        @if(($da->bulan)==3)
                                            PSM Bulan September
                                        @endif

                                        @if(($da->bulan)==4)
                                            PSM Bulan Oktober
                                        @endif

                                        @if(($da->bulan)==5)
                                            PSM Bulan November
                                        @endif

                                        @if(($da->bulan)==6)
                                            PSM Bulan Desember
                                        @endif

                                        @if(($da->bulan)==7)
                                            PSM Bulan Januari
                                        @endif

                                        @if(($da->bulan)==8)
                                            PSM Bulan Februari
                                        @endif

                                        @if(($da->bulan)==9)
                                            PSM Bulan Maret
                                        @endif

                                        @if(($da->bulan)==10)
                                            PSM Bulan Apri
                                        @endif

                                        @if(($da->bulan)==11)
                                            PSM Bulan Mei
                                        @endif

                                        @if(($da->bulan)==12)
                                            PSM Bulan Juni
                                        @endif

                                    </td>

                                    <td>{{ $da->user }}</td>
                                    <td>{{ $da->waktu_pembayaran }}</td>
                                    <td style="text-align:right">
                                        <p class="font-bold">@currency($da->nominal_pembayaran),-</p>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tr>
                            <td colspan="5">Total</td>
                            <td style="text-align:right" colspan="2">
                                <p class="font-bold">@currency($totaladmin),-</p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endif

@endsection
