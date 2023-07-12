@extends('layouts.navbar')

@section('content')
<body style="border-color: rgb(46,127,208);color: rgb(255,255,255);">
    <section data-aos="fade-down" data-aos-duration="1000" style="height: 750px;">
        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
        @endif
        <form method="POST" action="{{ route('forget.password.post') }}">
            @csrf
        <div class="container" style="height: 489px;width: 1006px;margin-top: 200px;background: url(&quot;{{ asset('img/Group9.png') }}&quot;);">
            <h1 style="text-align: center;margin-top: 0px;padding-top: 20px;font-family: Poppins, sans-serif;">Forgot Password?</h1>
            <div style="height: 307px;width: 641px;background: #ffffff;border-width: 0px;border-radius: 10px;margin-left: 170px;margin-top: 40px;">
                <div class="row">
                    <div class="col" style="height: 25px;margin-top: 40px;"><span style="color: #5f2b84;font-weight: bold;font-family: Poppins, sans-serif;margin-left: 100px;margin-top: 30px;padding-top: 0px;">Enter Email</span></div>
                </div>
                <div class="row">
                    <div class="col" style="text-align: center;margin-top: 20px;">
                        <input id="email" name="email" type="email" placeholder="Enter the Email" style="font-family: Poppins, sans-serif;width: 382px;height: 49px;border-radius: 10px;border-width: 1px;"  class="@error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col" style="text-align: center;margin-top: 30px;"><button class="btn btn-primary" type="submit" style="border-width: 0px;border-radius: 10px;background: url(&quot;{{ asset('img/Screenshot (561) 3.png') }}&quot;);font-family: Poppins, sans-serif;">Send Password Reset Link</button></div>
                </div>
                <div class="row">
                    <div class="col" style="text-align: center;margin-top: 30px;"><span style="color: rgb(0,0,0);">Back to&nbsp;<a href="{{ route('login') }}" style="color: #5f2b84;text-align: center;">login</a></span></div>
                </div>
            </div>
        </div>
        </form>
    </section>
</body>
@endsection
