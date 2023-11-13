@extends('layouts.organizationDashboard')

@section('content')
<!-- <div class="row" style="height: 50px;">
        <div class="col" style="height: 50px;margin-top: 320px;"><a href="#" style="margin-left: 50px;color: var(--bs-gray-500);font-size: 20px;">Assessments&nbsp; &nbsp; &nbsp;&gt;</a><a href="#" style="color: var(--bs-emphasis-color);font-size: 20px;">&nbsp; &nbsp; &nbsp; Competency Assessment</a></div>
    </div> -->

    <div data-aos="fade-down" data-aos-duration="1000" style="margin-bottom:4500px;font-family:poppins;height: 2040px;margin-top: 50px;border-radius: 20px;border-style: solid;border-color: var(--bs-dark-border-subtle);">
        <div class="container" style="margin-top: 2%;text-align:center"><span style="color: #1F2471;font-size: 28px;font-weight: bold;margin-left: 400px;margin-top: -40px;"><br>ICT Assessment<br><br></span>
            <div class="row">
                <div class="col-md-6 col-xxl-5" style="text-align: center;">
                    <div class="row">
                        <div class="col-xxl-10" data-aos="zoom-in" data-aos-duration="1000">
                            <div class="row" style="width: 257px;height: 85px;margin-top: 30px;margin-bottom: 50px;margin-left: 150px;background: var(--bs-body-bg);border-radius: 10px;box-shadow: 0px 0px 13px var(--bs-gray);border-style: none;border-color: var(--bs-emphasis-color);">
                                <div class="col" style="border-radius: 10px;"><span style="color: var(--bs-emphasis-color);margin-top: 10px;">Number of Responses</span>
                                    <div class="row" style="font-weight: bold;">
                                        <div class="col"><span style="color: var(--bs-emphasis-color);font-size: 24px;">{{$ictResponses}}</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-aos="zoom-in" data-aos-duration="1000" style="width: 257px;height: 85px;margin-left: 150px;background: var(--bs-body-bg);border-radius: 10px;box-shadow: 0px 0px 13px var(--bs-gray);border-style: none;border-color: var(--bs-emphasis-color);">
                        <div class="col"><span style="color: var(--bs-emphasis-color);margin-top: 10px;">Inprogress</span>
                            <div class="row" style="font-weight: bold;">
                                <div class="col"><span style="color: var(--bs-emphasis-color);font-size: 24px;">{{$ictInProgress}}</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-12">
                            <!-- <img src="assets/img/Group%20184.png" style="margin-top: 60px;" width="504" height="259"> -->
                            <div data-aos="zoom-in" data-aos-duration="1000" id="chart_div1" style="width: 504px; height: 259px; font-family: Poppins; border-style:solid;border-radius:10px; font-family: Poppins;margin-top: 40px;"></div>
                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                        <script>
                            google.charts.load('current', { packages: ['corechart', 'bar'] });
                            google.charts.setOnLoadCallback(drawBasic);

                            function drawBasic() {
                                var data = google.visualization.arrayToDataTable({!! json_encode($ictMarks) !!});

                                var options = {
                                    chartArea: { width: '50%' },
                                    hAxis: {
                                        title: 'Proficiency',
                                        minValue: 0,
                                        maxValue: 100,
                                        textStyle: { fontName: 'Poppins' }
                                    },
                                    vAxis: {
                                        title: 'Competency Area',
                                        textStyle: { fontName: 'Poppins' }
                                    },
                                    colors: ['#CC1D56']
                                };

                                var chart = new google.visualization.BarChart(document.getElementById('chart_div1'));

                                chart.draw(data, options);
                            }
                        </script>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-6">
                    <div class="row" style="margin-left:4%">
                        <div class="col">
                            <form class="form-control" method="GET" action="{{route('searchGov3')}}" style="border-width:0px;height:70px">
                            <div class="col">
                                <input id="searchText" placeholder="   Search by Name or ID..." name="searchText" type="text" style="width: 580px;height: 52px;margin-left: -10px;margin-top: 20px;border: 1px solid #545658;text-align: left;border-radius: 5px;" />
                            </div>
                            <div class="col">               
                                <button id="searchButton" type="submit" class="btn btn-primary" style="text-align: center;margin-left: 400px;width: 169px;height: 52px;font-size: 18px;border-radius: 5px;border: 2px solid #5f2b84;color: rgb(95,43,132);background: rgba(13,110,253,0);margin-top: -77px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" style="font-size: 34px;margin-right: 10px;width: 30px;height: 30px;margin-left: -10px;">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M18.319 14.4326C20.7628 11.2941 20.542 6.75347 17.6569 3.86829C14.5327 0.744098 9.46734 0.744098 6.34315 3.86829C3.21895 6.99249 3.21895 12.0578 6.34315 15.182C9.22833 18.0672 13.769 18.2879 16.9075 15.8442C16.921 15.8595 16.9351 15.8745 16.9497 15.8891L21.1924 20.1317C21.5829 20.5223 22.2161 20.5223 22.6066 20.1317C22.9971 19.7412 22.9971 19.1081 22.6066 18.7175L18.364 14.4749C18.3493 14.4603 18.3343 14.4462 18.319 14.4326ZM16.2426 5.28251C18.5858 7.62565 18.5858 11.4246 16.2426 13.7678C13.8995 16.1109 10.1005 16.1109 7.75736 13.7678C5.41421 11.4246 5.41421 7.62565 7.75736 5.28251C10.1005 2.93936 13.8995 2.93936 16.2426 5.28251Z" fill="currentColor"></path>
                                    </svg>Search
                                </button>
                            </div> 
                            </form> 
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
                                        @foreach($govofficials2 as $govofficial)
                                        <tr>
                                            <td>{{$govofficial->user->username}}</td>
                                            <td>{{$govofficial->designation}}</td>
                                            <td>{{ ucfirst($govofficial->employment_layer) }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top: 70px;font-family:poppins">
            <div class="row">
                <div class="col-md-6" style="width: 550px;margin-left: 20px;height: 600px;border-style: solid;border-color: var(--bs-dark-border-subtle);">
                    <div class="row" style="background: #586CA9;text-align: center;">
                        <div class="col" style="height: 60px;"><span style="margin-top: 20px;">Top &amp; 2nd Tier Management</span></div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="row" style="height: 40px;text-align: center;margin-top: 20px;">
                                <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>{{$topIctComplete}}</span></div>
                                <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;">Assessment Completed</span></div>
                            </div>
                            <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>{{$topIctInProgress}}</span></div>
                                <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;margin-left: -100px;">Inprogress</span></div>
                            </div>
                            <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>{{$topIctIncomplete}}</span></div>
                                <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;margin-left: -120px;">Not start</span></div>
                            </div>
                            <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                <div class="col" style="margin-top: 40px;">
                                <div data-aos="zoom-in" data-aos-duration="1000" id="chart_div2" style="margin-left:10%;width: 426px; height: 239px; font-family: Poppins; font-family: Poppins;margin-top: 20px;"></div>
                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                        <script>
                            google.charts.load('current', { packages: ['corechart', 'bar'] });
                            google.charts.setOnLoadCallback(drawBasic);

                            function drawBasic() {
                                var data = google.visualization.arrayToDataTable({!! json_encode($ictTop) !!});

                                var options = {
                                    chartArea: { width: '50%' },
                                    hAxis: {
                                        title: 'Proficiency',
                                        minValue: 0,
                                        maxValue: 100,
                                        textStyle: { fontName: 'Poppins' }
                                    },
                                    vAxis: {
                                        title: 'Competency Area',
                                        textStyle: { fontName: 'Poppins' }
                                    },
                                    colors: ['#CC1D56']
                                };

                                var chart = new google.visualization.BarChart(document.getElementById('chart_div2'));

                                chart.draw(data, options);
                            }
                        </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" style="width: 550px;margin-left: 20px;border-style: solid;border-color: var(--bs-dark-border-subtle);">
                    <div class="row" style="background: #586CA9;text-align: center;">
                        <div class="col" style="height: 60px;background: #0BA253;"><span style="margin-top: 20px;">Chief Digital Information Officers</span></div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="row" style="height: 40px;text-align: center;margin-top: 20px;">
                                <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>0</span></div>
                                <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;">Assessment Completed</span></div>
                            </div>
                            <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>0</span></div>
                                <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;margin-left: -100px;">Inprogress</span></div>
                            </div>
                            <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>0</span></div>
                                <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;margin-left: -120px;">Not start</span></div>
                            </div>
                            <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                <div class="col" style="margin-top: 40px;">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6" style="width: 550px;margin-left: 20px;height: 600px;border-style: solid;border-color: var(--bs-dark-border-subtle);margin-top: 20px;">
                    <div class="row" style="background: #586CA9;text-align: center;">
                        <div class="col" style="height: 60px;background: #ED2C3D;"><span style="margin-top: 20px;">Middle &amp; Junior Management</span></div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="row" style="height: 40px;text-align: center;margin-top: 20px;">
                                <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>{{$midIctComplete}}</span></div>
                                <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;">Assessment Completed</span></div>
                            </div>
                            <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>{{$midIctInProgress}}</span></div>
                                <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;margin-left: -100px;">Inprogress</span></div>
                            </div>
                            <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>{{$midIctIncomplete}}</span></div>
                                <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;margin-left: -120px;">Not start</span></div>
                            </div>
                            <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                <div class="col" style="margin-top: 40px;">
                                <div data-aos="zoom-in" data-aos-duration="1000" id="chart_div3" style="margin-left:10%;width: 426px; height: 239px; font-family: Poppins; font-family: Poppins;margin-top: 20px;"></div>
                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                        <script>
                            google.charts.load('current', { packages: ['corechart', 'bar'] });
                            google.charts.setOnLoadCallback(drawBasic);

                            function drawBasic() {
                                var data = google.visualization.arrayToDataTable({!! json_encode($ictMid) !!});

                                var options = {
                                    chartArea: { width: '50%' },
                                    hAxis: {
                                        title: 'Proficiency',
                                        minValue: 0,
                                        maxValue: 100,
                                        textStyle: { fontName: 'Poppins' }
                                    },
                                    vAxis: {
                                        title: 'Competency Area',
                                        textStyle: { fontName: 'Poppins' }
                                    },
                                    colors: ['#CC1D56']
                                };

                                var chart = new google.visualization.BarChart(document.getElementById('chart_div3'));

                                chart.draw(data, options);
                            }
                            </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" style="width: 550px;margin-left: 20px;border-style: solid;border-color: var(--bs-dark-border-subtle);margin-top: 20px;">
                    <div class="row" style="background: #586CA9;text-align: center;">
                        <div class="col" style="height: 60px;background: #F68C42;"><span style="margin-top: 20px;">Operational Staff</span></div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="row" style="height: 40px;text-align: center;margin-top: 20px;">
                                <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>{{$opIctComplete}}</span></div>
                                <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;">Assessment Completed</span></div>
                            </div>
                            <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>{{$opIctInProgress}}</span></div>
                                <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;margin-left: -100px;">Inprogress</span></div>
                            </div>
                            <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>{{$opIctIncomplete}}</span></div>
                                <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;margin-left: -120px;">Not start</span></div>
                            </div>
                            <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                <div class="col" style="margin-top: 40px;">
                                <div data-aos="zoom-in" data-aos-duration="1000" id="chart_div4" style="margin-left:10%;width: 426px; height: 239px; font-family: Poppins; font-family: Poppins;margin-top: 20px;"></div>
                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                        <script>
                            google.charts.load('current', { packages: ['corechart', 'bar'] });
                            google.charts.setOnLoadCallback(drawBasic);

                            function drawBasic() {
                                var data = google.visualization.arrayToDataTable({!! json_encode($ictOp) !!});

                                var options = {
                                    chartArea: { width: '50%' },
                                    hAxis: {
                                        title: 'Proficiency',
                                        minValue: 0,
                                        maxValue: 100,
                                        textStyle: { fontName: 'Poppins' }
                                    },
                                    vAxis: {
                                        title: 'Competency Area',
                                        textStyle: { fontName: 'Poppins' }
                                    },
                                    colors: ['#CC1D56']
                                };

                                var chart = new google.visualization.BarChart(document.getElementById('chart_div4'));

                                chart.draw(data, options);
                            }
                            </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="height: 2000px;margin-top: 100px;border-radius: 20px;border-style: solid;border-color: var(--bs-dark-border-subtle);">
        <div class="container" style="margin-top: 2%;text-align:center"><span style="color: #1F2471;font-size: 28px;font-weight: bold;margin-left: 400px;margin-top: -40px;"><br>Digital Government Assessment</span>
                <div class="row" style="margin-top: 50px;">
                    <div class="col-md-6" style="text-align: center;">
                        <div class="row">
                            <div class="col" data-aos="zoom-in" data-aos-duration="1000">
                                <div class="row" style="width: 257px;height: 85px;margin-top: 50px;margin-bottom: 50px;margin-left: 150px;background: var(--bs-body-bg);border-radius: 10px;;box-shadow: 0px 0px 13px var(--bs-gray);border-style: none;border-color: var(--bs-emphasis-color)">
                                    <div class="col" style="border-radius: 10px;"><span style="color: var(--bs-emphasis-color);margin-top: 10px;">Number of Responses</span>
                                        <div class="row" style="font-weight: bold;">
                                            <div class="col"><span style="color: var(--bs-emphasis-color);font-size: 24px;">{{$digitalGovernmentResponses}}</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" data-aos="zoom-in" data-aos-duration="1000" style="width: 257px;height: 85px;margin-left: 150px;background: var(--bs-body-bg);border-radius: 10px;;box-shadow: 0px 0px 13px var(--bs-gray);border-style: none;border-color: var(--bs-emphasis-color)">
                            <div class="col"><span style="color: var(--bs-emphasis-color);margin-top: 10px;">Inprogress</span>
                                <div class="row" style="font-weight: bold;">
                                    <div class="col"><span style="color: var(--bs-emphasis-color);font-size: 24px;">{{$digitalGovernmentInProgress}}</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- <img src="assets/img/Group%202131.png" width="547" height="298"> -->
                        <div data-aos="zoom-in" data-aos-duration="1000" id="chart_div5" style="margin-left: -10%;width: 650px; height: 298px; font-family: Poppins; font-family: Poppins;margin-top: 5px;"></div>
                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                        <script>
                            google.charts.load('current', { packages: ['corechart', 'bar'] });
                            google.charts.setOnLoadCallback(drawBasic);

                            function drawBasic() {
                                var data = google.visualization.arrayToDataTable({!! json_encode($digitalGovernmentMarks) !!});

                                var options = {
                                    chartArea: { width: '50%' },
                                    hAxis: {
                                        title: 'Proficiency',
                                        minValue: 0,
                                        maxValue: 100,
                                        textStyle: { fontName: 'Poppins' }
                                    },
                                    vAxis: {
                                        title: 'Competency Area',
                                        textStyle: { fontName: 'Poppins' }
                                    },
                                    colors: ['#92248D']
                                };

                                var chart = new google.visualization.BarChart(document.getElementById('chart_div5'));

                                chart.draw(data, options);
                            }
                            </script>
                    </div>
                </div>
            </div>
            <div class="container" style="margin-top: 70px;">
                <div class="row">
                    <div class="col-md-6" style="width: 563px;margin-left: 20px;height: 700px;border-style: solid;border-color: var(--bs-dark-border-subtle);">
                        <div class="row" style="background: #586CA9;text-align: center;">
                            <div class="col" style="height: 60px;"><span style="margin-top: 20px;">Top &amp; 2nd Tier Management</span></div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="row" style="height: 40px;text-align: center;margin-top: 20px;">
                                    <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>{{$topDigitalGovernmentComplete}}</span></div>
                                    <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;">Assessment Completed</span></div>
                                </div>
                                <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                    <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>{{$topDigitalGovernmentInProgress}}</span></div>
                                    <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;margin-left: -100px;">Inprogress</span></div>
                                </div>
                                <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                    <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>{{$topDigitalGovernmentIncomplete}}</span></div>
                                    <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;margin-left: -120px;">Not start</span></div>
                                </div>
                                <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                    <div class="col" style="margin-top: 40px;">
                                    <div data-aos="zoom-in" data-aos-duration="1000" id="chart_div6" style="width: 525px; height: 350px; font-family: Poppins; font-family: Poppins;margin-top: 5px;"></div>
                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                        <script>
                            google.charts.load('current', { packages: ['corechart', 'bar'] });
                            google.charts.setOnLoadCallback(drawBasic);

                            function drawBasic() {
                                var data = google.visualization.arrayToDataTable({!! json_encode($digitalGovernmentTop) !!});

                                var options = {
                                    chartArea: { width: '50%' },
                                    hAxis: {
                                        title: 'Proficiency',
                                        minValue: 0,
                                        maxValue: 100,
                                        textStyle: { fontName: 'Poppins' }
                                    },
                                    vAxis: {
                                        title: 'Competency Area',
                                        textStyle: { fontName: 'Poppins' }
                                    },
                                    colors: ['#92248D']
                                };

                                var chart = new google.visualization.BarChart(document.getElementById('chart_div6'));

                                chart.draw(data, options);
                            }
                            </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="width: 563px;margin-left: 20px;border-style: solid;border-color: var(--bs-dark-border-subtle);">
                        <div class="row" style="background: #586CA9;text-align: center;">
                            <div class="col" style="height: 60px;background: #0BA253;"><span style="margin-top: 20px;">Chief Digital Information Officers</span></div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="row" style="height: 40px;text-align: center;margin-top: 20px;">
                                    <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>0</span></div>
                                    <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;">Assessment Completed</span></div>
                                </div>
                                <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                    <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>0</span></div>
                                    <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;margin-left: -100px;">Inprogress</span></div>
                                </div>
                                <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                    <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>0</span></div>
                                    <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;margin-left: -120px;">Not start</span></div>
                                </div>
                                <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                    <div class="col" style="margin-top: 40px;">
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="width: 563px;margin-left: 20px;height: 700px;border-style: solid;border-color: var(--bs-dark-border-subtle);margin-top: 20px;">
                        <div class="row" style="background: #586CA9;text-align: center;">
                            <div class="col" style="height: 60px;background: #ED2C3D;"><span style="margin-top: 20px;">Middle &amp; Junior Management</span></div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="row" style="height: 40px;text-align: center;margin-top: 20px;">
                                    <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>{{$midDigitalGovernmentComplete}}</span></div>
                                    <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;">Assessment Completed</span></div>
                                </div>
                                <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                    <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>{{$midDigitalGovernmentInProgress}}</span></div>
                                    <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;margin-left: -100px;">Inprogress</span></div>
                                </div>
                                <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                    <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>{{$midDigitalGovernmentIncomplete}}</span></div>
                                    <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;margin-left: -120px;">Not start</span></div>
                                </div>
                                <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                    <div class="col" style="margin-top: 40px;">
                                    <div data-aos="zoom-in" data-aos-duration="1000" id="chart_div7" style="width: 525px; height: 350px; font-family: Poppins; font-family: Poppins;margin-top: 5px;"></div>
                                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                    <script>
                                    google.charts.load('current', { packages: ['corechart', 'bar'] });
                                    google.charts.setOnLoadCallback(drawBasic);

                                    function drawBasic() {
                                        var data = google.visualization.arrayToDataTable({!! json_encode($digitalGovernmentMid) !!});

                                        var options = {
                                            chartArea: { width: '50%' },
                                            hAxis: {
                                                title: 'Proficiency',
                                                minValue: 0,
                                                maxValue: 100,
                                                textStyle: { fontName: 'Poppins' }
                                            },
                                            vAxis: {
                                                title: 'Competency Area',
                                                textStyle: { fontName: 'Poppins' }
                                            },
                                            colors: ['#92248D']
                                        };

                                        var chart = new google.visualization.BarChart(document.getElementById('chart_div7'));

                                        chart.draw(data, options);
                                    }
                                    </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="width: 550px;margin-left: 20px;border-style: solid;border-color: var(--bs-dark-border-subtle);margin-top: 20px;">
                        <div class="row" style="background: #586CA9;text-align: center;">
                            <div class="col" style="height: 60px;background: #F68C42;"><span style="margin-top: 20px;">Operational Staff</span></div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="row" style="height: 40px;text-align: center;margin-top: 20px;">
                                    <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>{{$opDigitalGovernmentComplete}}</span></div>
                                    <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;">Assessment Completed</span></div>
                                </div>
                                <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                    <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>{{$opDigitalGovernmentInProgress}}</span></div>
                                    <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;margin-left: -100px;">Inprogress</span></div>
                                </div>
                                <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                    <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>{{$opDigitalGovernmentIncomplete}}</span></div>
                                    <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;margin-left: -120px;">Not start</span></div>
                                </div>
                                <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                    <div class="col" style="margin-top: 40px;">
                                    <div data-aos="zoom-in" data-aos-duration="1000" id="chart_div8" style="width: 525px; height: 350px; font-family: Poppins; font-family: Poppins;margin-top: 5px;"></div>
                                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                    <script>
                                        google.charts.load('current', { packages: ['corechart', 'bar'] });
                                        google.charts.setOnLoadCallback(drawBasic);

                                        function drawBasic() {
                                            var data = google.visualization.arrayToDataTable({!! json_encode($digitalGovernmentOp) !!});

                                            var options = {
                                                chartArea: { width: '50%' },
                                                hAxis: {
                                                    title: 'Proficiency',
                                                    minValue: 0,
                                                    maxValue: 100,
                                                    textStyle: { fontName: 'Poppins' }
                                                },
                                                vAxis: {
                                                    title: 'Competency Area',
                                                    textStyle: { fontName: 'Poppins' }
                                                },
                                                colors: ['#92248D']
                                            };

                                            var chart = new google.visualization.BarChart(document.getElementById('chart_div8'));

                                            chart.draw(data, options);
                                        }
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="font-family:poppins;height: 2200px;margin-top: 100px;border-radius: 20px;border-style: solid;border-color: var(--bs-dark-border-subtle);">
                <div class="container" style="margin-top: 2%;text-align:center"><span style="color: #1F2471;font-size: 28px;font-weight: bold;margin-left: 400px;margin-top: -40px;"><br>Management Assessment</span>
                    <div class="row" style="margin-top: 50px;">
                        <div class="col-md-6" style="text-align: center;">
                            <div class="row" data-aos="zoom-in" data-aos-duration="1000">
                                <div class="col">
                                    <div class="row" style="width: 257px;height: 85px;margin-top: 50px;margin-bottom: 50px;margin-left: 150px;background: var(--bs-body-bg);border-radius: 10px;box-shadow: 0px 0px 13px var(--bs-gray);border-style: none;border-color: var(--bs-emphasis-color);">
                                        <div class="col" style="border-radius: 10px;"><span style="color: var(--bs-emphasis-color);margin-top: 10px;">Number of Responses</span>
                                            <div class="row" style="font-weight: bold;">
                                                <div class="col"><span style="color: var(--bs-emphasis-color);font-size: 24px;">{{$digitalGovernmentResponses}}</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" data-aos="zoom-in" data-aos-duration="1000" style="width: 257px;height: 85px;margin-left: 150px;background: var(--bs-body-bg);border-radius: 10px;;box-shadow: 0px 0px 13px var(--bs-gray);border-style: none;border-color: var(--bs-emphasis-color);">
                                <div class="col"><span style="color: var(--bs-emphasis-color);margin-top: 10px;">Inprogress</span>
                                    <div class="row" style="font-weight: bold;">
                                        <div class="col"><span style="color: var(--bs-emphasis-color);font-size: 24px;">{{$digitalGovernmentInProgress}}</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- <img src="assets/img/Group%20213.png" width="547" height="298"> -->
                            <div data-aos="zoom-in" data-aos-duration="1000" id="chart_div9" style="width: 525px; height: 450px; font-family: Poppins; font-family: Poppins;margin-top:-5%"></div>
                                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                    <script>
                                        google.charts.load('current', { packages: ['corechart', 'bar'] });
                                        google.charts.setOnLoadCallback(drawBasic);

                                        function drawBasic() {
                                            var data = google.visualization.arrayToDataTable({!! json_encode($managementMarks) !!});

                                            var options = {
                                                chartArea: { width: '50%' },
                                                hAxis: {
                                                    title: 'Proficiency',
                                                    minValue: 0,
                                                    maxValue: 100,
                                                    textStyle: { fontName: 'Poppins' }
                                                },
                                                vAxis: {
                                                    title: 'Competency Area',
                                                    textStyle: { fontName: 'Poppins' }
                                                },
                                                colors: ['#037774']
                                            };

                                            var chart = new google.visualization.BarChart(document.getElementById('chart_div9'));

                                            chart.draw(data, options);
                                        }
                                        </script>
                        </div>
                    </div>
                </div>
                <div class="container" style="margin-top: 70px;">
                    <div class="row">
                        <div class="col-md-6" style="width: 563px;margin-left: 20px;height: 700px;border-style: solid;border-color: var(--bs-dark-border-subtle);">
                            <div class="row" style="background: #586CA9;text-align: center;">
                                <div class="col" style="height: 60px;"><span style="margin-top: 20px;">Top &amp; 2nd Tier Management</span></div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="row" style="height: 40px;text-align: center;margin-top: 20px;">
                                        <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>{{$topManagementComplete}}</span></div>
                                        <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;">Assessment Completed</span></div>
                                    </div>
                                    <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                        <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>{{$topManagementInProgress}}</span></div>
                                        <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;margin-left: -100px;">Inprogress</span></div>
                                    </div>
                                    <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                        <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>{{$topManagementIncomplete}}</span></div>
                                        <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;margin-left: -120px;">Not start</span></div>
                                    </div>
                                    <div class="row" style="height: 40px;text-align: center;">
                                        <div class="col" style="">
                                        <div data-aos="zoom-in" data-aos-duration="1000" id="chart_div10" style="width: 525px; height: 450px; font-family: Poppins; font-family: Poppins;"></div>
                                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                    <script>
                                        google.charts.load('current', { packages: ['corechart', 'bar'] });
                                        google.charts.setOnLoadCallback(drawBasic);

                                        function drawBasic() {
                                            var data = google.visualization.arrayToDataTable({!! json_encode($managementTop) !!});

                                            var options = {
                                                chartArea: { width: '50%' },
                                                hAxis: {
                                                    title: 'Proficiency',
                                                    minValue: 0,
                                                    maxValue: 100,
                                                    textStyle: { fontName: 'Poppins' }
                                                },
                                                vAxis: {
                                                    title: 'Competency Area',
                                                    textStyle: { fontName: 'Poppins' }
                                                },
                                                colors: ['#037774']
                                            };

                                            var chart = new google.visualization.BarChart(document.getElementById('chart_div10'));

                                            chart.draw(data, options);
                                        }
                                        </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" style="width: 563px;margin-left: 20px;border-style: solid;border-color: var(--bs-dark-border-subtle);">
                            <div class="row" style="background: #586CA9;text-align: center;">
                                <div class="col" style="height: 60px;background: #0BA253;"><span style="margin-top: 20px;">Chief Digital Information Officers</span></div>
                            </div>
                            <div class="row">
                                <div class="col">
                                <div class="row" style="height: 40px;text-align: center;margin-top: 20px;">
                                        <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>0</span></div>
                                        <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;">Assessment Completed</span></div>
                                    </div>
                                    <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                        <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>0</span></div>
                                        <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;margin-left: -100px;">Inprogress</span></div>
                                    </div>
                                    <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                        <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>0</span></div>
                                        <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;margin-left: -120px;">Not start</span></div>
                                    </div>
                                    <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                        <div class="col" style="margin-top: 40px;">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6" style="width: 563px;margin-left: 20px;height: 700px;border-style: solid;border-color: var(--bs-dark-border-subtle);margin-top: 20px;">
                            <div class="row" style="background: #586CA9;text-align: center;">
                                <div class="col" style="height: 60px;background: #ED2C3D;"><span style="margin-top: 20px;">Middle &amp; Junior Management</span></div>
                            </div>
                            <div class="row">
                                <div class="col">
                                <div class="row" style="height: 40px;text-align: center;margin-top: 20px;">
                                        <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>{{$midManagementComplete}}</span></div>
                                        <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margimid: 5px;">Assessment Completed</span></div>
                                    </div>
                                    <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                        <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>{{$midManagementInProgress}}</span></div>
                                        <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;margin-left: -100px;">Inprogress</span></div>
                                    </div>
                                    <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                        <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>{{$midManagementIncomplete}}</span></div>
                                        <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;margin-left: -120px;">Not start</span></div>
                                    </div>
                                    <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                        <div class="col" style="margin-top: 40px;">
                                        <div data-aos="zoom-in" data-aos-duration="1000" id="chart_div11" style="width: 525px; height: 450px; font-family: Poppins; font-family: Poppins;margin-top:-5%"></div>
                                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                    <script>
                                        google.charts.load('current', { packages: ['corechart', 'bar'] });
                                        google.charts.setOnLoadCallback(drawBasic);

                                        function drawBasic() {
                                            var data = google.visualization.arrayToDataTable({!! json_encode($managementMid) !!});

                                            var options = {
                                                chartArea: { width: '50%' },
                                                hAxis: {
                                                    title: 'Proficiency',
                                                    minValue: 0,
                                                    maxValue: 100,
                                                    textStyle: { fontName: 'Poppins' }
                                                },
                                                vAxis: {
                                                    title: 'Competency Area',
                                                    textStyle: { fontName: 'Poppins' }
                                                },
                                                colors: ['#037774']
                                            };

                                            var chart = new google.visualization.BarChart(document.getElementById('chart_div11'));

                                            chart.draw(data, options);
                                        }
                                        </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" style="width: 550px;margin-left: 20px;border-style: solid;border-color: var(--bs-dark-border-subtle);margin-top: 20px;">
                            <div class="row" style="background: #586CA9;text-align: center;">
                                <div class="col" style="height: 60px;background: #F68C42;"><span style="margin-top: 20px;">Operational Staff</span></div>
                            </div>
                            <div class="row">
                                <div class="col">
                                <div class="row" style="height: 40px;text-align: center;margin-top: 20px;">
                                        <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>{{$opManagementComplete}}</span></div>
                                        <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);marop: 5px;">Assessment Completed</span></div>
                                    </div>
                                    <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                        <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>{{$opManagementInProgress}}</span></div>
                                        <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;margin-left: -100px;">Inprogress</span></div>
                                    </div>
                                    <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                        <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>{{$opManagementIncomplete}}</span></div>
                                        <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;margin-left: -120px;">Not start</span></div>
                                    </div>
                                    <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                        <div class="col" style="margin-top: 40px;">
                                        <div data-aos="zoom-in" data-aos-duration="1000" id="chart_div12" style="width: 525px; height: 450px; font-family: Poppins; font-family: Poppins;margin-top:-5%"></div>
                                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                    <script>
                                        google.charts.load('current', { packages: ['corechart', 'bar'] });
                                        google.charts.setOnLoadCallback(drawBasic);

                                        function drawBasic() {
                                            var data = google.visualization.arrayToDataTable({!! json_encode($managementOp) !!});

                                            var options = {
                                                chartArea: { width: '50%' },
                                                hAxis: {
                                                    title: 'Proficiency',
                                                    minValue: 0,
                                                    maxValue: 100,
                                                    textStyle: { fontName: 'Poppins' }
                                                },
                                                vAxis: {
                                                    title: 'Competency Area',
                                                    textStyle: { fontName: 'Poppins' }
                                                },
                                                colors: ['#037774']
                                            };

                                            var chart = new google.visualization.BarChart(document.getElementById('chart_div12'));

                                            chart.draw(data, options);
                                        }
                                        </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection