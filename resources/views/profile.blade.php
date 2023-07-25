
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href='{{url("../assets/img/apple-icon.png")}}'>
  <link rel="icon" type="image/png" href='{{url("../assets/img/favicon.png")}}'>
  <title>
    yo-courses
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Noto+Sans:300,400,500,600,700,800|PT+Mono:300,400,500,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href='u{{url("../assets/css/nucleo-icons.css")}}' rel="stylesheet" />
  <link href='{{url("../assets/css/nucleo-svg.css")}}' rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/349ee9c857.js" crossorigin="anonymous"></script>
  <link href='{{url("../assets/css/nucleo-svg.css")}}' rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href='{{url("../assets/css/corporate-ui-dashboard.css?v=1.0.0")}}' rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100">
  <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
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
    <div class="pt-7 pb-6 bg-cover" style="background-image: url('{{url("../assets/img/header-orange-purple.jpg")}}'); background-position: bottom;"></div>
    <div class="container">
      <div class="card card-body py-2 bg-transparent shadow-none">
        <div class="row">
          <div class="col-auto">
            <div class="avatar avatar-2xl rounded-circle position-relative mt-n7 border border-gray-100 border-4">
              <img src='{{url("../assets/img/team-2.jpg")}}' alt="profile_image" class="w-100">
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h3 class="mb-0 font-weight-bold">
                younes safouat
              </h3>
              <p class="mb-0">
                yonlol77@mail.com
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3 text-sm-end">
            <a href="javascript:;" class="btn btn-sm btn-white">Cancel</a>
            <a href="javascript:;" class="btn btn-sm btn-dark">Save</a>
          </div>
        </div>
      </div>
    </div>
    <div class="container my-3 py-3">
      <div class="row">

        <div class="col-12">
          <div class="card shadow-xs border mb-4 pb-3">
            <div class="card-header pb-0 p-3">
              <h6 class="mb-0 font-weight-semibold text-lg">Your courses</h6>
              <p class="text-sm mb-1">Here you will find the latest courses.</p>
            </div>
            <div class="card-body p-3">
              <div class="row">
                @foreach ($providers as $provider)
                <div class="col-xl-4 col-md-6 mb-xl-0 mb-4">
                    <a href="{{ route('watch',[$user_id, $provider->course[0]->id]) }}"  >

                    <div class="card card-background border-radius-xl card-background-after-none align-items-start mb-4">

                      <div class="full-background bg-cover" style="background-image: url({{url('../assets/img/img-8.jpg')}})"></div>
                      <span class="mask bg-dark opacity-1 border-radius-sm"></span>
                      <div class="card-body text-start p-3 w-100">
                        <div class="row">
                          <div class="col-12">
                            <div class="blur shadow d-flex align-items-center w-100 border-radius-md border border-white mt-8 p-3">
                              <div class="w-50">
                                <p class="text-dark text-sm font-weight-bold mb-1">{{$provider->name}}</p>
                                <p class="text-xs text-secondary mb-0">{{$provider->created_at}}</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                      <h4 class="font-weight-semibold">
                        {{$provider->course[0]->title}}
                      </h4>
                    </a>
                    <p class="mb-4">
                        {{$provider->course[0]->descreption}}
                    </p>
                    <a href="{{ route('createlesson',[$user_id, $provider->course[0]->id]) }}" class="text-dark font-weight-semibold icon-move-right mt-auto w-100 mb-5">
                      Add Lesson
                      <i class="fas fa-arrow-right-long text-sm ms-1" aria-hidden="true"></i>
                    </a>
                  </div>
                @endforeach

                <div class="col-xl-4 col-md-6 mb-xl-0 mb-4">
                  <div class="card h-100 card-plain border border-dashed px-5">
                    <div class="card-body d-flex flex-column justify-content-center text-center">
                      <a href="{{route('createcourse',$user_id)}}">
                        <div class="icon icon-shape bg-dark text-center text-white rounded-circle mx-auto d-flex align-items-center justify-content-center mb-2">
                          <svg xmlns="http://www.w3.org/2000/svg" height="19" width="19" viewBox="0 0 24 24" fill="currentColor">
                            <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                          </svg>
                        </div>
                        <h5 class="text-dark text-lg"> Create new Course </h5>
                        <p class="text-sm text-secondary mb-0">Create your own course just follow the easy steps and your good .</p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-xs text-muted text-lg-start">
                Copyright
                © <script>
                  document.write(new Date().getFullYear())
                </script>
                younes safouat

              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">

                <li class="nav-item">
                  <a href="#" class="nav-link text-xs text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link text-xs text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link text-xs pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"></i>
    </a>
    <div class="card shadow-lg ">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Corporate UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-slate-900" onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3">
          <h6 class="mb-0">Navbar Fixed</h6>
        </div>
        <div class="form-check form-switch ps-0">
          <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/corporate-ui-dashboard">Free Download</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/corporate-ui-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/corporate-ui-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/corporate-ui-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Corporate%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fcorporate-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/corporate-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src='{{url("../assets/js/core/popper.min.js")}}'></script>
  <script src='{{url("../assets/js/core/bootstrap.min.js")}}'></script>
  <script src='{{url("../assets/js/plugins/perfect-scrollbar.min.js")}}'></script>
  <script src='{{url("../assets/js/plugins/smooth-scrollbar.min.js")}}'></script>
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
  <script src='{{url("../assets/js/corporate-ui-dashboard.min.js?v=1.0.0")}}'></script>
</body>

</html>
