<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        yo-safouat
    </title>
    <link rel="stylesheet" href="/css/style.css">
    <!--     Fonts and icons     -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Noto+Sans:300,400,500,600,700,800|PT+Mono:300,400,500,600,700"
        rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href='{{ url('../assets/css/nucleo-icons.css') }}' rel="stylesheet" />
    <link href='{{ url('../assets/css/nucleo-svg.css') }}' rel="stylesheet" />
    <link href='{{ url('../assets/css/app.css') }}' rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/349ee9c857.js" crossorigin="anonymous"></script>
    <link href='{{ url('../assets/css/nucleo-svg.css') }}' rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href='{{ url('../assets/css/corporate-ui-dashboard.css?v=1.0.0') }}' rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Noto+Sans:300,400,500,600,700,800|PT+Mono:300,400,500,600,700"
        rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href='{{ url('../assets/css/nucleo-icons.css') }}' rel="stylesheet" />
    <link href='{{ url('../assets/css/nucleo-svg.css') }}' rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src='{{ url('https://kit.fontawesome.com/349ee9c857.js') }}' crossorigin="anonymous"></script>
    <link href='{{ url('../assets/css/nucleo-svg.css') }}' rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href='{{ url('../assets/css/corporate-ui-dashboard.css?v=1.0.0') }}' rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100">
    <main class="main-content max-height-vh-100 h-100">
        <!-- Sidenav Top -->
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
        <!-- End Sidenav Top -->
        <div class="pt-5 pb-6 bg-cover"
            style="background-image: url('{{ url('../assets/img/header-blue-purple.jpg') }}')">
        </div>

            <hr />
            <form action="" style="center ">
                <button class="btn btn-outline-success ">change subscription</button>
            </form>
            @switch($user->package)
            @case( $user->package = 1 )
            <div class="profile-card-2 "style='max-width : 1000px;height: 500px;'>
                <img src='{{ url('../assets/img/free.png') }}' class="img img-responsive d-block w-100 img-fluid" />
                <div class="profile-name">Free</div>
                <div class="profile-username">{{$user->name}}
                </div>

            </div>
            @break
            @case( $user->package = 2 )
            <div class="profile-card-2 " style='max-width : 1000px;height: 500px;'>
                <img src='{{ url('../assets/img/business.png') }}' class="img img-responsive d-block w-100 img-fluid" />
                <div class="profile-name">Business</div>
                <div class="profile-username">{{$user->name}}
                </div>

            </div>
            @break
            @case( $user->package =  3 )
            <div class="profile-card-2 " style='max-width : 1000px;height: 500px;'>
                <img src='{{ url('../assets/img/develop.png') }}' class="img img-responsive d-block w-100 img-fluid" />
                <div class="profile-name">Developer</div>
                <div class="profile-username">{{$user->name}}
                </div>

            </div>
            @break
            @case( $user->package =  4 )
            <div class="profile-card-2 " style='max-width : 1000px;height: 500px;'>
                <img src='{{ url('../assets/img/ultimate.png') }}' class="img img-responsive d-block w-100 img-fluid" />
                <div class="profile-name">Ultimate</div>
                <div class="profile-username">{{$user->name}}
                </div>

            </div>
            @break

            @endswitch
    </main>
    <!--   Core JS Files   -->
    <script src='{{ url('../assets/js/core/popper.min.js') }}'></script>
    <script src='{{ url('../assets/js/core/bootstrap.min.js') }}'></script>
    <script src='{{ url('../assets/js/plugins/perfect-scrollbar.min.js') }}'></script>
    <script src='{{ url('../assets/js/plugins/smooth-scrollbar.min.js') }}'></script>
    <script src='{{ url('../assets/js/plugins/chartjs.min.js') }}'></script>
    <script>
        var ctx = document.getElementById("chart-doughnut-info").getContext("2d");
        var ctx2 = document.getElementById("chart-doughnut-dark").getContext("2d");

        new Chart(ctx, {
            type: "doughnut",
            data: {
                labels: ["EGLD", "ETH", "SOL", "BTC"],
                datasets: [{
                    label: "Wallet",
                    cutout: 40,
                    backgroundColor: ["#c3e1ff", "#add4fc", "#78baff", "#419eff"],
                    data: [450, 200, 100, 220],
                    maxBarThickness: 6
                }, ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    },
                    tooltip: {
                        backgroundColor: '#fff',
                        bodyColor: '#1e293b',
                        borderColor: '#e9ecef',
                        borderWidth: 1,
                        usePointStyle: true
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                        },
                        ticks: {
                            display: false
                        },
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false
                        },
                        ticks: {
                            display: false
                        },
                    },
                },
            },
        });

        new Chart(ctx2, {
            type: "doughnut",
            data: {
                labels: ["EGLD", "ETH", "SOL", "BTC"],
                datasets: [{
                    label: "Wallet",
                    cutout: 40,
                    backgroundColor: ["#d3d8e1", "#1f293b", "#666f7f", "#3b465a"],
                    data: [350, 200, 150, 300],
                    maxBarThickness: 6
                }, ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    },
                    tooltip: {
                        backgroundColor: '#fff',
                        bodyColor: '#1e293b',
                        borderColor: '#e9ecef',
                        borderWidth: 1,
                        usePointStyle: true
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                        },
                        ticks: {
                            display: false
                        },
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false
                        },
                        ticks: {
                            display: false
                        },
                    },
                },
            },
        });
    </script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Corporate UI Dashboard: parallax effects, scripts for the example pages etc -->
    <script src='{{ url('../assets/js/corporate-ui-dashboard.min.js?v=1.0.0') }}'></script>
</body>

</html>
