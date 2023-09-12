@extends('layouts.adminNavbar')

@section('content')

<div class="container" >
    <div class="row" style="margin-left:100px;width:1000px;text-align:left;background-color: #D9D9D9;font-family: Poppins, sans-serif;" data-aos="fade-down" data-aos-duration="1000">
        <div class="col">
            <div class="row">
                <span style="margin-top:10px;color: #5F2B84;font-size: 25px;text-align: left;margin-left: 25px;">Organization Name : </span>
            </div>
            <div class="row">
                <span style="font-size:24px;margin-left:45px;margin-top:10px">{{ $g_user->govorganizationname->gov_org_name }}</span>
            </div>

        </div>
        <div class="col">
            <div class="row">
                <span style="margin-top:10px;color: #5F2B84;font-size: 25px;text-align: left;margin-left: 55px;">Username : </span>
            </div>
            <div class="row">
                <span style="font-size:24px;margin-left:75px;margin-top:10px">{{ $user->username }}</span>
            </div>
        </div>
    </div>

        {{--  <div class="col-md-4" style="width: 215px;height: 119px;margin-left: 180px;border-style: solid;border-color: #5F2B84;border-radius: 10px;box-shadow: 0px 0px 15px #5F2B84;"><span style="color: var(--bs-emphasis-color);text-align: center;margin-left: 25px;font-weight: bold;">Total Employees</span></div>
        <div class="col-md-4" style="height: 119px;width: 215px;margin-left: 70px;border-style: solid;border-color: #5F2B84;border-radius: 10px;box-shadow: 1px 0px 15px #5F2B84;"><span style="color: var(--bs-emphasis-color);text-align: center;font-size: 13px;font-weight: bold;">Preliminary Assessment Completed</span></div>  --}}
</div>
<div class="offcanvas offcanvas-start bg-body" style="font-family: Poppins, sans-serif;" tabindex="-1" data-bs-backdrop="false" id="offcanvas-menu">
    <div class="offcanvas-header" data-aos="fade-down" data-aos-duration="1000" style="font-family: Poppins, sans-serif;"><a class="link-body-emphasis d-flex align-items-center me-md-auto mb-3 mb-md-0 text-decoration-none" href="/"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bootstrap-fill me-3" style="font-size: 25px;">
                <path d="M6.375 7.125V4.658h1.78c.973 0 1.542.457 1.542 1.237 0 .802-.604 1.23-1.764 1.23H6.375zm0 3.762h1.898c1.184 0 1.81-.48 1.81-1.377 0-.885-.65-1.348-1.886-1.348H6.375v2.725z"></path>
                <path d="M4.002 0a4 4 0 0 0-4 4v8a4 4 0 0 0 4 4h8a4 4 0 0 0 4-4V4a4 4 0 0 0-4-4h-8zm1.06 12V3.545h3.399c1.587 0 2.543.809 2.543 2.11 0 .884-.65 1.675-1.483 1.816v.1c1.143.117 1.904.931 1.904 2.033 0 1.488-1.084 2.396-2.888 2.396H5.062z"></path>
            </svg><span class="fs-4">Sidebar</span></a><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="offcanvas"></button></div>
    <div class="offcanvas-body d-flex flex-column justify-content-between pt-0" data-aos="fade-down" data-aos-duration="1000" style="font-family: Poppins, sans-serif;">
    <div style="font-family: Poppins, sans-serif;" data-aos="fade-down" data-aos-duration="1000">
            <hr class="mt-0">
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item"><a class="nav-link active link-light" href="#" aria-current="page"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-house-door me-2">
                            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z"></path>
                        </svg> Home </a></li>
                <li class="nav-item"><a class="nav-link link-body-emphasis" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-speedometer2 me-2">
                            <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"></path>
                            <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"></path>
                        </svg> Dashboard </a></li>
                <li class="nav-item"><a class="nav-link link-body-emphasis" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-calendar-plus me-2">
                            <path d="M8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z"></path>
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"></path>
                        </svg> Orders </a></li>
                <li class="nav-item"><a class="nav-link link-body-emphasis" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-grid me-2">
                            <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"></path>
                        </svg> Products </a></li>
                <li class="nav-item"><a class="nav-link link-body-emphasis" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-people me-2">
                            <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"></path>
                        </svg> Customers </a></li>
            </ul>
        </div>
        <div style="font-family: Poppins, sans-serif;">
            <hr>
            <div class="dropdown"><a class="dropdown-toggle link-body-emphasis d-flex align-items-center text-decoration-none" aria-expanded="false" data-bs-toggle="dropdown" role="button"><img class="rounded-circle me-2" alt="" width="32" height="32" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" style="object-fit: cover;"><strong>User</strong>&nbsp;</a>
                <div class="dropdown-menu shadow text-small" data-popper-placement="top-start"><a class="dropdown-item" href="#">New project...</a><a class="dropdown-item" href="#">Settings</a><a class="dropdown-item" href="#">Profile</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Sign out</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-aos="fade-down" data-aos-duration="1000" style="font-family: Poppins, sans-serif;height: 600px;margin-top: 60px;border-radius: 10px;border: 1.4px solid #05415C;"><span style="color: #F01F75;font-size: 20px;font-weight: bold;background: var(--bs-tertiary-bg);margin-left: 30px;margin-top: 20px;">General Information</span>
    <div class="container" style="margin-top: 30px;height: 500px;">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col" style="width: 250px;"><span style="color: var(--bs-emphasis-color);font-size: 18px;"><br>Name of the organization: <br><br></span></div>
                    <div class="col" style="font-size: 18px;width: 250px;margin-left: -30px;"><span style="color: #1F2471;font-size: 18px;font-weight: bold;"><br>{{ $g_user->govorganizationname->gov_org_name  }}<br><br></span></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col"><span style="color: var(--bs-emphasis-color);font-size: 18px;"><br>Related Ministry:<br><br></span></div>
                    <div class="col"><span style="color: #1F2471;font-weight: bold;font-size: 18px;"><br>{{ $g_user->relatedMinistry->related_ministry  }}<br><br></span></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col" style="width: 250px;"><span style="color: var(--bs-emphasis-color);font-size: 18px;"><br>Organization Category:</span></div>
                    <div class="col" style="font-size: 18px;width: 250px;margin-left: -30px;"><span style="color: #1F2471;font-size: 18px;font-weight: bold;"><br>{{ $g_user->organizationCategory->org_category }}</span></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col"><span style="color: var(--bs-emphasis-color);font-size: 18px;"><br>Type of Services provided:</span></div>
                    <div class="col"><span style="color: #1F2471;font-size: 18px;font-weight: bold;"><br>{{  $g_user->types_of_service }}</span></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col" style="width: 250px;"><span style="color: var(--bs-emphasis-color);font-size: 18px;"><br>Number of Employees:</span></div>
                    <div class="col" style="font-size: 18px;width: 250px;margin-left: -30px;"><span style="color: #1F2471;font-size: 18px;font-weight: bold;"><br>{{ $g_user->number_of_employee }}</span></div>
                </div>
                <div class="row">
                    <div class="col" style="width: 250px;"><span style="color: var(--bs-emphasis-color);font-size: 18px;"><br>Districts of Operations</span></div>
                    <div class="col" style="font-size: 18px;width: 250px;margin-left: -30px;"><span style="color: #1F2471;font-size: 18px;font-weight: bold;"><br>{{ $g_user->districts_of_operations }}</span></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col"><span style="color: var(--bs-emphasis-color);"><br>Organization Address</span></div>
                    <div class="col"><span style="color: #1F2471;font-size: 18px;font-weight: bold;"><br>{{ $g_user->gov_org_address }}</span></div>
                </div>
            </div>
        </div><span style="color: #F01F75;font-size: 20px;font-weight: bold;margin-left: 30px;"><br><br>Organization Contact Detail<br><br></span>
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col" style="width: 250px;"><span style="color: var(--bs-emphasis-color);font-size: 18px;"><br>Phone Number:</span></div>
                    <div class="col" style="font-size: 18px;width: 250px;margin-left: -30px;"><span style="color: #1F2471;font-size: 18px;font-weight: bold;"><br>{{ $g_user->phone_number }}</span></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col"><span style="color: var(--bs-emphasis-color);"><br>Email address:</span></div>
                    <div class="col"><span style="color: #1F2471;font-size: 18px;font-weight: bold;"><br>{{ $g_user->gov_org_email }}</span></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-aos="fade-down" data-aos-duration="1000" style="font-family: Poppins, sans-serif;height: 750px;margin-top: 50px;border-radius: 10px;border: 1.4px solid #05415C;"><span style="color: #F01F75;font-size: 20px;font-weight: bold;background: var(--bs-tertiary-bg);margin-left: 30px;margin-top: 20px;">Details of the Head of Organization</span>
    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col" style="width: 250px;"><span style="color: var(--bs-emphasis-color);font-size: 18px;"><br>Name of the Head of Organization:</span></div>
                    <div class="col" style="font-size: 18px;width: 250px;margin-left: 100px;"><span style="color: #1F2471;font-size: 18px;font-weight: bold;"><br>{{ $g_user->name_of_the_head }}</span></div>
                </div>
            </div>
            <div class="col-md-6" style="width: 500px;margin-left: 80px;">
                <div class="row">
                    <div class="col" style="width: 250px;"><span style="color: var(--bs-emphasis-color);"><br>Designation:</span></div>
                    <div class="col"><span style="color: #1F2471;font-size: 18px;font-weight: bold;"><br>{{ $g_user->designation }}</span></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col" style="width: 250px;"><span style="color: var(--bs-emphasis-color);font-size: 18px;"><br>Phone Number:<br><br><br></span></div>
                    <div class="col" style="font-size: 18px;width: 250px;margin-left: 100px;"><span style="color: #1F2471;font-size: 18px;font-weight: bold;"><br>{{ $g_user->contact_number_of_the_head }}</span></div>
                </div>
            </div>
            <div class="col-md-6" style="width: 500px;margin-left: 80px;">
                <div class="row">
                    <div class="col" style="width: 250px;"><span style="color: var(--bs-emphasis-color);"><br>Email address:</span></div>
                    <div class="col"><span style="color: #1F2471;font-size: 18px;font-weight: bold;"><br>{{ $g_user->head_email }}</span></div>
                </div>
            </div>
        </div><span style="color: #F01F75;font-size: 20px;font-weight: bold;margin-left: 30px;margin-top: -40px;"><br><br>CDIO’s Contact Detail</span>
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col" style="width: 250px;"><span style="color: var(--bs-emphasis-color);font-size: 18px;"><br>CDIO's Name<br><br></span></div>
                    <div class="col" style="font-size: 18px;width: 250px;margin-left: 100px;"><span style="color: #1F2471;font-size: 18px;font-weight: bold;"><br></span></div>
                </div>
            </div>
            <div class="col-md-6" style="width: 500px;margin-left: 80px;">
                <div class="row">
                    <div class="col" style="width: 250px;"><span style="color: var(--bs-emphasis-color);"><br>Email address:</span></div>
                    <div class="col"><span style="color: #1F2471;font-size: 18px;font-weight: bold;"><br></span></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col" style="width: 250px;"><span style="color: var(--bs-emphasis-color);font-size: 18px;"><br>Phone Number:</span></div>
                    <div class="col" style="font-size: 18px;width: 250px;margin-left: -30px;"><span style="color: #1F2471;font-size: 18px;margin-left: 70px;font-weight: bold;"><br></span></div>
                </div>
            </div>
        </div><span style="color: #F01F75;font-size: 20px;font-weight: bold;margin-left: 30px;margin-top: 20px;margin-bottom: 20px;"><br><br>Digital Transformation Unit (DTU)/ IT unit Details</span>
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col" style="width: 250px;"><span style="color: var(--bs-emphasis-color);font-size: 18px;"><br>DTU type of Organization</span></div>
                    <div class="col" style="font-size: 18px;width: 250px;margin-left: 100px;"><span style="color: #1F2471;font-size: 18px;margin-left: 40px;font-weight: bold;"><br>{{ $g_user->dtu_type }}</span></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col" style="width: 250px;"><span style="color: var(--bs-emphasis-color);font-size: 18px;"><br>Number of employees in <br>the DTU</span></div>
                    <div class="col" style="font-size: 18px;width: 250px;margin-left: 100px;"><span style="color: #1F2471;font-size: 18px;margin-left: 40px;font-weight: bold;"><br>{{ $g_user->number_of_employees_dtu }}</span></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-aos="fade-down" data-aos-duration="1000" style="font-family: Poppins, sans-serif;height: 500px;margin-top: 30px;border-radius: 10px;border: 1.4px solid #05415C;"><span style="color: #F01F75;font-size: 20px;font-weight: bold;background: var(--bs-tertiary-bg);margin-left: 30px;margin-top: 20px;">Related Document</span>
    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col" style="width: 250px;"><span style="color: var(--bs-emphasis-color);font-size: 18px;"><br>Related Doc<br><br></span></div>
                    <div class="col" style="font-size: 18px;width: 250px;margin-left: 100px;"><span style="color: var(--bs-emphasis-color);font-size: 18px;"><br>fghj.pdf</span></div>
                </div>
            </div>
        </div>
    </div>
    @if($percentageExist)
    <span style="color: #F01F75;font-size: 20px;font-weight: bold;background: var(--bs-tertiary-bg);margin-left: 30px;margin-top: 20px;">Results of the DMM Assessments</span>
    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col" style="width: 250px;"><span style="color: var(--bs-emphasis-color);font-size: 18px;"><br>Preliminary Assessment</span></div>
                    <div class="col" style="font-size: 18px;width: 250px;margin-left: 100px;"><span style="color: var(--bs-emphasis-color);font-size: 18px;"></span><a class="btn btn-primary" href="{{ route('show_results',$percentageExist->govorganizationdetail->user_id) }}" type="button" style="width: 266px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 5.png') }}&quot;);border-width: 0px;font-family: Poppins, sans-serif;font-size: 20px;margin-bottom: 10px;">Preliminary Assessment</a></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col" style="width: 250px;"><span style="color: var(--bs-emphasis-color);font-size: 18px;"><br>Deep Assessment<br><br></span></div>
                    <div class="col" style="font-size: 18px;width: 250px;margin-left: 100px;"><button class="btn btn-primary" type="button" style="width: 266px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 5.png') }}&quot;), url(&quot;{{ asset('img/Screenshot (561) 5.png') }}&quot;);border-width: 0px;font-family: Poppins, sans-serif;font-size: 20px;margin-top: 10px;" disabled>Deep Assessment</button></div>
                </div>
            </div>
        </div>
    </div>
    @elseif(!$percentageExist)
    <span style="color: #4b4b4b;font-size: 20px;font-weight: bold;background: var(--bs-tertiary-bg);margin-left: 30px;margin-top: 20px;">Results of the DMM Assessments</span>
    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col" style="width: 250px;"><span style="color: #4b4b4b;font-size: 18px;"><br>Preliminary Assessment</span></div>
                    <div class="col" style="font-size: 18px;width: 250px;margin-left: 100px;"><span style="color: #4b4b4b;font-size: 18px;"></span><button class="btn btn-primary"  type="button" style="width: 266px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 5.png') }}&quot;);border-width: 0px;font-family: Poppins, sans-serif;font-size: 20px;margin-bottom: 10px;" disabled>Preliminary Assessment</button></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col" style="width: 250px;"><span style="color: #4b4b4b;font-size: 18px;"><br>Deep Assessment<br><br></span></div>
                    <div class="col" style="font-size: 18px;width: 250px;margin-left: 100px;"><button class="btn btn-primary" type="button" style="width: 266px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 5.png') }}&quot;), url(&quot;{{ asset('img/Screenshot (561) 5.png') }}&quot;);border-width: 0px;font-family: Poppins, sans-serif;font-size: 20px;margin-top: 10px;" disabled>Deep Assessment</button></div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection
