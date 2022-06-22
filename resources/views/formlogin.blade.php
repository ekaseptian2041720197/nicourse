@extends('layouts.mainform')

@section('formcontent')
<div class="row justify-content-center">
  <div class="col-md-5">
    <main class="form-registration">
      <h1 class="h3 mb-3 fw-normal">LOGIN</h1>

      @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="admin">
        {{ session('success') }}

      </div>
      @endif

      @if (session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="user">
        {{ session('loginError') }}

      </div>
      @endif

      <form class="user" action="/login" method="POST">
        @csrf
        <div class="form-floating">
          <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="email"
            name="email" value="{{ old('email') }}" placeholder="Email">
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <br>
        <div class="form-floating">
          <input type="password" class="form-control form-control-user @error('email') is-invalid @enderror"
            id="password" name="password" placeholder="Password">
          @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <br>
        <button class="w-100 btn btn-lg btn-primary" type="submit">LOGIN</button>
      </form>
      <small class="d-block text-center">Belum Punya Akun? <a href="/register">Daftar Sekarang! </a> </small>
      <br><br>
    </main>
  </div>
  <p class="mt-5 mb-3 text-muted text-center">&copy; NICOURSE | 2022</p>
</div>
@endsection