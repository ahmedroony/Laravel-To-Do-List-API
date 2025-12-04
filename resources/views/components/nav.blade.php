<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Tasks</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('show.login') }}">login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('show.register') }}">register</a>
                    </li>
                @endguest
                @auth
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page">Hello "{{ Auth::user()->name }}"</a>
                    </li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <li class="nav-item">
                            <a class="nav-link" href="create">Create</a>
                        </li>
                        <button type="submit" class="nav-link" style="border: none; background: none; cursor: pointer;">
                            Logout
                        </button>
                    </form>
                @endauth
            </ul>
        </div>
    </div>
</nav>
