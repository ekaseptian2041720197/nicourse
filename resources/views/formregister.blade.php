@extends('layouts.mainform')

@section('formcontent')
<div class="row justify-content-center">
  <div class="col-md-5">
    <main class="form-registration">
      <h1 class="h3 mb-3 fw-normal">Registration</h1>
      <form class="user" action="/register" method="POST">
        @csrf
        <div class="form-floating">
          <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" id="name"
            name="name" placeholder="Name" value="{{ old('name') }}">

          @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <br>
        <div class="form-floating">
          <input type="text" class="form-control form-control-user @error('username') is-invalid @enderror"
            id="username" name="username" placeholder="Username" value="{{ old('username') }}">

          @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <br>
        <div class="form-floating">
          <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="email"
            name="email" placeholder="Email" value="{{ old('email') }}">

          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <br>
        <div class="form-floating">
          <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror"
            id="password" name="password" placeholder="Password" value="{{ old('password') }}">

          @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <br>
        <button class="w-100 btn btn-lg btn-primary" type="submit">REGISTER</button>
      </form>
      <small class="d-block text-center">Sudah Punya Akun? <a href="/login">Silahkan Login!</a> </small>
    </main>
  </div>
  <p class="mt-5 mb-3 text-muted text-center">&copy; NICOURSE | 2022</p>
</div>
@endsection