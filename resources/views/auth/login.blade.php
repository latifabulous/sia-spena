@extends('layouts.app')
@section('page', 'Login Authentication')
@section('content')


<div class="card-body login-card-body px-8">
  <img src="{{ asset('img/favicon.png') }}" alt="Spena Logo" class="brand-image mb-5" style="height:64px;">
  <h1 class="fw-700">Masuk</h1>
  <p class="mb-5">Masuk dengan data yang sudah didaftarkan.</p>
  

  <form action="{{ route('login') }}" method="post">
    @csrf
    <p class="fw-500 mb-2">EMAIL</p>
    <div class="input-group mb-4">
      <input id="email" type="email" class="pd-2 form-control @error('email') is-invalid @enderror" placeholder="{{ __('email@gmail.com') }}" name="email" value="{{ old('email') }}" autocomplete="off" autofocus>
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
    <p class="fw-500 mb-2">PASSWORD</p>
    <div class="input-group mb-3">
      <input id="password" type="password" placeholder="{{ __('password') }}" class="pd-2 form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password" disabled>
      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-lock px-2"></span>
        </div>
      </div>
      @error('password')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
    
    <div class="icheck-primary mb-5">
      <input type="checkbox" id="remember" class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} disabled>
      <label class="fw-400" for="remember">
        {{ __('Ingat saya') }}
      </label>
    </div>
    <button type="submit" id="btn-login"class="py-3 mb-5 btn btn-primary btn-block" disabled>{{ __('Login') }} &nbsp; </button>
  </form>

  <p class="mb-1 text-center">Belum punya akun? <span><a href="{{ route('register') }}" class="warna fw-500">Buat akun baru</a></span></p>
  <p class="mb-1 text-center fw-500">
    @if (Route::has('password.request'))
      <a class="text-center" href="{{ route('password.request') }}">
        {{ __('Lupa Password?') }}
      </a>
    @endif
  </p>
</div>
@endsection
@section('script')
  <script>
    $("#email").keyup(function(){
        var email = $("#email").val();

        if (email.length >= 5){
          $.ajax({
              type:"GET",
              data: {
                  email : email
              },
              dataType:"JSON",
              url:"{{ url('/login/cek_email/json') }}",
              success:function(data){
                if (data.success) {
                  $("#email").removeClass("is-invalid");
                  $("#email").addClass("is-valid");
                  $("#password").val('');
                  $("#password").removeAttr("disabled", "disabled");
                } else {
                  $("#email").removeClass("is-valid");
                  $("#email").addClass("is-invalid");
                  $("#password").val('');
                  $("#password").attr("disabled", "disabled");
                  $("#remember").attr("disabled", "disabled");
                  $("#btn-login").attr("disabled", "disabled");
                }
              },
              error:function(){
              }
          });
        } else {
          $("#email").removeClass("is-valid");
          $("#email").removeClass("is-invalid");
          $("#password").val('');
          $("#password").attr("disabled", "disabled");
          $("#remember").attr("disabled", "disabled");
          $("#btn-login").attr("disabled", "disabled");
        }
    });

    $("#password").keyup(function(){
        var email = $("#email").val();
        var password = $("#password").val();

        if (password.length >= 8){
          $.ajax({
              type:"GET",
              data: {
                  email : email,
                  password : password
              },
              dataType:"JSON",
              url:"{{ url('/login/cek_password/json') }}",
              success:function(data){
                if (data.success) {
                  $("#password").removeClass("is-invalid");
                  $("#password").addClass("is-valid");
                  $("#remember").removeAttr("disabled", "disabled");
                  $("#btn-login").removeAttr("disabled", "disabled");
                } else {
                  $("#password").removeClass("is-valid");
                  $("#password").addClass("is-invalid");
                  $("#remember").attr("disabled", "disabled");
                  $("#btn-login").attr("disabled", "disabled");
                }
              },
              error:function(){
              }
          });
        } else {
          $("#password").removeClass("is-valid");
          $("#password").removeClass("is-invalid");
          $("#remember").attr("disabled", "disabled");
          $("#btn-login").attr("disabled", "disabled");
        }
    });
  </script>
@endsection
