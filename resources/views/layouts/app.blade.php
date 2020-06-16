<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
<link rel="stylesheet" href="{{ url ('frontend/libraries/bootstrap/css/bootstrap.css') }}">
    <link
        href="https://fonts.googleapis.com/css?family=Assistant:200,300,400,600,700,800|Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">
<link rel="stylesheet" href="{{url ('frontend/styles/main.css')}}">

</head>

<body>

    <!-- Navbar -->
    <!-- Container untuk logo di navbar -->
    <div class="container">
        <nav class="nav row navbar navbar-expand-lg navbar-light bg-white">
            <a href="#" class="navbar-brand">
                <img src="frontend/images/Logo (1).png" alt="Logo NOMADS">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navb">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar link  -->
            <div class="collapse navbar-collapse" id="navb">
                <ul class="navbar-nav ml-auto mr-3">
                    <li class="nav-item mx-md-2">
                        <a href="#" class="nav-link active">Home</a></li>
                    <li class="nav-item mx-md-2">
                        <a href="#" class="nav-link">Paket Travel</a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
                            Services
                        </a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Link1</a>
                            <a href="#" class="dropdown-item">Link2</a>
                            <a href="#" class="dropdown-item">Link3</a>
                        </div>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="#" class="nav-link">Testimonial</a>
                    </li>
                </ul>

                <!-- Mobile Button Version -->
                <form class="form-inline d-sn-block d-md-none">
                    <button class="btn btn-login my-2 my-sm-0 px-4">
                        Masuk
                    </button>
                </form>

                <!-- Dekstop Button Version -->
                <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                    <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">
                        Masuk
                    </button>
                </form>
            </div>
        </nav>
    </div>

    @yield('content')

<script src="{{url ('frontend/libraries/jquery/jquery-3.5.1.min.js')}}"></script>
<script src="{{url ('frontend/libraries/bootstrap/js/bootstrap.js')}}"></script>
<script src="{{url ('frontend/libraries/retina/retina.min.js')}}"></script>
</body>

</html>