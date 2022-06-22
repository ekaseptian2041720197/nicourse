<div class="card-header text-center">

    <div class="btn-group btn-group-lg">
        <a class="btn btn-secondary {{ Request::path() === 'basic' ? 'bg-dark' : 'disabled'}}" href="/basic">Basic</a>

        <a class="btn btn-secondary {{ Request::path() === 'requirements' ? 'bg-dark' : 'disabled'}}" href="/requirements">Requirements</a>

        <a class="btn btn-secondary {{ Request::path() === 'outcomes' ? 'bg-dark' : 'disabled'}}" href="/outcomes">Outcomes</a>

        <a class="btn btn-secondary {{ Request::path() === 'pricing' ? 'bg-dark' : 'disabled'}}" href="/pricing">Pricing</a>

        <a class="btn btn-secondary {{ Request::path() === 'media' ? 'bg-dark' : 'disabled'}}" href="/media">Media</a>
    </div>
</div>