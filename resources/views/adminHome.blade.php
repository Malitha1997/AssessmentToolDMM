@extends('layouts.adminNavbar')

@section('content')

<div class="container" style="margin-left: 0px;;width: 900px;">
    <div class="row">
        <div class="col">
            <div data-aos="fade-down" data-aos-duration="1000" style="width: 641px;height: 52px;margin-left: 30px;margin-top: 20px;border: 1px solid #545658;text-align: left;border-radius: 5px;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor" style="color: rgb(0,0,0);width: 20px;height: 20px;margin-left: 15px;">
                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                    <path d="M448 449L301.2 300.2c20-27.9 31.9-62.2 31.9-99.2 0-93.1-74.7-168.9-166.5-168.9C74.7 32 0 107.8 0 200.9s74.7 168.9 166.5 168.9c39.8 0 76.3-14.2 105-37.9l146 148.1 30.5-31zM166.5 330.8c-70.6 0-128.1-58.3-128.1-129.9S95.9 71 166.5 71s128.1 58.3 128.1 129.9-57.4 129.9-128.1 129.9z"></path>
                </svg><input type="text" style="width: 383px;height: 23px;margin-left: 5px;border-width: 0px;font-family: Poppins, sans-serif;" placeholder="Search by ID, Organization Name"><button class="btn btn-primary" type="button" style="text-align: center;margin-left: 470px;margin-top:-24px;width: 169px;height: 52px;font-size: 18px;border-radius: 5px;border: 2px solid #5f2b84;color: rgb(95,43,132);background: rgba(13,110,253,0);font-family: Poppins, sans-serif;">Search</button>
                <div class="row" style="margin-top: 50px;">
                    <div class="col">
                        <div data-aos="zoom-in" data-aos-duration="1000" style="width: 687px;height: 748px;box-shadow: 5px 0px 15px 1px #747678;">
                            <div class="row">
                                <h1 style="color: rgb(0,0,0);text-align: center;font-size: 32px;padding-top: 20px;font-family: Poppins, sans-serif;">Overall Results - Preliminary Assessment</h1>
                            </div>
                            <div class="row" id="overall" style="margin-top: 20px">
                                <img src="{{ asset('img/Group 84(1).png') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col" style="margin-left: 70px;width: 100px;">
            <div class="row">
                <div class="col">
                    <div data-aos="zoom-in" data-aos-duration="1000" style="width: 341px;height: 185.37px;margin-top: 50px;box-shadow: 0px 0px 20px 4px var(--bs-body-color);border-radius: 10px;text-align: center;">
                        <div class="row">
                            <span style="color: rgb(22,26,85);font-size: 18px;text-align: center;margin-top: 10px;font-weight: bold;font-family: Poppins, sans-serif;">Registered Organizations</span>
                        </div>
                        <div class="row" style="text-align: center;margin-top: -10px;">
                            <span class="d-xxl-flex justify-content-xxl-center align-items-xxl-center" style="color: #f01f75;font-size: 48px;font-family: Poppins, sans-serif;font-weight: bold;margin-left: 35%;margin-top: 20px;background: url(&quot;{{ asset('img/Ellipse 20.png') }}&quot;);width: 106px;height: 108px;">
                                <?php
                                $connection = mysqli_connect("localhost","root","","assessmenttool");

                                $query= "SELECT id FROM govorganizationdetails ORDER BY id";
                                $query_run = mysqli_query ($connection, $query);

                                $row = mysqli_num_rows($query_run);
                                echo '<h3 style="font-size: 48px;font-family: Poppins, sans-serif;font-weight: bold">'.$row.'</h3>';
                                ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            {{--  <div class="row">
                <div class="col">
                    <div data-aos="zoom-in" data-aos-duration="1000" style="width: 341px;height: 185.37px;margin-top: 50px;box-shadow: 0px 0px 20px 4px var(--bs-body-color);border-radius: 10px;text-align: center;">
                        <div class="row">
                            <span style="color: rgb(22,26,85);font-size: 18px;text-align: center;margin-top: 10px;font-weight: bold;font-family: Poppins, sans-serif;">Total Organization which Assessment completed</span>
                        </div>
                        <div class="row">
                            <span class="d-xxl-flex justify-content-xxl-center align-items-xxl-center" style="color: #f01f75;font-size: 48px;font-family: Poppins, sans-serif;font-weight: bold;margin-left: 35%;margin-top: 5px;background: url(&quot;{{ asset('img/Ellipse 20.png') }}&quot;);width: 106px;height: 108px;">
                                <?php
                                $connection = mysqli_connect("localhost","root","","assessmenttool");

                                $query= "SELECT id FROM percentages ORDER BY id";
                                $query_run = mysqli_query ($connection, $query);

                                $row = mysqli_num_rows($query_run);
                                echo '<h3 style="font-size: 48px;font-family: Poppins, sans-serif;font-weight: bold">'.$row.'</h3>';
                                ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>  --}}
            <div class="row">
                <div class="col">
                    <div data-aos="zoom-in" data-aos-duration="1000" style="width: 341px;height: 185.37px;margin-top: 50px;box-shadow: 0px 0px 20px 4px var(--bs-body-color);border-radius: 10px;text-align: center;">
                        <div class="row">
                            <span style="color: rgb(22,26,85);font-size: 18px;text-align: center;margin-top: 10px;font-weight: bold;font-family: Poppins, sans-serif;">Preliminary Assessment completed</span>
                        </div>
                        <div class="row">
                            <span class="d-xxl-flex justify-content-xxl-center align-items-xxl-center" style="color: #f01f75;font-size: 48px;font-family: Poppins, sans-serif;font-weight: bold;margin-left: 35%;margin-top: 20px;background: url(&quot;{{ asset('img/Ellipse 20.png') }}&quot;);width: 106px;height: 108px;">
                                    <?php
                                    $connection = mysqli_connect("localhost","root","","assessmenttool");

                                    $query= "SELECT id FROM percentages ORDER BY id";
                                    $query_run = mysqli_query ($connection, $query);

                                    $row = mysqli_num_rows($query_run);
                                    echo '<h3 style="font-size: 48px;font-family: Poppins, sans-serif;font-weight: bold">'.$row.'</h3>';
                                    ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            {{--  <div class="row">
                <div class="col">
                    <div data-aos="zoom-in" data-aos-duration="1000" style="width: 341px;height: 185.37px;margin-top: 50px;box-shadow: 0px 0px 20px 4px var(--bs-body-color);border-radius: 10px;text-align: center;"><span style="color: rgb(22,26,85);font-size: 18px;text-align: center;margin-top: 10px;font-weight: bold;font-family: Poppins, sans-serif;">Total Organizations which complete Deep Assessment</span></div>
                </div>
            </div>  --}}
        </div>
    </div>
    <div class="row">
        <div class="col" id="organization">
            <div data-aos="zoom-in" data-aos-duration="1000" style="width:1153px;height:692px;box-shadow: 5px 0px 15px 1px #747678;margin-top:450px">
                <div class="row" style="margin-top: 20px">
                    <span style="font-weight: bold;font-family: Poppins, sans-serif;font-size:24px;color:#1f2471;margin-top:20px;margin-left:20px">Organizations</span>
                </div>
                <div class="row" style="margin-left: 10px;margin-top: 10px">
                    <table class="table" style="width: 1100px">
                        <thead class="thead-light" style="font-family: Poppins, sans-serif;">
                            <tr>
                                <th scope="col" >Username</th>
                                <th scope="col">Organization Name</th>
                                <th scope="col">Organization Category</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">Email</th>
                            </tr>
                        </thead>
                        @foreach ($govorganizations as $key => $govorganization)
                        <tr style="font-family: Poppins, sans-serif;">
                            <td>{{ $govorganization->user->username }}</td>
                            <td>{{ $govorganization->govorganizationname->gov_org_name }}</td>
                            <td>{{ $govorganization->organizationcategory->org_category }}</td>
                            <td>{{ $govorganization->phone_number}}</td>
                            <td>{{ $govorganization->gov_org_email}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <h1 data-aos="zoom-in" data-aos-duration="1000" style="margin-top: 50px;color: #161A55;margin-left: 30%;font-size: 32px;font-weight :bold;padding-top: 20px;font-family: Poppins, sans-serif;">Overall Results of Each Dimension</h1>
    </div>
    {{--  <div class="row">
        <h3 data-aos="zoom-in" data-aos-duration="1000" style="margin-top: 30px;color: #161A55;margin-left: 52%;font-size: 16px;font-weight :bold;padding-top: 20px;font-family: Poppins, sans-serif;">Technology & Data</h3>
    </div>  --}}
    <div class="row">
        <img style="margin-left: 15%;margin-top: 20px" data-aos="zoom-in" data-aos-duration="1000" src="{{ asset('img/Group 96.png') }}">
    </div>
    <div class="row" style="width:900px;margin-left: 13%">
        <div class="col">
            <img style="width: 420px;height: 544px" data-aos="zoom-in" data-aos-duration="1000" src="{{ asset('img/Group 91.png') }}">
        </div>
        <div class="col">
            <img style="width: 420px;height: 541px" data-aos="zoom-in" data-aos-duration="1000" src="{{ asset('img/Group 92.png') }}">
        </div>
    </div>
    <div class="row" style="width:900px;margin-left: 13%">
        <div class="col">
            <img style="width: 420px;height: 544px" data-aos="zoom-in" data-aos-duration="1000" src="{{ asset('img/Group 248.png') }}">
        </div>
        <div class="col">
            <img style="width: 420px;height: 541px" data-aos="zoom-in" data-aos-duration="1000" src="{{ asset('img/Group 249.png') }}">
        </div>
    </div>

</div>
@endsection
