@extends('layouts.master')
@section ('headtitle','Data Alumni')
@section ('page','Siswa')
@section ('subtitle','Data Alumni')
@section('content')

<div class="row">
    <div class="col s12">
        <div class="card">
            <div class="card-content">
                <h5 class="card-title">@yield('headtitle')</h5>
                 <table id="productorder" class=" table table-striped table-bordered display">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NISN</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($getdatasiswa as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->nisn }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->tingkatan_kelas }} {{ $data->nama_jurusan }} {{ $data->nomor_kelas }}</td>
                                <td>{{ $data->tipe }}</td>
                                <td>
                                    @if($data->tipe_siswa ==  1)

                                        <a href="/nonaktif/{{ $data->nisn }}" class="btn danger btn-xs mb-5"
                                            onclick="return confirm('Apakah anda yakin?')">Nonaktifkan</a>

                                    @endif

                                    @if($data->tipe_siswa ==  3)

                                        <a href="/aktif/{{ $data->nisn }}" class="btn green btn-xs mb-5"
                                            onclick="return confirm('Apakah anda yakin?')">Aktifkan</a>

                                    @endif

                                    | <a href="/siswa/{{ $data->nisn }}" class="btn blue btn-xs mb-5"><i
                                            class="fa fa-bullet"></i>Detail</a>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
