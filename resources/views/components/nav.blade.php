<nav class="navbar navbar-expand-lg bg-dark fixed-top shadow" data-bs-theme="dark">
    <div class="container-fluid">
        <div style="width: 215px;">
            <a class="navbar-brand text-white" href="{{ route('home') }}">
                <img src="/img/logo.webp" alt="" style="max-height : 45px;">
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 ">
            </ul>
            <form class="d-flex" role="search" action="{{ route('search') }}" method="POST">
                @csrf
                <input class="form-control me-2" type="search" placeholder="Cerca Album..." aria-label="Search"
                    name="search">
                <button class="btn btn-success" type="submit">Cerca</button>
            </form>
        </div>
    </div>
</nav>
