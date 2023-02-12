@extends('layouts.app')
@section('page', 'Register Authentication')
@section('content')
<div class="card-body login-card-body px-8">

  <img src="{{ asset('img/favicon.png') }}" alt="Spena Logo" class="brand-image mb-5" style="height:64px;">
  <h1 class="fw-700">Register</h1>

  <p class="mb-5">Sudah punya akun? <span><a href="{{ route('login') }}" class="warna fw-500">Masuk</a></span></p>




  <form action="{{ route('register') }}" method="post">
    @csrf
    <div class="input-group mb-4">
      <input id="email" type="email" placeholder="{{ __('E-mail') }}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="off">
      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-envelope"></span>
        </div>
      </div>
      @error('email')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="input-group mb-4">
      <select id="role" type="text" class="form-control @error('role') is-invalid @enderror" name="role" value="{{ old('role') }}" autocomplete="role">
        <option value="">-- Select {{ __('Level User') }} --</option>
        <option value="Guru">Guru</option>
        <option value="Siswa">Siswa</option>
      </select>
      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-user-tag"></span>
        </div>
      </div>
      @error('role')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
      <div id="pesan"></div>
    </div>
    <div class="input-group" id="noId">
    </div>
    <div class="input-group mb-4">
      <input id="password" type="password" placeholder="{{ __('Password') }}" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-lock"></span>
        </div>
      </div>
      @error('password')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="input-group mb-4">
      <input id="password-confirm" type="password" placeholder="{{ __('Confirm Password') }}" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" autocomplete="new-password">
      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-lock"></span>
        </div>
      </div>
      @error('password')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>

    <button type="submit" class="btn btn-primary btn-block mt-5">{{ __('Register') }} &nbsp;</button>

  </form>
</div>
@endsection
