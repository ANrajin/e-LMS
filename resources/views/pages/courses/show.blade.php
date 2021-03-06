@extends('layouts.guest')

@section('content')
    <div class="mdk-header-layout__content page-content ">

        <div class="page-section bg-alt border-bottom-2">
            <div class="container page__container">

                <div class="d-flex flex-column flex-lg-row align-items-center">
                    <div class="d-flex flex-column flex-md-row align-items-center flex mb-16pt mb-lg-0 text-center text-md-left">
                        <div class="avatar avatar mb-16pt mb-md-0 mr-md-16pt">
                            <img src="/assets/images/paths/angular_64x64.png"
                                    class="avatar-img rounded"
                                    alt="lesson">
                        </div>
                        <div class="flex">
                            <h1 class="h2 m-0">Angular Fundamentals</h1>
                            <div class="rating mb-8pt d-inline-flex">
                                <div class="rating__item"><i class="material-icons">star</i></div>
                                <div class="rating__item"><i class="material-icons">star</i></div>
                                <div class="rating__item"><i class="material-icons">star</i></div>
                                <div class="rating__item"><i class="material-icons">star</i></div>
                                <div class="rating__item"><i class="material-icons">star_border</i></div>
                            </div>
                        </div>
                    </div>
                    <div class="ml-lg-16pt">
                        <a href="courses.html"
                            class="btn btn-light">Library</a>
                    </div>
                </div>

            </div>
        </div>

        <div class="page-section border-bottom-2">
            <div class="container page__container">

                <div class="row">
                    <div class="col-lg-8">

                        <div class="js-player card bg-primary text-center embed-responsive embed-responsive-16by9 mb-24pt">
                            <div class="player embed-responsive-item">
                                <div class="player__content align-items-center justify-content-center">
                                    <p class="lead text-white-70 measure-lead">It???s not every day that one of the most important front-end libraries in web development gets a complete overhaul. Keep your skills relevant and up-to-date with this comprehensive introduction to Google???s popular community project.</p>

                                    <div class="d-flex flex-column flex-sm-row align-items-center justify-content-center">
                                        <a href="student-lesson.html"
                                            class="btn btn-outline-white">Watch trailer <i class="material-icons icon--right">play_circle_outline</i></a>
                                    </div>
                                </div>
                                <div class="player__embed d-none">
                                    <iframe class="embed-responsive-item"
                                            src="https://player.vimeo.com/video/97243285?title=0&amp;byline=0&amp;portrait=0"
                                            allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>

                        <div class="mb-24pt">
                            <span class="chip chip-outline-secondary d-inline-flex align-items-center">
                                <i class="material-icons icon--left">schedule</i>
                                2h 46m
                            </span>
                            <span class="chip chip-outline-secondary d-inline-flex align-items-center">
                                <i class="material-icons icon--left">assessment</i>
                                Beginner
                            </span>
                        </div>

                        <div class="row mb-24pt">
                            <div class="col-md-7">
                                <div class="page-separator">
                                    <div class="page-separator__text">About this course</div>
                                </div>
                                <p class="text-70">This course will teach you the fundamentals o*f working with Angular 2. You *will learn everything you need to know to create complete applications including: components, services, directives, pipes, routing, HTTP, and even testing.</p>
                                <p class="text-70 mb-0">This course will teach you the fundamentals o*f working with Angular 2. You *will learn everything you need to know to create complete applications including: components, services, directives, pipes, routing, HTTP, and even testing.</p>
                            </div>
                            <div class="col-md-5">
                                <div class="page-separator">
                                    <div class="page-separator__text ">What you???ll learn</div>
                                </div>
                                <ul class="list-unstyled">
                                    <li class="d-flex align-items-center">
                                        <span class="material-icons text-50 mr-8pt">check</span>
                                        <span class="text-70">Fundamentals of working with Angular</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <span class="material-icons text-50 mr-8pt">check</span>
                                        <span class="text-70">Create complete Angular applications</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <span class="material-icons text-50 mr-8pt">check</span>
                                        <span class="text-70">Working with the Angular CLI</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <span class="material-icons text-50 mr-8pt">check</span>
                                        <span class="text-70">Understanding Dependency Injection</span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <span class="material-icons text-50 mr-8pt">check</span>
                                        <span class="text-70">Testing with Angular</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="page-separator">
                            <div class="page-separator__text">Student Feedback</div>
                        </div>
                        <div class="row mb-32pt">
                            <div class="col-md-3 mb-32pt mb-md-0">
                                <div class="display-1">4.7</div>
                                <div class="rating rating-24">
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star_border</span></span>
                                </div>
                                <p class="text-muted mb-0">20 ratings</p>
                            </div>
                            <div class="col-md-9">

                                <div class="row align-items-center mb-8pt"
                                        data-toggle="tooltip"
                                        data-title="75% rated 5/5"
                                        data-placement="top">
                                    <div class="col-md col-sm-6">
                                        <div class="progress"
                                                style="height: 8px;">
                                            <div class="progress-bar bg-secondary"
                                                    role="progressbar"
                                                    aria-valuenow="75"
                                                    style="width: 75%"
                                                    aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-auto col-sm-6 d-none d-sm-flex align-items-center">
                                        <div class="rating">
                                            <span class="rating__item"><span class="material-icons">star</span></span>
                                            <span class="rating__item"><span class="material-icons">star</span></span>
                                            <span class="rating__item"><span class="material-icons">star</span></span>
                                            <span class="rating__item"><span class="material-icons">star</span></span>
                                            <span class="rating__item"><span class="material-icons">star</span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center mb-8pt"
                                        data-toggle="tooltip"
                                        data-title="16% rated 4/5"
                                        data-placement="top">
                                    <div class="col-md col-sm-6">
                                        <div class="progress"
                                                style="height: 8px;">
                                            <div class="progress-bar bg-secondary"
                                                    role="progressbar"
                                                    aria-valuenow="16"
                                                    style="width: 16%"
                                                    aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-auto col-sm-6 d-none d-sm-flex align-items-center">
                                        <div class="rating">
                                            <span class="rating__item"><span class="material-icons">star</span></span>
                                            <span class="rating__item"><span class="material-icons">star</span></span>
                                            <span class="rating__item"><span class="material-icons">star</span></span>
                                            <span class="rating__item"><span class="material-icons">star</span></span>
                                            <span class="rating__item"><span class="material-icons">star_border</span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center mb-8pt"
                                        data-toggle="tooltip"
                                        data-title="12% rated 3/5"
                                        data-placement="top">
                                    <div class="col-md col-sm-6">
                                        <div class="progress"
                                                style="height: 8px;">
                                            <div class="progress-bar bg-secondary"
                                                    role="progressbar"
                                                    aria-valuenow="12"
                                                    style="width: 12%"
                                                    aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-auto col-sm-6 d-none d-sm-flex align-items-center">
                                        <div class="rating">
                                            <span class="rating__item"><span class="material-icons">star</span></span>
                                            <span class="rating__item"><span class="material-icons">star</span></span>
                                            <span class="rating__item"><span class="material-icons">star</span></span>
                                            <span class="rating__item"><span class="material-icons">star_border</span></span>
                                            <span class="rating__item"><span class="material-icons">star_border</span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center mb-8pt"
                                        data-toggle="tooltip"
                                        data-title="9% rated 2/5"
                                        data-placement="top">
                                    <div class="col-md col-sm-6">
                                        <div class="progress"
                                                style="height: 8px;">
                                            <div class="progress-bar bg-secondary"
                                                    role="progressbar"
                                                    aria-valuenow="9"
                                                    style="width: 9%"
                                                    aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-auto col-sm-6 d-none d-sm-flex align-items-center">
                                        <div class="rating">
                                            <span class="rating__item"><span class="material-icons">star</span></span>
                                            <span class="rating__item"><span class="material-icons">star</span></span>
                                            <span class="rating__item"><span class="material-icons">star_border</span></span>
                                            <span class="rating__item"><span class="material-icons">star_border</span></span>
                                            <span class="rating__item"><span class="material-icons">star_border</span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center mb-8pt"
                                        data-toggle="tooltip"
                                        data-title="0% rated 0/5"
                                        data-placement="top">
                                    <div class="col-md col-sm-6">
                                        <div class="progress"
                                                style="height: 8px;">
                                            <div class="progress-bar bg-secondary"
                                                    role="progressbar"
                                                    aria-valuenow="0"
                                                    aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-auto col-sm-6 d-none d-sm-flex align-items-center">
                                        <div class="rating">
                                            <span class="rating__item"><span class="material-icons">star</span></span>
                                            <span class="rating__item"><span class="material-icons">star_border</span></span>
                                            <span class="rating__item"><span class="material-icons">star_border</span></span>
                                            <span class="rating__item"><span class="material-icons">star_border</span></span>
                                            <span class="rating__item"><span class="material-icons">star_border</span></span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="pb-16pt mb-16pt border-bottom row">
                            <div class="col-md-3 mb-16pt mb-md-0">
                                <div class="d-flex">
                                    <a href="student-profile.html"
                                        class="avatar avatar-sm mr-12pt">
                                        <!-- <img src="LB" alt="avatar" class="avatar-img rounded-circle"> -->
                                        <span class="avatar-title rounded-circle">LB</span>
                                    </a>
                                    <div class="flex">
                                        <p class="small text-muted m-0">2 days ago</p>
                                        <a href="student-profile.html"
                                            class="card-title">Laza Bogdan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="rating mb-8pt">
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star_border</span></span>
                                </div>
                                <p class="text-70 mb-0">A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.</p>
                            </div>
                        </div>

                        <div class="pb-16pt mb-16pt border-bottom row">
                            <div class="col-md-3 mb-16pt mb-md-0">
                                <div class="d-flex">
                                    <a href="student-profile.html"
                                        class="avatar avatar-sm mr-12pt">
                                        <!-- <img src="UK" alt="avatar" class="avatar-img rounded-circle"> -->
                                        <span class="avatar-title rounded-circle">UK</span>
                                    </a>
                                    <div class="flex">
                                        <p class="small text-muted m-0">2 days ago</p>
                                        <a href="student-profile.html"
                                            class="card-title">Umberto Klass</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="rating mb-8pt">
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star_border</span></span>
                                </div>
                                <p class="text-70 mb-0">This course is absolutely amazing, Bryan goes* out of his way to really expl*ain things clearly I couldn&#39;t be happier, so glad I made this purchase!</p>
                            </div>
                        </div>

                        <div class="pb-16pt mb-24pt row">
                            <div class="col-md-3 mb-16pt mb-md-0">
                                <div class="d-flex">
                                    <a href="student-profile.html"
                                        class="avatar avatar-sm mr-12pt">
                                        <!-- <img src="AD" alt="avatar" class="avatar-img rounded-circle"> -->
                                        <span class="avatar-title rounded-circle">AD</span>
                                    </a>
                                    <div class="flex">
                                        <p class="small text-muted m-0">2 days ago</p>
                                        <a href="student-profile.html"
                                            class="card-title">Adrian Demian</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="rating mb-8pt">
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star_border</span></span>
                                </div>
                                <p class="text-70 mb-0">This course is absolutely amazing, Bryan goes* out of his way to really expl*ain things clearly I couldn&#39;t be happier, so glad I made this purchase!</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4">

                        <div class="card">
                            <div class="card-body py-16pt text-center">
                                <span class="icon-holder icon-holder--outline-secondary rounded-circle d-inline-flex mb-8pt">
                                    <i class="material-icons">timer</i>
                                </span>
                                <h4 class="card-title"><strong>Unlock Course</strong></h4>
                                <p class="card-subtitle text-70 mb-24pt">Get access to all videos in the library</p>
                                <a href="pricing.html"
                                    class="btn btn-accent mb-8pt">Sign Up - Only $19.00/mo</a>
                                <p class="mb-0">Have an account? <a href="login.html">Login</a></p>
                            </div>
                        </div>

                        <div class="page-separator">
                            <div class="page-separator__text">Author</div>
                        </div>

                        <div class="media align-items-center mb-16pt">
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
                        <p class="text-70">Fueled by my passion for understanding the nuances of cross-cultural advertising, I consider myself a forever student, eager to both build on my academic foundations in psychology and sociology and stay in tune with the latest digital marketing strategies through continued coursework.</p>

                        <a href="teacher-profile.html"
                            class="btn btn-white mb-24pt">Follow</a>

                        <div class="page-separator">
                            <div class="page-separator__text">Recommended</div>
                        </div>

                        <div class="mb-8pt d-flex align-items-center">
                            <a href="student-course.html"
                                class="avatar avatar-4by3 overlay overlay--primary mr-12pt">
                                <img src="/assets/images/paths/angular_routing_200x168.png"
                                        alt="Angular Routing In-Depth"
                                        class="avatar-img rounded">
                                <span class="overlay__content"></span>
                            </a>
                            <div class="flex">
                                <a class="card-title mb-4pt"
                                    href="student-course.html">Angular Routing In-Depth</a>
                                <div class="d-flex align-items-center">
                                    <div class="rating mr-8pt">

                                        <span class="rating__item"><span class="material-icons">star</span></span>

                                        <span class="rating__item"><span class="material-icons">star</span></span>

                                        <span class="rating__item"><span class="material-icons">star</span></span>

                                        <span class="rating__item"><span class="material-icons">star_border</span></span>

                                        <span class="rating__item"><span class="material-icons">star_border</span></span>

                                    </div>
                                    <small class="text-muted">3/5</small>
                                </div>
                            </div>
                        </div>

                        <div class="mb-16pt d-flex align-items-center">
                            <a href="student-course.html"
                                class="avatar avatar-4by3 overlay overlay--primary mr-12pt">
                                <img src="/assets/images/paths/angular_testing_200x168.png"
                                        alt="Angular Unit Testing"
                                        class="avatar-img rounded">
                                <span class="overlay__content"></span>
                            </a>
                            <div class="flex">
                                <a class="card-title mb-4pt"
                                    href="student-course.html">Angular Unit Testing</a>
                                <div class="d-flex align-items-center">
                                    <div class="rating mr-8pt">

                                        <span class="rating__item"><span class="material-icons">star</span></span>

                                        <span class="rating__item"><span class="material-icons">star</span></span>

                                        <span class="rating__item"><span class="material-icons">star</span></span>

                                        <span class="rating__item"><span class="material-icons">star</span></span>

                                        <span class="rating__item"><span class="material-icons">star_border</span></span>

                                    </div>
                                    <small class="text-muted">4/5</small>
                                </div>
                            </div>
                        </div>

                        <div class="list-group list-group-flush">
                            <div class="list-group-item px-0">
                                <a href="student-course.html"
                                    class="card-title mb-4pt">Angular Best Practices</a>
                                <p class="lh-1 mb-0">
                                    <small class="text-muted mr-8pt">6h 40m</small>
                                    <small class="text-muted mr-8pt">13,876 Views</small>
                                    <small class="text-muted">13 May 2018</small>
                                </p>
                            </div>
                            <div class="list-group-item px-0">
                                <a href="student-course.html"
                                    class="card-title mb-4pt">Unit Testing in Angular</a>
                                <p class="lh-1 mb-0">
                                    <small class="text-muted mr-8pt">6h 40m</small>
                                    <small class="text-muted mr-8pt">13,876 Views</small>
                                    <small class="text-muted">13 May 2018</small>
                                </p>
                            </div>
                            <div class="list-group-item px-0">
                                <a href="student-course.html"
                                    class="card-title mb-4pt">Migrating Applications from AngularJS to Angular</a>
                                <p class="lh-1 mb-0">
                                    <small class="text-muted mr-8pt">6h 40m</small>
                                    <small class="text-muted mr-8pt">13,876 Views</small>
                                    <small class="text-muted">13 May 2018</small>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div class="page-section bg-alt">
            <div class="container page__container">

                <div class="page-separator">
                    <div class="page-separator__text">Feedback</div>
                </div>

                <div class="row">

                    <div class="col-sm-6 col-md-4">

                        <div class="card card-feedback card-body">
                            <blockquote class="blockquote mb-0">
                                <p class="text-70 small mb-0">A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.</p>
                            </blockquote>
                        </div>
                        <div class="media ml-12pt">
                            <div class="media-left mr-12pt">
                                <a href="student-profile.html"
                                    class="avatar avatar-sm">
                                    <!-- <img src="public/images/people/110/guy-.jpg" width="40" alt="avatar" class="rounded-circle"> -->
                                    <span class="avatar-title rounded-circle">UK</span>
                                </a>
                            </div>
                            <div class="media-body media-middle">
                                <a href="student-profile.html"
                                    class="card-title">Umberto Kass</a>
                                <div class="rating mt-4pt">
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star_border</span></span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-sm-6 col-md-4">

                        <div class="card card-feedback card-body">
                            <blockquote class="blockquote mb-0">
                                <p class="text-70 small mb-0">A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.</p>
                            </blockquote>
                        </div>
                        <div class="media ml-12pt">
                            <div class="media-left mr-12pt">
                                <a href="student-profile.html"
                                    class="avatar avatar-sm">
                                    <!-- <img src="public/images/people/110/guy-.jpg" width="40" alt="avatar" class="rounded-circle"> -->
                                    <span class="avatar-title rounded-circle">UK</span>
                                </a>
                            </div>
                            <div class="media-body media-middle">
                                <a href="student-profile.html"
                                    class="card-title">Umberto Kass</a>
                                <div class="rating mt-4pt">
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star_border</span></span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-sm-6 col-md-4">

                        <div class="card card-feedback card-body">
                            <blockquote class="blockquote mb-0">
                                <p class="text-70 small mb-0">A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.</p>
                            </blockquote>
                        </div>
                        <div class="media ml-12pt">
                            <div class="media-left mr-12pt">
                                <a href="student-profile.html"
                                    class="avatar avatar-sm">
                                    <!-- <img src="public/images/people/110/guy-.jpg" width="40" alt="avatar" class="rounded-circle"> -->
                                    <span class="avatar-title rounded-circle">UK</span>
                                </a>
                            </div>
                            <div class="media-body media-middle">
                                <a href="student-profile.html"
                                    class="card-title">Umberto Kass</a>
                                <div class="rating mt-4pt">
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star</span></span>
                                    <span class="rating__item"><span class="material-icons">star_border</span></span>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
