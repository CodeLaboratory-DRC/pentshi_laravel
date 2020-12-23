@extends('templates.app')

@section('content')

<!-- Page Header -->
<header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Cours</h1>
                    <span class="subheading">Cours des universités</span>
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
            {{-- Pagination --}}
            <div class="d-flex justify-content-center">
                {!! $courses->links() !!}
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
