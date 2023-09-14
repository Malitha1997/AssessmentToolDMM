@extends('layouts.navbar')

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
      text-align: justify;
        text-justify: inter-word;
    }
  </style>
 <body style="border-color: rgb(46,127,208);color: rgb(255,255,255);font-family: Poppins, sans-serif;">

    <section>
        <div class="container-fluid d-table float-none" data-aos="fade-down" data-aos-duration="1000" style="margin-top: 200px;margin-bottom:30px;background: #5f2b84;width: 1177px;height: 1850px;border-radius: 10px;">
            <h1 style="font-family: Poppins, sans-serif;text-align: center;font-weight: bold;margin-top: 10px;margin-left: 10px;padding-top: 30px;padding-bottom: 10px;">Register Now</h1>
            <form method="POST" action="{{ route('govorganizations.store') }}">
                {{csrf_field()}}

            <div class="justify-content-center align-items-center" style="width: 1083px;padding-bottom: 30px;background: #ffffff;font-family: Poppins, sans-serif;color: rgb(0,0,0);margin-top: 10px;margin-left: 33px;border-radius: 10px;border-width: 3px;border-color: rgb(255,106,42);"><span class="text-center text-lg-start text-xxl-center d-flex flex-row" style="color: #f01f75;margin-top: 8px;margin-left: 10px;padding-top: 30px;padding-left: 5px;margin-bottom: 10px;border-radius: 10px;">General Information</span>
                <div class="row d-flex flex-row justify-content-center align-items-center" style="width: 1080px;margin-left: 5px;padding-top: 20px;padding-bottom: 30px;">
                    <div class="col">
                        <div class="row">
                            <div class="col"><span style="font-family: Poppins, sans-serif;color: #000000;margin-bottom: 0;padding-bottom: 0;">Name of the organization *</span></div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input class="form-control-lg" name="gov_org_name" type="text" placeholder="Select Organization Name" id="gov_org_name" style="width: 500px;" value="{{ old('gov_org_name')}}">
                                <input type="hidden" name="gov_org_name" id="gov_org_nameid" >
                                @if($errors->has('gov_org_name'))
                                <p class="text-danger"><b>Select the Organization Name</b></p>
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
                                <input class="form-control-lg" name="related_ministry" type="text" placeholder="Select the Ministry Name" id="related_ministry" style="width: 500px;" value="{{ old('related_ministry')}}">
                                <input type="hidden" name="related_ministry" id="related_ministryid" >
                                @if($errors->has('related_ministry'))
                                <p class="text-danger"><b>Select the Related Ministry</b></p>
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
                                    <div class="col">
                                        <input class="form-control-lg" name="org_category" type="text" placeholder="Select the Organization category" id="org_category" style="width: 500px" value="{{ old('org_category')}}">
                                        <input type="hidden" name="org_category" id="org_categoryid" >
                                        @if($errors->has('org_category'))
                                        <p class="text-danger"><b>Select the Organization Category</b></p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                            <div class="row">
                                <div class="col"><span style="font-family: Poppins, sans-serif;color: #000000;">Types of services provided *</span></div>
                            </div>
                            <div class="row">
                                <div class="col" style="margin-left: 20px; margin-top: 20px">
                                    <input type="checkbox" id="Government to Citizen" name="types_of_services_provide[]" value="Government to Citizen" {{ in_array('Government to Citizen', old('types_of_services_provide', [])) ? 'checked' : '' }}>
                                    <label for="Government to Citizen"> Government to Citizen</label><br>

                                    <input type="checkbox" id="Government to Government" name="types_of_services_provide[]" value="Government to Government" {{ in_array('Government to Government', old('types_of_services_provide', [])) ? 'checked' : '' }}>
                                    <label for="Government to Government"> Government to Government</label><br>

                                    <input type="checkbox" id="Government to Business" name="types_of_services_provide[]" value="Government to Business" {{ in_array('Government to Business', old('types_of_services_provide', [])) ? 'checked' : '' }}>
                                    <label for="Government to Business"> Government to Business</label><br>

                                    <input type="checkbox" id="Government to Employee" name="types_of_services_provide[]" value="Government to Employee" {{ in_array('Government to Employee', old('types_of_services_provide', [])) ? 'checked' : '' }}>
                                    <label for="Government to Employee"> Government to Employee</label><br>

                                    @if($errors->has('types_of_services_provide'))
                                        <p class="text-danger"><b>Select the Types of service provide</b></p>
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
                                <p class="text-danger"><b>Enter number of emplyees</b></p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex flex-row justify-content-center align-items-center" style="width: 1080px;margin-left: 5px;padding-bottom: 30px;">
                <div class="col">
                    <div class="row">
                        <div class="col" style="margin-bottom:10px"><span style="font-family: Poppins, sans-serif;color: #000000;">District of operations *</span></div>
                    </div>
                    <div class="row" style="margin-left:10px">
                        <div class="col">
                            <input type="checkbox" id="Ampara" name="districts_of_operations[]" value="Ampara" {{ in_array('Ampara', old('districts_of_operations', [])) ? 'checked' : '' }}>
                            <label for="Ampara" style="margin-left:10px">Ampara</label><br>
                        </div>
                        <div class="col">
                            <input type="checkbox" id="Anuradhapura" name="districts_of_operations[]" value="Anuradhapura" {{ in_array('Anuradhapura', old('districts_of_operations', [])) ? 'checked' : '' }}>
                            <label for="Anuradhapura" style="margin-left:10px">Anuradhapura</label><br>
                        </div>
                        <div class="col">
                            <input type="checkbox" id="Badulla" name="districts_of_operations[]" value="Badulla" {{ in_array('Badulla', old('districts_of_operations', [])) ? 'checked' : '' }}>
                            <label for="Badulla" style="margin-left:10px">Badulla</label><br>
                        </div>
                    </div>
                    <div class="row" style="margin-left:10px">
                        <div class="col">
                            <input type="checkbox" id="Batticaloa" name="districts_of_operations[]" value="Batticaloa" {{ in_array('Batticaloa', old('districts_of_operations', [])) ? 'checked' : '' }}>
                            <label for="Batticaloa" style="margin-left:10px">Batticaloa</label><br>
                        </div>
                        <div class="col">
                            <input type="checkbox" id="Colombo" name="districts_of_operations[]" value="Colombo" {{ in_array('Colombo', old('districts_of_operations', [])) ? 'checked' : '' }}>
                            <label for="Colombo" style="margin-left:10px">Colombo</label><br>
                        </div>
                        <div class="col">
                            <input type="checkbox" id="Galle" name="districts_of_operations[]" value="Galle" {{ in_array('Galle', old('districts_of_operations', [])) ? 'checked' : '' }}>
                            <label for="Galle" style="margin-left:10px">Galle</label><br>
                        </div>
                    </div>
                    <div class="row" style="margin-left:10px">
                        <div class="col">
                            <input type="checkbox" id="Gampaha" name="districts_of_operations[]" value="Gampaha" {{ in_array('Gampaha', old('districts_of_operations', [])) ? 'checked' : '' }}>
                            <label for="Gampaha" style="margin-left:10px">Gampaha</label><br>
                        </div>
                        <div class="col">
                            <input type="checkbox" id="Hambantota" name="districts_of_operations[]" value="Hambantota" {{ in_array('Hambantota', old('districts_of_operations', [])) ? 'checked' : '' }}>
                            <label for="Hambantota" style="margin-left:10px">Hambantota</label><br>
                        </div>
                        <div class="col">
                            <input type="checkbox" id="Jaffna" name="districts_of_operations[]" value="Jaffna" {{ in_array('Jaffna', old('districts_of_operations', [])) ? 'checked' : '' }}>
                            <label for="Jaffna" style="margin-left:10px">Jaffna</label><br>
                        </div>
                    </div>
                    <div class="row" style="margin-left:10px">
                        <div class="col">
                            <input type="checkbox" id="Kalutara" name="districts_of_operations[]" value="Kalutara" {{ in_array('Kalutara', old('districts_of_operations', [])) ? 'checked' : '' }}>
                            <label for="Kalutara" style="margin-left:10px">Kalutara</label><br>
                        </div>
                        <div class="col">
                            <input type="checkbox" id="Kandy" name="districts_of_operations[]" value="Kandy" {{ in_array('Kandy', old('districts_of_operations', [])) ? 'checked' : '' }}>
                            <label for="Kandy" style="margin-left:10px">Kandy</label><br>
                        </div>
                        <div class="col">
                            <input type="checkbox" id="Kegalle" name="districts_of_operations[]" value="Kegalle" {{ in_array('Kegalle', old('districts_of_operations', [])) ? 'checked' : '' }}>
                            <label for="Kegalle" style="margin-left:10px">Kegalle</label><br>
                        </div>
                    </div>
                    <div class="row" style="margin-left:10px">
                        <div class="col">
                            <input type="checkbox" id="Kilinochchi" name="districts_of_operations[]" value="Kilinochchi" {{ in_array('Kilinochchi', old('districts_of_operations', [])) ? 'checked' : '' }}>
                            <label for="Kilinochchi" style="margin-left:10px">Kilinochchi</label><br>
                        </div>
                        <div class="col">
                            <input type="checkbox" id="Kurunegala" name="districts_of_operations[]" value="Kurunegala" {{ in_array('Kurunegala', old('districts_of_operations', [])) ? 'checked' : '' }}>
                            <label for="Kurunegala" style="margin-left:10px">Kurunegala</label><br>
                        </div>
                        <div class="col">
                            <input type="checkbox" id="Mannar" name="districts_of_operations[]" value="Mannar" {{ in_array('Mannar', old('districts_of_operations', [])) ? 'checked' : '' }}>
                            <label for="Mannar" style="margin-left:10px">Mannar</label><br>
                        </div>
                    </div>
                    <div class="row" style="margin-left:10px">
                        <div class="col">
                            <input type="checkbox" id="Matale" name="districts_of_operations[]" value="Matale" {{ in_array('Matale', old('districts_of_operations', [])) ? 'checked' : '' }}>
                            <label for="Matale" style="margin-left:10px">Matale</label><br>
                        </div>
                        <div class="col">
                            <input type="checkbox" id="Matara" name="districts_of_operations[]" value="Matara" {{ in_array('Matara', old('districts_of_operations', [])) ? 'checked' : '' }}>
                            <label for="Matara" style="margin-left:10px">Matara</label><br>
                        </div>
                        <div class="col">
                            <input type="checkbox" id="Moneragala" name="districts_of_operations[]" value="Moneragala" {{ in_array('Moneragala', old('districts_of_operations', [])) ? 'checked' : '' }}>
                            <label for="Moneragala" style="margin-left:10px">Moneragala</label><br>
                        </div>
                    </div>
                    <div class="row" style="margin-left:10px">
                        <div class="col">
                            <input type="checkbox" id="Mullaitivu" name="districts_of_operations[]" value="Mullaitivu" {{ in_array('Mullaitivu', old('districts_of_operations', [])) ? 'checked' : '' }}>
                            <label for="Mullaitivu" style="margin-left:10px">Mullaitivu</label><br>
                        </div>
                        <div class="col">
                            <input type="checkbox" id="Nuwara Eliya" name="districts_of_operations[]" value="Nuwara Eliya" {{ in_array('Nuwara Eliya', old('districts_of_operations', [])) ? 'checked' : '' }}>
                            <label for="Nuwara Eliya" style="margin-left:10px">Nuwara Eliya</label><br>
                        </div>
                        <div class="col">
                            <input type="checkbox" id="Polonnaruwa" name="districts_of_operations[]" value="Polonnaruwa" {{ in_array('Polonnaruwa', old('districts_of_operations', [])) ? 'checked' : '' }}>
                            <label for="Polonnaruwa" style="margin-left:10px">Polonnaruwa</label><br>
                        </div>
                    </div>
                    <div class="row" style="margin-left:10px">
                        <div class="col">
                            <input type="checkbox" id="Puttalam" name="districts_of_operations[]" value="Puttalam" {{ in_array('Puttalam', old('districts_of_operations', [])) ? 'checked' : '' }}>
                            <label for="Puttalam" style="margin-left:10px">Puttalam</label><br>
                        </div>
                        <div class="col">
                            <input type="checkbox" id="Ratnapura" name="districts_of_operations[]" value="Ratnapura" {{ in_array('Ratnapura', old('districts_of_operations', [])) ? 'checked' : '' }}>
                            <label for="Ratnapura" style="margin-left:10px">Ratnapura</label><br>
                        </div>
                        <div class="col">
                            <input type="checkbox" id="Trincomalee" name="districts_of_operations[]" value="Trincomalee" {{ in_array('Trincomalee', old('districts_of_operations', [])) ? 'checked' : '' }}>
                            <label for="Trincomalee" style="margin-left:10px">Trincomalee</label><br>
                        </div>
                    </div>
                    <div class="row" style="margin-left:10px">
                        <div class="col">
                            <input type="checkbox" id="Vavuniya" name="districts_of_operations[]" value="Vavuniya" {{ in_array('Vavuniya', old('districts_of_operations', [])) ? 'checked' : '' }}>
                            <label for="Vavuniya" style="margin-left:10px">Vavuniya</label><br>
                        </div>
                    </div>
                    @if($errors->has('districts_of_operations'))
                    <p class="text-danger"><b>Select districts</b></p>
                    @endif
                </div>
                </div>
                <div class="row d-flex flex-row justify-content-center align-items-center" style="width: 1080px;margin-left: 5px;padding-bottom: 30px;">
                    <div class="col">
                        <div class="row">
                            <div class="col"><span>Organization Address *</span></div>
                        </div>
                        <div class="row">
                            <div class="col"><input class="form-control-lg" name="gov_org_address" type="text" placeholder="Enter the Organization Address" style="width: 1008px;" value="{{ old('gov_org_address')}}">
                                @if($errors->has('gov_org_address'))
                                <p class="text-danger"><b>Enter the Organization Address</b></p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="padding-top: 10px;padding-bottom: 10px;">
                    <div class="col"><span style="margin-left: 10px;padding-top: 10px;padding-left: 5px;">Does the&nbsp; organization have a IT unit?</span></div>
                    <div class="col">
                        <select id="availablity_of_IT_unit" name="availablity_of_IT_unit" class="form-control text-dark mb-1{{ $errors->has('availablity_of_IT_unit') ? ' is-invalid' : '' }}" style="background: rgb(255,255,255);color: rgb(139,128,128);text-align: left;width: 500px;height: 45px">
                            <option value="none" disabled hidden>--Select option--</option>
                            <option value="yes" {{ old('availablity_of_IT_unit') == 'yes' ? 'selected' : '' }}>Yes</option>
                            <option value="no" {{ old('availablity_of_IT_unit') == 'no' ? 'selected' : '' }}>No</option>
                        </select>
                        @if($errors->has('availablity_of_IT_unit'))
                        <p class="text-danger"><b>Select option</b></p>
                        @endif
                    </div>
                </div><span style="margin-top: 8px;margin-left: 10px;padding-top: 10px;padding-left: 5px;color: #f01f75;">Organization Contact Detaill</span>
                <div class="row d-flex flex-row justify-content-center align-items-center" style="width: 1080px;margin-left: 5px;padding-top: 30px;">
                    <div class="col">
                        <div class="row">
                            <div class="col"><span style="font-family: Poppins, sans-serif;color: #000000;">Phone Number *</span></div>
                        </div>
                        <div class="row">
                            <div class="col"><input class="form-control-lg" name="phone_number" type="text" placeholder="Enter the phone number" style="width: 500px;" value="{{ old('phone_number')}}">
                                @if($errors->has('phone_number'))
                                <p class="text-danger"><b>{{ $errors->first('phone_number') }}</b></p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col"><span style="font-family: Poppins, sans-serif;color: #000000;">Email Address *</span></div>
                        </div>
                        <div class="row">
                            <div class="col"><input class="form-control-lg" name="gov_org_email" type="email" placeholder="Enter the email address" style="width: 500px;" value="{{ old('gov_org_email')}}">
                                @if($errors->has('gov_org_email'))
                                <p class="text-danger"><b>{{ $errors->first('gov_org_email') }}</b></p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="width: 1083px;padding-bottom: 30px;color: rgb(0,0,0);background: #ffffff;margin-left: 33px;margin-top: 33px;border-radius: 10px;"><span style="margin-top: 50px;margin-bottom: 10px;margin-left: 10px;padding-top: 0px;padding-left: 5px;color: #f01f75;">Details of the Head of&nbsp; Organization</span>
                <div class="row d-flex flex-row justify-content-center align-items-center" style="width: 1080px;margin-left: 5px;padding-top: 30px;">
                    <div class="col">
                        <div class="row">
                            <div class="col"><span style="font-family: Poppins, sans-serif;color: #000000;">Name of the Head of Organization *</span></div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                <select id="headTitle" name="headTitle" class="form-control text-dark mb-1" style="margin-left:20px;background: rgb(255,255,255);color: rgb(139,128,128);text-align: left;width: 82px" value="{{ old('availablity_of_IT_unit')}}">
                                    <option  value="none" selected disabled hidden style="text-color:#555454">Title</option>
                                    <option value="Mr.">Mr.</option>
                                    <option value="Mrs.">Mrs.</option>
                                    <option value="Ms.">Ms.</option>
                                    <option value="Dr.">Dr.</option>
                                    <option value="Prof.">Prof.</option>
                                    <option value="Ven.">Ven.</option>
                                    <option value="Major General (Rtd.)">Major General (Rtd.)</option>
                                </select>
                                @if($errors->has('headTitle'))
                                <p class="text-danger"><b>Select the title</b></p>
                                @endif
                                <input class="form-control-lg" name="name_of_the_head" type="text" placeholder="Enter the name" style="width: 380px;margin-left:30px" value="{{ old('name_of_the_head')}}">
                                @if($errors->has('name_of_the_head'))
                                <p class="text-danger"><b>Enter the name</b></p>
                                @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col"><span style="font-family: Poppins, sans-serif;color: #000000;">Designation *</span></div>
                        </div>
                        <div class="row">
                            <div class="col"><input class="form-control-lg" name="designation" type="text" placeholder="Enter the designation" style="width: 500px;" value="{{ old('designation')}}">
                                @if($errors->has('designation'))
                                <p class="text-danger"><b>{{ $errors->first('designation') }}</b></p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex flex-row justify-content-center align-items-center" style="width: 1080px;margin-left: 5px;padding-top: 30px;">
                    <div class="col">
                        <div class="row">
                            <div class="col"><span style="font-family: Poppins, sans-serif;color: #000000;">Phone Number *</span></div>
                        </div>
                        <div class="row">
                            <div class="col"><input class="form-control-lg" name="contact_number_of_the_head" type="text" placeholder="Enter the name" style="width: 500px;" value="{{ old('contact_number_of_the_head')}}">
                                @if($errors->has('contact_number_of_the_head'))
                                <p class="text-danger"><b>{{ $errors->first('contact_number_of_the_head') }}</b></p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col"><span style="font-family: Poppins, sans-serif;color: #000000;">Email Address *</span></div>
                        </div>
                        <div class="row">
                            <div class="col"><input class="form-control-lg" name="head_email" type="email" placeholder="Enter the Email" style="width: 500px;" value="{{ old('head_email')}}">
                                @if($errors->has('head_email'))
                                <p class="text-danger"><b>{{ $errors->first('head_email') }}</b></p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <span style="margin-top: 10px;margin-bottom: 10px;margin-left: 10px;padding-top: 10px;padding-left: 5px;"></span>
                <div class="row" style="margin-top: 0px;margin-bottom: 10px;margin-left: 10px;padding-top: 0px;padding-left: 5px;">
                    <div class="col"><span style="color: #f01f75;">Digital Transformation Unit (DTU)/ IT unit Details</span></div>
                </div>
                <div class="row" style="margin-top: 5px;padding-top: 30px;padding-bottom: 30px;">
                    <div class="col">
                        <span style="font-family: Poppins, sans-serif;color: #000000;margin-left: 20px;padding-top: 10px;padding-left: 5px;">Does your organization have a Digital Transformation Unit / IT Unit?</span>
                        <label class="switch" style="width:60px;margin-left:50px">
                            <input type="checkbox" id="toggleSwitch" name="toggleSwitch" {{ old('toggleSwitch') ? 'checked' : '' }}>
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                <div id="dtu" hidden>
                    <div class="row d-flex flex-row justify-content-center align-items-center" style="width: 1080px;margin-left: 5px;padding-top: 30px;">
                        <div class="col">
                            <div class="row">
                                <div class="col"><span style="font-family: Poppins, sans-serif;color: #000000;">&nbsp;What is the Digital Transformation Unit / IT Unit Type of your organization?</span></div>
                            </div>
                            <div class="row">
                                <select id="dtu_type" name="dtu_type" class="form-control text-dark mb-1" style="font-size:20px;margin-left:15px;background: rgb(255,255,255);color: rgb(139,128,128);text-align: left;width: 500px;height:54px;border-radius:5px" value="{{ old('availablity_of_IT_unit')}}" data-toggle="tooltip" data-placement="bottom" title='

                                Fully Fledged - This IT unit has already implemented and completed digital transformation initiatives, showcasing a track record of successful adoption and integration of digital technologies across various aspects of the organization. The size of the IT unit is larger than nine people, indicating a substantial and dedicated team responsible for managing and driving digital initiatives.<br><br>
                                    Mid Scale - This IT unit is actively engaged in ongoing digital transformation initiatives and  has completed some of the digital transformation projects initiated. It demonstrates a commitment to adopting digital technologies and modernizing its operations. The size of the IT unit ranges from three to nine people, suggesting a moderately sized team dedicated to implementing digital initiatives.<br><br>
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
                                    <option value="Fully Fledged" {{ old('dtu_type') == 'Fully Fledged' ? 'selected' : '' }}>Fully Fledged</option>
                                    <option value="Mid Scale" {{ old('dtu_type') == 'Mid Scale' ? 'selected' : '' }}>Mid Scale</option>
                                    <option value="Small Scale" {{ old('dtu_type') == 'Small Scale' ? 'selected' : '' }}>Small Scale</option>
                                </select>
                                @if($errors->has('dtu_type'))
                                <p class="text-danger"><b>Select the type</b></p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex flex-row justify-content-center align-items-center" style="width: 1080px;margin-left: 5px;padding-top: 30px;">
                        <div class="col">
                            <div class="row">
                                <div class="col"><span style="font-family: Poppins, sans-serif;color: #000000;">State the number of employees in the Digital Transformation Unit / IT Unit?</span></div>
                            </div>
                            <div class="row">
                                <div class="col"><input class="form-control-lg" id="number_of_employees_dtu" name="number_of_employees_dtu" type="text" placeholder="Short answer" style="width: 500px;" value="{{ old('number_of_employees_dtu')}}">
                                    @if($errors->has('number_of_employees_dtu'))
                                        @if ($errors->first('number_of_employees_dtu') == 'validation.numeric')
                                            <p class="text-danger"><b>This must be a number</b></p>
                                        @else
                                            <p class="text-danger"><b>{{ $errors->first('number_of_employees_dtu') }}</b></p>
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row" style="padding-top: 30px;padding-bottom: 0px;padding-left: 750px;">
                    <div class="col justify-content-center align-items-end align-content-end me-auto" style="height: 48px;">
                        <button class="btn btn-primary btn-lg" type="submit" style="background: url(&quot;{{ asset('img/Screenshot (561) 2.png') }}&quot;);font-family: Poppins, sans-serif;padding-left: 10px;text-align: center;border-width:0px" onclick="function1()">Submit</button></div>
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

<script>
    // Listen for change event on the toggle switch
    document.getElementById("toggleSwitch").addEventListener("change", function() {
        // Get the "dtu" division container element
        var dtuContainer = document.getElementById("dtu");

        // Toggle the 'hidden' attribute based on the switch state
        if (this.checked) {
            dtuContainer.removeAttribute("hidden"); // Show the division
        } else {
            dtuContainer.setAttribute("hidden", "true"); // Hide the division
        }
    });
</script>




@endsection
