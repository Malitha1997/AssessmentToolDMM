<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Digital Maturity Model</title>
    <link rel="stylesheet" href="{{ asset('cssfile/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('cssfile/aos.min.css') }}">
</head>

<body id="page-top">
    <div id="wrapper">
        <div class="row">
        <div class="col"style="width:150px">
        <nav class="navbar align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0 navbar-dark"  data-aos="fade-right" data-aos-duration="500" style="width:224px;height:1975px;margin-top: 108px;background: rgba(78,115,223,0);box-shadow: 0px 0px 20px;">
            <div class="container-fluid d-flex flex-column p-0" >
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-text mx-3" >
                        <ul class="navbar-nav text-light" id="accordionSidebar-1" style="margin-left: -15px;">
                            <li class="nav-item" data-aos="fade-right" data-aos-duration="1000"><a class="nav-link" href="index.html"><img src="{{ asset('img/Mask group(1).png') }}"><span style="color: #5f2b84;font-family: Poppins, sans-serif;font-size: 16px;margin-left: 10px;">Dashboard</span></a></li>
                            <li class="nav-item" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="50"><a class="nav-link" href="index.html"><img src="{{ asset('img/Mask group(2).png') }}"><span style="color: #5f2b84;font-family: Poppins, sans-serif;font-size: 16px;margin-left: 10px;">Organization</span></a></li>
                            <li class="nav-item" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100"><a class="nav-link" href="index.html"><img src="{{ asset('img/Mask group(3).png') }}"><span style="color: #5f2b84;font-family: Poppins, sans-serif;font-size: 16px;margin-left: 10px;">Assessment</span></a></li>
                            <li class="nav-item" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="150"><a class="nav-link" href="index.html"><img src="{{ asset('img/Mask group(4).png') }}"><span style="color: #5f2b84;font-family: Poppins, sans-serif;font-size: 16px;margin-left: 10px;">Create User</span></a></li>
                            <li class="nav-item" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200"><a class="nav-link" href="index.html"><img src="{{ asset('img/Mask group(1).png') }}"><span style="color: #5f2b84;font-family: Poppins, sans-serif;font-size: 16px;margin-left: 10px;">Settings</span></a></li>
                        </ul>
                    </div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar"></ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        </div>
        <div class="col" style="margin-left:-1000px;margin-top:150px">
            <section >
                 @yield('content')
            </section>
        </div>
        </div>

        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <div class="container-fluid">
                    <div class="text-center mt-5"><span></span></div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-light navbar-expand-md fixed-top py-3" data-aos="slide-down" data-aos-duration="1000" style="background: #5f2b84">
        <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex align-items-center" href="#"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2" style="width: 1440px;text-align: left;font-family: Poppins, sans-serif;"><img src="{{ asset('img/duallogo-white-icta%201(1).png') }}">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor" style="width: 60px;height: 60px;color: #EF4323;margin-right:20px">
                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                        <path d="M256 112c-48.6 0-88 39.4-88 88C168 248.6 207.4 288 256 288s88-39.4 88-88C344 151.4 304.6 112 256 112zM256 240c-22.06 0-40-17.95-40-40C216 177.9 233.9 160 256 160s40 17.94 40 40C296 222.1 278.1 240 256 240zM256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 464c-46.73 0-89.76-15.68-124.5-41.79C148.8 389 182.4 368 220.2 368h71.69c37.75 0 71.31 21.01 88.68 54.21C345.8 448.3 302.7 464 256 464zM416.2 388.5C389.2 346.3 343.2 320 291.8 320H220.2c-51.36 0-97.35 26.25-124.4 68.48C65.96 352.5 48 306.3 48 256c0-114.7 93.31-208 208-208s208 93.31 208 208C464 306.3 446 352.5 416.2 388.5z"></path>
                    </svg></li>
                </ul>
                <span style="font-family: Poppins, sans-serif;font-color:#ffffff;font-size:20px;margin-right: 15px;">{{ Auth::user()->username }}</span>
                <div class="dropdown"><a class="dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="color: rgb(255,255,255);margin-right:70px"></a>
                    <div class="dropdown-menu" style="font-family: Popins;width:50px;margin-right:50px">
                        <a class="dropdown-item" style="font-family: Poppins,san-serif" href="/home">Profile</a>
                        <a class="dropdown-item" style="font-family: Poppins" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <footer class="bg-white sticky-footer" data-aos="slide-down" data-aos-duration="1000" style="height: 98.66px;margin-left: -224px;background: linear-gradient(#161a55, #161a55 100%), #161a55;">
        <div class="container-fluid">
            <div class="row text-center">
                <span style="font-color:#ffffff">Copyright © 2023 ICT Agency Sri Lanka. All rights reserved</span>
            </div>
        </div>
    </footer>

    <script src="{{ asset('jsfile/bootstrap.min.js') }}"></script>
    <script src="{{ asset('jsfile/aos.min.js') }}"></script>
    <script src="{{ asset('jsfile/bs-init.js') }}"></script>
    <script src="{{ asset('jsfile/theme.js') }}"></script>
</body>

</html>
