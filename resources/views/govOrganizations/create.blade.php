@extends('layouts.navbar')

@section('content')

 <body style="border-color: rgb(46,127,208);color: rgb(255,255,255);height: 1250px;">

    <section style="height: 1850px;">
        <div class="container-fluid d-table float-none" data-aos="fade-down" data-aos-duration="1000" style="margin-top: 200px;background: #5f2b84;width: 1177px;height: 1630px;border-radius: 10px;">
            <h1 style="font-family: Poppins, sans-serif;text-align: center;font-weight: bold;margin-top: 10px;margin-left: 10px;padding-top: 30px;padding-bottom: 10px;">Register Now</h1>
            <form method="POST" action="{{ route('govorganizations.store') }}">
                {{csrf_field()}}

            <div class="justify-content-center align-items-center" style="width: 1083px;height: 700px;background: #ffffff;font-family: Poppins, sans-serif;color: rgb(0,0,0);margin-top: 10px;margin-left: 33px;border-radius: 10px;border-width: 3px;border-color: rgb(255,106,42);"><span class="text-center text-lg-start text-xxl-center d-flex flex-row" style="color: #f01f75;margin-top: 8px;margin-left: 10px;padding-top: 30px;padding-left: 5px;margin-bottom: 10px;border-radius: 10px;">General Information</span>
                <div class="row d-flex flex-row justify-content-center align-items-center" style="width: 1080px;margin-left: 5px;padding-top: 20px;padding-bottom: 30px;">
                    <div class="col">
                        <div class="row">
                            <div class="col"><span style="font-family: Poppins, sans-serif;color: #000000;margin-bottom: 0;padding-bottom: 0;">Name of the organization *</span></div>
                        </div>
                        <div class="row">
                            <div class="col"><input class="form-control-lg" name="gov_org_name" type="text" placeholder="Enter Organization Name" style="width: 500px;" value="{{ old('gov_org_name')}}">
                                @if($errors->has('gov_org_name'))
                                <p class="text-danger">{{ $errors->first('gov_org_name') }}</p>
                                @endif
                            </div>
                        </div>
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col"><span>Related Ministry *</span></div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <select id="related_ministry" name="related_ministry" class="form-control text-dark mb-1" style="background: rgb(255,255,255);color: rgb(139,128,128);text-align: left;width: 500px;height: 45px;font-family: Poppins, sans-serif;color: #000000;margin-bottom: 0;padding-bottom: 0" value="{{ old('related_ministry')}}">
                                    <option value="--Select option--">--Select option--</option>
                                    <option value="A">Ministry of A</option>
                                    <option value="B">Ministry of B</option>
                                    <option value="C">Ministry of C</option>
                                    <option value="D">Ministry of D</option>
                                    <option value="E">Ministry of E</option>
                                    <option value="F">Ministry of F</option>
                                </select>
                                @if($errors->has('related_ministry'))
                                <p class="text-danger">{{ $errors->first('related_ministry') }}</p>
                                @endif
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
                                <div class="col">
                                    <select id="organization_category" name="organization_category" class="form-control text-dark mb-1" style="background: rgb(255,255,255);color: rgb(139,128,128);text-align: left;width: 500px;height: 45px" value="{{ old('organization_category')}}">
                                        <option value="--Select option--">--Select option--</option>
                                        <option value="A">Organization A</option>
                                        <option value="B">Organization B</option>
                                        <option value="C">Organization C</option>
                                        <option value="D">Organization D</option>
                                        <option value="E">Organization E</option>
                                        <option value="F">Organization F</option>
                                    </select>
                                    @if($errors->has('organization_category'))
                                    <p class="text-danger">{{ $errors->first('organization_category') }}</p>
                                    @endif
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
                                <select id="types_of_services_provide" name="types_of_services_provide" class="form-control text-dark mb-1" style="background: rgb(255,255,255);color: rgb(139,128,128);text-align: left;width: 500px;height: 45px" value="{{ old('types_of_services_provide')}}">
                                    <option value="--Select option--">--Select option--</option>
                                    <option value="A">Service A</option>
                                    <option value="B">Service B</option>
                                    <option value="C">Service C</option>
                                    <option value="D">Service D</option>
                                    <option value="E">Service E</option>
                                    <option value="F">Service F</option>
                                </select>
                                @if($errors->has('types_of_services_provide'))
                                <p class="text-danger">{{ $errors->first('types_of_services_provide') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex flex-row justify-content-center align-items-center" style="width: 1080px;margin-left: 5px;padding-bottom: 30px;">
                    <div class="col">
                        <div class="row">
                            <div class="col"><span style="font-family: Poppins, sans-serif;color: #000000;">Number of employees *</span></div>
                        </div>
                        <div class="row">
                            <div class="col"><input class="form-control-lg" name="number_of_employee" type="text" placeholder="Enter number of emplyees" style="width: 500px;" value="{{ old('number_of_employee')}}">
                                @if($errors->has('number_of_employee'))
                                <p class="text-danger">{{ $errors->first('number_of_employee') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col"><span>District of operations *</span></div>
                        </div>
                        <div class="row">
                            <div class="col"><input class="form-control-lg" name="districts_of_operations" type="text" placeholder="Districts of Operations" style="width: 500px;" value="{{ old('districts_of_operations')}}">
                                @if($errors->has('districts_of_operations'))
                                <p class="text-danger">{{ $errors->first('districts_of_operations') }}</p>
                                @endif
                            </div>
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
                            <div class="col"><input class="form-control-lg" name="phone_number" type="text" placeholder="Enter the phone number" style="width: 500px;" value="{{ old('phone_number')}}">
                                @if($errors->has('phone_number'))
                                <p class="text-danger">{{ $errors->first('phone_number') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col"><span>Email Address *</span></div>
                        </div>
                        <div class="row">
                            <div class="col"><input class="form-control-lg" name="email" type="email" placeholder="Enter the email address" style="width: 500px;" value="{{ old('email')}}">
                                @if($errors->has('email'))
                                <p class="text-danger">{{ $errors->first('email') }}</p>
                                @endif
                            </div>
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
                            <div class="col"><input class="form-control-lg" name="name_of_the_head" type="text" placeholder="Enter the name" style="width: 500px;" value="{{ old('name_of_the_head')}}">
                                @if($errors->has('name_of_the_head'))
                                <p class="text-danger">{{ $errors->first('name_of_the_head') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col"><span>Designation *</span></div>
                        </div>
                        <div class="row">
                            <div class="col"><input class="form-control-lg" name="designation" type="text" placeholder="Enter the designation" style="width: 500px;" value="{{ old('designation')}}">
                                @if($errors->has('designation'))
                                <p class="text-danger">{{ $errors->first('designation') }}</p>
                                @endif
                            </div>
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
                            <div class="col"><input class="form-control-lg" name="cdio_name" type="text" placeholder="Enter the CDIO's name" style="width: 500px;" value="{{ old('cdio_name')}}">
                                @if($errors->has('cdio_name'))
                                <p class="text-danger">{{ $errors->first('cdio_name') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col"><span>CDIO's Email Address *</span></div>
                        </div>
                        <div class="row">
                            <div class="col"><input class="form-control-lg" name="cdio_email" type="email" placeholder="CDIO's email address" style="width: 500px;" value="{{ old('cdio_email')}}">
                                @if($errors->has('cdio_email'))
                                <p class="text-danger">{{ $errors->first('cdio_email') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex flex-row justify-content-center align-items-center" style="width: 1080px;margin-left: 5px;padding-top: 30px;">
                    <div class="col">
                        <div class="row">
                            <div class="col"><span style="font-family: Poppins, sans-serif;color: #000000;">CDIO's contact number *</span></div>
                        </div>
                        <div class="row">
                            <div class="col"><input class="form-control-lg" name="cdio_contact_no" type="text" placeholder="Enter the CDIO's contact number" style="width: 500px;" value="{{ old('cdio_contact_no')}}">
                                @if($errors->has('cdio_contact_no'))
                                <p class="text-danger">{{ $errors->first('cdio_contact_no') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="padding-top: 100px;padding-bottom: 0px;padding-left: 750px;">
                    <div class="col justify-content-center align-items-end align-content-end me-auto" style="height: 48px;"><button class="btn btn-primary btn-lg" type="reset" style="font-family: Poppins, sans-serif;padding-right: 11px;margin-right: 30px;background: rgb(255,255,255);color: rgb(238,110,17);border-color: rgb(238,110,17);">Cancel</button>
                        <button class="btn btn-primary btn-lg" type="submit" style="background: url(&quot;{{ asset('img/Screenshot (561) 2.png') }}&quot;);font-family: Poppins, sans-serif;padding-left: 10px;text-align: center;border-color: rgb(254,80,57);">Submit</button></div>
                </div>
            </div>
            </form>
        </div>
    </section>
    @endsection
