<div class="sticky-top">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="/">Navbar w/ text</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/diagnosa/form">Diagnosa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tentang">Tentang</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    @guest
                        <a href="{{ route('login') }}" class="btn btn-info text-white rounded">Masuk</a>
                    @else
                        @if (Auth::user()->role === 'admin')
                            <a href="{{ route('admin.dashboard.index') }}"
                                class="btn text-info bg-info-subtle rounded">Dashboard Admin</a>
                        @elseif(Auth::user()->role === 'user')
                            <a href="{{ route('user.dashboard.index') }}"
                                class="btn text-info bg-info-subtle rounded">Dashboard
                                User</a>
                        @endif
                    @endguest
                </span>
            </div>
        </div>
    </nav>
</div>
