<!DOCTYPE html>
<html data-bs-theme="light" lang="en" >

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Signup and login (copy)</title>
    <link rel="stylesheet" href="{{ asset('cssfile/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('cssfile/aos.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cssfile/Bold-BS4-Footer-Big-Logo.css') }}">
    <link rel="stylesheet" href="{{ asset('cssfile/Navbar-Right-Links-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('cssfile/styles.css') }}">
</head>

<body style="border-color: rgb(46,127,208);color: rgb(255,255,255);">
    <nav class="navbar navbar-expand-sm fixed-top py-3 navbar-light" data-aos="slide-down" data-aos-duration="1000" style="background: #C1C2DA;width: Auto;height: 115px;">
        <div class="container-fluid"><a class="navbar-brand d-flex align-items-center" href="#"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2" style="width: 1440px;text-align: left;font-family: Poppins, sans-serif;"><img src="{{ asset('img/duallogo-white-icta 1(1).png') }}">
                <ul class="navbar-nav ms-auto"></ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid container-expand-sm">
        @yield('content')
    </div>
    <footer data-aos="slide-up" data-aos-duration="1000" id="myFooter" style="background: #C1C2DA;">
        <div class="container-fluid container container-expand-sm">
            <div class="row text-center">
                <div class="col-12 col-sm-6 col-md-3" style="margin-right: 15%;">
                    <div class="row">
                        <div class="col" style="margin-top: 10%;"><span style="text-align: center;font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">Aiming at a digitally competent and an empowered Government workforce with required competencies.</span></div>
                    </div>
                    <div class="row">
                        <div class="col"><img src="{{ asset('img/Mask group.png') }}"></div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-2 col-xl-2 pe-xl-0" style="margin-right: 15%;">
                    <h5 style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">Links</h5>
                    <ul class="list-inline" style="text-align: left;">
                        <li class="list-inline-item"><a href="#" style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">&gt; Home</a></li>
                        <li class="list-inline-item"></li>
                    </ul>
                </div>
                <div class="col-md-3 social-networks pe-xl-0 pt-xl-0 pb-xl-0">
                    <h5 style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">Contact Us</h5>
                    <ul style="text-align: left;font-family: Poppins, sans-serif;font-size: 14px;">
                        <li style="color: var(--bs-emphasis-color);"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor">
                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M384 32H64C28.65 32 0 60.65 0 96v320c0 35.35 28.65 64 64 64h320c35.35 0 64-28.65 64-64V96C448 60.65 419.3 32 384 32zM351.6 321.5l-11.62 50.39c-1.633 7.125-7.9 12.11-15.24 12.11c-126.1 0-228.7-102.6-228.7-228.8c0-7.328 4.984-13.59 12.11-15.22l50.38-11.63c7.344-1.703 14.88 2.109 17.93 9.062l23.27 54.28c2.719 6.391 .8828 13.83-4.492 18.22L168.3 232c16.99 34.61 45.14 62.75 79.77 79.75l22.02-26.91c4.344-5.391 11.85-7.25 18.24-4.484l54.24 23.25C349.5 306.6 353.3 314.2 351.6 321.5z"></path>
                            </svg>&nbsp;94 112-369-099</li>
                        <li style="color: var(--bs-emphasis-color);"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor">
                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M384 32H64C28.65 32 0 60.65 0 96v320c0 35.35 28.65 64 64 64h320c35.35 0 64-28.65 64-64V96C448 60.65 419.3 32 384 32zM351.6 321.5l-11.62 50.39c-1.633 7.125-7.9 12.11-15.24 12.11c-126.1 0-228.7-102.6-228.7-228.8c0-7.328 4.984-13.59 12.11-15.22l50.38-11.63c7.344-1.703 14.88 2.109 17.93 9.062l23.27 54.28c2.719 6.391 .8828 13.83-4.492 18.22L168.3 232c16.99 34.61 45.14 62.75 79.77 79.75l22.02-26.91c4.344-5.391 11.85-7.25 18.24-4.484l54.24 23.25C349.5 306.6 353.3 314.2 351.6 321.5z"></path>
                            </svg>&nbsp;info@lightningdigital.gov.lk</li>
                        <li style="color: var(--bs-emphasis-color);"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-64 0 512 512" width="1em" height="1em" fill="currentColor">
                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z"></path>
                            </svg>&nbsp;490 R.A. De Mel Mawatha, Colombo, 00300, Sri Lanka.</li>
                        <li style="color: var(--bs-emphasis-color);"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -32 576 576" width="1em" height="1em" fill="currentColor">
                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M279.6 160.4C282.4 160.1 285.2 160 288 160C341 160 384 202.1 384 256C384 309 341 352 288 352C234.1 352 192 309 192 256C192 253.2 192.1 250.4 192.4 247.6C201.7 252.1 212.5 256 224 256C259.3 256 288 227.3 288 192C288 180.5 284.1 169.7 279.6 160.4zM480.6 112.6C527.4 156 558.7 207.1 573.5 243.7C576.8 251.6 576.8 260.4 573.5 268.3C558.7 304 527.4 355.1 480.6 399.4C433.5 443.2 368.8 480 288 480C207.2 480 142.5 443.2 95.42 399.4C48.62 355.1 17.34 304 2.461 268.3C-.8205 260.4-.8205 251.6 2.461 243.7C17.34 207.1 48.62 156 95.42 112.6C142.5 68.84 207.2 32 288 32C368.8 32 433.5 68.84 480.6 112.6V112.6zM288 112C208.5 112 144 176.5 144 256C144 335.5 208.5 400 288 400C367.5 400 432 335.5 432 256C432 176.5 367.5 112 288 112z"></path>
                            </svg>&nbsp;[wps_visitor_counter]</li>
                    </ul>
                </div>
            </div>
            <div class="row footer-copyright " style="background: #8D8E9D;">
                <div class="col col-expand-sm" style="background: #8D8E9D;">
                    <p style="text-align: left;font-family: Poppins, sans-serif;font-size: 14px;color: var(--bs-emphasis-color);">Copyright @ 2023 <span style="color: rgb(255, 0, 0);">ICT Agency of Sri Lanka</span>. All rights reserved&nbsp;</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('jsfile/bootstrap.min.js') }}"></script>
    <script src="{{ asset('jsfile/aos.min.js') }}"></script>
    <script src="{{ asset('jsfile/bs-init.js') }}"></script>
</body>

</html>