@extends('templates.app')
@section('content')

<!-- Page Header -->
<header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Pentshi.com</h1>
                    <span class="subheading">Archive des Cours, examens, interrogations et travaux pratiques des vos universités</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        @if (!empty($courses))
        <div class="col-lg-8 col-md-10 mx-auto">
            @foreach($courses as $course)
            <div class="post-preview">
                <a href="/detail/course/{{ $course->id }}">
                    <h2 class="post-title">
                        {{ $course->titre }}
                    </h2>
                    <h3 class="post-subtitle">
                        Cours <span>{{ $course->promotion }}</span>
                    </h3>
                </a>
                <p class="post-meta">{{ $course->university }},<a href="#">{{ $course->faculty }},</a> {{ $course->year }}</p>
            </div>
            <hr>
            @endforeach
        </div>
        @else
        <h3 class="post-title">
            Oups! Cette bibliotheque est encore vide!
        </h3>
        @endif
    </div>
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
        </div>
        @else
        <h3 class="post-title">
            Oups! Cette bibliotheque est encore vide!
        </h3>
        @endif
    </div>
</div>
<hr>
@endsection
