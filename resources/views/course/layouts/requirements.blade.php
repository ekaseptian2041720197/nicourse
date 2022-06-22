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

            <form action="/requirementspost/{{ $kursus->id }}" method="POST">

                @csrf
                <div class="mb-3 row">
                    <label for="requirements" class="col-sm-2 col-form-label text-dark">REQUIREMENTS</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-kursus @error('requirements') is-invalid @enderror"
                            id="requirements" value="{{ old('requirements') }}" name="requirements">

                        @error('requirements')
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
                    <a class="page-link" href="/outcomes" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>