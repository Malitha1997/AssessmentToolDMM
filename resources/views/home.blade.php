@extends('layouts.userNavbar')

@section('content')

<body style="border-color: rgb(46,127,208);color: rgb(255,255,255);">

    <section data-aos="fade-up" data-aos-duration="1000" style="height: 1550px;">
        <div class="container" style="margin-top: 250px;border-radius: 0px;border: 2px solid #5f2b84 ;">
            <div class="row">
                <div class="col" style="height: 1160px;margin-top: 20px;">
                    <h1 style="font-family: Poppins, sans-serif;color: #1f2471;font-weight: bold;text-align: center;margin-top: 30px;">Organization Profile</h1>
                    <div class="row" style="margin-top: 30px;">
                        <div class="col"><span style="color: #f01f75;font-size: 20px;font-weight: bold;font-family: Poppins, sans-serif;">General Information</span></div>
                    </div>
                    <div class="row">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img src="{{ asset('img/Building.png') }}" style="margin-left: 40px;margin-right: 40px;"></picture><span style="font-family: Poppins, sans-serif;color: rgb(0,0,0);font-size: 20px;margin-top: 0px;">Name of the Organization</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img src="{{ asset('img/Government.png') }}" style="margin-left: 40px;margin-right: 40px;" width="25" height="25"></picture><span style="font-family: Poppins, sans-serif;color: rgb(0,0,0);font-size: 20px;margin-top: 0px;">Related Ministry</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img src="{{ asset('img/Menu.png') }}" style="margin-left: 40px;margin-right: 40px;"></picture><span style="font-family: Poppins, sans-serif;color: rgb(0,0,0);font-size: 20px;margin-top: 0px;">Organization Category</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img src="{{ asset('img/Self service.png') }}" style="margin-left: 40px;margin-right: 40px;"></picture><span style="font-family: Poppins, sans-serif;color: rgb(0,0,0);font-size: 20px;margin-top: 0px;">Types of Services provided</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img src="{{ asset('img/Group.png') }}" style="margin-left: 40px;margin-right: 40px;" width="25" height="25"></picture><span style="font-family: Poppins, sans-serif;color: rgb(0,0,0);font-size: 20px;margin-top: 0px;">Number of employees</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img src="{{ asset('img/Map.png') }}" style="margin-left: 40px;margin-right: 40px;" width="25" height="25"></picture><span style="font-family: Poppins, sans-serif;color: rgb(0,0,0);font-size: 20px;margin-top: 0px;">District of operations</span>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 30px;">
                        <div class="col"><span style="color: #f01f75;font-size: 20px;font-weight: bold;font-family: Poppins, sans-serif;">General Information</span></div>
                    </div>
                    <div class="row">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img src="{{ asset('img/Land Line.png') }}" style="margin-left: 40px;margin-right: 40px;"></picture><span style="font-family: Poppins, sans-serif;color: rgb(0,0,0);font-size: 20px;margin-top: 0px;">011-12345678</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img src="{{ asset('img/Email.png') }}" style="margin-left: 40px;margin-right: 40px;" width="25" height="25"></picture><span style="font-family: Poppins, sans-serif;color: rgb(0,0,0);font-size: 20px;margin-top: 0px;">info@gmail.com</span>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 30px;">
                        <div class="col"><span style="color: #f01f75;font-size: 20px;font-weight: bold;font-family: Poppins, sans-serif;">General Information</span></div>
                    </div>
                    <div class="row">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img src="{{ asset('img/User.png') }}" style="margin-left: 40px;margin-right: 40px;" width="25" height="25"></picture><span style="font-family: Poppins, sans-serif;color: rgb(0,0,0);font-size: 20px;margin-top: 0px;">Name of the Head of Organization</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img src="{{ asset('img/Menu.png') }}" style="margin-left: 40px;margin-right: 40px;"></picture><span style="font-family: Poppins, sans-serif;color: rgb(0,0,0);font-size: 20px;margin-top: 0px;">Designation</span>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 30px;">
                        <div class="col"><span style="color: #f01f75;font-size: 20px;font-weight: bold;font-family: Poppins, sans-serif;">General Information</span></div>
                    </div>
                    <div class="row">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img src="{{ asset('img/Leader.png') }}" style="margin-left: 40px;margin-right: 40px;"></picture><span style="font-family: Poppins, sans-serif;color: rgb(0,0,0);font-size: 20px;margin-top: 0px;">CDIO's name</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img src="{{ asset('img/Envelope.png') }}" style="margin-left: 40px;margin-right: 40px;" width="25" height="25"></picture><span style="font-family: Poppins, sans-serif;color: rgb(0,0,0);font-size: 20px;margin-top: 0px;">cdio@gmail.com</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img src="{{ asset('img/Viber.png') }}" style="margin-left: 40px;margin-right: 40px;" width="25" height="25"></picture><span style="font-family: Poppins, sans-serif;color: rgb(0,0,0);font-size: 20px;margin-top: 0px;">076-1234678</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col" style="margin-top: 100px;text-align: right;"><button class="btn btn-primary" type="button" style="width: 198px;height: 47px;font-family: Poppins, sans-serif;font-size: 18px;color: #ef4323;background: rgb(255,255,255);border-width: 2px;border-color: #ef4323;margin-right: 20px;">View Results</button><button class="btn btn-primary" type="button" style="width: 198px;height: 47px;font-size: 18px;font-family: Poppins, sans-serif;border-width: 0px;background: url(&quot;{{ asset('img/Screenshot (561) 5.png') }}&quot;);margin-right: 80px;">Edit Profile</button></div>
                    </div>
                </div>
                <div class="col" style="background: url(&quot;{{ asset('img/Screenshot (560) 1.png') }}&quot;);">
                    <h1 data-aos="fade-down" style="font-family: Poppins, sans-serif;text-align: center;font-size: 32px;margin-top: 500px;">You are eligible for Preliminary assessment. Assess the Digital Maturity Level of organization.&nbsp;</h1>
                    <div class="row" style="margin-top: 90px;">
                        <div class="col" style="text-align: center;"><button class="btn btn-primary" type="button" style="width: 266px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 5.png') }}&quot;);border-width: 0px;font-family: Poppins, sans-serif;font-size: 20px;">Preliminary Assessment</button></div>
                    </div>
                    <div class="row" style="margin-top: 50px;">
                        <div class="col" style="text-align: center;"><button class="btn btn-primary" type="button" style="width: 266px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 5.png') }}&quot;), url(&quot;{{ asset('img/Screenshot (561) 2.png') }}&quot;);border-width: 0px;font-family: Poppins, sans-serif;font-size: 20px;" disabled>Deep Assessment</button></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
@endsection
