@extends('layouts.adminNavbar')

@section('content')
<div class="container" style="font-family:poppins;margin-bottom:20%;margin-top:-5%">
    <div class="row" data-aos="fade-in" data-aos-duration="1000" style="text-align: center;">
        <h1 style="color: #1F2471;font-weight: bold;"><br>List of CDIOs</h1>
    </div>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Name of Organization</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>
                        <button type="button" class="btn btn-success" style="width:20%">Active</button>
                        <button type="button" class="btn btn-danger" style="width:20%">Deactive</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection