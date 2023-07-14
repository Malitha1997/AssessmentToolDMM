@extends('layouts.navbar')

@section('content')

<body style="border-color: rgb(46,127,208);color: rgb(255,255,255);max-height: 100%;height: 1000px;">
    <section data-aos="fade-down" data-aos-duration="1000" style="height: 500px;">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
        <div class="container" style="width: 1008px;height: 468px;margin-top: 150px;border-style: solid;border-color: #5f2b84;">
            <div class="row" style="height: 468px;">
                <div class="col" style="width: 527px;align-content: center;align-items: center;background: url(&quot;{{ asset('img/Group 3.png') }}&quot;), #161a55;">
                    <div class="border rounded-0 flex-column justify-content-center align-items-center align-content-center align-self-center order-first" style="background: #ffffff;color: rgb(0,0,0);margin-top: 50px;width: 402px;height: 369px;margin-left: 36px;text-align: center;border-radius: 10px;">
                        <h1 style="text-align: center;font-family: Poppins, sans-serif;font-size: 24px;font-weight: bold;padding-top: 50px;color: #5f2b84;">Don't have an account?&nbsp;</h1><span style="font-family: Poppins, sans-serif;text-align: center;margin-top: 100px;margin-left: 10px;margin-right: 10px;"><br>Register Now and assess the Digital <br>Maturity level of organization.<br><br></span>

                        <a class="btn btn-primary d-flex flex-column justify-content-center align-items-center" href="{{ route('register') }}" style="border-width: 0px;margin-right: 0px;margin-left: 110px;margin-top: 90px;background: url(&quot;{{ asset('img/Screenshot (561) 2.png') }}&quot;);font-family: Poppins, sans-serif;width: 178px;height: 55px;text-align: center;">Signup</a>

                    </div>
                </div>
                <div class="col" style="border-color: rgb(0,10,255);">
                    <h1 style="color: #f01f75;text-align: center;font-family: Poppins, sans-serif;font-size: 24px;margin-top: 20px;font-weight: bold;">Login Your Account</h1>
                    <section>
                    <div class="row">
                        <div class="col">
                        <input class="form-control-lg @error('username') is-invalid @enderror" id="username" type="username" style="padding-bottom: 1px;margin-left: 40px;width: 401px;height: 49px;margin-top: 50px;" name="username" value="{{ old('username') }}" placeholder="Username" required>
                        @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col">
                        <input class="form-control-lg @error('password') is-invalid @enderror" id="password" type="password" style="width: 401px;height: 49px;margin-top: 50px;margin-left: 40px;padding-bottom: 1px;" name="password" value="{{ old('password') }}" placeholder="Password" required autocomplete="current-password">
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        </div>
                    </div>
                    </section>
                        <a href="{{ route('forget.password.get') }}" style="color: rgb(0,0,0);">Forgot Password</a>
                        <button type="submit" class="btn btn-primary"  style="border-width: 0px;margin-right: 0px;margin-left: 50px;margin-top: 100px;background: url(&quot;{{ asset('img/Screenshot (561) 2.png') }}&quot;);font-family: Poppins, sans-serif;width: 178px;height: 55px;">{{ __('Login') }}</button>
                </div>
            </div>
        </div>
        </form>
    </section>

</body>
@endsection
