@extends('layouts.organizationDashboard')

@section('content')

    <div class="row" style="text-align:center">
        <span style="margin-top: 10px;color: #1F2471;font-size: 24px;font-weight: bold;font-family:poppins;" data-aos="zoom-in" data-aos-duration="1000">{{$govorgname}}</span>
    </div>
    <div class="container" style="margin-top: 40px;font-family:poppins;" data-aos="fade-down" data-aos-duration="1000">
        <table>
        <div class="row">
            <div class="col"style="height: 430px;border-radius: 10px;border-style: solid;border-color: var(--bs-dark-border-subtle);width: 50%;">
                <span style="color: #F01F75;margin-top: 20px;">Proficiency</span>
                <div class="row" style="margin-top: 20px;width: 520px;margin-left: 25px;">
                    <div class="col" data-aos="zoom-in" data-aos-duration="1000" style="width: 180px;height: 168px;border-radius: 10px;box-shadow: 0px 0px 13px var(--bs-gray);border-style: none;border-color: var(--bs-emphasis-color);">
                        <div class="row">
                        <span id="ictCount" class="d-xxl-flex justify-content-xxl-center align-items-xxl-center" style="color: #f01f75;font-size: 48px;font-family: Poppins, sans-serif;font-weight: bold;margin-left: 30%;margin-top: 20px;background: url(&quot;{{ asset('img/Ellipse 20.png') }}&quot;);width: 106px;height: 108px;">
                                {{$ictCount}}
                            </span>
                        </div>
                        <div class="row">
                            <div class="col" style="text-align: center;"><span style="color: var(--bs-emphasis-color);font-weight: bold;margin-top: 5px;margin-left: 5px;">ICT</span></div>
                        </div>
                    </div>
                    <div class="col"data-aos="zoom-in" data-aos-duration="1000" style="width: 180px;height: 168px;border-radius: 10px;box-shadow: 0px 0px 13px var(--bs-gray);border-style: none;border-color: var(--bs-emphasis-color);">
                        <div class="row">
                        <span id="digitalGovernmentCount" class="d-xxl-flex justify-content-xxl-center align-items-xxl-center" style="color: #f01f75;font-size: 48px;font-family: Poppins, sans-serif;font-weight: bold;margin-left: 30%;margin-top: 20px;background: url(&quot;{{ asset('img/Ellipse 20.png') }}&quot;);width: 106px;height: 108px;">
                                {{$digitalGovernmentCount}}
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
                        <span id="managementCount" class="d-xxl-flex justify-content-xxl-center align-items-xxl-center" style="color: #f01f75;font-size: 48px;font-family: Poppins, sans-serif;font-weight: bold;margin-left: 30%;margin-top: 20px;background: url(&quot;{{ asset('img/Ellipse 20.png') }}&quot;);width: 106px;height: 108px;">
                                {{$managementCount}}
                            </span>
                        </div>
                        <div class="row">
                            <div class="col" style="text-align: center;"><span style="color: var(--bs-emphasis-color);font-weight: bold;margin-top: 5px;margin-left: 5px;">Management</span></div>
                        </div>
                    </div>
                    <div class="col" data-aos="zoom-in" data-aos-duration="1000" style="width: 180px;height: 168px;border-radius: 10px;box-shadow: 0px 0px 13px var(--bs-gray);border-style: none;border-color: var(--bs-emphasis-color);">
                        <div class="row">
                        <span id="overall" class="d-xxl-flex justify-content-xxl-center align-items-xxl-center" style="color: #f01f75;font-size: 48px;font-family: Poppins, sans-serif;font-weight: bold;margin-left: 30%;margin-top: 20px;background: url(&quot;{{ asset('img/Ellipse 20.png') }}&quot;);width: 106px;height: 108px;">
                                {{$overall}}
                            </span>
                        </div>
                        <div class="row">
                            <div class="col" style="text-align: center;"><span style="color: var(--bs-emphasis-color);font-weight: bold;margin-top: 5px;margin-left: 5px;">Overall</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row" style="font-family:poppins;margin-left: 20px;height: 200px;width: 550px;border-radius: 10px;border-style: solid;border-color: var(--bs-dark-border-subtle);">
                    <div class="col"><span style="color: #F01F75;">Responses</span>
                        <div class="row" style="margin-top:-20px">
                            <div class="col" style="text-align: center;">
                                <div class="row">
                                    <div data-aos="zoom-in" data-aos-duration="1000" id="chart_div" style="width:400px;height:180px;font-family: Poppins;margin-left:20%"></div>
                                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                    <script>
                                        google.charts.load('current', { packages: ['corechart'] });
                                        google.charts.setOnLoadCallback(drawPieChart);

                                        function drawPieChart() {
                                            var data = google.visualization.arrayToDataTable({{ Js::from($responses) }});

                                            var options = {
                                                
                                                titleTextStyle: {
                                                    fontName: 'Poppins',
                                                    fontSize: 24,
                                                },
                                                colors: ['#FF5733', '#33FF57', '#3357FF'],
                                                fontName: 'Poppins',
                                                fontSize: 8,
                                            };

                                            var chart = new google.visualization.PieChart(document.getElementById('chart_div'));

                                            chart.draw(data, options);
                                        }
                                    </script>
                                     
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                <div class="row" style="margin-top:5%;font-family:poppins;margin-left: 20px;height: 200px;width: 550px;border-radius: 10px;border-style: solid;border-color: var(--bs-dark-border-subtle);">
                    <div class="row" style="color: #F01F75;">
                        <span style="color: #F01F75;margin-top: 10px;">Responses-According to employment layer</span>
                    </div>
                    <div class="row">
                        <div data-aos="zoom-in" data-aos-duration="1000" id="chart_div2" style="width: 500px; height: 150px; font-family: Poppins; margin-left: 50px; font-family: Poppins"></div>
                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                        <script>
                            google.charts.load('current', { packages: ['corechart', 'bar'] });
                            google.charts.setOnLoadCallback(drawBasic);

                            function drawBasic() {
                                var data = google.visualization.arrayToDataTable({!! json_encode($layerResponses) !!});

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
                                    colors: ['#92248D'],
                                    
                                };

                                var chart = new google.visualization.BarChart(document.getElementById('chart_div2'));

                                chart.draw(data, options);
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
        </table>
    </div>
    <div class="row" data-aos="fade-down" data-aos-duration="1000" style="font-family:poppins;height: 500px;margin-top: 2%;border-style: solid;border-color: var(--bs-dark-border-subtle);border-radius: 10px;">
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
                                    <td style="font-weight: bold;font-size: 16px;"><br>{{$avgTopIctResponse}}%<br><br></td>
                                    <td style="font-weight: bold;font-size: 16px;"><br>{{$avgTopDigitalGovernmentResponse}}%<br><br></td>
                                    <td style="font-weight: bold;font-size: 16px;"><br>{{$avgTopManagementResponse}}%<br><br></td>
                                    <td style="font-weight: bold;font-size: 16px;"><br>{{$avgTopResponse}}%</td>
                                </tr>
                                <tr>
                                    <td style="color: #1F2471;"><br>CDIO<br><br></td>
                                    <td style="font-size: 16px;font-weight: bold;"><br>0%<br><br></td>
                                    <td style="font-size: 16px;font-weight: bold;"><br>0%<br><br></td>
                                    <td style="font-size: 16px;font-weight: bold;"><br>0%<br><br></td>
                                    <td style="font-weight: bold;font-size: 16px;"><br>0%<br><br></td>
                                </tr>
                                <tr>
                                    <td style="color: #1F2471;"><br>Middle &amp; Junior Management</td>
                                    <td style="font-size: 16px;font-weight: bold;"><br>{{$avgMidIctResponse}}%<br><br></td>
                                    <td style="font-size: 16px;font-weight: bold;"><br>{{$avgMidDigitalGovernmentResponse}}%<br><br></td>
                                    <td style="font-size: 16px;font-weight: bold;"><br>{{$avgMidManagementResponse}}%<br><br></td>
                                    <td style="font-weight: bold;font-size: 16px;"><br>{{$avgMidResponse}}%<br><br></td>
                                </tr>
                                <tr>
                                    <td style="color: #1F2471;"><br><br>Operational Staff <br><br></td>
                                    <td style="font-size: 16px;font-weight: bold;"><br>{{$avgOpIctResponse}}%<br><br></td>
                                    <td style="font-size: 16px;font-weight: bold;"><br>{{$avgOpDigitalGovernmentResponse}}%<br><br></td>
                                    <td style="font-size: 16px;font-weight: bold;"><br>{{$avgOpManagementResponse}}%<br><br></td>
                                    <td style="font-weight: bold;font-size: 16px;"><br>{{$avgOpResponse}}%<br><br></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6" style="width: 362px;margin-left: 50px;height: 346px;">
                <!-- <img src="assets/img/Group%2085.png" style="margin-top: -60px;margin-left: -60px;" width="481" height="488"> -->
                <canvas id="radarChart" aria-label="chart" data-aos="fade-down" data-aos-duration="1000" width="350" height="350"></canvas>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
                                <script>
                                    var ctx = document.getElementById("radarChart").getContext("2d");
                                    var radarData = {
                                        labels: {!! json_encode($labels) !!},
                                        datasets: [{
                                            label: "Overall Results",
                                            data: {!! json_encode($avgLayers) !!},
                                            backgroundColor: "rgba(255, 99, 132, 0.2)",
                                            borderColor: "rgba(229, 89, 52, 1)",
                                            borderWidth: 2,
                                            pointBackgroundColor: "pink",
                                            pointRadius: 6,
                                        }],
                                    };

                                    var radarOptions = {
                                        responsive: false,
                                        elements: {
                                            line: {
                                                borderWidth: 6,
                                            }
                                        },

                                        scale: {
                                            r: {
                                                angleLines: {
                                                    display: false
                                                },
                                                suggestedMin: 0,
                                                suggestedMax: 100
                                            }

                                        },
                                        plugins: {
                                            legend: {
                                                labels: {
                                                    font: {
                                                        family: 'Poppins', 
                                                        size: 14,
                                                    }
                                                }
                                            }
                                        }
                                    };

                                    var radarChart = new Chart(ctx, {
                                        type: 'radar',
                                        data: radarData,
                                        options: radarOptions,
                                    });
                                </script>
            </div>
            </div>
        </div>
    </div>
    <div data-aos="fade-down" data-aos-duration="1000" style="font-family:poppins;height: 1300px;margin-top: 20px;border-style: solid;border-color: var(--bs-dark-border-subtle);border-radius:10px">
        <div class="container" style="margin-top: 40px;">
            <div class="row">
                <div class="col-md-6 col-xxl-5" style="text-align: center;margin-left: 10px;border-radius: 10px;border: 1px solid var(--bs-emphasis-color);height: 320px;"><span style="color: var(--bs-emphasis-color);margin-top: 20px;font-weight: bold;">ICT Assessment</span>
                    <div class="row">
                        <div class="col">
                            <!-- <img src="assets/img/Group%20184.png" width="426" height="239" style="margin-top: 20px;"> -->
                            <div data-aos="zoom-in" data-aos-duration="1000" id="chart_div3" style="width: 426px; height: 239px; font-family: Poppins; border-style:solid;border-radius:10px; font-family: Poppins;margin-top: 40px;"></div>
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

                                var chart = new google.visualization.BarChart(document.getElementById('chart_div3'));

                                chart.draw(data, options);
                            }
                        </script>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xxl-6" style="width: 570px;">
                    <div class="row"> 
                        <div class="col">
                            <form class="form-control" method="GET" action="{{route('searchGov2')}}" style="border-width:0px;height:70px">
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
                                    @foreach ($govofficials2 as $govofficial)
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
        <div class="row" style="font-family:poppins;margin-top: 30px;height: 450px;margin-left: 20px;">
            <div class="col-xxl-4" style="border: 1px solid var(--bs-emphasis-color);width: 560px;border-radius: 10px;">
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col" style="text-align: center;"><span style="color: var(--bs-emphasis-color);font-weight: bold;"><br>Digital Government Assessment</span></div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <!-- <img src="assets/img/Group%202131.png" style="margin-top: 40px;margin-left: 30px;" width="478" height="347"> -->
                                <div data-aos="zoom-in" data-aos-duration="1000" id="chart_div4" style="width: 478px; height: 450px; font-family: Poppins; border-style:solid;border-radius:10px; font-family: Poppins;margin-top: 40px;"></div>
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

                                var chart = new google.visualization.BarChart(document.getElementById('chart_div4'));

                                chart.draw(data, options);
                            }
                        </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-7" style="border: 1px solid var(--bs-emphasis-color);width: 560px;height: 470px;margin-left: 20px;border-radius: 10px;">
                <div class="row">
                    <div class="col" style="text-align: center;"><span style="color: var(--bs-body-color);font-weight: bold;"><br>Management Assessment</span></div>
                </div>
                <div class="row">
                    <div class="col-xxl-10">
                        <!-- <img src="assets/img/Group%20213.png" style="margin-top: 40px;margin-left: 30px;" width="479" height="365"> -->
                        <div data-aos="zoom-in" data-aos-duration="1000" id="chart_div5" style="width: 478px; height: 450px; font-family: Poppins; border-style:solid;border-radius:10px; font-family: Poppins;margin-top: 40px;"></div>
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

                                var chart = new google.visualization.BarChart(document.getElementById('chart_div5'));

                                chart.draw(data, options);
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" data-aos="fade-down" data-aos-duration="1000" style="font-family:poppins;margin-top: 20px;width: 1190px;margin-left: 1px;background: var(--bs-secondary-bg);border-style: solid;border-color: var(--bs-dark-border-subtle);border-radius: 10px;">
        <div class="col">
            <div class="row">
                <div class="col" style="text-align: center;font-size: 24px;"><span style="color: var(--bs-primary-text-emphasis);border-color: var(--bs-emphasis-color);">You can Download the Preliminary Results report here&nbsp;</span></div>
            </div>
            <div class="row">
                <div class="col" style="text-align: center;"><a class="btn btn-primary" type="button" href="{{route('govOrganizationReport')}}" style="margin-top: 20px;margin-bottom: 20px;background: #1F2471;">Download</a></div>
            </div>
        </div>
    </div>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        var ictCountElement = document.getElementById("ictCount");

        var targetCount = {{$ictCount}}; // Get the actual value from the PHP variable
        var currentCount = 0;

        // Define the duration for the count animation (e.g., 2 seconds)
        var animationDuration = 1000; // 2 seconds
        var interval = 10; // Update every 100 milliseconds

        var increment = (targetCount / (animationDuration / interval));

        var animation = setInterval(function () {
            currentCount += increment;
            ictCountElement.textContent = Math.round(currentCount);

            if (currentCount >= targetCount) {
                clearInterval(animation);
                ictCountElement.textContent = targetCount; // Ensure the final count is exact
            }
        }, interval);
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var ictCountElement = document.getElementById("digitalGovernmentCount");

        var targetCount = {{$digitalGovernmentCount}}; // Get the actual value from the PHP variable
        var currentCount = 0;

        // Define the duration for the count animation (e.g., 2 seconds)
        var animationDuration = 1000; // 2 seconds
        var interval = 10; // Update every 100 milliseconds

        var increment = (targetCount / (animationDuration / interval));

        var animation = setInterval(function () {
            currentCount += increment;
            ictCountElement.textContent = Math.round(currentCount);

            if (currentCount >= targetCount) {
                clearInterval(animation);
                ictCountElement.textContent = targetCount; // Ensure the final count is exact
            }
        }, interval);
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var ictCountElement = document.getElementById("managementCount");

        var targetCount = {{$managementCount}}; // Get the actual value from the PHP variable
        var currentCount = 0;

        // Define the duration for the count animation (e.g., 2 seconds)
        var animationDuration = 1000; // 2 seconds
        var interval = 10; // Update every 100 milliseconds

        var increment = (targetCount / (animationDuration / interval));

        var animation = setInterval(function () {
            currentCount += increment;
            ictCountElement.textContent = Math.round(currentCount);

            if (currentCount >= targetCount) {
                clearInterval(animation);
                ictCountElement.textContent = targetCount; // Ensure the final count is exact
            }
        }, interval);
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var ictCountElement = document.getElementById("overall");

        var targetCount = {{$overall}}; // Get the actual value from the PHP variable
        var currentCount = 0;

        // Define the duration for the count animation (e.g., 2 seconds)
        var animationDuration = 1000; // 2 seconds
        var interval = 10; // Update every 100 milliseconds

        var increment = (targetCount / (animationDuration / interval));

        var animation = setInterval(function () {
            currentCount += increment;
            ictCountElement.textContent = Math.round(currentCount);

            if (currentCount >= targetCount) {
                clearInterval(animation);
                ictCountElement.textContent = targetCount; // Ensure the final count is exact
            }
        }, interval);
    });
</script>
@endsection