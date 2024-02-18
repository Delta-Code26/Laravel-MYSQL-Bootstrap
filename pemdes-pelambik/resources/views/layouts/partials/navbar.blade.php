<nav class="py-2 bg-primary border-bottom">
    <div class="container d-flex flex-wrap">
        <div class="mt-2 text-light">
            <img src="{{ asset('assets/img/logo.png') }}" alt="">
        </div>
        <div class="align-items-center">
            <a href="/" class="logo d-flex align-items-center">
                <span class="d-none d-lg-block mt-4 text-light">DELTA NEWS</span>
            </a>
        </div>
        <ul class="nav position-absolute top-0 end-0 mt-2">
            <li class="nav-item"><a href="{{ asset('login') }}" class="nav-link link-dark mt-2 text-light">Login</a>
            </li>
            <li class="nav-item"><a href="{{ asset('daftar') }}" class="nav-link link-dark mt-2 text-light">Sign up</a>
            </li>
        </ul>
    </div>
</nav>
