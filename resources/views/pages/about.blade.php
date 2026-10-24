
@extends('layouts.app')

@section('title', 'Digital Agency - Dubai, Bangalore, Cochin - About Us')

@section('description', 'CAMS is a digital agency in UAE and India providing web design, web applications, portals, e-commerce solutions, CRM and other web-based software.')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/style1.css') }}">
<link rel="stylesheet" href="{{ asset('css/hover_main.css') }}">
@endpush

@section('content')

{{-- Page heading --}}
<div class="container sm_mrgn">
    <div class="row h2_bot">
        <h1>About</h1>
    </div>
</div>

{{-- About CAMS --}}
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 inner_sec">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 about_cont">
                    <div class="row">
                        <h3>A passion for design</h3>

                        <p>
                            CAMS provides consulting, web and internet solutions
                            for clients across the globe. For over a decade, we
                            have created websites, applications, portals,
                            e-commerce solutions, CRM and other web-based
                            software for clients across the world. Throughout
                            our evolution and growth, we have never lost our
                            passion for design.
                        </p>

                        <p>
                            We strive to create designs that inspire, excite
                            and amaze. We have an intense passion that is
                            reflected in our work and has been instrumental
                            in our success. We have delivered over 1000
                            websites and applications. This experience gives
                            us the perspective necessary to exceed all of
                            your digital requirements.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 about_img">
                    <div class="row">
                        <div class="about_img1">
                            <img src="{{ asset('images/about_img1_colr.jpg') }}"
                                 alt="CAMS web design and digital solutions">
                        </div>

                        <div class="about_img1">
                            <img src="{{ asset('images/about_img2_clr.jpg') }}"
                                 alt="CAMS creative projects">
                        </div>
                    </div>

                    <div class="row">
                        <div class="about_img1">
                            <img src="{{ asset('images/about_img3_clr.jpg') }}"
                                 alt="CAMS digital services">
                        </div>

                        <div class="about_img1">
                            <img src="{{ asset('images/about_img4_clr.jpg') }}"
                                 alt="CAMS web development team">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

{{-- Our Process --}}
<div class="container-fluid black_sec">
    <div class="container sm_mrgn">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">

                    <h3>Our Process</h3>

                    <p>
                        Our design process follows a proven five-step approach.
                        We begin with a deep understanding of your needs and
                        create a planning template. Next, we provide wireframes
                        and mockups that allow you to visualize the structure
                        we are developing. Our time-tested approach to quality
                        control helps ensure that the end product will be
                        user-friendly and beautiful.
                    </p>

                    <div class="clearfix"></div>
                    <div class="line"></div>

                    <div class="proc_ico">

                        {{-- Planning --}}
                        <div id="main">
                            <div id="fabr"
                                 class="hotspot right"
                                 data-day="21.15"
                                 data-night="21"
                                 data-speed="3">
                            </div>

                            <div id="hohl"
                                 class="hotspot left"
                                 data-day="25.5"
                                 data-night="22.25"
                                 data-speed="2.2">

                                <div class="ico_head">Planning</div>

                                <div class="content">
                                    <img class="bubble-bg"
                                         src="{{ asset('images/round.png') }}"
                                         alt="">

                                    <h2>
                                        <img src="{{ asset('images/plan.png') }}"
                                             alt="Planning">
                                    </h2>

                                    <div class="links">
                                        The first and most important step of
                                        the project: requirements are discussed
                                        in detail. This results in the
                                        finalization of specifications and
                                        delivery of wireframes or mockups.
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Design --}}
                        <div id="main2">
                            <div id="fabr2"
                                 class="hotspot2"
                                 data-day="21.15"
                                 data-night="21"
                                 data-speed="3">
                            </div>

                            <div id="hohl2"
                                 class="hotspot2"
                                 data-day="25.5"
                                 data-night="22.25"
                                 data-speed="2.2">

                                <div class="ico_head">Design</div>

                                <div class="content">
                                    <img class="bubble-bg"
                                         src="{{ asset('images/round.png') }}"
                                         alt="">

                                    <h2>
                                        <img src="{{ asset('images/design.png') }}"
                                             alt="Design">
                                    </h2>

                                    <div class="links">
                                        Website designs are created based
                                        on brand guidelines, user requirements
                                        and industry standards.
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Development --}}
                        <div id="main3">
                            <div id="fabr3"
                                 class="hotspot3"
                                 data-day="21.15"
                                 data-night="21"
                                 data-speed="3">
                            </div>

                            <div id="hohl3"
                                 class="hotspot3"
                                 data-day="25.5"
                                 data-night="22.25"
                                 data-speed="2.2">

                                <div class="ico_head">Development</div>

                                <div class="content">
                                    <img class="bubble-bg"
                                         src="{{ asset('images/round.png') }}"
                                         alt="">

                                    <h2>
                                        <img src="{{ asset('images/devlp.png') }}"
                                             alt="Development">
                                    </h2>

                                    <div class="links">
                                        Involves programming, database and
                                        CMS development using technologies
                                        such as .NET, PHP, Ajax, SQL Server
                                        and MySQL.
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Testing --}}
                        <div id="main4">
                            <div id="fabr4"
                                 class="hotspot4"
                                 data-day="21.15"
                                 data-night="21"
                                 data-speed="3">
                            </div>

                            <div id="hohl4"
                                 class="hotspot4"
                                 data-day="25.5"
                                 data-night="22.25"
                                 data-speed="2.2">

                                <div class="ico_head">Testing</div>

                                <div class="content">
                                    <img class="bubble-bg"
                                         src="{{ asset('images/round.png') }}"
                                         alt="">

                                    <h2>
                                        <img src="{{ asset('images/test.png') }}"
                                             alt="Testing">
                                    </h2>

                                    <div class="links">
                                        The website is fully tested and bugs
                                        are resolved. Final adjustments are
                                        also made based on client suggestions.
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Launch --}}
                        <div id="main5">
                            <div id="fabr5"
                                 class="hotspot5"
                                 data-day="21.15"
                                 data-night="21"
                                 data-speed="3">
                            </div>

                            <div id="hohl5"
                                 class="hotspot5"
                                 data-day="25.5"
                                 data-night="22.25"
                                 data-speed="2.2">

                                <div class="ico_head">Launch</div>

                                <div class="content">
                                    <img class="bubble-bg"
                                         src="{{ asset('images/round.png') }}"
                                         alt="">

                                    <h2>
                                        <img src="{{ asset('images/launch.png') }}"
                                             alt="Launch">
                                    </h2>

                                    <div class="links">
                                        The final stage: the website or
                                        application is transferred to the
                                        hosting server and is ready to go live.
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

{{-- Clients --}}
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 inner_sec">
    <div class="row">
        <div class="container sm_mrgn inn_sec">
            <div class="row">

                <h3>Clients</h3>

                <p>
                    We have created websites for leading companies in a
                    variety of industries such as hospitality, healthcare,
                    retail, fashion, engineering and travel. Here are some
                    of the clients we have worked with recently.
                </p>

                @php
                    $clientRows = [
                        [
                            ['ng_h.jpg', 'National Geographic'],
                            ['er_h.jpg', 'Etihad Rail'],
                            ['nbad_h.jpg', 'NBAD'],
                            ['abnif_h.jpg', 'ABN'],
                        ],
                        [
                            ['memacogilvy.jpg', 'Memac Ogilvy'],
                            ['htc_h.jpg', 'HTC'],
                            ['cgh-earth.jpg', 'CGH Earth'],
                            ['wr_h.jpg', 'Webrekruit'],
                        ],
                        [
                            ['art_h.jpg', 'Client'],
                            ['asdaa.jpg', 'ASDA’A'],
                            ['spf_h.jpg', 'Client'],
                            ['pc_h.jpg', 'Client'],
                        ],
                    ];
                @endphp

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    @foreach ($clientRows as $row)
                        <div class="row">
                            @foreach ($row as $client)
                                <div class="cli_img">
                                    <img
                                        src="{{ asset('images/' . $client[0]) }}"
                                        alt="{{ $client[1] }}"
                                        loading="lazy">
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    // Keep any additional About-page interaction scripts here.
    // The original hover effects should work with hover_main.css
    // and their corresponding JavaScript, if your site uses one.
</script>
@endpush
