<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ url('public/assets/images/header logo .png') }}"
            width="74%" class="img-fluid" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    About Us
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ url('about') }}">About Us</a>
                    <a class="dropdown-item" href="{{ url('house/rules') }}">House Rules</a>
                    <a class="dropdown-item" href="{{ url('safety') }}">Safety</a>
                    <a class="dropdown-item" href="{{ url('location') }}">Location</a>
                    <a class="dropdown-item" href="{{ url('venue') }}">Venue</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('membership-plans') }}">Membership Plans</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('team') }}">FAQ'S</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('contact') }}">Contact</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('login') }}"><i class="fa fa-user-circle" aria-hidden="true"></i>
                    Login</a>
            </li>
        </ul>
    </div>
</nav>
