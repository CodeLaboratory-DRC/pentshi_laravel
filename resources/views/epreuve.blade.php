@extends('templates.app')

@section('content')


<!-- Page Header -->
<header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Epreuves</h1>
                    <span class="subheading">Examens, interrogations et travaux pratiques des universités</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        @if (!empty($exams))
        <div class="col-lg-8 col-md-10 mx-auto">
            @foreach($exams as $exam)
            <div class="post-preview">
                <a href="/detail/exams/{{ $exam->id }}">
                    <h2 class="post-title">
                        {{ $exam->titre }}
                    </h2>
                    <h3 class="post-subtitle">
                        {{ $exam->type }} <span>{{ $exam->promotion }}</span>
                    </h3>
                </a>
                <p class="post-meta">{{ $exam->university }},<a href="#">{{ $exam->faculty }},</a> {{ $exam->year }}</p>

            </div>
            <hr>
            @endforeach
            {{-- Pagination --}}
            <div class="d-flex justify-content-center">
                {!! $exams->links() !!}
            </div>
        </div>
        @else
        <h3 class="post-subtitle">
            Oups! Cette bibliotheque est encore vide!
        </h3>
        @endif
    </div>
</div>

<hr>

@endsection
