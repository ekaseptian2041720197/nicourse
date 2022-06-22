<div class="card">

    <div class="container my-4">
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
        @endif
        <div class="card-body text-center">
            <h4 class="mb-4">KELOLA DATA COURSE</h4>
        </div>

        {{-- Nav --}}
        @include('course.layouts.nav')

        <div class="card-body">

            <form action="/basicpost" method="POST">

                @csrf
                <div class="mb-3 row">
                    <label for="judul" class="col-sm-2 col-form-label text-dark">JUDUL</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-kursus @error('judul') is-invalid @enderror"
                            id="judul" value="{{ old('judul') }}" name="judul">

                        @error('judul')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="subjudul" class="col-sm-2 col-form-label text-dark">SUB JUDUL</label>
                    <div class="col-sm-10">
                        <input type="text"
                            class="form-control form-control-kursus @error('subjudul') is-invalid @enderror"
                            id="subjudul" value="{{ old('subjudul') }}" name="subjudul">

                        @error('subjudul')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="deskripsi" class="col-sm-2 col-form-label text-dark">DESKRIPSI</label>
                    <div class="col-sm-10">
                        <textarea class="form-control form-control-kursus @error('deskripsi') is-invalid @enderror"
                            id="deskripsi" value="{{ old('deskripsi') }}" name="deskripsi"></textarea>

                        @error('deskripsi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="kategori" class="col-sm-2 col-form-label text-dark">KATEGORI</label>
                    <div class="col-sm-10">
                        <select class="form-select" id="kategori" name="kategori_id">
                            @foreach ($kategori as $k)
                            <option value="{{ $k->id }}">{{ $k->name }}</option>
                            @endforeach
                        </select>
                        @error('kategori')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="level" class="col-sm-2 col-form-label text-dark">LEVEL</label>
                    <div class="col-sm-10">
                        <select class="form-select" id="level" name="level">
                            @foreach ($level as $l)
                            @if (old('level') === $l->namelevel)
                            <option value="{{ $l->namelevel }}" selected>{{ $l->namelevel }}</option>
                            @else
                            <option value="{{ $l->namelevel }}">{{ $l->namelevel }}</option>
                            @endif
                            @endforeach
                        </select>
                        @error('level')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-user plus float-right">
                    Simpan
                </button>
            </form>



        </div>
        {{-- Paginate --}}
        <nav aria-label="Page navigation example justify">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item">
                    <a class="btn btn-primary btn-lg" href="/requirements" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>