@extends('layouts.master')
@section('headtitle','Siswa')
@section('page','Siswa')
@section('subtitle','Detail; Siswa')
@section('content')

@foreach($getdatasiswa as $data)
    <div class="row">
        <div class="col s6 ">
            <div class="card">
                <div class="card-content">
                    <div class="center-align m-t-30"> <img src="{{ asset('images/admin.jpg') }}"
                            class="circle" width="150" />
                        <h4 class="card-title m-t-10">{{ $data->nama }}</h4>
                        <h6 class="card-subtitle">{{ $data->tipe }}</h6>
                        <div class="center-align">
                            <div>
                                <a href="javascript:void(0)" class="">
                                  PSM : {{ $totalbulanspp }} Bulan
                                </a><br>
                                <a href="javascript:void(0)">
                                  Tanggungan : @currency($totaltanggungan),-
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <h5 class="card-title">Biodata</h5>
                    <table class="responsive-table bio">
                        <tbody>
                            <tr>
                                <td>NISN</td>
                                <td>: {{ $data->nisn }}</td>
                            </tr>
                            <tr>
                                <td>NIS</td>
                                <td>: {{ $data->nis }}</td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>: {{ $data->nama }}</td>
                            </tr>
                            <tr>
                                <td>Kelas</td>
                                <td>: {{ $data->tingkatan_kelas }} {{ $data->nama_jurusan }}
                                    {{ $data->nomor_kelas }}
                                </td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>: {{ $data->jk }}</td>
                            </tr>
                            <tr>
                                <td>Tahun Masuk</td>
                                <td>: {{ date('l, d F Y', strtotime($data->tahun_masuk)) }}</td>
                            </tr>
                            <tr>
                                <td>No Hp</td>
                                <td>: {{ $data->nohp }}</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>: {{ $data->tipe }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <style>
                        .bio tbody td tr {
                            border: solid 0px;
                        }
                    </style>
                </div>
            </div>
        </div>
    </div>

@endforeach

<div class="row">
    <div class="col s12">
        <div class="card">
            <div class="card-content">
                <h5 class="card-title">PSM</h5>
                <table id="example" class=" table table-striped table-bordered display">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>PSM Bulan</th>
                            <th>Kelas</th>
                            <th>Tahun</th>
                            <th>Kekurangan</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($getdataspp as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    @if(($data->bulan)==1)
                                        Juli
                                    @endif

                                    @if(($data->bulan)==2)
                                        Agustus
                                    @endif

                                    @if(($data->bulan)==3)
                                        September
                                    @endif

                                    @if(($data->bulan)==4)
                                        Oktober
                                    @endif

                                    @if(($data->bulan)==5)
                                        November
                                    @endif

                                    @if(($data->bulan)==6)
                                        Desember
                                    @endif

                                    @if(($data->bulan)==7)
                                        Januari
                                    @endif

                                    @if(($data->bulan)==8)
                                        Februari
                                    @endif

                                    @if(($data->bulan)==9)
                                        Maret
                                    @endif

                                    @if(($data->bulan)==10)
                                        Apri
                                    @endif

                                    @if(($data->bulan)==11)
                                        Mei
                                    @endif

                                    @if(($data->bulan)==12)
                                        Juni
                                    @endif
                                </td>
                                <td>{{ $data->tingkatan_kelas }} {{ $data->nama_jurusan }}
                                    {{ $data->nomor_kelas }}</td>
                                <td>{{ $data->tahun }}</td>
                                <td style="text-align:right; font-weight: bold;" >
                                    @if(($data->selisih_spp)==0)
                                        <p class="btn btn-success btn-xs m-t-10">Lunas</p>
                                    @else
                                        <p class="btn btn-secondary btn-xs m-t-10">@currency($data->selisih_spp),-</p>
                                    @endif
                                </td>
                                <td>
                                    @if(($data->selisih_spp)==0)
                                        <a href="/kwitansi/{{ $data->id_detail_spp }}"
                                            class="btn primary-gradient btn-xs">Lihat Kwitansi</a>
                                    @else
                                        <form action="/pembayaranspp/{{ $data->id_detail_spp }}" method="post">
                                            @csrf
                                            <input type="submit" onclick="return confirm('Apakah Anda Yakin?')"
                                                value="Bayar" class="btn btn-success btn-xs">

                                            <input type="hidden" value="{{ Auth::user()->id }}" name="id_user">
                                            <input type="hidden" value="{{ $data->selisih_spp }}"
                                                name="nominal_pembayaran">
                                        </form>
                                    @endif
                                </td>
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
                <h5 class="card-title">Tanggungan</h5>
                <table id="example10" class=" table table-striped table-bordered display">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggungan</th>
                            <th>Biaya</th>
                            <th>Kelas</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($getdatatanggungan as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->nama_jenis_tanggungan }}</td>
                                <td style="text-align:right; font-size: 20pt; font-weight: bold;">
                                    @if(($data->selisih_tanggungan)==0)
                                        <p class="btn btn-success btn-xs m-t-10">Lunas / Tidak ada</p>

                                    @else
                                        <p class="btn btn-secondary btn-xs m-t-10">
                                            @currency($data->selisih_tanggungan),-</p>
                                    @endif
                                </td>
                                <td>{{ $data->tingkatan_kelas }} {{ $data->nama_jurusan }}
                                    {{ $data->nomor_kelas }}</td>
                                <td>
                                    @if(($data->selisih_tanggungan)==0)
                                        <a href="/kwitansitanggungan/{{ $data->id_detail_tanggungan }}"
                                            class="btn primary-gradient btn-xs">Riwayat Pembayaran</a>
                                    @else
                                        <!-- <input type="button"
                            data-nama="{{ $data->nama }}"
                            data-iddetailtanggungan="{{ $data->id_detail_tanggungan }}"
                            data-kelas="{{ $data->tingkatan_kelas }} {{ $data->nama_jurusan }} {{ $data->nomor_kelas }}"
                            data-nominal="{{ $data->selisih_tanggungan }}"
                            data-jenispembayaran="{{ $data->nama_jenis_tanggungan }}"


                            id="bayar" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal-right" value="bayar"> -->
                                        <form action="/pembayaran/tanggungan">
                                            @csrf
                                            <input type="hidden" value="{{ $data->selisih_tanggungan }}"
                                                name="selisih_tanggungan">
                                            <input type="hidden" value="{{ $data->id_detail_tanggungan }}"
                                                name="id_detail_tanggungan">
                                            <input type="submit" class="btn btn-secondary btn-sm" value="bayar">
                                        </form>
                                    @endif
                                </td>

                                <div class="modal modal-right fade" id="modal-right" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content ">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Pembayaran Tanggungan </h5>
                                                <a href="" type="button" class="close" data-dismiss="modal">
                                                    <span aria-hidden="true">&times;</span>
                                                </a>
                                            </div>
                                            <form action="/pembayarantanggungan" method="post">
                                                @csrf
                                                <div class="modal-body">
                                                    <label for="">Nama Siswa</label>
                                                    <input type="text" class="form-control" id="nama" disabled="">
                                                    <br>
                                                    <label for="">Kelas</label>
                                                    <input type="text" class="form-control" id="kelas" disabled="">
                                                    <br>
                                                    <input type="hidden" value="{{ Auth::user()->id }}"
                                                        name="id_user">
                                                    <input type="hidden" name="id_detail_tanggungan"
                                                        class="form-control" id="iddetailtanggungan">
                                                    <br>
                                                    <label for="">Jenis Pembayaran</label>
                                                    <input type="text" class="form-control" id="jenispembayaran"
                                                        disabled="">
                                                    <br>
                                                    <label for="">Nominal Pembayaran</label>
                                                    <select name="nominal_pembayaran" class="form-control">
                                                        <option value="10000">Rp. 10.000,-</option>
                                                        <option value="50000">Rp. 50.000,-</option>
                                                        <option value="100000">Rp. 100.000,-</option>
                                                        <option value="123000">Rp. 123.000,-</option>


                                                    </select>

                                                </div>
                                                <div class="modal-footer modal-footer-uniform">
                                                    <a href="" type="button" class="btn btn-bold btn-pure btn-secondary"
                                                        data-dismiss="modal">Close</a>
                                                    <input onclick="return confirm('Apakah Anda Yakin ?')" type="submit"
                                                        class="btn btn-bold btn-pure btn-primary float-right"
                                                        value="Bayar">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                        <style>
                            .icon-detail {
                                margin-top: 80px;
                            }

                            .example-modal .modal {
                                position: relative;
                                top: auto;
                                bottom: auto;
                                right: auto;
                                left: auto;
                                display: block;
                                z-index: 999999;
                            }

                            .modal-backdrop {
                                position: fixed;
                                top: 0;
                                right: 0;
                                bottom: 0;
                                left: 0;
                                z-index: -1;
                                background-color: #000;
                            }

                            .example-modal .modal {
                                background: transparent !important;
                            }
                        </style>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
