@extends('layouts.userNavbar')

@section('content')

<div class="container">
    <section data-aos="fade-down" data-aos-duration="1000" style="height: 700px;text-align:center;">
        <div style="height: 630px;width: 1177px;margin-top: 180px;margin-left:45px;background: #161A55;border-radius: 10px;">
            <div class="container">
                <div class="row">
                    <a class="btn btn-primary d-flex flex-row justify-content-center " type="button" style="margin-left: 10px;margin-top:30px;background: url(&quot;{{ asset('img/Back white.png') }}&quot;), rgba(13,110,253,0);border-color: rgba(255,255,255,0);width: 30px;height: 30px;" href="/home"></a>
                    <span style="font-size: 32px;font-family: poppins;text-align: center;">Details About Available Resources</span>
                </div>
            </div>
            <section style="width: 1083px;height: 484px;margin-left: 45px;margin-bottom: -40px;background: var(--bs-body-bg);border-radius: 10px;text-align: center;">
                <span style="font-family: Poppins, sans-serif;color: #000000;font-size:20px"><br> This section is to capture and comprehensively assess the resources available within the organization, enabling efficient district rollouts by leveraging these resources effectively for successful implementation and support.<br><br>Download the given excel template download button and after filled it you can upload excel file using following upload button. Please Upload details under given proper format.<br><br></span>
                <div class="row" style="margin-top: 100px;">
                    <div class="col">
                        <button class="btn btn-primary" type="button" style="font-family: Poppins, sans-serif;width: 178px;height: 57px;margin-right: 30px;font-size: 20px;background: url(&quot;{{ asset('img/Screenshot (561) 2.png') }}&quot;), var(--bs-orange);border-style: none;">Download</button>
                        <button class="btn btn-primary" type="button" style="font-family: Poppins, sans-serif;width: 178px;height: 57px;margin-left: 30px;font-size: 20px;background: url(&quot;{{ asset('img/Screenshot (561) 2.png') }}&quot;), #EF4323;border-style: none;">Upload</button></div>
                </div>
            </section>
        </div>
    </section>
</div>
@endsection
