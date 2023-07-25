<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href='{{ url('../assets/img/apple-icon.png') }}'>
    <link rel="icon" type="image/png" href='{{ url('../assets/img/favicon.png') }}'>
    <title>
        yo-safouat
    </title>
    <!--     Fonts and icons     -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Noto+Sans:300,400,500,600,700,800|PT+Mono:300,400,500,600,700"
        rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href='{{ url('../assets/css/nucleo-icons.css') }}' rel="stylesheet" />
    <link href='{{ url('../assets/css/nucleo-svg.css') }}' rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/349ee9c857.js" crossorigin="anonymous"></script>
    <link href='{{ url('../assets/css/nucleo-svg.css') }}' rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href='{{ url('../assets/css/corporate-ui-dashboard.css?v=1.0.0') }}' rel="stylesheet" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="/css/style.css">

</head>

<body>
    <nav class="navbar bg-slate-900 navbar-expand-lg flex-wrap top-0 px-0 py-0">
        <div class="container py-2">
            <nav aria-label="breadcrumb">
                <div class="d-flex align-items-center">
                    <span class="px-3 font-weight-bold text-lg text-white me-4">Yo-courses</span>
                </div>
            </nav>
            <ul class="navbar-nav d-none d-lg-flex">
                <li class="nav-item px-3 py-3 border-radius-sm  d-flex align-items-center">
                    <a href="{{ route('allCourse', $user_id) }}" class="nav-link text-white p-0">
                        All Courses
                    </a>
                </li>
                <li class="nav-item px-3 py-3 border-radius-sm  d-flex align-items-center">
                    <a href="{{ route('myCourses', $user_id) }}" class="nav-link text-white p-0">
                        my courses
                    </a>
                </li>
                <li class="nav-item px-3 py-3 border-radius-sm bg-slate-800 d-flex align-items-center">
                    <a href="{{ route('payment', $user_id) }}" class="nav-link text-white p-0">
                        payment
                    </a>
                </li>

            </ul>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <ul class="navbar-nav ms-md-auto  justify-content-end">

                    <li class="nav-item d-flex align-items-center ps-2">
                        <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                    <li class="nav-item dropdown pe-2 d-flex align-items-center">
                        <div class="avatar avatar-sm position-relative">
                            <img src='{{ url('../assets/img/team-2.jpg') }}' alt="profile_image"
                                class="w-100 border-radius-md">
                        </div>
                    </li>
                    </a>
                    </li>
                </ul>
            </div>
        </div>
        <hr class="horizontal w-100 my-0 dark">
        <div class="container pb-3 pt-3">
            <ul class="navbar-nav d-none d-lg-flex">
                <li class="nav-item border-radius-sm px-3 py-3 me-2  d-flex align-items-center">
                    <a href="{{ route('profile', $user_id) }}" class="nav-link text-white p-0">
                        Profile
                    </a>
                </li>

            </ul>
            <div class="ms-md-auto p-0 d-flex align-items-center w-sm-20">
                <div class="input-group border-dark">
                    <span class="input-group-text border-dark bg-dark text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="opacity-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                    </span>
                    <input type="text" class="form-control border-dark bg-dark" placeholder="Search"
                        onfocus="focused(this)" onfocusout="defocused(this)">
                </div>
            </div>
        </div>
    </nav>

    <div class="container1">

        <div class="main-video-container">
            @foreach ($FirstLesson as $les)
                <div class="ratio ratio-16x9">

                    <iframe src={{ $les->url }} title="YouTube video" class="main-video"
                        allowfullscreen></iframe>
                </div>

                {{-- <h3 class="main-vid-title"><strong>{{$les->lesson_number}}- You ara watching now  --> </strong>{{$les->title}}</h3> --}}
            @endforeach

        </div>

        <div class="video-list-container">
            @foreach ($lessons as $lesson)
                <div class="list ">
                    <video src={{ $lesson->url }} class="list-video"></video>
                    <h3 class="list-title"><strong>{{ $lesson->lesson_number }} --> </strong>{{ $lesson->title }}
                    </h3>
                </div>
            @endforeach






        </div>

    </div>













    <!-- custom js file link  -->
    <script src="/js/script.js"></script>

</body>

</html>
