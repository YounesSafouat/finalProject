@extends('template')
@section('content')
@section('active2', 'nav-link')
@section('active1')
    "nav-link active"
@endsection
@section('active3', 'nav-link')
@section('active4', 'nav-link')

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg mx-5 px-0 shadow-none rounded" id="navbarBlur" navbar-scroll="true">
        <div class="container-fluid py-1 px-2">

            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <form action="{{ route('allCourse', $user_id) }}" method="get">
                        <div class="input-group">
                            <span class="input-group-text text-body bg-white  border-end-0 ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                </svg>
                            </span>
                            <input type="text" class="form-control ps-0" placeholder="Searc">
                        </div>
                    </form>
                </div>
                <ul class="navbar-nav justify-content-end">

                    <li class="nav-item ps-2 d-flex align-items-center">
                        <a href="{{route('profile',$user_id)}}" class="nav-link text-body p-0">
                            <img src='{{ url('../assets/img/team-2.jpg') }}' class="avatar avatar-sm"
                                alt="avatar" />
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4 px-5">
        <div class="row">
            <div class="col-md-12">
                <div class="d-md-flex align-items-center mb-3 mx-2">
                    <div class="mb-md-0 mb-3">
                        <h3 class="font-weight-bold mb-0">Hello, {{ $user_name }}</h3>
                        <p class="mb-0">Apps you might like!</p>
                    </div>

                </div>
            </div>
        </div>
        <hr class="my-0" />
        <div class="row">
            <div class="position-relative overflow-hidden">
                <div class="swiper mySwiper mt-4 mb-2">
                    <div class="swiper-wrapper">
                        @foreach ($courses_slide as $course_slide)
                            <div class="swiper-slide">
                                <div>
                                    <div
                                        class="card card-background shadow-none border-radius-xl card-background-after-none align-items-start mb-0">
                                        <div class="full-background bg-cover"
                                            style="background-image: url('{{ url('../assets/img/img-3.jpg') }}')">
                                        </div>
                                        <div class="card-body text-start px-3 py-0 w-100">
                                            <div class="row mt-12">
                                                <div class="col-sm-3 mt-auto">
                                                    <h4 class="text-dark font-weight-bolder">#{{ $loop->iteration }}
                                                    </h4>
                                                    <p class="text-dark opacity-6 text-xs font-weight-bolder mb-0">
                                                        {{ $course_slide->descreption }}
                                                    </p>
                                                    <h5 class="text-dark font-weight-bolder">
                                                        {{ $course_slide->title }}
                                                    </h5>
                                                </div>
                                                <div class="col-sm-3 ms-auto mt-auto">
                                                    <p class="text-dark opacity-6 text-xs font-weight-bolder mb-0">
                                                        Category
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                @foreach ($courses as $course)
                    <div class="col-md-4">
                        <hr />
                        <div class="profile-card-2">
                            <a href="{{ route('watch', [$user_id, $course->id]) }}">
                                <img src='{{ url('../assets/img/2.png') }}' class="img img-responsive" />
                                <div class="profile-name">{{ $course->title }}</div>
                                <div class="profile-username">{{ $course->provider->first_name }}
                                    {{ $course->provider->last_name }}</div>
                                <div class="profile-icons">
                                    <a href="{{ $course->provider->facebook }}"><i class="fa fa-facebook"></i></a><a
                                        href="{{ $course->provider->tweet }}"><i class="fa fa-twitter"></i></a><a
                                        href="{{ $course->provider->linkden }}"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>



    </div>
</main>
@endsection
