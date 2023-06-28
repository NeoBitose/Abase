@extends('layouts.master')
@section('headtitle', 'Dashboard')
@section('page', 'Dashboard')
@section('subtitle', '')

@section('content')
    
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <div class="row">
                        <div class="col s5">
                            <div class="center-align m-t-30"> <img src="{{asset('images/logo.jpg')}}" class=""
                                    width="150" />
                                <h4 class="card-title m-t-10">SMAN 1 TENGGARANG</h4>
                                <h6 class="card-subtitle">SEKOLAH ADIWIYATA</h6>
                                <!-- <div class="center-align">
                                    <div>
                                        <a href="javascript:void(0)" class="m-r-40"><i class="icon-people"></i>
                                            <font class="font-medium">254</font>
                                        </a>
                                        <a href="javascript:void(0)"><i class="icon-picture"></i>
                                            <font class="font-medium">54</font>
                                        </a>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="col s7">
                            <small>Email address </small>
                            <h6>jon@doe.com</h6>
                            <small>Phone</small>
                            <h6>+91 654 784 547</h6>
                            <small>Address</small>
                            <h6>Jl. Raya Situbondo No. 96, Tenggarang, Bondowoso</h6>
                            <div class="map-box m-t-20">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.8401848332333!2d113.84504611421153!3d-7.911757880937331!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6dca2b9263695%3A0xecab6bd32a9b0e3b!2sSMAN%201%20Tenggarang!5e0!3m2!1sen!2sid!4v1626652667420!5m2!1sen!2sid"
                                width="100%" height="150" style="border:0;" frameborder="0" allowfullscreen=""
                                loading="lazy">
                            </iframe>
                            </div>
                            
                        </div>
                    </div>                
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">        

        <div class="col 4 m4">
            <div class="card danger-gradient card-hover">
                <div class="card-content">
                    <div class="d-flex no-block align-items-center">
                        <div>
                            <h4 class="white-text m-b-5">{{ $totsiswa }}</h4>
                            <h6 class="white-text op-5 light-blue-text">Jumlah Siswa</h6>
                        </div>
                        <div class="ml-auto">
                            <span class="white-text display-6"><i class="material-icons">assignment</i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col 4 m4">
            <div class="card success-gradient card-hover">
                <div class="card-content">
                    <div class="d-flex no-block align-items-center">
                        <div>
                            <h4 class="white-text m-b-5">@currency($totalspp),-</h4>
                            <h6 class="white-text op-5 text-darken-2">Total Spp Siswa</h6>
                        </div>
                        <div class="ml-auto">
                            <span class="white-text display-6"><i class="material-icons">equalizer</i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col 4 m4">
            <div class="card warning-gradient card-hover">
                <div class="card-content">
                    <div class="d-flex no-block align-items-center">
                        <div>
                            <h4 class="white-text m-b-5">@currency($totaltanggungan),-</h4>
                            <h6 class="white-text op-5">Total Tanggungan Siswa</h6>
                        </div>
                        <div class="ml-auto">
                            <span class="white-text display-6"><i class="material-icons">attach_money</i></span>
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
                    <h5 class="card-title">Pencarian Siswa</h5>
                    <form action="/search" method="post">
                        @csrf                                             
                        <div class="row">
                            <div class="">
                                <div class="col s11">
                                    <div class="form-group">
                                        <input type="number" name="nisn" class="form-control" placeholder="Masukkan NISN Siswa">
                                        @error('nisn') <span class="text-danger">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col s1">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-sm btn-info col-12" value="Cari">
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
                        <table  class=" table table-striped table-bordered responsive-table highlight">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NISN</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Tanggungan</th>
                                    <th>SPP</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>1 </td>
                                    <td>{{ $nisn }}</td>
                                    <td>{{ $nm }}</td>
                                    <td>{{ $tk }} {{ $jr }} {{ $nk }}</td>
                                    <td>{{ $tg }}</td>
                                    <td>{{ $ss }}</td>
                                    <td>{{ $st }}</td>

                                    <td>
                                        <a href="/siswa/{{ $nisn }}" class="btn btn-info btn-xs mb-5"><i
                                                class="fa fa-bullet"></i> Detail</a>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endif

@endsection
