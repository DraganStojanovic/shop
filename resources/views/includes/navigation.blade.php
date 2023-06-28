 <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand {{ Request::path() ==  '/' ? 'active' : '' }}" href="{{ url('/') }}" href="/">SHOP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::path() ==  '/' ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::path() ==  'about-page' ? 'active' : '' }}" href="{{ url('/about-page') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::path() ==  'shop-page' ? 'active' : '' }}" href="{{ url('/shop-page') }}">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::path() ==  'contact-page' ? 'active' : '' }}" href="{{ url('/contact-page') }}">Contact</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
