@extends('layouts.master')
@section ('headtitle','Kwitansi')
@section ('page','Siswa')
@section ('subtitle','Kwitansi')
@section('content')

<div class="row">
    <div class="col s12">
        <div class="card">
            <div class="card-content">
                <h5 class="card-title"></h5>
                <table class="centered">
                    <thead>
                        <tr>
                            <th>No Kwitansi</th>
                            <th>Nama Pembayaran</th>
                            <th>Penerima</th>
                            <th>Nominal Pembayaran</th>
                            <th>Waktu Pembayaran</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach($getdatapembayaran as $data)
                            <tr>
                                <td>{{ $data->no_kwitansi }}</td>
                                <td> @if(($data->bulan)==1)
                                    SPP Bulan Juli
                        @endif

                        @if(($data->bulan)==2)
                            SPP Bulan Agustus
                        @endif

                        @if(($data->bulan)==3)
                            SPP Bulan September
                        @endif

                        @if(($data->bulan)==4)
                            SPP Bulan Oktober
                        @endif

                        @if(($data->bulan)==5)
                            SPP Bulan November
                        @endif

                        @if(($data->bulan)==6)
                            SPP Bulan Desember
                        @endif

                        @if(($data->bulan)==7)
                            SPP Bulan Januari
                        @endif

                        @if(($data->bulan)==8)
                            SPP Bulan Februari
                        @endif

                        @if(($data->bulan)==9)
                            SPP Bulan Maret
                        @endif

                        @if(($data->bulan)==10)
                            SPP Bulan Apri
                        @endif

                        @if(($data->bulan)==11)
                            SPP Bulan Mei
                        @endif

                        @if(($data->bulan)==12)
                            SPP Bulan Juni
                        @endif

                        </td>

                        <td>{{ $data->name }}</td>
                        <td class="font-bold">{{ $data->nominal_pembayaran }}</td>
                        <td>{{ $data->waktu_pembayaran }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
