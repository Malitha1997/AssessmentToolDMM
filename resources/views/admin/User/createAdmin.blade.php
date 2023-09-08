@extends('layouts.adminNavbar')

@section('content')

<div class="row" style="font-family: Poppins, sans-serif;margin-top: 10px;height: 3px;background: var(--bs-dark-border-subtle);"></div>
<div style="margin-top: 30px;">
    <div class="container" style="margin-left:20%;margin-top: -30px;font-family: Poppins, sans-serif;">
        <form id="form" method="POST" action="{{ route('createUser') }}" onsubmit="return submitForm(this);">
            {{csrf_field()}}
        <div class="row">
            <div class="col-md-6" data-aos="fade-down" data-aos-duration="800" data-aos-delay="50" style="height: 437px;border-radius: 10px;border-style: solid;border-color: #8588a7;">
                <div class="row" style="text-align: center">
                    <div class="col" style="background: #5F2B84;height: 40px;"><span style="margin-top:5px;color: var(--bs-body-bg)">Create User</span></div>
                </div>
                <div class="row" style="margin-top:30px;">
                    <div class="col-xxl-2" style="background: var(--bs-tertiary-bg);width: 200px;"><span style="color: var(--bs-emphasis-color);margin-top: 30px;margin-left: 20px;"><span style="background-color: rgb(250, 250, 250);">User Name</span></span></div>
                    <div class="col"><input type="text" id="username" name="username" style="margin-top: 20px;width: 360px;height: 35px;background: var(--bs-tertiary-bg);border-radius: 5px;border-color: var(--bs-secondary-bg-subtle);"></div>
                </div>
                <div class="row">
                    <div class="col-xxl-2" style="background: var(--bs-tertiary-bg);width: 200px;"><span style="color: var(--bs-emphasis-color);margin-top: 30px;margin-left: 20px;"><span style="background-color: rgb(250, 250, 250);">Email Address</span></span></div>
                    <div class="col"><input type="email" id="email" name="email" style="margin-top: 20px;width: 360px;height: 35px;background: var(--bs-tertiary-bg);border-radius: 5px;border-color: var(--bs-secondary-bg-subtle);"></div>
                </div>
                <div class="row">
                    <div class="col-xxl-2" style="background: var(--bs-tertiary-bg);width: 200px;"><span style="color: var(--bs-emphasis-color);margin-top: 30px;margin-left: 20px;"><span style="background-color: rgb(250, 250, 250);">Create Password</span></span></div>
                    <div class="col"><input type="password" id="password" name="password" style="margin-top: 20px;width: 360px;height: 35px;background: var(--bs-tertiary-bg);border-radius: 5px;border-color: var(--bs-secondary-bg-subtle);"></div>
                </div>
                <div class="row">
                    <div class="col-xxl-2" style="background: var(--bs-tertiary-bg);width: 200px;"><span style="color: var(--bs-emphasis-color);margin-top: 30px;margin-left: 20px;"><span style="background-color: rgb(250, 250, 250);">Re-enter Password</span></span></div>
                    <div class="col"><input type="password" id="confirm-password" name="confirm-password" style="margin-top: 20px;width: 360px;height: 35px;background: var(--bs-tertiary-bg);border-radius: 5px;border-color: var(--bs-secondary-bg-subtle);"></div>
                </div>
                <button class="btn btn-primary" type="button" style="margin-top: 50px;margin-left: 370px;color: #F01F75;background: var(--bs-tertiary-bg);border-style: solid;border-color: #F01F75;">Cancel</button>
                <button class="btn btn-primary" type="submit" style="margin-top: 50px;margin-left: 20px;background: #F01F75;border-style: solid;border-color: #F01F75;">Create</button>
            </div>
        </div>
    </form>
    </div>
</div>
@endsection
