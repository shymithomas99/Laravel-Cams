
@extends('layouts.app')

@section('title', 'Digital Agency - Dubai, Bangalore, Cochin - Services')

@section('description', 'CAMS provides web design, WordPress development, digital marketing, web applications and mobile application development services in UAE and India.')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
@endpush

@section('content')

{{-- Page heading --}}
<div class="container">
    <div class="row h2_bot">
        <h1>Services</h1>
    </div>
</div>

{{-- Introduction --}}
<div class="container">
    <div class="row">
        <p>
            Whether you are a corporate requiring a digital marketing
            roadmap or a startup working on a tight budget, we can make
            your business more profitable. Premium services at a
            competitive price is the CAMS difference. From strategy,
            digital marketing, design, programming and optimization,
            our services are geared toward making your internet presence
            attractive, profitable and efficient. Click on each service
            below to know more.
        </p>
    </div>
</div>

{{-- Services listing --}}
<div class="container">
    <div class="row">
        <div class="serv_main">
            <div class="servc_listng_main">

                {{-- WordPress Development --}}
                <div class="servc_listng">
                    <div class="icon">
                        <p>WordPress Development</p>

                        <div class="serv_img">
                            <img src="{{ asset('images/wordpress.png') }}"
                                 alt="WordPress Development">
                        </div>
                    </div>

                    <div class="list_cont">
                        <p>
                            We offer customized websites that you can
                            maintain easily, including content, images,
                            multimedia and other crucial data. Our
                            programmers use WordPress themes, templates,
                            modules and plugins to improve your website.
                            This platform is acclaimed for its
                            multitasking, spam resistance and ease of
                            customization.
                        </p>

                        <div class="clearfix"></div>

                        <a class="btn"
                           href="{{ route('portfolio') }}?sec=4">
                            View &nbsp;&nbsp;
                            <i class="fa fa-long-arrow-right"></i>
                        </a>
                        <br>
                    </div>
                </div>

            </div>

            {{-- Digital Marketing --}}
            <div class="serc_main">
                <div class="icon">
                    <div class="ico_inner">
                        <p>Digital Marketing</p>

                        <div class="serv_img">
                            <img src="{{ asset('images/digi.png') }}"
                                 alt="Digital Marketing">
                        </div>
                    </div>
                </div>

                <div class="list_cont">
                    <p>
                        In today's world, interaction and digital play
                        a pivotal role. We believe successful online
                        strategies have the potential to surprise and
                        delight customers, reinvent categories or even
                        redefine an entire industry. CAMS helps companies
                        reach digital and mobile audiences through
                        innovative marketing strategies across search
                        optimization, pay-per-click marketing and
                        content development.
                    </p>

                    <p>
                        Social media management - Facebook, Twitter
                        and YouTube | Search engine optimization |
                        Pay-per-click campaigns | Email and newsletter
                        campaigns
                    </p>

                    <div class="clearfix"></div>
                </div>
            </div>

            {{-- Web Applications --}}
            <div class="serc_main">
                <div class="icon">
                    <div class="ico_inner">
                        <p>Web Applications</p>

                        <div class="serv_img">
                            <img src="{{ asset('images/web_appli.png') }}"
                                 alt="Web Applications">
                        </div>
                    </div>
                </div>

                <div class="list_cont">
                    <p>
                        There is no business like e-business. The web has
                        transformed the way business is done. Whether
                        you need an e-commerce store, an online portal
                        or a custom web application, we have an extensive
                        portfolio to support our work. We help startups,
                        corporations, government organizations and small
                        and medium enterprises leverage the internet to
                        attract customers, streamline operations,
                        process orders and collect payments.
                    </p>

                    <p>
                        E-Commerce | Portals | Content Management Systems |
                        Newsletters
                    </p>

                    <div class="clearfix"></div>
                </div>
            </div>

            {{-- Website Design --}}
            <div class="serc_main">
                <div class="icon">
                    <div class="ico_inner">
                        <p>Website Design</p>

                        <div class="serv_img">
                            <img src="{{ asset('images/web_desgn.png') }}"
                                 alt="Website Design">
                        </div>
                    </div>
                </div>

                <div class="list_cont">
                    <p>
                        Websites are more than what you see on the
                        surface. Behind the scenes, colors, programming
                        languages, web hosting, optimization and database
                        management all require careful attention. We
                        transform your vision into a beautiful website
                        that earns the appreciation and business of
                        your customers. We work closely with you to
                        provide the right solution and build long-term
                        relationships.
                    </p>

                    <p>
                        Corporate Websites | Flash Websites |
                        Online Catalogues
                    </p>

                    <div class="clearfix"></div>
                </div>
            </div>

            {{-- Mobile Applications --}}
            <div class="serc_main">
                <div class="icon">
                    <div class="ico_inner">
                        <p>Mobile Applications</p>

                        <div class="serv_img">
                            <img src="{{ asset('images/mobi.png') }}"
                                 alt="Mobile Applications">
                        </div>
                    </div>
                </div>

                <div class="list_cont">
                    <p>
                        Connect with your customers wherever they are.
                        We design and build customer-friendly mobile
                        applications that help people make purchases,
                        conduct transactions, find information and
                        engage with your business on the go.
                    </p>

                    <p>
                        iPhone and iPad Applications |
                        Android Applications |
                        Mobile Websites |
                        Flash/Flex Applications
                    </p>

                    <div class="clearfix"></div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
