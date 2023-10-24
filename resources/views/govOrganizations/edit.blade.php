@extends('layouts.userNavbar')

@section('content')
<style>
    /* Add custom CSS for the tooltip title */
    .custom-tooltip .tooltip-inner {
      max-width: 802px; /* Adjust the width as needed */
      /* Additional styling if desired */
      background-color: #ffffff;
      color: #000000;
      padding: 10px;
      font-family: Poppins, sans-serif;
      font-size: 15px;
      text-align: justify;
        text-justify: inter-word;
    }
  </style>
<body style="width: auto;border-color: rgb(46,127,208);color: rgb(255,255,255);">
    <section data-aos="fade-up" data-aos-duration="1000" >
        <div class="container" style="margin-top: 150px;margin-bottom: 20px;border-radius: 10px;border: 2px solid #5f2b84;">
            <form method="post" action="{{route('govorganizations.update',$govorganizationdetail->user->id)}}" enctype="multipart/form-data">
                {{csrf_field()}}
                @method('PUT')
            <div class="row">
                <div class="col" style="margin-left: 50px;width: auto;margin-top: 20px">
                    <h1 style="font-family: Poppins, sans-serif;color: #1f2471;font-weight: bold;text-align: center;margin-top: 5px;">Organization Profile</h1>
                    {{--  <div class="container">
                        <div class="row" style="width:1100px;height:450px;border-radius: 10px;border: 2px solid #5f2b84;">
                            <div class="row"><span data-aos="fade-down" style="color: #f01f75;font-size: 20px;font-weight: bold;font-family: Poppins, sans-serif;">User account</span></div>
                            <div class="row" style="font-size: 20px;margin-top: 10px;font-family: Poppins, sans-serif;">
                                <div class="col"><span style="color: #5f2b84;font-weight: bold;margin-left: 50px;padding-top: 0px;">Username</span>
                                    <div class="row">
                                        <div class="col" style="">
                                            <input class="form-control-lg" name="username" id="username" type="text" placeholder="Enter the Username" style="padding-left: 16px;margin-left: 50px;width: 340px;" value="{{ old('username',Auth::user()->username) }}">
                                            @if($errors->has('username'))
                                            <p class="text-danger" style="margin-left: 50px;font-weight: bold">{{ $errors->first('username') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col"><span style="color: #5f2b84;font-weight: bold;margin-left: 50px;padding-top: 0px;">Email</span>
                                    <div class="row">
                                        <div class="col" style=""><input class="form-control-lg" name="email" id="email" type="email" placeholder="Enter the Email" style="padding-left: 16px;margin-left: 50px;width: 340px;" value="{{ old('email',Auth::user()->email) }}">
                                            @if($errors->has('email'))
                                            <p class="text-danger" style="margin-left: 50px;font-weight: bold">{{ $errors->first('email') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="font-family: Poppins, sans-serif;font-size: 20px;margin-top: 10px;">
                                <div class="col"><span style="color: #5f2b84;font-weight: bold;margin-left: 50px;padding-top: 0px;">Create Password</span>
                                    <div class="row">
                                        <div class="col" style=""><input class="form-control-lg" name="password" id="password" type="password" placeholder="Enter the Password" style="padding-left: 16px;margin-left: 50px;width: 340px;" >
                                            @if($errors->has('password'))
                                            <p class="text-danger" style="margin-left: 50px;font-weight: bold">{{ $errors->first('password') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col"><span style="color: #5f2b84;font-weight: bold;margin-left: 50px;padding-top: 0px;">Confirm Password</span>
                                    <div class="row">
                                        <div class="col" style=""><input class="form-control-lg" name="confirm-password" type="password" placeholder="Confirm Password" style="padding-left: 16px;margin-left: 50px;width: 340px;">
                                            @if($errors->has('confirm-password'))
                                            <p class="text-danger" style="margin-left: 50px;font-weight: bold">{{ $errors->first('confirm-password') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  --}}
                    <div class="row" style="margin-top: 30px;margin-bottom: 25px;">
                        <div class="col"><span data-aos="fade-down" style="color: #f01f75;font-size: 20px;font-weight: bold;font-family: Poppins, sans-serif;">General Information</span></div>
                        {{--  <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">  --}}
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Building.png') }}" style="margin-left: 0px;margin-right: 10px;" width="25" height="25"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;" >Organization name</span>
                        </div>
                        <div class="col" style="text-align: center"><input class="form-control" name="gov_org_name" type="text" placeholder="Select Organization Name" id="gov_org_name" data-aos="fade-down" style="margin-left:-12px;border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->govorganizationdetail->govorganizationname->gov_org_name}}">
                            <input type="hidden" name="gov_org_name" id="gov_org_nameid" value="{{ old('gov_org_name',Auth::user()->govorganizationdetail->govorganizationname_id) }}">
                            @if($errors->has('gov_org_name'))
                            <p class="text-danger">{{ $errors->first('gov_org_name') }}</p>
                            @endif
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Government.png') }}" style="margin-left: 0px;margin-right: 10px;" width="25" height="25"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;" >Related Ministry</span>
                        </div>
                        <div class="col" style="text-align: center;"><input class="form-control" name="related_ministry" type="text" placeholder="Select the Ministry Name" id="related_ministry" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->govorganizationdetail->relatedministry->related_ministry}}"></div>
                        <input type="hidden" name="related_ministry" id="related_ministryid" value="{{ old('related_ministry_id',Auth::user()->govorganizationdetail->related_ministry_id) }}">
                        @if($errors->has('related_ministry'))
                        <p class="text-danger">{{ $errors->first('related_ministry') }}</p>
                        @endif
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Menu.png') }}" style="margin-left: 0px;margin-right: 10px;"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;">Organization Category</span>
                        </div>
                        <div class="col" style="width: 350px;height: 34px;margin-top: 0px;text-align: center;"><input  class="form-control" name="org_category" type="text" placeholder="Select the Organization category" id="org_category" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->govorganizationdetail->organizationcategory->org_category}}"></div>
                        <input type="hidden" name="org_category" id="org_categoryid" value="{{ Auth::user()->govorganizationdetail->organization_category_id }}">
                        @if($errors->has('organization_category'))
                        <p class="text-danger">{{ $errors->first('organization_category') }}</p>
                        @endif
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Self service.png') }}" style="margin-left: 0px;margin-right: 10px;"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;">Types of Services provided</span>
                        </div>
                        <div class="col" style="width: 350px;height: 34px;margin-top: 0px;text-align: center;"><input  class="form-control" name="types_of_services_provide" type="text" placeholder="Select the Organization category" id="types_of_services_provide" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->govorganizationdetail->types_of_service}}"></div>
                    </div>
                    {{--  <div class="row" data-aos="fade-down" style="margin-bottom: 10px;">
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="form-control" name="districts_of_operations" type="text" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->govorganizationdetail->districts_of_operations}}" ></div>
                        <div class="col">
                            <div class="col">
                                <div class="row" style="margin-left:10px">
                                    <div class="col" data-aos="fade-down">
                                        <input type="checkbox" id="Government to Citizen" name="types_of_services_provide[]" value="Government to Citizen" {{ (old('types_of_services_provide') && in_array('Government to Citizen', old('types_of_services_provide'))) || $governmentToCitizenChecked ? 'checked' : '' }}>
                                        <label class="col-form-label" for="Government to Citizen" data-aos="fade-down" style="margin-left:10px;font-family: Poppins, sans-serif;color :#000000;font-size: 20px;">Government to Citizen</label>
                                    </div>
                                    <div class="col" data-aos="fade-down">
                                        <input type="checkbox" id="Government to Government" name="types_of_services_provide[]" value="Government to Government" {{ (old('types_of_services_provide') && in_array('Government to Government', old('types_of_services_provide'))) || $governmentToGovernmentChecked ? 'checked' : '' }}>
                                        <label class="col-form-label" for="Government to Government" data-aos="fade-down" style="margin-left:10px;font-family: Poppins, sans-serif;color :#000000;font-size: 20px;">Government to Government</label>
                                    </div>
                                </div>
                                <div class="row" style="margin-left:10px">
                                    <div class="col" data-aos="fade-down">
                                        <input type="checkbox" id="Government to Business" name="types_of_services_provide[]" value="Government to Business" {{ (old('types_of_services_provide') && in_array('Government to Business', old('types_of_services_provide'))) || $governmentToBusinessChecked ? 'checked' : '' }}>
                                        <label class="col-form-label" for="Government to Business" data-aos="fade-down" style="margin-left:10px;font-family: Poppins, sans-serif;color :#000000;font-size: 20px;">Government to Business</label>
                                    </div>
                                    <div class="col" data-aos="fade-down">
                                        <input type="checkbox" id="Government to Employee" name="types_of_services_provide[]" value="Government to Employee" {{ (old('types_of_services_provide') && in_array('Government to Employee', old('types_of_services_provide'))) || $governmentToEmployeeChecked ? 'checked' : '' }}>
                                        <label class="col-form-label" for="Government to Employee" data-aos="fade-down" style="margin-left:10px;font-family: Poppins, sans-serif;color :#000000;font-size: 20px;">Government to Employee</label>
                                    </div>
                                    @if($errors->has('types_of_services_provide'))
                                        <p class="text-danger"><b>Select the Types of service provide</b></p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>  --}}
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Group.png') }}" style="margin-left: 0px;margin-right: 10px;" width="25" height="25"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;">Number of employees</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="form-control" name="number_of_employee" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->govorganizationdetail->number_of_employee}}" ></div>
                    </div>
                    <div class="row" data-aos="fade-down" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Map.png') }}" style="margin-left: 0px;margin-right: 10px;" width="25" height="25"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;">District of operations</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="form-control" name="districts_of_operations" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->govorganizationdetail->districts_of_operations}}" ></div>
                    </div>
                    {{--  <div class="row" data-aos="fade-down" style="margin-bottom: 25px;">

                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="form-control" name="districts_of_operations" type="text" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->govorganizationdetail->districts_of_operations}}" ></div>
                        <div class="col">
                            <div class="col">
                                <div class="row" style="margin-left:10px">
                                    <div class="col" data-aos="fade-down" >
                                        <input type="checkbox" id="Ampara" name="districts_of_operations[]" value="Ampara" {{ (in_array('Ampara', old('districts_of_operations', [])) || Auth::user()->govorganizationdetail->types_of_service === 'Ampara') ? 'checked' : '' }}>
                                        <label class="col-form-label" for="Ampara" data-aos="fade-down" style="margin-left:5px;font-family: Poppins, sans-serif;color :#000000;font-size: 20px;">Ampara</span>
                                    </div>
                                    <div class="col">
                                        <input type="checkbox" id="Anuradhapura" name="districts_of_operations[]" value="Anuradhapura" {{ in_array('Anuradhapura', old('districts_of_operations', [])) ? 'checked' : '' }}>
                                        <label class="col-form-label" for="Anuradhapura" data-aos="fade-down" style="margin-left:5px;font-family: Poppins, sans-serif;color :#000000;font-size: 20px;">Anuradhapura</span>
                                    </div>
                                    <div class="col">
                                        <input type="checkbox" id="Badulla" name="districts_of_operations[]" value="Badulla" {{ in_array('Badulla', old('districts_of_operations', [])) ? 'checked' : '' }}>
                                        <label class="col-form-label" for="Badulla" data-aos="fade-down" style="margin-left:5px;font-family: Poppins, sans-serif;color :#000000;font-size: 20px;">Badulla</span>
                                    </div>
                                </div>
                                <div class="row" style="margin-left:10px">
                                    <div class="col" data-aos="fade-down" >
                                        <input type="checkbox" id="Batticaloa" name="districts_of_operations[]" value="Batticaloa" {{ in_array('Batticaloa', old('districts_of_operations', [])) ? 'checked' : '' }}>
                                        <label class="col-form-label" for="Batticaloa" data-aos="fade-down" style="margin-left:5px;font-family: Poppins, sans-serif;color :#000000;font-size: 20px;">Batticaloa</span>
                                    </div>
                                    <div class="col">
                                        <input type="checkbox" id="Colombo" name="districts_of_operations[]" value="Colombo" {{ in_array('Colombo', old('districts_of_operations', [])) ? 'checked' : '' }}>
                                        <label class="col-form-label" for="Colombo" data-aos="fade-down" style="margin-left:5px;font-family: Poppins, sans-serif;color :#000000;font-size: 20px;">Colombo</span>
                                    </div>
                                    <div class="col">
                                        <input type="checkbox" id="Galle" name="districts_of_operations[]" value="Galle" {{ in_array('Galle', old('districts_of_operations', [])) ? 'checked' : '' }}>
                                        <label class="col-form-label" for="Galle" data-aos="fade-down" style="margin-left:5px;font-family: Poppins, sans-serif;color :#000000;font-size: 20px;">Galle</span>
                                    </div>
                                </div>
                                <div class="row" style="margin-left:10px">
                                    <div class="col" data-aos="fade-down" >
                                        <input type="checkbox" id="Gampaha" name="districts_of_operations[]" value="Gampaha" {{ in_array('Gampaha', old('districts_of_operations', [])) ? 'checked' : '' }}>
                                        <label class="col-form-label" for="Gampaha" data-aos="fade-down" style="margin-left:5px;font-family: Poppins, sans-serif;color :#000000;font-size: 20px;">Gampaha</span>
                                    </div>
                                    <div class="col">
                                        <input type="checkbox" id="Hambantota" name="districts_of_operations[]" value="Hambantota" {{ in_array('Hambantota', old('districts_of_operations', [])) ? 'checked' : '' }}>
                                        <label class="col-form-label" for="Hambantota" data-aos="fade-down" style="margin-left:5px;font-family: Poppins, sans-serif;color :#000000;font-size: 20px;">Hambantota</span>
                                    </div>
                                    <div class="col">
                                        <input type="checkbox" id="Jaffna" name="districts_of_operations[]" value="Jaffna" {{ in_array('Jaffna', old('districts_of_operations', [])) ? 'checked' : '' }}>
                                        <label class="col-form-label" for="Jaffna" data-aos="fade-down" style="margin-left:5px;font-family: Poppins, sans-serif;color :#000000;font-size: 20px;">Jaffna</span>
                                    </div>
                                </div>
                                <div class="row" style="margin-left:10px">
                                    <div class="col" data-aos="fade-down" >
                                        <input type="checkbox" id="Kalutara" name="districts_of_operations[]" value="Kalutara" {{ in_array('Kalutara', old('districts_of_operations', [])) ? 'checked' : '' }}>
                                        <label class="col-form-label" for="Kalutara" data-aos="fade-down" style="margin-left:5px;font-family: Poppins, sans-serif;color :#000000;font-size: 20px;">Kalutara</span>
                                    </div>
                                    <div class="col">
                                        <input type="checkbox" id="Kandy" name="districts_of_operations[]" value="Kandy" {{ in_array('Kandy', old('districts_of_operations', [])) ? 'checked' : '' }}>
                                        <label class="col-form-label" for="Kandy" data-aos="fade-down" style="margin-left:5px;font-family: Poppins, sans-serif;color :#000000;font-size: 20px;">Kandy</span>
                                    </div>
                                    <div class="col">
                                        <input type="checkbox" id="Kegalle" name="districts_of_operations[]" value="Kegalle" {{ in_array('Kegalle', old('districts_of_operations', [])) ? 'checked' : '' }}>
                                        <label class="col-form-label" for="Kegalle" data-aos="fade-down" style="margin-left:5px;font-family: Poppins, sans-serif;color :#000000;font-size: 20px;">Kegalle</span>
                                    </div>
                                </div>
                                <div class="row" style="margin-left:10px">
                                    <div class="col" data-aos="fade-down" >
                                        <input type="checkbox" id="Kilinochchi" name="districts_of_operations[]" value="Kilinochchi" {{ in_array('Kilinochchi', old('districts_of_operations', [])) ? 'checked' : '' }}>
                                        <label class="col-form-label" for="Kilinochchi" data-aos="fade-down" style="margin-left:5px;font-family: Poppins, sans-serif;color :#000000;font-size: 20px;">Kilinochchi</span>
                                    </div>
                                    <div class="col">
                                        <input type="checkbox" id="Kurunegala" name="districts_of_operations[]" value="Kurunegala" {{ in_array('Kurunegala', old('districts_of_operations', [])) ? 'checked' : '' }}>
                                        <label class="col-form-label" for="Kurunegala" data-aos="fade-down" style="margin-left:5px;font-family: Poppins, sans-serif;color :#000000;font-size: 20px;">Kurunegala</span>
                                    </div>
                                    <div class="col">
                                        <input type="checkbox" id="Mannar" name="districts_of_operations[]" value="Mannar" {{ in_array('Mannar', old('districts_of_operations', [])) ? 'checked' : '' }}>
                                        <label class="col-form-label" for="Mannar" data-aos="fade-down" style="margin-left:5px;font-family: Poppins, sans-serif;color :#000000;font-size: 20px;">Mannar</span>
                                    </div>
                                </div>
                                <div class="row" style="margin-left:10px">
                                    <div class="col" data-aos="fade-down" >
                                        <input type="checkbox" id="Matale" name="districts_of_operations[]" value="Matale" {{ in_array('Matale', old('districts_of_operations', [])) ? 'checked' : '' }}>
                                        <label class="col-form-label" for="Matale" data-aos="fade-down" style="margin-left:5px;font-family: Poppins, sans-serif;color :#000000;font-size: 20px;">Matale</span>
                                    </div>
                                    <div class="col">
                                        <input type="checkbox" id="Matara" name="districts_of_operations[]" value="Matara" {{ in_array('Matara', old('districts_of_operations', [])) ? 'checked' : '' }}>
                                        <label class="col-form-label" for="Matara" data-aos="fade-down" style="margin-left:5px;font-family: Poppins, sans-serif;color :#000000;font-size: 20px;">Matara</span>
                                    </div>
                                    <div class="col">
                                        <input type="checkbox" id="Moneragala" name="districts_of_operations[]" value="Moneragala" {{ in_array('Moneragala', old('districts_of_operations', [])) ? 'checked' : '' }}>
                                        <label class="col-form-label" for="Moneragala" data-aos="fade-down" style="margin-left:5px;font-family: Poppins, sans-serif;color :#000000;font-size: 20px;">Moneragala</span>
                                    </div>
                                </div>
                                <div class="row" style="margin-left:10px">
                                    <div class="col" data-aos="fade-down" >
                                        <input type="checkbox" id="Mullaitivu" name="districts_of_operations[]" value="Mullaitivu" {{ in_array('Mullaitivu', old('districts_of_operations', [])) ? 'checked' : '' }}>
                                        <label class="col-form-label" for="Mullaitivu" data-aos="fade-down" style="margin-left:5px;font-family: Poppins, sans-serif;color :#000000;font-size: 20px;">Mullaitivu</span>
                                    </div>
                                    <div class="col">
                                        <input type="checkbox" id="Nuwara Eliya" name="districts_of_operations[]" value="Nuwara Eliya" {{ in_array('Nuwara Eliya', old('districts_of_operations', [])) ? 'checked' : '' }}>
                                        <label class="col-form-label" for="Nuwara Eliya" data-aos="fade-down" style="margin-left:5px;font-family: Poppins, sans-serif;color :#000000;font-size: 20px;">Nuwara Eliya</span>
                                    </div>
                                    <div class="col">
                                        <input type="checkbox" id="Polonnaruwa" name="districts_of_operations[]" value="Polonnaruwa" {{ in_array('Polonnaruwa', old('districts_of_operations', [])) ? 'checked' : '' }}>
                                        <label class="col-form-label" for="Polonnaruwa" data-aos="fade-down" style="margin-left:5px;font-family: Poppins, sans-serif;color :#000000;font-size: 20px;">Polonnaruwa</span>
                                    </div>
                                </div>
                                <div class="row" style="margin-left:10px">
                                    <div class="col" data-aos="fade-down" >
                                        <input type="checkbox" id="Puttalam" name="districts_of_operations[]" value="Puttalam" {{ in_array('Puttalam', old('districts_of_operations', [])) ? 'checked' : '' }}>
                                        <label class="col-form-label" for="Puttalam" data-aos="fade-down" style="margin-left:5px;font-family: Poppins, sans-serif;color :#000000;font-size: 20px;">Puttalam</span>
                                    </div>
                                    <div class="col">
                                        <input type="checkbox" id="Ratnapura" name="districts_of_operations[]" value="Ratnapura" {{ in_array('Ratnapura', old('districts_of_operations', [])) ? 'checked' : '' }}>
                                        <label class="col-form-label" for="Ratnapura" data-aos="fade-down" style="margin-left:5px;font-family: Poppins, sans-serif;color :#000000;font-size: 20px;">Ratnapura</span>
                                    </div>
                                    <div class="col">
                                        <input type="checkbox" id="Trincomalee" name="districts_of_operations[]" value="Trincomalee" {{ in_array('Trincomalee', old('districts_of_operations', [])) ? 'checked' : '' }}>
                                        <label class="col-form-label" for="Trincomalee" data-aos="fade-down" style="margin-left:5px;font-family: Poppins, sans-serif;color :#000000;font-size: 20px;">Trincomalee</span>
                                    </div>
                                </div>
                                <div class="row" style="margin-left:10px">
                                    <div class="col" data-aos="fade-down" >
                                        <input type="checkbox" id="Vavuniya" name="districts_of_operations[]" value="Vavuniya" {{ in_array('Vavuniya', old('districts_of_operations', [])) ? 'checked' : '' }}>
                                        <label class="col-form-label" for="Vavuniya" data-aos="fade-down" style="margin-left:5px;font-family: Poppins, sans-serif;color :#000000;font-size: 20px;">Vavuniya</span>
                                    </div>
                                </div>
                                @if($errors->has('districts_of_operations'))
                                <p class="text-danger"><b>Select districts</b></p>
                                @endif
                            </div>
                        </div>
                    </div>  --}}

                    <div class="row" style="margin-top: 30px;margin-bottom: 25px;">
                        <div class="col"><span data-aos="fade-down" style="color: #f01f75;font-size: 20px;font-weight: bold;font-family: Poppins, sans-serif;">Organization Contact Detail</span></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Land Line.png') }}" style="margin-left: 0px;margin-right: 10px;"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;">Phone Number</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="form-control" name="phone_number" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->govorganizationdetail->phone_number}}" ></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Government.png') }}" style="margin-left: 0px;margin-right: 10px;"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;">Organization Address</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="form-control" name="gov_org_address" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->govorganizationdetail->gov_org_address}}" ></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Email.png') }}" style="margin-left: 0px;margin-right: 10px;"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;">Organization Email</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="form-control" name="gov_org_email" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->govorganizationdetail->gov_org_email}}" ></div>
                    </div>
                    <div class="row" style="margin-top: 30px;margin-bottom: 25px;">
                        <div class="col"><span data-aos="fade-down" style="color: #f01f75;font-size: 20px;font-weight: bold;font-family: Poppins, sans-serif;">Details of the Head of Organization</span></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/User.png') }}" style="margin-left: 0px;margin-right: 10px;" width="25" height="25"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;">Name of the Head of Org.</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left">
                            <div class="col">
                                <select id="headTitle" name="headTitle" class="form-control text-dark mb-1" style="background: rgb(255,255,255);color: rgb(139,128,128);text-align: left;width: 82px">
                                    <option value="none" selected disabled hidden style="text-color:#555454">Title</option>
                                    <option value="Mr." {{ old('headTitle', explode(' ', Auth::user()->govorganizationdetail->name_of_the_head)[0]) == 'Mr.' ? 'selected' : '' }}>Mr.</option>
                                    <option value="Mrs." {{ old('headTitle', explode(' ', Auth::user()->govorganizationdetail->name_of_the_head)[0]) == 'Mrs.' ? 'selected' : '' }}>Mrs.</option>
                                    <option value="Ms." {{ old('headTitle', explode(' ', Auth::user()->govorganizationdetail->name_of_the_head)[0]) == 'Ms.' ? 'selected' : '' }}>Ms.</option>
                                    <option value="Dr." {{ old('headTitle', explode(' ', Auth::user()->govorganizationdetail->name_of_the_head)[0]) == 'Dr.' ? 'selected' : '' }}>Dr.</option>
                                    <option value="Prof." {{ old('headTitle', explode(' ', Auth::user()->govorganizationdetail->name_of_the_head)[0]) == 'Prof.' ? 'selected' : '' }}>Prof.</option>
                                    <option value="Ven." {{ old('headTitle', explode(' ', Auth::user()->govorganizationdetail->name_of_the_head)[0]) == 'Ven.' ? 'selected' : '' }}>Ven.</option>
                                </select>
                                @if($errors->has('headTitle'))
                                    <p class="text-danger"><b>Select the title</b></p>
                                @endif
                            </div>
                            <div class="col">
                                <input class="form-control" name="name_of_the_head" type="text" placeholder="Enter the name" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px" value="{{ old('name_of_the_head', explode(' ', Auth::user()->govorganizationdetail->name_of_the_head, 2)[1]) }}">
                                @if($errors->has('name_of_the_head'))
                                    <p class="text-danger"><b>Enter the name</b></p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Menu.png') }}" style="margin-left: 0px;margin-right: 10px;"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;">Designation</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="form-control" name="designation" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->govorganizationdetail->designation}}" ></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Email.png') }}" style="margin-left: 0px;margin-right: 10px;"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;">Email of the head</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="form-control" name="head_email" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->govorganizationdetail->head_email}}" ></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Land Line.png') }}" style="margin-left: 0px;margin-right: 10px;"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;">Phone Number</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="form-control" name="contact_number_of_the_head" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->govorganizationdetail->contact_number_of_the_head}}" ></div>
                    </div>
                    <div class="row" style="margin-top: 30px;margin-bottom: 25px;">
                        <div class="col"><span data-aos="fade-down" style="color: #f01f75;font-size: 20px;font-weight: bold;font-family: Poppins, sans-serif;">CDIO's Contact Detail</span></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Leader.png') }}" style="margin-left: 0px;margin-right: 10px;"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;">CDIO's name</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left">
                            <input class="form-control" name="" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->govorganizationdetail->cdio_name}}" ></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Envelope.png') }}" style="margin-left: 0px;margin-right: 10px;" width="25" height="25"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;">CDIO's email</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left">
                            <input class="form-control" name="" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->govorganizationdetail->cdio_email}}" ></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Viber.png') }}" style="margin-left: 0px;margin-right: 10px;" width="25" height="25"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;">CDIO's contact number</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left">
                            <input class="form-control" name="" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px" value="{{Auth::user()->govorganizationdetail->cdio_contact_no}}" ></div>
                        <input type="hidden" name="availablity_of_IT_unit" id="availablity_of_IT_unit" value="{{ Auth::user()->govorganizationdetail->availablity_of_IT_unit }}"
                    </div>
                    <div class="row" style="margin-top: 30px;margin-bottom: 25px;">
                        <div class="col"><span data-aos="fade-down" style="color: #f01f75;font-size: 20px;font-weight: bold;font-family: Poppins, sans-serif;">Digital Transformation Unit (DTU)/ IT unit Details</span></div>
                    </div>
                    <div class="row" style="margin-bottom: 5px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Information Technology.png') }}" style="margin-left: 0px;margin-right: 10px;"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;">DTU type of Organization</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left">
                            <select id="dtu_type" name="dtu_type" class="form-control text-dark mb-1" style="font-size:20px;margin-left:15px;background: rgb(255,255,255);color: rgb(139,128,128);text-align: left;width: 500px;height:54px;border-radius:5px" value="{{ old('availablity_of_IT_unit')}}" data-toggle="tooltip" data-placement="bottom" title='
                            Fully Fledged - This IT unit has already implemented and completed digital transformation initiatives, showcasing a track record of successful adoption and integration of digital technologies across various aspects of the organization. The size of the IT unit is larger than nine people, indicating a substantial and dedicated team responsible for managing and driving digital initiatives.<br>
                            <hr>
                            Mid Scale - This IT unit is actively engaged in ongoing digital transformation initiatives and has completed some of the digital transformation projects initiated. It demonstrates a commitment to adopting digital technologies and modernizing its operations. The size of the IT unit ranges from three to nine people, suggesting a moderately sized team dedicated to implementing digital initiatives.<br>
                            <hr>
                            Small Scale - This IT unit has not yet started any digital transformation initiatives. It may have limited digital capabilities and is yet to fully integrate digital technologies into its operations. The size of the IT unit is less than three people, indicating a small team responsible for basic IT functions.
                        '>
                            <script>
                                $(document).ready(function(){
                                    $('[data-toggle="tooltip"]').tooltip({
                                        html: true,
                                        template: '<div class="tooltip custom-tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
                                    });
                                });
                            </script>
                            <option selected disabled hidden style="text-color:#cacaca">Select the answer</option>
                            <option value="Fully Fledged" {{ old('dtu_type', Auth::user()->govorganizationdetail->dtu_type) == 'Fully Fledged' ? 'selected' : '' }}>Fully Fledged</option>
                            <option value="Mid Scale" {{ old('dtu_type', Auth::user()->govorganizationdetail->dtu_type) == 'Mid Scale' ? 'selected' : '' }}>Mid Scale</option>
                            <option value="Small Scale" {{ old('dtu_type', Auth::user()->govorganizationdetail->dtu_type) == 'Small Scale' ? 'selected' : '' }}>Small Scale</option>
                        </select>
                        @if($errors->has('dtu_type'))
                            <p class="text-danger"><b>Select the type</b></p>
                        @endif
                        </div>
                    </div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/System Administrator.png') }}" style="margin-left: 0px;margin-right: 10px;" width="25" height="25"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;">Number of employees in the DTU</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="form-control" name="number_of_employees_dtu" id="number_of_employees_dtu" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->govorganizationdetail->number_of_employees_dtu}}" ></div>
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
    <script type="text/javascript">
        var path = "{{ route('autocomplete') }}";
        $( "#gov_org_name" ).autocomplete({
            source: function( request, response ) {
              $.ajax({
                url: path,
                type: 'GET',
                dataType: "json",
                data: {
                   search: request.term
                },
                success: function( data ) {
                   response( data );
                }
              });
            },

            select: function (event, ui) {
                // Set selection
                var id = event.target.id
                $('#'+id).val(ui.item.label); // display the selected text
                $('#'+id+'id').val(ui.item.value); // save selected id to input
                //console.log(ui.item.value);
                return false;
            }
          });
    </script>
    <script type="text/javascript">
        var path2 = "{{ route('autocomplete2') }}";
        $( "#related_ministry" ).autocomplete({
            source: function( request, response ) {
              $.ajax({
                url: path2,
                type: 'GET',
                dataType: "json",
                data: {
                   search: request.term
                },
                success: function( data ) {
                   response( data );
                }
              });
            },

            select: function (event, ui) {
                // Set selection
                var id = event.target.id
                $('#'+id).val(ui.item.label); // display the selected text
                $('#'+id+'id').val(ui.item.value); // save selected id to input
                //console.log(ui.item.value);
                return false;
            }
          });
    </script>

    <script type="text/javascript">
        var path3 = "{{ route('autocomplete3') }}";
        $( "#org_category" ).autocomplete({
            source: function( request, response ) {
              $.ajax({
                url: path3,
                type: 'GET',
                dataType: "json",
                data: {
                   search: request.term
                },
                success: function( data ) {
                   response( data );
                }
              });
            },

            select: function (event, ui) {
                // Set selection
                var id = event.target.id
                $('#'+id).val(ui.item.label); // display the selected text
                $('#'+id+'id').val(ui.item.value); // save selected id to input
                //console.log(ui.item.value);
                return false;
            }
          });
    </script>
</body>
@endsection
