@extends('layouts.master')
@section('headtitle','Riwayat Pembayaran Tanggungan')
@section('page','Siswa')
@section('subtitle','Riwayat Pembayaran Tanggungan')
@section('content')


@if(auth()->user()->level == 1)
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <form action="/filter/tanggal/tanggungan" method="get">
                        <div class="row">
                            <div class="col s5">
                                <label for="">Dari</label>
                                <input type="date" style="margin-top:3px" name="dari" class="form-control">
                            </div>
                            <div class="col s5">
                                <label for="">Sampai</label>
                                <input type="date" style="margin-top:3px" name="sampai" class="form-control">
                            </div>
                            <div class="col s2 m-t-20">
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
                    <h5 class="card-title">Riwayat Pembayaran Tanggungan</h5>
                     <table id="example" class=" table table-striped table-bordered display">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Siswa</th>
                                <th>Kelas</th>
                                <th>Nama Pembayaran</th>
                                <th>Penerima</th>
                                <th>Status Pembayaran</th>
                                <th>Waktu Pembayaran</th>
                                <th>Nominal Pembayaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($getdatapembayaran as $data)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->tingkatan_kelas }} {{ $data->nama_jurusan }}
                                        {{ $data->nomor_kelas }}</td>
                                    <td>
                                        {{ $data->nama_jenis_tanggungan }}
                                    </td>

                                    <td>{{ $data->name }}</td>
                                    <td>
                                        @if($data->status_bayar==1)
                                            <p class="btn green btn-sm">Lunas</p>

                                        @elseif($data->status_bayar==2)
                                            <p class="btn orange btn-sm">Dicicil</p>

                                        @endif

                                    </td>
                                    <td>{{ date('l, d F Y', strtotime($data->waktu_bayar)) }}</td>
                                    <td style="text-align:right">
                                        <p class="font-bold">@currency($data->nominal_pembayaran),-</p>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                        <tr>
                            <td colspan="5">Total</td>
                            <td colspan="3" style="text-align:right">
                                <p class="pull-right font-bold">@currency($total),-</p>
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
                    <h5 class="card-title">Riwayat Pembayaran Tanggungan</h5>
                     <div class="row">
                        <div class="col s12">
                            <form action="/filadmintanggungan" method="post">
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
                    <table id="example" class=" table table-striped table-bordered display">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Siswa</th>
                                <th>Kelas</th>
                                <th>Nama Pembayaran</th>
                                <th>Penerima</th>
                                <th>Status Pembayaran</th>
                                <th>Waktu Pembayaran</th>
                                <th>Nominal Pembayaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dataadmin as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->tingkatan_kelas }} {{ $data->nama_jurusan }}
                                        {{ $data->nomor_kelas }}</td>
                                    <td>
                                        {{ $data->nama_jenis_tanggungan }}
                                    </td>

                                    <td>{{ $data->name }}</td>
                                    <td>
                                        @if($data->status_bayar==1)
                                            <p class="btn green btn-sm">Lunas</p>

                                        @elseif($data->status_bayar==2)
                                            <p class="btn orange btn-sm">Dicicil</p>

                                        @endif

                                    </td>
                                    <td>{{ $data->waktu_bayar }}</td>
                                    <td style="text-align:right">
                                        <p class="font-bold">@currency($data->nominal_pembayaran),-</p>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                        <tr>
                            <td colspan="7">Total</td>
                            <td colspan="2" style="text-align:right">
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
