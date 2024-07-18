
<!-- Topbar Start -->
<div class="container-fluid bg-light ps-5 pe-0 d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center">
                <small class="py-2"><i class="far fa-clock text-primary me-2"></i>Opening Hours: Mon - Tues : 6.00 am - 10.00 pm, Sunday Closed </small>
            </div>
        </div>
        <div class="col-md-6 text-center text-lg-end">
            <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
                <div class="me-3 pe-3 border-end py-2">
                    <p class="m-0"><i class="fa fa-envelope-open me-2"></i>dentalcare@example.com</p>
                </div>
                <div class="py-2">
                    <p class="m-0"><i class="fa fa-phone-alt me-2"></i>+012 345 6789</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
    <a href="/" class="navbar-brand p-0">
        <img
            src="{{ asset('img/dentalLogo.png') }}"
            alt=""
            class="logo"
            style="max-width: 200px; max-height: 200px;"
            />
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ms-auto py-0">
            <li class="nav-item">
                <a href="/" class="nav-link active">Home</a>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="pagesDropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                <div class="dropdown-menu m-0" aria-labelledby="pagesDropdown">
                    <a href="team.html" class="dropdown-item">Our Dentist</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    <a href="appointment.html" class="dropdown-item">Appointment</a>
                </div>
            </li>
            {{-- Authorization name display --}}
            @if (Route::has('login'))
                @auth
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="accountDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        {{ auth()->user()->name }}
                    </a>
                    <div class="dropdown-menu m-0" aria-labelledby="accountDropdown">
                        <a href="{{ route('profile.show') }}" class="dropdown-item">Profile</a>
                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <a href="{{ route('api-tokens.index') }}" class="dropdown-item">API Tokens</a>
                        @endif
                        <div class="dropdown-divider"></div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item" onclick="event.preventDefault(); this.closest('form').submit();">
                                Log Out
                            </button>

                        </form>

                    </div>
                </li>
                @else
                <li class="nav-item">
                    <button type="button" class="btn text-dark" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
                </li>
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="btn btn-primary py-2 px-4 ms-3">Login</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('register') }}" class="btn btn-primary py-2 px-4 ms-3">Register</a>
                </li>
                @endauth
            @endif
        </ul>
    </div>
</nav>
<!-- Navbar End -->
