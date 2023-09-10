@extends('layouts.userNavbar')

@section('content')

<div class="container container-expand-sm">
    <section data-aos="fade-down" data-aos-duration="1000" style="height: 700px;text-align:center;">
        <div style="height: 630px;width: 1177px;margin-top: 180px;margin-left:45px;background: #161A55;border-radius: 10px;">
            <div class="container container-expand-sm">
                <div class="row">
                    <a class="btn btn-primary d-flex flex-row justify-content-center " type="button" style="margin-left: 10px;margin-top:30px;background: url(&quot;{{ asset('img/Back white.png') }}&quot;), rgba(13,110,253,0);border-color: rgba(255,255,255,0);width: 30px;height: 30px;" href="/home"></a>
                    <span style="font-size: 32px;font-family: poppins;text-align: center;">Details About Available Resources</span>
                </div>
            </div>
            <section style="width: 1083px;height: 484px;margin-left: 45px;margin-bottom: -40px;background: var(--bs-body-bg);border-radius: 10px;text-align: center;">
                <span style="font-family: Poppins, sans-serif;color: #000000;font-size: 20px"><br> This section is to capture and comprehensively assess the resources available within the organization, enabling efficient district rollouts by leveraging these resources effectively for successful implementation and support.<br><br>Download the given excel template download button and after filling it, you can upload the Excel file using the following upload button. Please Upload details under the given proper format.<br><br></span>
                <div class="row" style="margin-top: 10px;">
                    <div class="col col-expand-sm">
                        <form action="{{ route('resourceusers.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="gov_id" id="gov_id" value="{{ Auth::user()->govorganizationdetail->id }}">

                            <div class="col" style="margin-bottom: 10px">
                                <a class="btn btn-primary" href="{{ route('download') }}" style="border-radius: 10px;font-family: Poppins, sans-serif;width: 178px;height: 57px;font-size: 20px;background: url('{{ asset('img/Screenshot (561) 2.png') }}'), var(--bs-orange);border-style: none;">Download</a>
                            </div>

                            <div class="col" style="margin-bottom: 10px">
                                <input class="form-control" type="file" id="resource_file" name="resource_file" style="width: 300px;margin-left: 35%">
                            </div>

                            <div class="col" style="margin-bottom: 10px">
                                <button class="btn btn-primary" type="submit" style="border-radius: 10px;font-family: Poppins, sans-serif;width: 178px;height: 57px;font-size: 20px;background: url('{{ asset('img/Screenshot (561) 2.png') }}'), #EF4323;border-style: none;">Upload</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>

        </div>
    </section>
</div>
@endsection
