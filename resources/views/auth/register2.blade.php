@extends('layouts.govofficialnavbar')

@section('content')

<section data-aos="fade-down" data-aos-duration="1000" style="height: 800px;">
    <div class="container" style="width: 1008px;height: 738px;margin-top: 200px;background: url(&quot;{{ asset('img/Group 159.png') }}&quot;);">
        <h1 style="text-align: center;font-family: Poppins, sans-serif;padding-top: 50px;">Create Account</h1>
        <form id="form" method="POST" action="{{ route('register') }}" onsubmit="return submitForm(this);">
            {{csrf_field()}}
        <div class="d-flex" style="width: 900px;height: 540px;font-family: Poppins, sans-serif;background: #ffffff;border-radius: 10px;padding-top: 0px;margin-top: 50px;margin-left: 40px;">
            <div class="col" style="margin-top: 20px;">
                <div class="row" style="margin-top: 30px;">
                    <div class="col"><span style="color: #5f2b84;font-weight: bold;margin-left: 50px;padding-top: 0px;">Enter Username</span>
                        <div class="row">
                            <div class="col" style="padding-top: 16px;"><input class="form-control-lg" id="username" name="username" type="text" placeholder="Enter the Username" style="padding-left: 16px;margin-left: 50px;width: 340px;"></div>
                        </div>
                    </div>
                    <div class="col"><span style="color: #5f2b84;font-weight: bold;margin-left: 50px;padding-top: 0px;">Enter Email</span>
                        <div class="row">
                            <div class="col" style="padding-top: 16px;"><input class="form-control-lg" id="email" name="email" type="email" placeholder="Enter the email address" style="padding-left: 16px;margin-left: 50px;width: 340px;"></div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 30px;">
                    <div class="col"><span style="color: #5f2b84;font-weight: bold;margin-left: 50px;padding-top: 0px;">Create Password</span>
                        <div class="row">
                            <div class="col" style="padding-top: 16px;"><input class="form-control-lg" id="password" name="password" type="password" placeholder="Enter the Password" style="padding-left: 16px;margin-left: 50px;width: 340px;"></div>
                        </div>
                    </div>
                    <div class="col"><span style="color: #5f2b84;font-weight: bold;margin-left: 50px;padding-top: 0px;">Confirm Password</span>
                        <div class="row">
                            <div class="col" style="padding-top: 16px;"><input class="form-control-lg" id="confirm-password" name="confirm-password" type="password" placeholder="Confirm Password" style="padding-left: 16px;margin-left: 50px;width: 340px;"></div>
                        </div>
                        <input class="form-control" id="type" name="type" value="2" type="hidden">
                    </div>
                </div>
                <div class="row" style="margin-left: 50px;margin-top: 30px;width: 600px;background: #d9d9d9;">
                    <div class="col" style="padding-top: 20px;padding-left: 20px;padding-right: 20px;padding-bottom: 20px;border-radius: 10px;"><span style="color: #5f2b84;">Password must be at least&nbsp; 6 characters and contain at least one letter and one number. Password are case-sensitive.</span></div>
                </div>
                <div class="row">
                    <div class="col d-flex flex-column justify-content-center align-items-center" style="margin-top: 30px;"><button class="btn btn-primary btn-lg" type="submit" style="background: url(&quot;{{ asset('img/Screenshot (561) 2.png') }}&quot;);border-width: 0px;">Continue</button></div>
                </div>
                <div class="row" style="font-size: 20px;">
                    <div class="col d-flex flex-column justify-content-center align-items-center align-content-center" style="margin-top: 20px;"><span class="align-content-center" style="color: rgb(0,0,0);width: 500px;text-align: center;padding-bottom: 0px;">Existing user? Click here to&nbsp;<a href="login2" style="color: #5f2b84;"><span style="color: rgb(0, 0, 0);">log in</span><br><br></a></span></div>
                </div>
            </div>
        </div>
        </form>
    </div>
</section>
@endsection
