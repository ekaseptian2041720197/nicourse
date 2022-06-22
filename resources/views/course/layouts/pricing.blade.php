<div class="card">
    <div class="container my-4">
        <div class="card-body text-center">
            <h4 class="mb-4">KELOLA DATA COURSE</h4>
        </div>

        {{-- Nav --}}
        @include('course.layouts.nav')

        <div class="card-body">
            <form>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>