@extends('layouts.master')
@section ('headtitle','Riwayat Pembayaran Tanggungan')
@section ('page','Siswa')
@section ('subtitle','Riwayat Pembayaran Tanggungan')
@section('content')

<section class="content">
    <div class="row">
        <div class="col-12">       
			@if(session('pesan'))
				<div class="alert alert-success">
					{{session('pesan')}}
				</div>
			@endif
		  <div class="box">
		  	<div class="col-12">
				<div class="box-header with-border">
					<h3 class="box-title">@yield('headtitle')</h3>
					
				</div>
			</div>
            
            <!-- /.box-header -->
            <div class="box-body">
				<div class="table-responsive">
				  <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
					<thead>
						<tr>
							<th>No Riwayat Kwitansi</th>
                            <th>Nama Pembayaran</th>
							<th>Penerima</th>
							<th>Nominal Pembayaran</th>
							<th>Waktu Pembayaran</th>
							
						</tr>
					</thead>
					<tbody>
					

						 @foreach ($getdatapembayaran as $data)
						<tr>
                        <td>{{$data->no_kwitansi}}</td>
                            <td>
                                {{$data->nama_jenis_tanggungan}} 
                            </td>
							
							<td>{{$data->name}}</td>
							<td><p class="pull-right font-bold">@currency($data->nominal_pembayaran)</p></td>
							<td>{{$data->waktu_bayar}}</td>
						</tr>
                    @endforeach
					</tbody>				  					
				</table>
				</div>              
            </div>
            <!-- /.box-body -->
          </div>
        </div>
		
    </div>

	
</section>

@endsection
