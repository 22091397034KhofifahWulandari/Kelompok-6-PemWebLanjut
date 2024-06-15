@extends('layouts.registernavbar')

@section('content')
<div class="d-flex align-items-center mb-3">
    <img src="{{ asset('images/logo.png') }}" alt="Pemilu" class="img-fluid mr-3" style="max-height: 100px;">
    <h3>{{ __('Register Pemilu') }}</h3>
</div>
<form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="username">{{ __('Username') }}</label>
            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
            @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-md-6 mb-3">
            <label for="nama_lengkap">{{ __('Full Name') }}</label>
            <input id="nama_lengkap" type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" value="{{ old('nama_lengkap') }}" required autocomplete="nama_lengkap">
            @error('nama_lengkap')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="nik">{{ __('NIK') }}</label>
            <input id="nik" type="text" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{ old('nik') }}" required autocomplete="nik">
            @error('nik')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-md-6 mb-3">
            <label for="tanggal_lahir">{{ __('Date of Birth') }}</label>
            <input id="tanggal_lahir" type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required>
            @error('tanggal_lahir')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="alamat">{{ __('Address') }}</label>
            <textarea id="alamat" class="form-control @error('alamat') is-invalid @enderror" name="alamat" required>{{ old('alamat') }}</textarea>
            @error('alamat')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-md-6 mb-3">
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="password-confirm">{{ __('Confirm Password') }}</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>
        <div class="col-md-6 mb-3">
            <label for="foto_ktp">{{ __('Photo KTP') }}</label>
            <input id="foto_ktp" type="file" class="form-control @error('foto_ktp') is-invalid @enderror" name="foto_ktp" required>
            @error('foto_ktp')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-md-6 mb-3">
            <label for="profile_picture">{{ __('Profile Picture') }}</label>
            <input id="profile_picture" type="file" class="form-control @error('profile_picture') is-invalid @enderror" name="profile_picture" required>
            @error('profile_picture')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="d-grid">
        <button type="submit" class="btn btn-danger btn-block">{{ __('Register') }}</button>
    </div>
</form>
<div class="text-center mt-3">
  <p>Already have an account?  <a href="{{ route('login') }}">{{ __("Login here") }}</a></p>
</div>
@endsection
