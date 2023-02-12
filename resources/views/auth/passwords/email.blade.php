@extends('layouts.app')
@section('page', 'Reset Password')
@section('content')
<div class="card-body login-card-body px-8">
  <img src="{{ asset('img/favicon.png') }}" alt="Spena Logo" class="brand-image mb-5" style="height:64px;">
  <h1 class="fw-700">Reset Password</h1>
  <p class="mb-5">Untuk melakukan reset password, masukkan email yang telah didaftarkan.</p>

  <form action="{{ route('cek-email') }}" method="post">
    @csrf
    <div class="input-group mb-4">
      <input id="email" type="email" placeholder="{{ __('user@email.com') }}" class="form-control pd-2 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="off" autofocus>
      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-envelope pr-2"></span>
        </div>
      </div>
      @error('email')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="row mb-3">
      <div class="col-12">
        <button type="submit" class="py-3 mb-4 btn btn-primary btn-block">{{ __('Send Password Reset Link') }}</button>
      </div>
      <!-- /.col -->
    </div>
    
    <div class="row">
      <div class="col-6">
        <a href="{{ route('login') }}" class="text-center btn-block btn btn-light text-blue">Login</a>
      </div>
      <!-- /.col -->
      <div class="col-6">
        <a href="{{ route('register') }}" class="text-center btn-block btn btn-light text-blue">Buat Akun</a>
      </div>
      <!-- /.col -->
    </div>
  </form>
</div>
@endsection
