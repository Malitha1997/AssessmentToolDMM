@extends('layouts.userNavbar')

@section('content')

<body style="width: auto;border-color: rgb(46,127,208);color: rgb(255,255,255);">
    <section data-aos="fade-up" data-aos-duration="1000" >
        <div class="container" style="margin-top: 150px;margin-bottom: 20px;border-radius: 0px;border: 2px solid #5f2b84;">
            <form method="post" action="{{route('govorganizations.update',$govorganizationdetail->user->id)}}" enctype="multipart/form-data">
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
                        <div class="col" style="text-align: center"><input class="form-control" name="gov_org_name" type="text" placeholder="Select Organization Name" id="gov_org_name" data-aos="fade-down" style="margin-left:-12px;border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->govorganizationdetail->govorganizationname->gov_org_name}}">
                            <input type="hidden" name="gov_org_name" id="gov_org_nameid" value="{{ Auth::user()->govorganizationdetail->govorganizationname_id }}">
                            @if($errors->has('gov_org_name'))
                            <p class="text-danger">{{ $errors->first('gov_org_name') }}</p>
                            @endif
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Government.png') }}" style="margin-left: 0px;margin-right: 10px;" width="25" height="25"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;" >Related Ministry</span>
                        </div>
                        <div class="col" style="text-align: center;"><input class="form-control" name="related_ministry" type="text" placeholder="Select the Ministry Name" id="related_ministry" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->govorganizationdetail->relatedministry->related_ministry}}"></div>
                        <input type="hidden" name="related_ministry" id="related_ministryid" value="{{ Auth::user()->govorganizationdetail->related_ministry_id }}">
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
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="form-control" name="types_of_services_provide" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->govorganizationdetail->types_of_service}}" ></div>
                    </div>
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
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="form-control" name="districts_of_operations" type="text" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->govorganizationdetail->districts_of_operations}}" ></div>
                    </div>
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
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="form-control" name="name_of_the_head" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->govorganizationdetail->name_of_the_head}}" ></div>
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
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="form-control" name="cdio_name" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->govorganizationdetail->cdio_name}}" ></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Envelope.png') }}" style="margin-left: 0px;margin-right: 10px;" width="25" height="25"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;">CDIO's email</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="form-control" name="cdio_email" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px;" value="{{Auth::user()->govorganizationdetail->cdio_email}}" ></div>
                    </div>
                    <div class="row" style="margin-bottom: 25px;">
                        <div class="col" style="margin-top: 10px;">
                            <picture><img data-aos="fade-down" src="{{ asset('img/Viber.png') }}" style="margin-left: 0px;margin-right: 10px;" width="25" height="25"></picture><label class="col-form-label" data-aos="fade-down" style="font-family: Poppins, sans-serif;color :#5f2b84;font-size: 20px;margin-top: 0px;">CDIO's contact number</span>
                        </div>
                        <div class="col" style="border: 0px;font-family: Poppins;text-align: left"><input class="form-control" name="cdio_contact_no" type="text" data-aos="fade-down" style="border: 0px;font-family: Poppins;text-align: left;font-size: 20px" value="{{Auth::user()->govorganizationdetail->cdio_contact_no}}" ></div>
                        <input type="hidden" name="availablity_of_IT_unit" id="availablity_of_IT_unit" value="{{ Auth::user()->govorganizationdetail->availablity_of_IT_unit }}"
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
