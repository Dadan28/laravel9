<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Laravel 9</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @foreach ($navbar as $name => $url)
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ $url }}">{{ $name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
