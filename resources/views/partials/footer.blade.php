
<footer class="post">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="bod_f"></div>

                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                        <div class="ftr">
                            <ul>
                                <li><a href="{{ route('home') }}">home</a></li>
                                <li class="fo">/</li>
                                <li><a href="{{ url('/about') }}">about</a></li>
                                <li class="fo">/</li>
                                <li><a href="{{ url('/services') }}">services</a></li>
                                <li class="fo">/</li>
                                <li><a href="{{ route('portfolio') }}">portfolio</a></li>
                                <li class="fo">/</li>
                                <li>
                                    <a href="http://cams.webrekruit.com"
                                       target="_blank"
                                       rel="noopener noreferrer">careers</a>
                                </li>
                                <li class="fo">/</li>
                                <li><a href="{{ url('/contact') }}">contact</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                        <div class="fllo">
                            <ul>
                                <li>Follow Us</li>
                                <li>
                                    <a href="https://www.facebook.com/pages/CAMS/147442275139?ref=hl"
                                       target="_blank"
                                       rel="noopener noreferrer"
                                       aria-label="Facebook">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/camstech"
                                       target="_blank"
                                       rel="noopener noreferrer"
                                       aria-label="X">
                                        <i class="fa-brands fa-x-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="copy">
                Copyright &copy; {{ date('Y') }} CAMS.
            </div>
        </div>
    </div>
</footer>
