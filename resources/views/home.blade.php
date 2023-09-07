@extends('layouts.userNavbar')

@section('content')

<body style="width: auto;border-color: rgb(46,127,208);color: rgb(255,255,255);">
    <section data-aos="fade-down" data-aos-duration="1000" >
        <div class="container container-expand-sm" data-aos="fade-down" data-aos-duration="1000" style="margin-top: 150px;margin-bottom: 20px;border-radius: 10px;border: 4px solid #5f2b84;">
            <div class="row" style="width:1377px;height:185px">
                <div class="col">
                    <div class="row" style="margin-top:10px;width:1050px"><span style="font-family: Poppins, sans-serif;color: #C51010;font-size:24px"><b>Attention !</b></span></div>
                    <div class="row" style="margin-top:10px;"><span style="font-family: Poppins, sans-serif;color: #000000;font-size:20px">It seems that you have some sections of the incomplete. To proceed, please make sure to click the <br>below button and fill out all the necessary information accurately. After filling these information you <br>can start Preliminary Assessment</span></div>
                </div>
                <div class="col" style="margin-top:60px;width:327px"><a class="btn btn-primary" href="/resources" data-aos="fade-down" type="button" style="width: 156.09px;height: 51px;font-size: 18px;font-family: Poppins, sans-serif;border-width: 0px;background: url(&quot;{{ asset('img/Screenshot (561) 10.png') }}&quot;);margin-right: 80px;">Continue</a></div></div>
            </div>
        </div>
        <div class="container container-expand-sm" data-aos="fade-down" data-aos-duration="1000" style="margin-top: 50px;margin-bottom: 20px;border-radius: 10px;border: 4px solid #5f2b84;">
            <div class="row">
                <div class="col" style="width:1377px;height:168px">
                    <div class="row" style="margin-top:50px;width:700px">
                        @if($dataExists)
                        <span style="font-family: Poppins, sans-serif;color: #000000;font-size:20px">You have already done the Preliminary Assessment. </span>
                        @elseif(!$dataExists)
                        <span style="font-family: Poppins, sans-serif;color: #000000;font-size:20px">You are eligible for Preliminary assessment.  Asses the Digital Maturity Level of organization. </span>
                        @endif
                    </div>
                </div>
                <div class="col" style="width:150px">
                    <div class="row" style="margin-top:50px;">
                        @if($dataExists)
                            <button class="btn btn-primary" type="button" style="width: 266px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 5.png') }}&quot;);border-width: 0px;font-family: Poppins, sans-serif;font-size: 20px;" disabled>Preliminary Assessment</button>
                            @elseif(!$technologyDataExists)
                            <a class="btn btn-primary" type="button" style="width: 266px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 5.png') }}&quot;);border-width: 0px;font-family: Poppins, sans-serif;font-size: 20px;" href="/preliminaryAssessment1" >Preliminary Assessment</a>
                            @elseif(!$customerDataExists)
                            <a class="btn btn-primary" type="button" style="width: 266px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 5.png') }}&quot;);border-width: 0px;font-family: Poppins, sans-serif;font-size: 20px;" href="/preliminaryAssessment2" >Preliminary Assessment</a>
                            @elseif(!$operationDataExists)
                            <a class="btn btn-primary" type="button" style="width: 266px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 5.png') }}&quot;);border-width: 0px;font-family: Poppins, sans-serif;font-size: 20px;" href="/preliminaryAssessment3" >Preliminary Assessment</a>
                            @elseif(!$strategyDataExists)
                            <a class="btn btn-primary" type="button" style="width: 266px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 5.png') }}&quot;);border-width: 0px;font-family: Poppins, sans-serif;font-size: 20px;" href="/preliminaryAssessment4" >Preliminary Assessment</a>
                            @elseif(!$cultureDataExists)
                            <a class="btn btn-primary" type="button" style="width: 266px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 5.png') }}&quot;);border-width: 0px;font-family: Poppins, sans-serif;font-size: 20px;" href="/preliminaryAssessment5" >Preliminary Assessment</a>
                            @endif
                    </div>
                </div>
                <div class="col" style="width:150px">
                    <div class="row" style="margin-top:50px;"><button class="btn btn-primary" type="button" style="width: 266px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 5.png') }}&quot;);border-width: 0px;font-family: Poppins, sans-serif;font-size: 20px;" disabled>Deep Assessment</button></div>
                </div>
            </div>
        </div>
        <div class="container container-expand-sm" data-aos="fade-down" data-aos-duration="1000" style="margin-top: 50px;margin-bottom: 20px;border-radius: 10px;border: 4px solid #5f2b84;">

            <div class="row">
                <div class="col" style="width: auto;margin-top: 20px">
                    <h1 style="font-family: Poppins, sans-serif;color: #1f2471;font-weight: bold;text-align: center;margin-top: 5px;">Organization Profile</h1>
                    <div class="row" style="margin-top: 30px;margin-bottom: 25px;">
                        <div class="col"><span data-aos="fade-down" style="color: #f01f75;font-size: 20px;font-weight: bold;font-family: Poppins, sans-serif;">General Information</span></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Building.png') }}" style="margin-right: 10px;"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;">Organization name</span>
                        </div>
                        <div class="col" style="text-align: left"><input class="" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->govorganizationdetail->govorganizationname->gov_org_name}}" readonly></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Government.png') }}" style="margin-left: 0px;margin-right: 10px;" width="25" height="25"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;" readonly>Related Ministry</span>
                        </div>
                        <div class="col" style="text-align: left;"><input class="" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->govorganizationdetail->relatedMinistry->related_ministry}}" readonly></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Menu.png') }}" style="margin-left: 0px;margin-right: 10px;"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;">Organization Category</span>
                        </div>
                        <div class="col" style="width: 350px;height: 34px;margin-top: 0px;text-align: left;"><input  class="" type="text" data-aos="fade-down" style="width:250px;border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->govorganizationdetail->organizationCategory->org_category}}"  readonly></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Self service.png') }}" style="margin-left: 0px;margin-right: 10px;"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;">Types of Services provided</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="" type="text" data-aos="fade-down" style="width:550px;border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->govorganizationdetail->types_of_service}}" readonly></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Group.png') }}" style="margin-left: 0px;margin-right: 10px;" width="25" height="25"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;">Number of employees</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->govorganizationdetail->number_of_employee}}" readonly></div>
                    </div>
                    <div class="row" data-aos="fade-down" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Map.png') }}" style="margin-left: 0px;margin-right: 10px;" width="25" height="25"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;">District of operations</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="" type="text" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->govorganizationdetail->districts_of_operations}}" readonly></div>
                    </div>
                    <div class="row" style="margin-top: 30px;margin-bottom: 25px;">
                        <div class="col"><span data-aos="fade-down" style="color: #f01f75;font-size: 20px;font-weight: bold;font-family: Poppins, sans-serif;">Organization Contact Detail</span></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Land Line.png') }}" style="margin-left: 0px;margin-right: 10px;"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;">Phone Number</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->govorganizationdetail->phone_number}}" readonly></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Email.png') }}" style="margin-left: 0px;margin-right: 10px;" width="25" height="25"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;" readonly>Organization email</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->govorganizationdetail->gov_org_email}}" readonly></div>
                    </div>
                    <div class="row" style="margin-top: 30px;margin-bottom: 25px;">
                        <div class="col"><span data-aos="fade-down" style="color: #f01f75;font-size: 20px;font-weight: bold;font-family: Poppins, sans-serif;">Details of the Head of Organization</span></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/User.png') }}" style="margin-left: 0px;margin-right: 10px;" width="25" height="25"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;">Name of the Head of Org.</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->govorganizationdetail->name_of_the_head}}" readonly></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Menu.png') }}" style="margin-left: 0px;margin-right: 10px;"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;">Designation</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->govorganizationdetail->designation}}" readonly></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Email.png') }}" style="margin-left: 0px;margin-right: 10px;"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;">Email of the head</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->govorganizationdetail->head_email}}" readonly></div>
                    </div>
                    @if($cdioDataExists)
                    <div class="row" style="margin-top: 30px;margin-bottom: 25px;">
                        <div class="col"><span data-aos="fade-down" style="color: #f01f75;font-size: 20px;font-weight: bold;font-family: Poppins, sans-serif;">CDIO's Contact Detail</span></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Leader.png') }}" style="margin-left: 0px;margin-right: 10px;"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;">CDIO's name</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->govorganizationdetail->cdio_name}}" readonly></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Envelope.png') }}" style="margin-left: 0px;margin-right: 10px;" width="25" height="25"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;">CDIO's email</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->govorganizationdetail->cdio_email}}" readonly></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Viber.png') }}" style="margin-left: 0px;margin-right: 10px;" width="25" height="25"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;">CDIO's contact number</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px" value="{{Auth::user()->govorganizationdetail->cdio_contact_no}}" readonly></div>
                    </div>
                    @elseif(!$cdioDataExists)
                    <div class="row" style="margin-top: 30px;margin-bottom: 25px;">
                        <div class="col"><span data-aos="fade-down" style="color: #f01f75;font-size: 20px;font-weight: bold;font-family: Poppins, sans-serif;">CDIO's Contact Detail</span></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Leader.png') }}" style="margin-left: 0px;margin-right: 10px;"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#716e6f;font-size: 20px;margin-top: 0px;">CDIO's name</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->govorganizationdetail->cdio_name}}" readonly></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Envelope.png') }}" style="margin-left: 0px;margin-right: 10px;" width="25" height="25"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#716e6f;font-size: 20px;margin-top: 0px;">CDIO's email</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->govorganizationdetail->cdio_email}}" readonly></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Viber.png') }}" style="margin-left: 0px;margin-right: 10px;" width="25" height="25"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#716e6f;font-size: 20px;margin-top: 0px;">CDIO's contact number</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px" value="{{Auth::user()->govorganizationdetail->cdio_contact_no}}" readonly></div>
                    </div>
                    @endif
                    <div class="row" style="margin-top: 30px;margin-bottom: 25px;">
                        <div class="col"><span data-aos="fade-down" style="color: #f01f75;font-size: 20px;font-weight: bold;font-family: Poppins, sans-serif;">Digital Transformation Unit (DTU)/ IT unit Details</span></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Information Technology.png') }}" style="margin-left: 0px;margin-right: 10px;"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;">DTU type of Organization</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->govorganizationdetail->dtu_type}}" readonly></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/System Administrator.png') }}" style="margin-left: 0px;margin-right: 10px;" width="25" height="25"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;">Number of employees in the DTU</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->govorganizationdetail->number_of_employees_dtu}}" readonly></div>
                    </div>

                    <div class="row" style="margin-bottom: 20px;">
                        <div class="col" style="margin-top: 50px;text-align: right;">
                            @if($dataExists)
                            <a class="btn btn-primary" href="/preliminaryResults" data-aos="fade-down" type="button" style="width: 198px;height: 47px;font-family: Poppins, sans-serif;font-size: 18px;color: #ef4323;background: rgb(255,255,255);border-width: 2px;border-color: #ef4323;margin-right: 10px; border-radius: 10px">View Results</a>
                            @else
                            <button class="btn btn-primary" data-aos="fade-down" type="button" style="width: 198px;height: 47px;font-family: Poppins, sans-serif;font-size: 18px;color: #898382;background: rgb(255,255,255);border-width: 2px;border-color: #898382;margin-right: 10px; border-radius: 10px" disabled>View Results</button>
                            @endif
                            <a class="btn btn-primary" href="{{ route('govorganizations.edit',Auth::user()->govorganizationdetail->id) }}" data-aos="fade-down" type="button" style="width: 198px;height: 47px;font-size: 18px;font-family: Poppins, sans-serif;border-width: 0px;background: url(&quot;{{ asset('img/Screenshot (561) 7.png') }}&quot;);margin-right: 80px;">Edit Profile</a></div>
                    </div>
                </div>
                {{--  <div style="width :450.3px;background: url(&quot;{{ asset('img/Screenshot (560) 1(2).png') }}&quot;);">
                    @if($dataExists)
                    <h1 data-aos="fade-down" style="font-family: Poppins, sans-serif;text-align: center;font-size: 24px;margin-top: 500px;">You have already<br> done the <br>Preliminary Assessment.&nbsp;</h1>
                    @else
                    <h1 data-aos="fade-down" style="font-family: Poppins, sans-serif;text-align: center;font-size: 24px;margin-top: 500px;">You are eligible for Preliminary assessment. <br>Assess the Digital Maturity Level of organization.&nbsp;</h1>
                    @endif
                    <div class="row" style="margin-top: 90px;">
                        <div class="col" style="text-align: center;">
                            @if($dataExists)
                            <button class="btn btn-primary" type="button" style="width: 266px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 5.png') }}&quot;);border-width: 0px;font-family: Poppins, sans-serif;font-size: 20px;" disabled>Preliminary Assessment</button>
                            @elseif(!$technologyDataExists)
                            <a class="btn btn-primary" type="button" style="width: 266px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 5.png') }}&quot;);border-width: 0px;font-family: Poppins, sans-serif;font-size: 20px;" href="/preliminaryAssessment1" >Preliminary Assessment</a>
                            @elseif(!$customerDataExists)
                            <a class="btn btn-primary" type="button" style="width: 266px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 5.png') }}&quot;);border-width: 0px;font-family: Poppins, sans-serif;font-size: 20px;" href="/preliminaryAssessment2" >Preliminary Assessment</a>
                            @elseif(!$operationDataExists)
                            <a class="btn btn-primary" type="button" style="width: 266px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 5.png') }}&quot;);border-width: 0px;font-family: Poppins, sans-serif;font-size: 20px;" href="/preliminaryAssessment3" >Preliminary Assessment</a>
                            @elseif(!$strategyDataExists)
                            <a class="btn btn-primary" type="button" style="width: 266px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 5.png') }}&quot;);border-width: 0px;font-family: Poppins, sans-serif;font-size: 20px;" href="/preliminaryAssessment4" >Preliminary Assessment</a>
                            @elseif(!$cultureDataExists)
                            <a class="btn btn-primary" type="button" style="width: 266px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 5.png') }}&quot;);border-width: 0px;font-family: Poppins, sans-serif;font-size: 20px;" href="/preliminaryAssessment5" >Preliminary Assessment</a>
                            @endif
                        </div>
                    <div class="row" style="margin-top: 50px;">
                         <div class="col" style="text-align: center;"><button class="btn btn-primary" type="button" style="width: 266px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 5.png') }}&quot;), url(&quot;{{ asset('img/Screenshot (561) 5.png') }}&quot;);border-width: 0px;font-family: Poppins, sans-serif;font-size: 20px;" disabled>Deep Assessment</button></div>
                    </div>
                </div>  --}}
            </div>
        </div>
    </section>
</body>
@endsection
