<section>
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

                <form class="course-form" action="/basicpost" method="POST">

                    @csrf
                    <div class="form-section">
                        <div class="mb-3 row">
                            <label for="judul" class="col-sm-2 col-form-label text-dark">JUDUL</label>
                            <div class="col-sm-10">
                                <input type="text"
                                    class="form-control form-control-course-form @error('judul') is-invalid @enderror"
                                    id="judul" value="{{ old('judul') }}" name="judul" required>

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
                                    class="form-control form-control-course-form @error('subjudul') is-invalid @enderror"
                                    id="subjudul" value="{{ old('subjudul') }}" name="subjudul" required>

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
                                <textarea
                                    class="form-control form-control-course-form @error('deskripsi') is-invalid @enderror"
                                    id="deskripsi" value="{{ old('deskripsi') }}" name="deskripsi" required></textarea>

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
                    </div>

                    <div class="form-section">
                        <div class="mb-3 row">
                            <label for="requirements" class="col-sm-2 col-form-label text-dark">REQUIREMENTS</label>
                            <div class="col-sm-10">
                                <input type="text"
                                    class="form-control form-control-course-form @error('requirements') is-invalid @enderror"
                                    id="requirements" value="{{ old('requirements') }}" name="requirements" required>

                                @error('requirements')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <div class="mb-3 row">
                            <label for="outcomes" class="col-sm-2 col-form-label text-dark">OUTCOMES</label>
                            <div class="col-sm-10">
                                <input type="text"
                                    class="form-control form-control-course-form @error('outcomes') is-invalid @enderror"
                                    id="outcomes" value="{{ old('outcomes') }}" name="outcomes" required>

                                @error('outcomes')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-navigation">
                        <button type="button" class="previous btn btn-info float-left">Previous</button>
                        <button type="button" class="next btn btn-info float-right">Next</button>
                        <button type="submit" class="btn btn-success float-right">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>