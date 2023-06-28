@extends('layouts.master')
@section('headtitle', 'Tambah User')
@section('page', 'User')
@section('subtitle', 'Tambah User')

@section('content')

<div class="row">
    <div class="col s12">
        <div class="card">
            <div class="card-content">
                <h5 class="card-title">Tambah User</h5>
                <form action="/tambah_user" method="post">
                    @csrf
                        <div class="row">
                            <div class="col s6">
                            <br>

                                <label for="name">Username</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br><br>

                                <label for="password">Password</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">                        

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="col s6">
                            <br>
                                
                                <label for="email">Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" required autocomplete="email">
                                
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br><br>

                                <label for="password-confirm">Konfirmasi Password</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">                                                       
                                
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="col s12">
                                <br>
                                <label for="level">Level User</label>
                                <select class="form-control @error('level') is-invalid @enderror" name="level">  
                                                <option value="2">Admin</option>
                                                <option value="1">super Admin</option>                                            
                                            </select>
                                @error('level')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                            
                            </div>

                            <div class="col s12">
                                <br><br>
                                <input type="submit" class="col s2 btn-large btn green" value="Kirim">
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
                <h5 class="card-title">Data User</h5><br>
                 <table id="productorder" class=" table table-striped table-bordered display">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($user as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->email }}</td>
                                <td>
                                    @if($data->level == 1)
                                        SuperAdmin
                                    @endif
                                    @if($data->level == 2)
                                        Admin
                                    @endif
                                </td>
                                <td>
                                    <a href="/user/edit/{{ $data->id }}" class="btn orange btn-sm mb-5"><i
                                            class="fa fa-bullet"></i>Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
