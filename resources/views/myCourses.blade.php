@extends('template')
@section('content')
@section('active1', 'nav-link')
@section('active2')
    "nav-link active"
@endsection
@section('active3', 'nav-link')
@section('active4', 'nav-link')


<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
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

    <div class="container mt-5">

        <div class="row justify-content-center">
            @foreach ($courses as $course)
                    <div class="card movie_card col-4 ">
                        <img src='{{ url('../assets/img/2.png') }}' class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href = "{{ route('watch',[$user_id, $course->id]) }}">
                            <i class="fas fa-play play_button" data-toggle="tooltip" data-placement="bottom"
                                title="Play course">

                            </i></a>
                            <h5 class="card-title">{{$course->title}}</h5>
                            <span class="movie_info">{{$course->created_at}}</span>

                        </div>
                    </div>
            @endforeach

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>


    </div>
</main>
@endsection
