<div class="container-fluid">
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
    </div>
    @endif
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">EDIT USER</h1>
    </div>

    <form class="user" action="/updateuser/{{ $user->id }}" method="POST">
        @method("put")
        @csrf
        <div class="form-group">
            <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" id="name"
                name="name" placeholder="Name" value="{{ $user->name }}">

            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <input type="text" class="form-control form-control-user @error('username') is-invalid @enderror"
                id="username" name="username" placeholder="Username" value="{{ $user->username }}">

            @error('username')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="email"
                name="email" placeholder="Email" value="{{ $user->email }}">

            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <hr>
        <button type="submit" class="btn btn-primary btn-user plus float-right">
            Simpan
        </button>

    </form>
</div>