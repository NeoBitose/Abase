@extends('layouts.master')
@section ('headtitle','Pembayaran Tanggungan')
@section ('page','SPP')
@section ('subtitle','Pembayaran Tanggungan')
@section('content')

<div class="row">
    <div class="col s12">        
        <div class="card">
            <div class="card-content">
                <h5 class="card-title">Pembayaran Tanggungan</h5>
                @foreach($getdatatanggungan as $data)
                    <form action="/pembayarantanggungan" method="post">
                        @csrf
                        <div class="row">
                            <div class="col s6 mt-3">
                                <label class="mt-3" for="">Nama Tanggungan</label>
                                <input type="text" class="form-control" value="{{ $data->nama_jenis_tanggungan }}" disabled=""
                                    placeholder="Nama Tanggungan" name="nama_jenis_tanggungan" required="">
                            </div>
                            <div class="col s6 mt-3">
                                <label class="mt-3" for="">Nama Siswa</label>
                                <input type="text" class="form-control" value="{{ $data->nama }}" disabled=""
                                    placeholder="Nama Tanggungan" name="nama_jenis_tanggungan" required="">
                            </div>
                            <div class="col s6 mt-3">
                                <label class="mt-3" for="">Penerima</label>
                                <input type="hidden" name="id_detail_tanggungan" value="{{ $data->id_detail_tanggungan }}">
                                <input type="text" value="{{ Auth::user()->name }}" disabled="" class="form-control"
                                    placeholder="0 kan jika tidak ada nilai" value="0" name="nominal_kls_10" required="">
                                <input type="hidden" value="{{ Auth::user()->id }}" class="form-control"
                                    placeholder="0 kan jika tidak ada nilai" value="0" name="id_user" required="">
                            </div>
                            <div class="col s6 mt-3">
                                <label class="mt-3" for="">Nominal Pembayaran</label>
                                <select name="nominal_pembayaran" id="" class="form-control">
                                    @foreach($kelipatan as $k)
                                        <option value="{{ $k }}">@currency($k),-</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col s12"><br>
                                <input type="submit" class="btn btn-primary mt-3 col-sm-12" value="Submit">
                            </div>
                        </div>
                    </form>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
