<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top" data-aos="fade-down">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ url('/images/logo.png') }}" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ \Route::current()->getName() == 'index' ? 'active' : '' }}">
                    <a class="nav-link" href="/">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/categories.html">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Rewards</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-inline-block " href="/cart">
                        <img src="/images/icon-cart-filled.svg" alt="" />
                        {{-- <div class="cart-badge">3</div> --}}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register.html">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-success nav-link px-4 text-white" href="/login.html">Sign In</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
