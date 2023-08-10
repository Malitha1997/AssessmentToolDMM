@extends('layouts.adminNavbar')

@section('content')

<div class="container" style="margin-left: 0px;margin-top: 350px;width: 900px;">
    <div class="row">
        <div class="col">
            <div data-aos="fade-down" data-aos-duration="1000" style="width: 641px;height: 52px;margin-left: 30px;margin-top: 20px;border: 1px solid #545658;text-align: left;border-radius: 5px;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor" style="color: rgb(0,0,0);width: 20px;height: 20px;margin-left: 15px;">
                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                    <path d="M448 449L301.2 300.2c20-27.9 31.9-62.2 31.9-99.2 0-93.1-74.7-168.9-166.5-168.9C74.7 32 0 107.8 0 200.9s74.7 168.9 166.5 168.9c39.8 0 76.3-14.2 105-37.9l146 148.1 30.5-31zM166.5 330.8c-70.6 0-128.1-58.3-128.1-129.9S95.9 71 166.5 71s128.1 58.3 128.1 129.9-57.4 129.9-128.1 129.9z"></path>
                </svg><input type="text" style="width: 383px;height: 23px;margin-left: 5px;border-width: 0px;" placeholder="Search by ID, Organization Name"><button class="btn btn-primary" type="button" style="text-align: center;margin-left: 47px;width: 169px;height: 52px;font-size: 18px;border-radius: 5px;border: 2px solid #5f2b84;color: rgb(95,43,132);background: rgba(13,110,253,0);">Search</button>
                <div class="row" style="margin-top: 50px;">
                    <div class="col">
                        <div data-aos="zoom-in" data-aos-duration="1000" style="width: 687px;height: 748px;box-shadow: 5px 0px 15px 1px #747678;">
                            <h1 style="color: rgb(0,0,0);text-align: center;font-size: 32px;padding-top: 20px;">Overall Results</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col" style="margin-left: 70px;width: 100px;">
            <div class="row">
                <div class="col">
                    <div data-aos="zoom-in" data-aos-duration="1000" style="width: 341px;height: 185.37px;margin-top: 50px;box-shadow: 0px 0px 20px 4px var(--bs-body-color);border-radius: 10px;text-align: center;"><span style="color: rgb(22,26,85);font-size: 18px;text-align: center;margin-top: 10px;font-weight: bold;">Total Registered Organizations</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div data-aos="zoom-in" data-aos-duration="1000" style="width: 341px;height: 185.37px;margin-top: 50px;box-shadow: 0px 0px 20px 4px var(--bs-body-color);border-radius: 10px;text-align: center;"><span style="color: rgb(22,26,85);font-size: 18px;text-align: center;margin-top: 10px;font-weight: bold;">Total Organization which Assessment completed</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div data-aos="zoom-in" data-aos-duration="1000" style="width: 341px;height: 185.37px;margin-top: 50px;box-shadow: 0px 0px 20px 4px var(--bs-body-color);border-radius: 10px;text-align: center;"><span style="color: rgb(22,26,85);font-size: 18px;text-align: center;margin-top: 10px;font-weight: bold;">Total Organizations which complete Preliminary Assessment</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div data-aos="zoom-in" data-aos-duration="1000" style="width: 341px;height: 185.37px;margin-top: 50px;box-shadow: 0px 0px 20px 4px var(--bs-body-color);border-radius: 10px;text-align: center;"><span style="color: rgb(22,26,85);font-size: 18px;text-align: center;margin-top: 10px;font-weight: bold;">Total Organizations which complete Deep Assessment</span></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
