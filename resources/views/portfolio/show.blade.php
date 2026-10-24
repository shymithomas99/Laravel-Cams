
@extends('layouts.app')

@section('title', $project['title'] . ' - CAMS Portfolio')

@section('description', $project['description'])

@section('content')
<div class="container">
    <div class="row t_p">
        <h1>{{ $project['title'] }}</h1>

        <p class="web">{{ $project['category'] }}</p>

        <div class="lg-img">
            <img
                src="{{ asset('uploads/portfolio/home/' . $project['image']) }}"
                alt="{{ $project['title'] }}"
                class="img-responsive">
        </div>

        <p>{{ $project['description'] }}</p>

        <p>
            <a href="{{ route('portfolio') }}">Back to portfolio</a>
        </p>
    </div>
    
</div>

<div id="gallery-content">
    <div id="gallery-content-center">
       

        @foreach ($portfolios as $portfolio)
            <div class="cont1 all {{ $portfolio->category_id }}">

                <h4>
                    <a href="{{ route('portfolio.show', $portfolio->id) }}">
                        {{ $portfolio->title }}
                    </a>
                </h4>

                <p>
                    <a href="{{ route('portfolio.show', $portfolio->id) }}">
                        {{ $portfolio->description }}
                    </a>
                </p>

                <a href="{{ route('portfolio.show', $portfolio->id) }}">
                    <img
                        src="{{ asset('uploads/portfolio/listing/' . $portfolio->image) }}"
                        class="thumb-img"
                        alt="{{ $portfolio->title }}"
                        loading="lazy"
                    >
                </a>

            </div>
        @endforeach

    </div>
</div>
@endsection
