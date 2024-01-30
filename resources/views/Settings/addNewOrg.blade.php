@extends('layouts.adminNavbar')

@section('content')
<div class="row" data-aos="fade-in" data-aos-duration="1000" style="height: 50px;font-family:poppins;">
    <div class="col" style="height: 50px;"><h1 style="font-family:poppins">Add New Organization</h1></div>
</div>
<form method="POST" action="{{ route('storeOrganization') }}">   
{{csrf_field()}}
<div class="row" data-aos="fade-in" data-aos-duration="1000" style="height: 150px;font-family:poppins;margin-top:5%">
    <div class="col" style="text-align:center">
        @if ($errors->has('org_name'))
                <div class="alert alert-danger mt-2">
                    <h6 style="color:maroon"><b>The organization name has already been taken.</b></h6>
                </div>
            @endif
        <input class="form-control-md" id="org_name" name="org_name" type="text" placeholder="Enter the organization name" style="width: 800px;" value="">
        <button data-bs-toggle="modal" data-bs-target="#add" data-aos="fade-down" type="button" class="btn btn-primary" style="margin-left:2%">Add</button>
        
    </div>
</div>
<div class="modal fade" style="font-family:poppins" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 id="h4" class="modal-title" id="exampleModalLabel">Warning</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure to add new organization?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">No</button>
                    <button class="btn btn-danger" type="submit" style="font-family: Poppins;border-width:0px;">Yes</button>
                    <form  action="{{ route('storeOrganization') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                </div>
            </div>
        </div>
        </form>
<div class="row" data-aos="fade-in" data-aos-duration="1000" style="font-family:poppins;margin-top:2%">
    <div class="col" style="text-align:center">
           
        <input class="form-control-md" id="search" name="search" type="text" placeholder="Search" style="width: 800px;" value="">
        <button data-aos="fade-down" type="button" class="btn btn-success" style="margin-left:2%">Search</button>

    </div>
</div>
<div class="container" style="width:75%">
    <div class="col" style="font-family:poppins">
        <table class="table">
            <thead class="thead-dark">
                <th scope="col">ID</th>
                <th scope="col" style="text-align:center">Organization Name</th>
            </thead>
            @if($govOrgExist)
            <tbody id="org_table_body">
                @foreach($org as $org)
                <tr>
                    <td style="text-align:left">{{$org->id}}</td>
                    <td>{{$org->gov_org_name}}</td>
                </tr>
                @endforeach
            </tbody>
            @else
            <tbody>
                <tr><td colspan="2" style="text-align:center"><h6 style="color:maroon">No data</h6></td></tr>
            </tbody>
            @endif
        </table>
    </div>
</div>
<script>
$(document).ready(function(){
    $("#search").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#org_table_body tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
</script>
@endsection