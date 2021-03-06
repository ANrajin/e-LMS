@extends('layouts.app')

@section('title', 'Lesson Preview')

@section('content')
    <div class="navbar navbar-light border-0 navbar-expand">
        <div class="container page__container">
            <div class="media flex-nowrap">
                <div class="media-left mr-16pt">
                    <a href="student-course.html"><img src="/assets/images/paths/angular_64x64.png"
                                width="40"
                                alt="Angular"
                                class="rounded"></a>
                </div>
                <div class="media-body">
                    <a href="student-course.html"
                        class="card-title text-body mb-0">Angular Fundamentals</a>
                    <p class="lh-1 d-flex align-items-center mb-0">
                        <span class="text-50 small font-weight-bold mr-8pt">Elijah Murray</span>
                        <span class="text-50 small">Software Engineer and Developer</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-primary pb-lg-64pt py-32pt">
        <div class="container page__container">
            <nav class="course-nav">
                <a data-toggle="tooltip"
                    data-placement="bottom"
                    data-title="Getting Started with Angular: Introduction"
                    href=""><span class="material-icons">lock</span></a>
                <a data-toggle="tooltip"
                    data-placement="bottom"
                    data-title="Getting Started with Angular: Introduction to TypeScript"
                    href=""><span class="material-icons text-primary">account_circle</span></a>
                <a data-toggle="tooltip"
                    data-placement="bottom"
                    data-title="Getting Started with Angular: Comparing Angular to AngularJS"
                    href=""><span class="material-icons">lock</span></a>
                <a data-toggle="tooltip"
                    data-placement="bottom"
                    data-title="Getting Started with Angular: Lesson 4"
                    href=""><span class="material-icons">lock</span></a>
            </nav>
            <div class="js-player embed-responsive embed-responsive-16by9 mb-32pt">
                <div class="player embed-responsive-item">
                    <div class="player__content">
                        <div class="player__image"
                                style="--player-image: url(/assets/images/illustration/player.svg)"></div>
                        <a href=""
                            class="player__play bg-primary">
                            <span class="material-icons">play_arrow</span>
                        </a>
                    </div>
                    <div class="player__embed d-none">
                        <iframe class="embed-responsive-item"
                                src="https://player.vimeo.com/video/97243285?title=0&amp;byline=0&amp;portrait=0"
                                allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-wrap align-items-end mb-16pt">
                <h1 class="text-white flex m-0">Introduction to TypeScript</h1>
                <p class="h1 text-white-50 font-weight-light m-0">50:13</p>
            </div>

            <p class="hero__lead measure-hero-lead text-white-50 mb-24pt">JavaScript is now used to power backends, create hybrid mobile applications, architect cloud solutions, design neural networks and even control robots. Enter TypeScript: a superset of JavaScript for scalable, secure, performant and feature-rich applications.</p>

            <div class="d-flex flex-column flex-sm-row align-items-center justify-content-start">
                <a href="lesson.html"
                    class="btn btn-outline-white mb-16pt mb-sm-0 mr-sm-16pt">Watch trailer <i class="material-icons icon--right">play_circle_outline</i></a>
                <a href="pricing.html"
                    class="btn btn-white">Get started</a>
            </div>
        </div>
    </div>
    <div class="navbar navbar-expand-sm navbar-light bg-white border-bottom-2 navbar-list p-0 m-0 align-items-center">
        <div class="container page__container">
            <ul class="nav navbar-nav flex align-items-sm-center">
                <li class="nav-item navbar-list__item">
                    <div class="media align-items-center">
                        <span class="media-left mr-16pt">
                            <img src="/assets/images/people/50/guy-6.jpg"
                                    width="40"
                                    alt="avatar"
                                    class="rounded-circle">
                        </span>
                        <div class="media-body">
                            <a class="card-title m-0"
                                href="teacher-profile.html">Eddie Bryan</a>
                            <p class="text-50 lh-1 mb-0">Instructor</p>
                        </div>
                    </div>
                </li>
                <li class="nav-item navbar-list__item">
                    <i class="material-icons text-muted icon--left">schedule</i>
                    2h 46m
                </li>
                <li class="nav-item navbar-list__item">
                    <i class="material-icons text-muted icon--left">assessment</i>
                    Beginner
                </li>
                <li class="nav-item ml-sm-auto text-sm-center flex-column navbar-list__item">
                    <div class="rating rating-24">
                        <div class="rating__item"><i class="material-icons">star</i></div>
                        <div class="rating__item"><i class="material-icons">star</i></div>
                        <div class="rating__item"><i class="material-icons">star</i></div>
                        <div class="rating__item"><i class="material-icons">star</i></div>
                        <div class="rating__item"><i class="material-icons">star_border</i></div>
                    </div>
                    <p class="lh-1 mb-0"><small class="text-muted">20 ratings</small></p>
                </li>
            </ul>
        </div>
    </div>
@endsection

@push('js')
    <!-- Moment.js -->
    <script src="{{asset('assets/vendor/moment.min.js')}}"></script>
    <script src="{{asset('assets/vendor/moment-range.js')}}"></script>

    <!-- Flatpickr -->
    <script src="{{asset('assets/vendor/flatpickr/flatpickr.min.js')}}"></script>
    <script src="{{asset('assets/js/flatpickr.js')}}"></script>



    <!-- List.js -->
    <script src="{{asset('assets/vendor/list.min.js')}}"></script>
    <script src="{{asset('assets/js/list.js')}}"></script>

    <!-- Tables -->
    <script src="{{asset('assets/js/toggle-check-all.js')}}"></script>
    <script src="{{asset('assets/js/check-selected-row.js')}}"></script>
@endpush
