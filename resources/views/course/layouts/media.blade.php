<div class="card">
    <div class="container my-4">
        <div class="card-body text-center">
            <h4 class="mb-4">KELOLA DATA COURSE</h4>
        </div>

        {{-- Nav --}}
        @include('course.layouts.nav')

        <div class="card-body">
            <form>
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12">

                            <p>
                                https://www.youtube.com/watch?v=pTA7Rl3SLGw
                                <br>
                                https://www.youtube.com/watch?v=0iAUo8W-nDQ
                            </p>

                            <form>
                                <div class="form-group">
                                    <input class="form-control url" placeholder="Paste YouTube Video URL" />
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-success">Show Video</button>
                                </div>
                            </form>

                        </div>

                        <div class="col-lg-12">

                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>