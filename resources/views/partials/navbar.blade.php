
<nav class="navbar navbar-default">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button
                    aria-controls="navbar"
                    aria-expanded="false"
                    data-target="#navbar"
                    data-toggle="collapse"
                    class="navbar-toggle collapsed"
                    type="button">

                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a href="{{ route('home') }}" class="navbar-brand">
                    <img src="{{ asset('images/logo.png') }}" alt="CAMS Logo">
                </a>
            </div>

            <div class="navbar-collapse collapse" id="navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="{{ request()->routeIs('home') ? 'current' : '' }}">
                        <a href="{{ route('home') }}">home</a>
                    </li>
                    <li class="ar">/</li>

                    <li class="{{ request()->routeIs('about') ? 'current' : '' }}">
                        <a href="{{ url('/about') }}">about</a>
                    </li>
                    <li class="ar">/</li>

                    <li class="{{ request()->routeIs('services') ? 'current' : '' }}">
    <a href="{{ route('services') }}">services</a>
</li>
                    <li class="ar">/</li>

                    <li  class="{{ request()->routeIs('portfolio') ? 'current' : '' }}">
                        <a href="{{ route('portfolio') }}">portfolio</a>
                    </li>
                    <li class="ar">/</li>

                    <li>
                        <a href="http://cams.webrekruit.com"
                           target="_blank" rel="noopener noreferrer">careers</a>
                    </li>
                    <li class="ar">/</li>

                    <li>
                        <a href="{{ url('/contact') }}">contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
