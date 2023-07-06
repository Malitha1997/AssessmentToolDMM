@extends('layouts.navbar')

@section('content')

 <body style="border-color: rgb(46,127,208);color: rgb(255,255,255);height: 1250px;">
    <nav class="navbar navbar-light navbar-expand-md fixed-top py-3" data-aos="slide-down" data-aos-duration="1000" style="background: #5f2b84;width: 1440px;height: 115px;">
        <div class="container-fluid"><a class="navbar-brand d-flex align-items-center" href="#"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2" style="width: 1440px;text-align: left;font-family: Poppins, sans-serif;"><img src="{{ asset('img/duallogo-white-icta 1(1).png') }}">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#" style="font-size: 14px;color: rgba(255,255,255,0.9);font-family: Poppins, sans-serif;">ICTA Digital Hub</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="font-size: 14px;color: rgb(255,255,255);font-family: Poppins, sans-serif;">Capacity Building Drive</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="font-size: 14px;color: rgb(255,255,255);font-family: Poppins, sans-serif;">Download</a></li>
                </ul><span class="navbar-text" style="font-size: 14px;color: rgb(255,255,255);font-family: Poppins, sans-serif;">&nbsp;Our Volunteers&nbsp;</span><span class="navbar-text" style="font-size: 14px;color: rgb(255,255,255);font-family: Poppins, sans-serif;">&nbsp;Events&nbsp;</span><span class="navbar-text" style="font-size: 14px;color: rgb(255,255,255);font-family: Poppins, sans-serif;">&nbsp;Contact Us&nbsp;</span><a class="btn btn-primary ms-md-2" role="button" href="#" style="background: url(&quot;{{ asset('img/Screenshot (561) 2.png') }}&quot;), rgb(253,85,13);font-family: Poppins, sans-serif;border-color: rgb(255,120,22);">GET INVOLVED</a>
            </div>
        </div>
    </nav>
    <section style="height: 1850px;">
        <div class="container-fluid d-table float-none" data-aos="fade-down" data-aos-duration="1000" style="margin-top: 200px;background: #5f2b84;width: 1177px;height: 1630px;border-radius: 10px;">
            <h1 style="font-family: Poppins, sans-serif;text-align: center;font-weight: bold;margin-top: 10px;margin-left: 10px;padding-top: 30px;padding-bottom: 10px;">Register Now</h1>
            <div class="justify-content-center align-items-center" style="width: 1083px;height: 700px;background: #ffffff;font-family: Poppins, sans-serif;color: rgb(0,0,0);margin-top: 10px;margin-left: 33px;border-radius: 10px;border-width: 3px;border-color: rgb(255,106,42);"><span class="text-center text-lg-start text-xxl-center d-flex flex-row" style="color: #f01f75;margin-top: 8px;margin-left: 10px;padding-top: 30px;padding-left: 5px;margin-bottom: 10px;border-radius: 10px;">General Information</span>
                <div class="row d-flex flex-row justify-content-center align-items-center" style="width: 1080px;margin-left: 5px;padding-top: 20px;padding-bottom: 30px;">
                    <div class="col">
                        <div class="row">
                            <div class="col"><span style="font-family: Poppins, sans-serif;color: #000000;margin-bottom: 0;padding-bottom: 0;">Name of the organization *</span></div>
                        </div>
                        <div class="row">
                            <div class="col"><input class="form-control-lg" type="text" placeholder="Enter Organization Name" style="width: 500px;"></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col"><span>Related Ministry *</span></div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="dropdown"><button class="btn btn-primary btn-lg dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button" style="background: rgb(255,255,255);color: rgb(170,167,167);border-style: solid;border-color: rgb(0,0,0);width: 500px;text-align: left;">Select the related ministry</button>
                                    <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex flex-row justify-content-center align-items-center" style="width: 1080px;margin-left: 5px;padding-bottom: 30px;">
                    <div class="col">
                        <div class="row">
                            <div class="col"><span style="font-family: Poppins, sans-serif;color: #000000;">Organization category *</span></div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="dropdown"><button class="btn btn-primary btn-lg dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button" style="background: rgb(255,255,255);color: rgb(139,128,128);border-style: solid;border-color: rgb(0,0,0);text-align: left;width: 500px;">Select the related ministry</button>
                                    <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col"><span>Type of services provided *</span></div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="dropdown"><button class="btn btn-primary btn-lg dropdown-toggle border-dark" aria-expanded="false" data-bs-toggle="dropdown" type="button" style="background: rgb(255,255,255);color: rgb(170,167,167);width: 500px;text-align: left;">Select the related ministry</button>
                                    <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex flex-row justify-content-center align-items-center" style="width: 1080px;margin-left: 5px;padding-bottom: 30px;">
                    <div class="col">
                        <div class="row">
                            <div class="col"><span style="font-family: Poppins, sans-serif;color: #000000;">Name of employees *</span></div>
                        </div>
                        <div class="row">
                            <div class="col"><input class="form-control-lg" type="text" placeholder="Enter number of emplyees" style="width: 500px;"></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col"><span>District of operations *</span></div>
                        </div>
                        <div class="row">
                            <div class="col"><input class="form-control-lg" type="text" placeholder="Districts of Operations" style="width: 500px;"></div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 10px;padding-top: 30px;padding-bottom: 30px;">
                    <div class="col"><span style="margin-top: 10px;margin-left: 10px;padding-top: 10px;padding-left: 5px;">Does the&nbsp; organization have a IT unit?</span></div>
                    <div class="col"><label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label></div>
                </div><span style="margin-top: 8px;margin-left: 10px;padding-top: 10px;padding-left: 5px;color: #f01f75;">Organization&nbsp; Contact Detaill</span>
                <div class="row d-flex flex-row justify-content-center align-items-center" style="width: 1080px;margin-left: 5px;padding-top: 30px;">
                    <div class="col">
                        <div class="row">
                            <div class="col"><span style="font-family: Poppins, sans-serif;color: #000000;">Phone Number *</span></div>
                        </div>
                        <div class="row">
                            <div class="col"><input class="form-control-lg" type="text" placeholder="Enter the phone number" style="width: 500px;"></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col"><span>Email Address *</span></div>
                        </div>
                        <div class="row">
                            <div class="col"><input class="form-control-lg" type="text" placeholder="Enter the email address" style="width: 500px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="width: 1083px;height: 750px;color: rgb(0,0,0);background: #ffffff;margin-left: 33px;margin-top: 33px;border-radius: 10px;"><span style="margin-top: 50px;margin-bottom: 10px;margin-left: 10px;padding-top: 0px;padding-left: 5px;color: #f01f75;">Details of the Head of&nbsp; Organization</span>
                <div class="row d-flex flex-row justify-content-center align-items-center" style="width: 1080px;margin-left: 5px;padding-top: 30px;">
                    <div class="col">
                        <div class="row">
                            <div class="col"><span style="font-family: Poppins, sans-serif;color: #000000;">Name of the Head of Organization *</span></div>
                        </div>
                        <div class="row">
                            <div class="col"><input class="form-control-lg" type="text" placeholder="Enter the name" style="width: 500px;"></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col"><span>Designation *</span></div>
                        </div>
                        <div class="row">
                            <div class="col"><input class="form-control-lg" type="text" placeholder="Enter the designation" style="width: 500px;"></div>
                        </div>
                    </div>
                </div><span style="margin-top: 10px;margin-bottom: 10px;margin-left: 10px;padding-top: 10px;padding-left: 5px;"></span>
                <div class="row" style="margin-top: 0px;margin-bottom: 10px;margin-left: 10px;padding-top: 0px;padding-left: 5px;">
                    <div class="col"><span style="color: #f01f75;">CDIO's Contact Detail</span></div>
                </div>
                <div class="row" style="margin-top: 10px;padding-top: 30px;padding-bottom: 30px;">
                    <div class="col"><span style="margin-top: 10px;margin-left: 10px;padding-top: 10px;padding-left: 5px;">Does the&nbsp; organization already have a CDIO?</span></div>
                    <div class="col"><label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label></div>
                </div>
                <div class="row d-flex flex-row justify-content-center align-items-center" style="width: 1080px;margin-left: 5px;padding-top: 30px;">
                    <div class="col">
                        <div class="row">
                            <div class="col"><span style="font-family: Poppins, sans-serif;color: #000000;">&nbsp;If yes, Mention the CDIO's Name*</span></div>
                        </div>
                        <div class="row">
                            <div class="col"><input class="form-control-lg" type="text" placeholder="Enter the CDIO's name" style="width: 500px;"></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col"><span>CDIO's Email Address *</span></div>
                        </div>
                        <div class="row">
                            <div class="col"><input class="form-control-lg" type="text" placeholder="CDIO's email address" style="width: 500px;"></div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex flex-row justify-content-center align-items-center" style="width: 1080px;margin-left: 5px;padding-top: 30px;">
                    <div class="col">
                        <div class="row">
                            <div class="col"><span style="font-family: Poppins, sans-serif;color: #000000;">CDIO's contact number *</span></div>
                        </div>
                        <div class="row">
                            <div class="col"><input class="form-control-lg" type="text" placeholder="Enter the CDIO's contact number" style="width: 500px;"></div>
                        </div>
                    </div>
                </div>
                <div class="row" style="padding-top: 100px;padding-bottom: 0px;padding-left: 750px;">
                    <div class="col justify-content-center align-items-end align-content-end me-auto" style="height: 48px;"><button class="btn btn-primary btn-lg" type="reset" style="font-family: Poppins, sans-serif;padding-right: 11px;margin-right: 30px;background: rgb(255,255,255);color: rgb(238,110,17);border-color: rgb(238,110,17);">Cancel</button><button class="btn btn-primary btn-lg" type="submit" style="background: url(&quot;{{ asset('img/Screenshot (561) 2.png') }}&quot;);font-family: Poppins, sans-serif;padding-left: 10px;text-align: center;border-color: rgb(254,80,57);">Submit</button></div>
                </div>
            </div>
        </div>
    </section>
    @endsection
