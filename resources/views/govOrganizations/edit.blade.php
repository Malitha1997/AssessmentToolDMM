@extends('layouts.userNavbar')

@section('content')

<body style="width: auto;border-color: rgb(46,127,208);color: rgb(255,255,255);">
    <section data-aos="fade-up" data-aos-duration="1000" >
        <div class="container" style="margin-top: 150px;margin-bottom: 20px;border-radius: 0px;border: 2px solid #5f2b84;">
            <form method="post" action="{{route('govorganizations.update',$governmentOrganization->user->id)}}" enctype="multipart/form-data">
                {{csrf_field()}}
                @method('PUT')
            <div class="row">
                <div class="col" style="margin-left: 50px;width: auto;margin-top: 20px">
                    <h1 style="font-family: Poppins, sans-serif;color: #1f2471;font-weight: bold;text-align: center;margin-top: 5px;">Organization Profile</h1>
                    <div class="row" style="margin-top: 30px;margin-bottom: 25px;">
                        <div class="col"><span data-aos="fade-down" style="color: #f01f75;font-size: 20px;font-weight: bold;font-family: Poppins, sans-serif;">General Information</span></div>
                        <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Building.png') }}" style="margin-right: 10px;"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;">Organization name</span>
                        </div>
                        <div class="col" style="text-align: center"><input class="form-control" name="gov_org_name" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->governmentOrganization->gov_org_name}}"></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Government.png') }}" style="margin-left: 0px;margin-right: 10px;" width="25" height="25"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;" >Related Ministry</span>
                        </div>
                        <div class="col" style="text-align: center;"><input class="form-control" name="related_ministry" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->governmentOrganization->related_ministry}}"></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Menu.png') }}" style="margin-left: 0px;margin-right: 10px;"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;">Organization Category</span>
                        </div>
                        <div class="col" style="width: 350px;height: 34px;margin-top: 0px;text-align: center;"><input  class="form-control" name="organization_category" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->governmentOrganization->organization_category}}"></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Self service.png') }}" style="margin-left: 0px;margin-right: 10px;"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;">Types of Services provided</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="form-control" name="types_of_services_provide" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->governmentOrganization->types_of_services_provide}}" ></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Group.png') }}" style="margin-left: 0px;margin-right: 10px;" width="25" height="25"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;">Number of employees</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="form-control" name="number_of_employee" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->governmentOrganization->number_of_employee}}" ></div>
                    </div>
                    <div class="row" data-aos="fade-down" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Map.png') }}" style="margin-left: 0px;margin-right: 10px;" width="25" height="25"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;">District of operations</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="form-control" name="districts_of_operations" type="text" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->governmentOrganization->districts_of_operations}}" ></div>
                    </div>
                    <div class="row" style="margin-top: 30px;margin-bottom: 25px;">
                        <div class="col"><span data-aos="fade-down" style="color: #f01f75;font-size: 20px;font-weight: bold;font-family: Poppins, sans-serif;">Organization Contact Detail</span></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Land Line.png') }}" style="margin-left: 0px;margin-right: 10px;"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;">Phone Number</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="form-control" name="phone_number" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->governmentOrganization->phone_number}}" ></div>
                    </div>
                    <div class="row" style="margin-top: 30px;margin-bottom: 25px;">
                        <div class="col"><span data-aos="fade-down" style="color: #f01f75;font-size: 20px;font-weight: bold;font-family: Poppins, sans-serif;">Details of the Head of Organization</span></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/User.png') }}" style="margin-left: 0px;margin-right: 10px;" width="25" height="25"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;">Name of the Head of Org.</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="form-control" name="name_of_the_head" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->governmentOrganization->name_of_the_head}}" ></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Menu.png') }}" style="margin-left: 0px;margin-right: 10px;"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;">Designation</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="form-control" name="designation" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->governmentOrganization->designation}}" ></div>
                    </div>
                    <div class="row" style="margin-top: 30px;margin-bottom: 25px;">
                        <div class="col"><span data-aos="fade-down" style="color: #f01f75;font-size: 20px;font-weight: bold;font-family: Poppins, sans-serif;">CDIO's Contact Detail</span></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Leader.png') }}" style="margin-left: 0px;margin-right: 10px;"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;">CDIO's name</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="form-control" name="cdio_name" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->governmentOrganization->cdio_name}}" ></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Envelope.png') }}" style="margin-left: 0px;margin-right: 10px;" width="25" height="25"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;">CDIO's email</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="form-control" name="cdio_email" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->governmentOrganization->cdio_email}}" ></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Viber.png') }}" style="margin-left: 0px;margin-right: 10px;" width="25" height="25"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;">CDIO's contact number</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="form-control" name="cdio_contact_no" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px" value="{{Auth::user()->governmentOrganization->cdio_contact_no}}" ></div>
                        <input type="hidden" name="availablity_of_IT_unit" id="availablity_of_IT_unit" value="{{ Auth::user()->governmentOrganization->availablity_of_IT_unit }}"
                    </div>
                    <div class="row" style="margin-bottom: 20px;">
                        <div class="col" style="margin-top: 75px;text-align: right;">
                            <a class="btn btn-primary" data-aos="fade-down" href="/home" type="button" style="width: 198px;height: 47px;font-family: Poppins, sans-serif;font-size: 18px;color: #ef4323;background: rgb(255,255,255);border-width: 2px;border-color: #ef4323;margin-right: 10px;">Cancel</a>
                            <button class="btn btn-primary" data-aos="fade-down" type="submit" style="width: 198px;height: 47px;font-size: 18px;font-family: Poppins, sans-serif;border-width: 0px;background: url(&quot;{{ asset('img/Screenshot (561) 7.png') }}&quot;);margin-right: 80px;">Update</button></div>
                    </div>
                </div>

            </div>
            </form>
        </div>
    </section>
</body>
@endsection
