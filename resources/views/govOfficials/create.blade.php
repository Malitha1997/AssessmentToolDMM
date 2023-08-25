@extends('layouts.govofficialnavbar')

@section('content')

<section style="height: 950px;">
    <div class="container-fluid d-table float-none" data-aos="fade-down" data-aos-duration="1000" style="margin-top: 200px;background: #5f2b84;width: 1177px;height: 850px;border-radius: 10px;">
        <h1 style="font-family: Poppins, sans-serif;text-align: center;font-weight: bold;margin-top: 10px;margin-left: 10px;padding-top: 30px;padding-bottom: 10px;">Register Now</h1>
        <div class="justify-content-center align-items-center" style="width: 1083px;height: 700px;background: #ffffff;font-family: Poppins, sans-serif;color: rgb(0,0,0);margin-top: 10px;margin-left: 33px;border-radius: 10px;border-width: 3px;border-color: rgb(255,106,42);"><span class="text-center text-lg-start text-xxl-center d-flex flex-row" style="color: #f01f75;margin-top: 8px;margin-left: 10px;padding-top: 30px;padding-left: 5px;margin-bottom: 10px;border-radius: 10px;">General Information</span>
            <div class="row d-flex flex-row justify-content-center align-items-center" style="width: 1080px;margin-left: 5px;padding-top: 20px;padding-bottom: 30px;">
                <div class="col">
                    <div class="row">
                        <div class="col"><span style="font-family: Poppins, sans-serif;color: #000000;margin-bottom: 0;padding-bottom: 0;">Full Name</span></div>
                    </div>
                    <div class="row">
                        <div class="col"><input class="form-control-lg" type="text" placeholder="Enter Full Name" style="width: 500px;"></div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col"><span>Preferred Name</span></div>
                    </div>
                    <div class="row">
                        <div class="col"><input class="form-control-lg" type="text" placeholder="Enter Preferred Name" style="width: 500px;"></div>
                    </div>
                </div>
            </div>
            <div class="row d-flex flex-row justify-content-center align-items-center" style="width: 1080px;margin-left: 5px;padding-bottom: 30px;">
                <div class="col">
                    <div class="row">
                        <div class="col"><span style="font-family: Poppins, sans-serif;color: #000000;">Designation</span></div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="dropdown"><button class="btn btn-primary btn-lg dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button" style="background: rgb(255,255,255);color: rgb(139,128,128);border-style: solid;border-color: #aba7a7;text-align: left;width: 500px;">Select the designation</button>
                                <div class="dropdown-menu "><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col"><span>Organization Name</span></div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="dropdown"><button class="btn btn-primary btn-lg dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button" style="background: rgb(255,255,255);color: rgb(139,128,128);border-style: solid;border-color: #aba7a7;text-align: left;width: 500px;">Select Organization Name</button>
                                <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex flex-row justify-content-center align-items-center" style="width: 1080px;margin-left: 5px;padding-bottom: 30px;">
                <div class="col">
                    <div class="row">
                        <div class="col"><span style="font-family: Poppins, sans-serif;color: #000000;">Contact Number</span></div>
                    </div>
                    <div class="row">
                        <div class="col"><input class="form-control-lg" type="text" placeholder="Enter the contact Number" style="width: 500px;"></div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col"><span>Email address</span></div>
                    </div>
                    <div class="row">
                        <div class="col"><input class="form-control-lg" type="text" placeholder="Enter the email address" style="width: 500px;"></div>
                    </div>
                </div>

            </div>
            <div class="row d-flex flex-row justify-content-center align-items-center" style="width: 1080px;margin-left: 5px;padding-bottom: 30px;">
                <div class="col">
                    <div class="row">
                        <div class="col"><span style="font-family: Poppins, sans-serif;color: #000000;">Employment Layer</span></div>
                    </div>
                    <div class="row">
                        <div class="col"><input class="form-control-lg" type="text" placeholder="Select the Employment Layer" style="width: 500px;"></div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col"><span style="font-family: Poppins, sans-serif;color: #000000;">Date of Birth</span></div>
                    </div>
                    <div class="row">
                        <div class="col"><input class="form-control-lg" type="date" style="width: 500px; color:#aba7a7"></div>
                    </div>

                </div>
            <div class="row" style="padding-top: 100px;padding-bottom: 0px;padding-left: 750px;">
                <div class="col justify-content-center align-items-end align-content-end me-auto" style="height: 48px;"><button class="btn btn-primary btn-lg" type="reset" style="font-family: Poppins, sans-serif;padding-right: 11px;margin-right: 30px;background: rgb(255,255,255);color: rgb(238,110,17);border-color: rgb(238,110,17);">Cancel</button><button class="btn btn-primary btn-lg" type="submit" style="background: url(&quot;{{ asset('img/Screenshot (561) 2.png') }}&quot;);font-family: Poppins, sans-serif;padding-left: 10px;text-align: center;border-color: rgb(254,80,57);">Submit</button></div>
            </div>
        </div>
    </div>
</section>
@endsection
