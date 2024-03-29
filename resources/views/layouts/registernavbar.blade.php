<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Digital Maturity Model - ICTA</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('cssfile/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('cssfile/aos.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cssfile/Bold-BS4-Footer-Big-Logo.css') }}">
    <link rel="stylesheet" href="{{ asset('cssfile/Navbar-Right-Links-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('cssfile/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('cssfile/Toggle-Switch-toggle-switch.css') }}">
    <link rel="stylesheet" href="{{ asset('cssfile/Toggle-Switch.css') }}">
    <link rel="stylesheet" href="{{ asset('cssfile/chart.css') }}">
    //<link rel="stylesheet" href="{{ asset('cssfile/font-awesome.min.css') }}">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{--  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>  --}}

</head>

<body style="border-color: rgb(46,127,208);color: rgb(255,255,255);">
    <nav class="navbar navbar-light navbar-expand-md fixed-top py-3" data-aos="slide-down" data-aos-duration="1000" style="background: #5f2b84">
        <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex align-items-center" href="#"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2" style="width: 1440px;text-align: left;font-family: Poppins, sans-serif;"><img src="{{ asset('img/duallogo-white-icta%201(1).png') }}">
                <ul class="navbar-nav ms-auto">
                <a class="btn btn-primary" style="font-family: Poppins,san-serif;border-width:0px;background: linear-gradient(to bottom, #660066 70%, #FF6699 100%);width:100px;margin-right:20px;height:30px;margin-top:20px" href="{{route('userHome')}}">Skip </a>

                    <li class="nav-item"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor" style="width: 60px;height: 60px;color: #EF4323;margin-right:20px">
                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                        <path d="M256 112c-48.6 0-88 39.4-88 88C168 248.6 207.4 288 256 288s88-39.4 88-88C344 151.4 304.6 112 256 112zM256 240c-22.06 0-40-17.95-40-40C216 177.9 233.9 160 256 160s40 17.94 40 40C296 222.1 278.1 240 256 240zM256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 464c-46.73 0-89.76-15.68-124.5-41.79C148.8 389 182.4 368 220.2 368h71.69c37.75 0 71.31 21.01 88.68 54.21C345.8 448.3 302.7 464 256 464zM416.2 388.5C389.2 346.3 343.2 320 291.8 320H220.2c-51.36 0-97.35 26.25-124.4 68.48C65.96 352.5 48 306.3 48 256c0-114.7 93.31-208 208-208s208 93.31 208 208C464 306.3 446 352.5 416.2 388.5z"></path>
                    </svg></li>
                </ul>
                <span style="font-family: Poppins, sans-serif;font-size:20px;margin-right: 15px;">{{ Auth::user()->username }}</span>
                <div class="dropdown"><a class="dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="color: rgb(255,255,255);margin-right:70px"></a>
                    <div class="dropdown-menu" style="font-family: Popins;width:50px;margin-right:50px">
                        <!-- <a class="dropdown-item" style="font-family: Poppins,san-serif" href="{{route('userHome')}}">Profile</a> -->
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
    <div class="container">
        @yield('content')
    </div>
    <footer data-aos="slide-up" data-aos-duration="1000" id="myFooter" style="background: url(&quot;{{ asset('img/Rectangle 57.png') }}&quot;);">
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-12 col-sm-6 col-md-3">
                    <h1 class="logo" style="margin-top: 30px;"></h1><span style="text-align: center;font-family: Poppins, sans-serif;"><br>Aiming at a digitally competent society and an empowered Government workforce with required competencies.<br><br></span><img src="{{ asset('img/Mask%20group.png') }}">
                </div>
                <div class="col-12 col-sm-6 col-md-2 col-xl-2 pe-xl-0">
                    <h5 style="font-family: Poppins, sans-serif;">Links</h5>
                    <ul class="list-inline" style="text-align: left;">
                        <li class="list-inline-item"><a href="#" style="font-family: Poppins, sans-serif;">&gt; Overview</a></li>
                        <li class="list-inline-item"></li>
                        <li class="list-inline-item"><a href="#" style="font-family: Poppins, sans-serif;">&gt; Our Initiatives</a></li>
                        <li class="list-inline-item"><a href="#" style="font-family: Poppins, sans-serif;">&gt; Get Involved</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-6 col-md-2 col-xl-2 pe-xl-0">
                    <h5 style="font-family: Poppins, sans-serif;">Who We Are</h5>
                    <ul class="list-inline" style="text-align: left;">
                        <li class="list-inline-item"><a href="#" style="font-family: Poppins, sans-serif;">&gt; Our Role</a></li>
                        <li class="list-inline-item"></li>
                        <li class="list-inline-item"><a href="#" style="font-family: Poppins, sans-serif;">&gt; Our Culture &amp; Values</a></li>
                        <li class="list-inline-item"><a href="#" style="font-family: Poppins, sans-serif;">&gt; Our Team</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-2">
                    <h5 style="font-family: Poppins, sans-serif;">Other Links</h5>
                    <ul style="text-align: left;">
                        <li><a href="#" style="font-family: Poppins, sans-serif;text-align: left;">&gt; Events</a></li>
                        <li><a href="#" style="font-family: Poppins, sans-serif;text-align: left;">&gt; Media</a></li>
                        <li><a href="#" style="text-align: left;font-family: Poppins, sans-serif;">&gt; Contact</a></li>
                        <li></li>
                    </ul>
                </div>
                <div class="col-md-3 social-networks pe-xl-0 pt-xl-0 pb-xl-0">
                    <h5 style="font-family: Poppins, sans-serif;">Contact Us</h5>
                    <ul style="text-align: left;font-family: Poppins, sans-serif;font-size: 14px;">
                        <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor">
                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M384 32H64C28.65 32 0 60.65 0 96v320c0 35.35 28.65 64 64 64h320c35.35 0 64-28.65 64-64V96C448 60.65 419.3 32 384 32zM351.6 321.5l-11.62 50.39c-1.633 7.125-7.9 12.11-15.24 12.11c-126.1 0-228.7-102.6-228.7-228.8c0-7.328 4.984-13.59 12.11-15.22l50.38-11.63c7.344-1.703 14.88 2.109 17.93 9.062l23.27 54.28c2.719 6.391 .8828 13.83-4.492 18.22L168.3 232c16.99 34.61 45.14 62.75 79.77 79.75l22.02-26.91c4.344-5.391 11.85-7.25 18.24-4.484l54.24 23.25C349.5 306.6 353.3 314.2 351.6 321.5z"></path>
                            </svg>&nbsp;94 112-369-099</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor">
                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M384 32H64C28.65 32 0 60.65 0 96v320c0 35.35 28.65 64 64 64h320c35.35 0 64-28.65 64-64V96C448 60.65 419.3 32 384 32zM351.6 321.5l-11.62 50.39c-1.633 7.125-7.9 12.11-15.24 12.11c-126.1 0-228.7-102.6-228.7-228.8c0-7.328 4.984-13.59 12.11-15.22l50.38-11.63c7.344-1.703 14.88 2.109 17.93 9.062l23.27 54.28c2.719 6.391 .8828 13.83-4.492 18.22L168.3 232c16.99 34.61 45.14 62.75 79.77 79.75l22.02-26.91c4.344-5.391 11.85-7.25 18.24-4.484l54.24 23.25C349.5 306.6 353.3 314.2 351.6 321.5z"></path>
                            </svg>&nbsp;info@lightningdigital.gov.lk</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="-64 0 512 512" width="1em" height="1em" fill="currentColor">
                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z"></path>
                            </svg>&nbsp;490 R.A. De Mel Mawatha, Colombo, 00300, Sri Lanka.</li>

                    </ul>
                </div>
            </div>
            <div class="row footer-copyright">
                <div class="col" style="background: #161a55;">
                    <p style="text-align: left;font-family: Poppins, sans-serif;font-size: 14px;">Copyright @ 2023 ICT Agency of Sri Lanka. All rights reserved&nbsp;</p>
                </div>
            </div>
        </div>
    </footer>
    <footer class="text-white bg-dark"></footer>
    <script src="{{ asset('jsfile/bootstrap.min.js') }}"></script>
    <script src="{{ asset('jsfile/aos.min.js') }}"></script>
    <script src="{{ asset('jsfile/bs-init.js') }}"></script>
    <script src="{{ asset('jsfile/chart.js') }}"></script>
    <script defer src="{{ asset('jsfile/index.js') }}"></script>
    <script src="sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" ></script>
    {{--  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>  --}}




</body>

</html>
