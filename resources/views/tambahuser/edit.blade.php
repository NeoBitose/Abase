@extends('layouts.master')
@section('headtitle', 'Edit User')
@section('page', 'User')
@section('subtitle', 'Edit User')

@section('content')
<div class="row">
    <div class="col s12">
        <div class="card">
            <div class="card-content">
                <form action="/user/update/{{$user->id}}" method="post">
                    @csrf
                        <div class="row">
                            <div class="col s6">
                            <br>

                                <label for="name">Username</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}" required autocomplete="name" autofocus>
                                
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br><br>

                                <label for="password"> Reset Password (optional)</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" >                        

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="col s6">
                            <br>
        
                                <label for="email">Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{$user->email}}" name="email" required autocomplete="email">
                                
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br><br>

                                <label for="password-confirm">Konfirmasi Password</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" >                                                       
                                
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="col s12">
                                <br><br>
                                <label for="level">Level User</label>
                                <select class="form-control @error('level') is-invalid @enderror" name="level">
                                                <option value="{{$user->level}}">
                                                    @if ($user->level == 1)
                                                        Super Admin
                                                    @else
                                                        Admin
                                                    @endif
                                                </option>
                                                <option value="1">super Admin</option>
                                                <option value="2">Admin</option>
                                            </select>
                                @error('level')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                            
                            </div>

                            <div class="col s12">
                                <br><br>
                                <input type="submit" class="col s6 btn green" value="Kirim">
                            </div>
                        </div>                
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
