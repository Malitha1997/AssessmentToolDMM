@extends('layouts.navbar')

@section('content')

<body style="border-color: rgb(46,127,208);color: rgb(255,255,255);max-height: 100%;height: 1000px;">
    <nav class="navbar navbar-light navbar-expand-md fixed-top justify-content-between py-3" data-aos="slide-down" data-aos-duration="1000" style="background: #5f2b84;width: 1440px;height: 115px;">
        <div class="container-fluid"><a class="navbar-brand d-flex align-items-center" href="#"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2" style="width: 1440px;text-align: left;font-family: Poppins, sans-serif;"><img src="{{ asset('img/duallogo-white-icta 1(1).png ')}}" width="354" height="89" style="width: 354px;height: 89px;margin-left: 0px;">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#" style="font-size: 14px;color: rgba(255,255,255,0.9);font-family: Poppins, sans-serif;">ICTA Digital Hub</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="font-size: 14px;color: rgb(255,255,255);font-family: Poppins, sans-serif;">Capacity Building Drive</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="font-size: 14px;color: rgb(255,255,255);font-family: Poppins, sans-serif;">Download</a></li>
                </ul><span class="navbar-text" style="font-size: 14px;color: rgb(255,255,255);font-family: Poppins, sans-serif;">&nbsp;Our Volunteers&nbsp;</span><span class="navbar-text" style="font-size: 14px;color: rgb(255,255,255);font-family: Poppins, sans-serif;">&nbsp;Events&nbsp;</span><span class="navbar-text" style="font-size: 14px;color: rgb(255,255,255);font-family: Poppins, sans-serif;">&nbsp;Contact Us&nbsp;</span><a class="btn btn-primary ms-md-2" role="button" href="#" style="background: url(&quot;{{ asset('img/Screenshot (561)2.png') }}&quot;), rgb(253,85,13);font-family: Poppins, sans-serif;">GET INVOLVED</a>
            </div>
        </div>
    </nav>
    <section data-aos="fade-down" data-aos-duration="1000" style="height: 500px;">
        <div class="container" style="width: 1008px;height: 468px;margin-top: 150px;border-style: solid;border-color: #5f2b84;">
            <div class="row" style="height: 468px;">
                <div class="col" style="width: 527px;align-content: center;align-items: center;background: url(&quot;{{ asset('img/Group 3.png') }}&quot;), #161a55;">
                    <div class="border rounded-0 flex-column justify-content-center align-items-center align-content-center align-self-center order-first" style="background: #ffffff;color: rgb(0,0,0);margin-top: 50px;width: 402px;height: 369px;margin-left: 36px;text-align: center;border-radius: 10px;">
                        <h1 style="text-align: center;font-family: Poppins, sans-serif;font-size: 24px;font-weight: bold;padding-top: 50px;color: #5f2b84;">Don't have an account?&nbsp;</h1><span style="font-family: Poppins, sans-serif;text-align: center;margin-top: 100px;margin-left: 10px;margin-right: 10px;"><br>Register Now and assess the Digital Maturity level of organization.<br><br></span><button class="btn btn-primary d-flex flex-column justify-content-center align-items-center" type="button" style="margin-right: 0px;margin-left: 110px;margin-top: 90px;background: url(&quot;{{ asset('img/Screenshot (561) 2.png') }}&quot;);font-family: Poppins, sans-serif;width: 178px;height: 55px;text-align: center;">Signup</button>
                    </div>
                </div>
                <div class="col" style="border-color: rgb(0,10,255);">
                    <h1 style="color: #f01f75;text-align: center;font-family: Poppins, sans-serif;font-size: 24px;margin-top: 20px;font-weight: bold;">Login Your Account</h1>
                    <section><input class="form-control-lg" type="text" style="padding-bottom: 1px;margin-left: 40px;width: 401px;height: 49px;margin-top: 50px;" name="username" placeholder="Username"><input class="form-control-lg" type="password" style="width: 401px;height: 49px;margin-top: 50px;margin-left: 40px;padding-bottom: 1px;" name="password" placeholder="Password"></section><a href="#" style="color: rgb(0,0,0);">Forgot Password</a><button class="btn btn-primary" type="button" style="margin-right: 0px;margin-left: 50px;margin-top: 100px;background: url(&quot;{{ asset('img/Screenshot (561) 2.png') }}&quot;);font-family: Poppins, sans-serif;width: 178px;height: 55px;">Login</button>
                </div>
            </div>
        </div>
    </section>

</body>
@endsection
