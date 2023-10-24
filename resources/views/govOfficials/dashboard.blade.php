@extends('layouts.organizationDashboard')

@section('content')
<!-- <div class="row" style="height: 50px;">
        <div class="col" style="height: 50px;margin-top: 320px;"><a href="#" style="margin-left: 50px;color: var(--bs-gray-500);font-size: 20px;">Assessments&nbsp; &nbsp; &nbsp;&gt;</a><a href="#" style="color: var(--bs-emphasis-color);font-size: 20px;">&nbsp; &nbsp; &nbsp; Competency Assessment</a></div>
    </div> -->
    <div class="row" style="text-align:center">
    <span style="margin-top: 10px;color: #1F2471;font-size: 24px;font-weight: bold;font-family:poppins;" data-aos="zoom-in" data-aos-duration="1000">{{$govorgname}}</span>
    </div>
    
    <div class="container" style="margin-top: 40px;font-family:poppins" data-aos="fade-down" data-aos-duration="1000">
        <div class="row" style="height: 479px;">
            <div class="col-md-6" style="height: 430px;border-radius: 10px;border-style: solid;border-color: var(--bs-dark-border-subtle);width: 600px;"><span style="color: #F01F75;margin-top: 20px;">Proficiency</span>
                <div class="row" style="margin-top: 20px;width: 520px;margin-left: 25px;">
                    <div class="col" data-aos="zoom-in" data-aos-duration="1000" style="width: 180px;height: 168px;border-radius: 10px;box-shadow: 0px 0px 13px var(--bs-gray);border-style: none;border-color: var(--bs-emphasis-color);">
                        <div class="row">
                        <span class="d-xxl-flex justify-content-xxl-center align-items-xxl-center" style="color: #f01f75;font-size: 48px;font-family: Poppins, sans-serif;font-weight: bold;margin-left: 30%;margin-top: 20px;background: url(&quot;{{ asset('img/Ellipse 20.png') }}&quot;);width: 106px;height: 108px;">
                                1
                            </span>
                        </div>
                        <div class="row">
                            <div class="col" style="text-align: center;"><span style="color: var(--bs-emphasis-color);font-weight: bold;margin-top: 5px;margin-left: 5px;">ICT</span></div>
                        </div>
                    </div>
                    <div class="col"data-aos="zoom-in" data-aos-duration="1000" style="width: 180px;height: 168px;border-radius: 10px;box-shadow: 0px 0px 13px var(--bs-gray);border-style: none;border-color: var(--bs-emphasis-color);">
                        <div class="row">
                        <span class="d-xxl-flex justify-content-xxl-center align-items-xxl-center" style="color: #f01f75;font-size: 48px;font-family: Poppins, sans-serif;font-weight: bold;margin-left: 30%;margin-top: 20px;background: url(&quot;{{ asset('img/Ellipse 20.png') }}&quot;);width: 106px;height: 108px;">
                                10
                            </span>
                        </div>
                        <div class="row">
                            <div class="col" style="text-align: center;"><span style="color: var(--bs-emphasis-color);font-weight: bold;margin-top: 5px;margin-left: 5px;">Digital Government</span></div>
                        </div>
                    </div>
                </div>
                <div class="row" style="width: 520px;margin-left: 26px;border-style: none;">
                    <div class="col" data-aos="zoom-in" data-aos-duration="1000" style="width: 180px;height: 168px;border-radius: 10px;box-shadow: 0px 0px 13px var(--bs-gray);border-style: none;border-color: var(--bs-emphasis-color);">
                        <div class="row">
                        <span class="d-xxl-flex justify-content-xxl-center align-items-xxl-center" style="color: #f01f75;font-size: 48px;font-family: Poppins, sans-serif;font-weight: bold;margin-left: 30%;margin-top: 20px;background: url(&quot;{{ asset('img/Ellipse 20.png') }}&quot;);width: 106px;height: 108px;">
                                20
                            </span>
                        </div>
                        <div class="row">
                            <div class="col" style="text-align: center;"><span style="color: var(--bs-emphasis-color);font-weight: bold;margin-top: 5px;margin-left: 5px;">Management</span></div>
                        </div>
                    </div>
                    <div class="col" data-aos="zoom-in" data-aos-duration="1000" style="width: 180px;height: 168px;border-radius: 10px;box-shadow: 0px 0px 13px var(--bs-gray);border-style: none;border-color: var(--bs-emphasis-color);">
                        <div class="row">
                        <span class="d-xxl-flex justify-content-xxl-center align-items-xxl-center" style="color: #f01f75;font-size: 48px;font-family: Poppins, sans-serif;font-weight: bold;margin-left: 30%;margin-top: 20px;background: url(&quot;{{ asset('img/Ellipse 20.png') }}&quot;);width: 106px;height: 108px;">
                                10
                            </span>
                        </div>
                        <div class="row">
                            <div class="col" style="text-align: center;"><span style="color: var(--bs-emphasis-color);font-weight: bold;margin-top: 5px;margin-left: 5px;">Overall</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="font-family:poppins;margin-left: 20px;height: 200px;width: 550px;border-radius: 10px;border-style: solid;border-color: var(--bs-dark-border-subtle);">
                <div class="row">
                    <div class="col"><span style="color: #F01F75;">Responses</span>
                        <div class="row" style="margin-top: 10px;">
                            <div class="col" style="text-align: center;">
                                <div class="row">
                                    <div class="col-xxl-4" style="width: 200px;text-align: center;"><img src="assets/img/Figpie.png" style="margin-left: 0px;"></div>
                                    <div class="col">
                                        <div class="row" style="height: 40px;text-align: center;margin-top: 20px;">
                                            <div class="col-xxl-2" style="text-align: center;margin-left: 0px;height: 30px;color: rgb(47,52,56);background: #91bce4;width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"></div>
                                            <div class="col-xxl-9" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;">Assessment Completed</span></div>
                                        </div>
                                        <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                            <div class="col-xxl-2" style="text-align: center;margin-left: 0px;height: 30px;color: rgb(47,52,56);background: #c4d5df;width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"></div>
                                            <div class="col-xxl-8" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;margin-left: -100px;">Inprogress</span></div>
                                        </div>
                                        <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                            <div class="col-xxl-2" style="text-align: center;margin-left: 0px;height: 30px;color: rgb(47,52,56);background: #21efea;width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"></div>
                                            <div class="col-xxl-9" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;margin-left: -120px;">Not start</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;border-style: solid;border-color: var(--bs-dark-border-subtle);border-radius: 10px;height: 225px;">
                    <div class="col" style="color: #F01F75;height: 215px;"><span style="color: #F01F75;margin-top: 10px;">Responses-According to employment layer</span>
                        <div class="row" style="height: 40px;margin-top: 20px;">
                            <div class="col" style="height: 40px;"><img src="assets/img/Group%20268.png"></div>
                            <div class="col" style="height: 40px;"><span style="color: var(--bs-emphasis-color);">Top &amp; 2nd Tier Management <br><br></span></div>
                        </div>
                        <div class="row" style="height: 40px;margin-top: 5px;">
                            <div class="col" style="height: 40px;"><img src="assets/img/Group%20269.png"></div>
                            <div class="col" style="height: 40px;"><span style="color: var(--bs-emphasis-color);">CDIO</span></div>
                        </div>
                        <div class="row" style="height: 40px;margin-top: 5px;">
                            <div class="col" style="height: 40px;"><img src="assets/img/Group%20270.png"></div>
                            <div class="col" style="height: 40px;"><span style="color: var(--bs-emphasis-color);">Middle &amp; Junior Management</span></div>
                        </div>
                        <div class="row" style="height: 40px;margin-top: 5px;">
                            <div class="col" style="height: 40px;"><img src="assets/img/Group%20271.png"></div>
                            <div class="col" style="height: 40px;"><span style="color: var(--bs-emphasis-color);">Operational Staff</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="font-family:poppins;height: 500px;margin-top: 10px;border-style: solid;border-color: var(--bs-dark-border-subtle);border-radius: 10px;">
        <div class="container" style="margin-top: 40px;">
            <div class="row" style="width: 1200px;">
                <div class="col-md-6 col-xxl-7" style="text-align: center;">
                    <div class="table-responsive" style="font-size: 12px;">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th style="width: 90px;color: #1F2471;">ICT</th>
                                    <th style="width: 140px;color: #1F2471;">Digital Government</th>
                                    <th style="width: 110px;color: #1F2471;">Management</th>
                                    <th style="width: 150px;color: #1F2471;">Overall</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="color: #1F2471;"><br>Top &amp; 2nd Tier Management <br><br></td>
                                    <td style="font-weight: bold;font-size: 16px;"><br>67%<br><br></td>
                                    <td style="font-weight: bold;font-size: 16px;"><br>83%<br><br></td>
                                    <td style="font-weight: bold;font-size: 16px;"><br>77%<br><br></td>
                                    <td><img src="assets/img/Group%20272.png"></td>
                                </tr>
                                <tr>
                                    <td style="color: #1F2471;"><br>CDIO<br><br></td>
                                    <td style="font-size: 16px;font-weight: bold;"><br>72%<br><br></td>
                                    <td style="font-size: 16px;font-weight: bold;"><br>57%<br><br></td>
                                    <td style="font-size: 16px;font-weight: bold;"><br>87%<br><br></td>
                                    <td><img src="assets/img/Group%20273.png"></td>
                                </tr>
                                <tr>
                                    <td style="color: #1F2471;"><br>Middle &amp; Junior Management</td>
                                    <td style="font-size: 16px;font-weight: bold;"><br>75%<br><br></td>
                                    <td style="font-size: 16px;font-weight: bold;"><br>77%<br><br></td>
                                    <td style="font-size: 16px;font-weight: bold;"><br>67%<br><br></td>
                                    <td><img src="assets/img/Group%20274.png"></td>
                                </tr>
                                <tr>
                                    <td style="color: #1F2471;"><br><br>Operational Staff <br><br></td>
                                    <td style="font-size: 16px;font-weight: bold;"><br>56%<br><br></td>
                                    <td style="font-size: 16px;font-weight: bold;"><br>45%<br><br></td>
                                    <td style="font-size: 16px;font-weight: bold;"><br>23%<br><br></td>
                                    <td><img src="assets/img/Group%20275.png"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6" style="width: 362px;margin-left: 50px;height: 346px;"><img src="assets/img/Group%2085.png" style="margin-top: -60px;margin-left: -60px;" width="481" height="488"></div>
            </div>
        </div>
    </div>
    <div style="font-family:poppins;height: 900px;margin-top: 20px;border-style: solid;border-color: var(--bs-dark-border-subtle);">
        <div class="container" style="margin-top: 40px;">
            <div class="row">
                <div class="col-md-6 col-xxl-5" style="text-align: center;margin-left: 10px;border-radius: 10px;border: 1px solid var(--bs-emphasis-color);height: 320px;"><span style="color: var(--bs-emphasis-color);margin-top: 20px;font-weight: bold;">ICT Assessment</span>
                    <div class="row">
                        <div class="col"><img src="assets/img/Group%20184.png" width="426" height="239" style="margin-top: 20px;"></div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-6" style="width: 570px;">
                    <div class="row">
                        <div class="col">
                            <div data-aos="fade-down" data-aos-duration="1000" style="width: 580px;height: 45px;margin-left: 20px;margin-top: 0px;border: 1px solid #545658;text-align: left;border-radius: 5px;"><i class="fa fa-filter" style="color: rgb(0,0,0);width: 20px;height: 20px;margin-left: 15px;font-size: 23px;text-align: left;margin-top: 5px;"></i>
                                <div class="dropdown"><button class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button" style="margin-top: -45px;margin-left: 60px;background: #1F2471;font-size: 12px;">Search By ID</button>
                                    <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
                                </div><button class="btn btn-primary" type="button" style="text-align: center;margin-left: 410px;width: 169px;height: 45px;font-size: 12px;border-radius: 5px;border: 2px solid #5f2b84;color: rgb(95,43,132);background: rgba(13,110,253,0);margin-top: -88px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" style="font-size: 12px;margin-right: 10px;width: 25px;height: 25px;margin-left: -10px;">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.319 14.4326C20.7628 11.2941 20.542 6.75347 17.6569 3.86829C14.5327 0.744098 9.46734 0.744098 6.34315 3.86829C3.21895 6.99249 3.21895 12.0578 6.34315 15.182C9.22833 18.0672 13.769 18.2879 16.9075 15.8442C16.921 15.8595 16.9351 15.8745 16.9497 15.8891L21.1924 20.1317C21.5829 20.5223 22.2161 20.5223 22.6066 20.1317C22.9971 19.7412 22.9971 19.1081 22.6066 18.7175L18.364 14.4749C18.3493 14.4603 18.3343 14.4462 18.319 14.4326ZM16.2426 5.28251C18.5858 7.62565 18.5858 11.4246 16.2426 13.7678C13.8995 16.1109 10.1005 16.1109 7.75736 13.7678C5.41421 11.4246 5.41421 7.62565 7.75736 5.28251C10.1005 2.93936 13.8995 2.93936 16.2426 5.28251Z" fill="currentColor"></path>
                                    </svg>Search</button>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px;margin-left: 10px;width: 640px;">
                        <div class="col">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>User Name</th>
                                            <th>Designation</th>
                                            <th style="width: 200px;">Employment Layer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Cell 1</td>
                                            <td>Cell 2</td>
                                            <td>Cell 2</td>
                                        </tr>
                                        <tr>
                                            <td>Cell 3</td>
                                            <td>Cell 4</td>
                                            <td>Cell 4</td>
                                        </tr>
                                        <tr>
                                            <td>Cell 3</td>
                                            <td>Cell 4</td>
                                            <td>Cell 4</td>
                                        </tr>
                                        <tr>
                                            <td>Cell 3</td>
                                            <td>Cell 4</td>
                                            <td>Cell 4</td>
                                        </tr>
                                        <tr>
                                            <td>Cell 3</td>
                                            <td>Cell 4</td>
                                            <td>Cell 4</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="font-family:popins;margin-top: 30px;height: 450px;margin-left: 20px;">
            <div class="col-xxl-4" style="border: 1px solid var(--bs-emphasis-color);width: 560px;border-radius: 10px;">
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col" style="text-align: center;"><span style="color: var(--bs-emphasis-color);font-weight: bold;"><br>Self Assessment - Digital Government</span></div>
                        </div>
                        <div class="row">
                            <div class="col"><img src="assets/img/Group%202131.png" style="margin-top: 40px;margin-left: 30px;" width="478" height="347"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-7" style="border: 1px solid var(--bs-emphasis-color);width: 560px;height: 470px;margin-left: 20px;border-radius: 10px;">
                <div class="row">
                    <div class="col" style="text-align: center;"><span style="color: var(--bs-body-color);font-weight: bold;"><br>Self Assessment - Management</span></div>
                </div>
                <div class="row">
                    <div class="col-xxl-10"><img src="assets/img/Group%20213.png" style="margin-top: 40px;margin-left: 30px;" width="479" height="365"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 20px;width: 1190px;margin-left: 1px;background: var(--bs-secondary-bg);border-style: solid;border-color: var(--bs-dark-border-subtle);border-radius: 10px;">
        <div class="col">
            <div class="row">
                <div class="col" style="text-align: center;font-size: 24px;"><span style="color: var(--bs-primary-text-emphasis);border-color: var(--bs-emphasis-color);">You can Download the Preliminary Results report here&nbsp;</span></div>
            </div>
            <div class="row">
                <div class="col" style="text-align: center;"><button class="btn btn-primary" type="button" style="margin-top: 20px;margin-bottom: 20px;background: #1F2471;">Download</button></div>
            </div>
        </div>
    </div>
@endsection