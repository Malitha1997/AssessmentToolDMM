@extends('layouts.adminNavbar')

@section('content')
<body>
<div class="container-fluid" style="margin-left: 0px;width: 900px;">
    <div id="wrapper">
    <div class="row">
        <div class="col">
            <div data-aos="fade-down" data-aos-duration="1000" style="width: 641px;height: 52px;margin-left: 30px;border: 1px solid #545658;text-align: left;border-radius: 5px;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor" style="color: rgb(0,0,0);width: 20px;height: 20px;margin-left: 15px;">
                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                    <path d="M448 449L301.2 300.2c20-27.9 31.9-62.2 31.9-99.2 0-93.1-74.7-168.9-166.5-168.9C74.7 32 0 107.8 0 200.9s74.7 168.9 166.5 168.9c39.8 0 76.3-14.2 105-37.9l146 148.1 30.5-31zM166.5 330.8c-70.6 0-128.1-58.3-128.1-129.9S95.9 71 166.5 71s128.1 58.3 128.1 129.9-57.4 129.9-128.1 129.9z"></path>
                </svg><input type="text" style="width: 383px;height: 23px;margin-left: 5px;border-width: 0px;font-family: Poppins, sans-serif;" placeholder="Search by ID, Organization Name"><button class="btn btn-primary" type="button" style="text-align: center;margin-left: 470px;margin-top:-24px;width: 169px;height: 52px;font-size: 18px;border-radius: 5px;border: 2px solid #5f2b84;color: rgb(95,43,132);background: rgba(13,110,253,0);font-family: Poppins, sans-serif;">Search</button>
                <div class="row" style="margin-top: 10%;">
                    <div class="col">
                        <div data-aos="zoom-in" data-aos-duration="1000" style="width: 687px;height: 748px;box-shadow: 5px 0px 15px 1px #747678;">
                            <div class="row">
                                <h1 style="color: rgb(0,0,0);text-align: center;font-size: 32px;padding-top: 20px;font-family: Poppins, sans-serif;">Results - Preliminary Assessment</h1>
                            </div>
                            <div class="row" id="overall" style="margin-top: 30px;width: 604.32px;height: 522px">
                                {{--  <img src="{{ asset('img/Group 84(1).png') }}">  --}}
                                <canvas id="radarChart" aria-label="chart" data-aos="fade-down" data-aos-duration="1000" style="margin-left: 30px; font-size: 20px;" height="600" width="600"></canvas>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
                                <script>
                                    var ctx = document.getElementById("radarChart").getContext("2d");
                                    var radarData = {
                                        labels: {!! json_encode($labels) !!},
                                        datasets: [{
                                            label: "Overall Results",
                                            data: {!! json_encode($sums) !!},
                                            backgroundColor: "transparent",
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
                            <span id="govorganizationCount" class="d-xxl-flex justify-content-xxl-center align-items-xxl-center" style="color: #f01f75;font-size: 48px;font-family: Poppins, sans-serif;font-weight: bold;margin-left: 35%;margin-top: 20px;background: url(&quot;{{ asset('img/Ellipse 20.png') }}&quot;);width: 106px;height: 108px;">
                                {{--  $connection = mysqli_connect("localhost","lightingdigital","1qaz2wsx@icta","assessment");  --}}
                                {{--  <?php
                                $connection = mysqli_connect("localhost","root","","assessmenttool");

                                $query= "SELECT id FROM govorganizationdetails ORDER BY id";
                                $query_run = mysqli_query ($connection, $query);

                                $row = mysqli_num_rows($query_run);
                                echo '<h3 style="font-size: 48px;font-family: Poppins, sans-serif;font-weight: bold">'.$row.'</h3>';
                                ?>  --}}
                                {{ $govorganizationCount }}
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
                                //$connection = mysqli_connect("localhost","lightingdigital","1qaz2wsx@icta","assessment");
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
                            <span id="percentagesCount" class="d-xxl-flex justify-content-xxl-center align-items-xxl-center" style="color: #f01f75;font-size: 48px;font-family: Poppins, sans-serif;font-weight: bold;margin-left: 35%;margin-top: 20px;background: url(&quot;{{ asset('img/Ellipse 20.png') }}&quot;);width: 106px;height: 108px;">
                                    {{--  <?php
                                    $connection = mysqli_connect("localhost","root","","assessmenttool");

                                    $query= "SELECT id FROM percentages ORDER BY id";
                                    $query_run = mysqli_query ($connection, $query);

                                    $row = mysqli_num_rows($query_run);
                                    echo '<h3 style="font-size: 48px;font-family: Poppins, sans-serif;font-weight: bold">'.$row.'</h3>';
                                    ?>  --}}
                                    {{ $percentagesCount }}
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
    <div class="row" style="width:1200px"  id="organizations">
        <div class="col">
            <div data-aos="zoom-in" data-aos-duration="1000" style="margin-left:50px;width:500px;height:692px;box-shadow: 5px 0px 15px 1px #747678;margin-top:450px">
                <div class="row" style="margin-top: 20px">
                    <span style="font-weight: bold;font-family: Poppins, sans-serif;font-size:24px;color:#1f2471;margin-top:20px;margin-left:20px">Preliminary Assessment<br> Completed Organizations</span>
                </div>
                <div style="margin-left: 10px;margin-top: 10px;overflow-x:auto;">
                    <table class="table" style="width: 400px">
                        <thead class="thead-light" style="font-family: Poppins, sans-serif;">
                            <tr>
                                <th scope="col">Organization Name</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        @foreach ($percentageExists as $percentageExist)
                            <tr style="font-family: Poppins, sans-serif;">
                                <td>{{ $percentageExist->govorganizationdetail->govorganizationname->gov_org_name }}</td>
                                <td><a class="btn btn-primary d-flex flex-row justify-content-center align-items-start" type="button" style="margin-left: 0px;background: url(&quot;{{ asset('img/Maximize.png') }}&quot;), rgba(13,110,253,0);border-width:0px;width: 25px;height: 25px;" href="{{ route('govorganizations.show',$percentageExist->govorganizationdetail->user_id) }}"></a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <div class="col">
            <div data-aos="zoom-in" data-aos-duration="1000" style="width:500px;height:692px;box-shadow: 5px 0px 15px 1px #747678;margin-top:450px">
                <div class="row" style="margin-top: 20px">
                    <span style="font-weight: bold;font-family: Poppins, sans-serif;font-size:24px;color:#1f2471;margin-top:20px;margin-left:20px">Registered Organizations</span>
                </div>
                <div class="row" style="margin-left: 10px;margin-top: 10px">
                    <table class="table" style="width: 450px">
                        <thead class="thead-light" style="font-family: Poppins, sans-serif;">
                            <tr>
                                <th scope="col">Organization Name</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        @foreach ($govorganizations as $key => $govorganization)
                        <tr style="font-family: Poppins, sans-serif;">
                            <td>{{ $govorganization->govorganizationname->gov_org_name }}</td>
                            <td> <form action="{{ route('govorganizations.destroy',$govorganization->id) }}" method="POST" onsubmit="return submitForm(this)">
                                <div class="row">
                                    <a class="btn btn-primary d-flex flex-row justify-content-center align-items-start" type="button" style="margin-left: 0px;background: url(&quot;{{ asset('img/Maximize.png') }}&quot;), rgba(13,110,253,0);border-width:0px;width: 25px;height: 25px;" href="{{ route('govorganizations.show',$govorganization->user_id) }}"></a>

                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" style="background: url(&quot;{{ asset('img/Delete.png') }}&quot;), rgba(13,110,253,0);border-width:0px;width: 25px;height: 25px;margin-left:5px"></button>

                                </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

    <table>
    <tr>
        <h1 data-aos="zoom-in" data-aos-duration="1000" style="margin-left:30%;margin-top: 50px;color: #161A55;font-size: 32px;font-weight :bold;font-family: Poppins, sans-serif;">Overall Results of Each Dimension</h1>
    </tr>
    <tr style="text-align: center">
        <h3 data-aos="zoom-in" data-aos-duration="1000" style="margin-left:57%;margin-top: 30px;color: #161A55;font-size: 20px;font-weight :bold;padding-top: 20px;font-family: Poppins, sans-serif;">Technology & Data</h3>
    <tr>
    <tr>
        <div id="tecChart" data-aos="zoom-in" data-aos-duration="1000" style="width: 1200px;height: 359px;margin-left: -30px"></div>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script>
            google.charts.load('current', {packages: ['corechart']});
            google.charts.setOnLoadCallback(drawBasic);

        function drawBasic() {

        var data = google.visualization.arrayToDataTable({{ Js::from($tecAvg) }});

        var options = {

            chartArea: {width: '50%'},
            hAxis: {
                minValue: 0,
                maxValue: 100,
                textStyle: {
                    fontSize: 14,
                    fontName: 'Poppins'
                }

            },
            vAxis: {
                textStyle: {
                    fontSize: 14,
                    fontName: 'Poppins'
                }
            },
            colors: ['#64CDDB']
        };

        var chart = new google.visualization.AreaChart(document.getElementById('tecChart'));

        chart.draw(data, options);
        }
        </script>
    </tr>
    <div class="row" style="width:1200px;">
        <div class="col" style="width: 400px;">
            <div class="row">
                <h3 data-aos="zoom-in" data-aos-duration="1000" style="margin-top: 30px;color: #161A55;font-size: 20px;font-weight :bold;padding-top: 20px;font-family: Poppins, sans-serif;text-align:center">Customer</h3>
            </div>
            <div id="cusChart" data-aos="zoom-in" data-aos-duration="1000" style="height:400px;width:550px"></div>

            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script>
                google.charts.load('current', {packages: ['corechart']});
                google.charts.setOnLoadCallback(drawBasic);

                function drawBasic() {

                var data = google.visualization.arrayToDataTable({{ Js::from($cusAvg) }});

                var options = {

                    chartArea: {width: '50%'},
                    hAxis: {
                        minValue: 0,
                        maxValue: 100,
                        textStyle: {
                            fontSize: 14,
                            fontName: 'Poppins'
                        }

                    },
                    vAxis: {
                        textStyle: {
                            fontSize: 14,
                            fontName: 'Poppins'
                        }
                    },
                    colors: ['#52ED59']
                };

                var chart = new google.visualization.AreaChart(document.getElementById('cusChart'));

                chart.draw(data, options);
                }
            </script>
        </div>
        <div class="col">
            <div class="row">
                <h3 data-aos="zoom-in" data-aos-duration="1000" style="margin-top: 30px;color: #161A55;font-size: 20px;font-weight :bold;padding-top: 20px;font-family: Poppins, sans-serif;text-align:center">Operation</h3>
            </div>
            <div id="opChart" data-aos="zoom-in" data-aos-duration="1000" style="height:400px;width:550px"></div>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script>
                google.charts.load('current', {packages: ['corechart']});
                google.charts.setOnLoadCallback(drawBasic);

                function drawBasic() {

                var data = google.visualization.arrayToDataTable({{ Js::from($opAvg) }});

                var options = {

                    chartArea: {width: '50%'},
                    hAxis: {
                        minValue: 0,
                        maxValue: 100,
                        textStyle: {
                            fontSize: 14,
                            fontName: 'Poppins'
                        }

                    },
                    vAxis: {
                        textStyle: {
                            fontSize: 14,
                            fontName: 'Poppins'
                        }
                    },
                    colors: ['#F01F75']
                };

                var chart = new google.visualization.AreaChart(document.getElementById('opChart'));

                chart.draw(data, options);
                }
            </script>
        </div>
    </div>
    <div class="row" style="width:1200px;">
        <div class="col">
            <div class="row">
                <h3 data-aos="zoom-in" data-aos-duration="1000" style="text-align: center;margin-top: 30px;color: #161A55;font-size: 20px;font-weight :bold;padding-top: 20px;font-family: Poppins, sans-serif;">Organization & Culture</h3>
            </div>
            {{--  <img style="width: 420px;height: 544px" data-aos="zoom-in" data-aos-duration="1000" src="{{ asset('img/Group 248.png') }}">  --}}
            <div id="culChart" data-aos="zoom-in" data-aos-duration="1000" style="height:400px;width:550px"></div>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script>
                google.charts.load('current', {packages: ['corechart']});
                google.charts.setOnLoadCallback(drawBasic);

                function drawBasic() {

                var data = google.visualization.arrayToDataTable({{ Js::from($culAvg) }});

                var options = {

                    chartArea: {width: '50%'},
                    hAxis: {
                        minValue: 0,
                        maxValue: 100,
                        textStyle: {
                            fontSize: 14,
                            fontName: 'Poppins'
                        }

                    },
                    vAxis: {
                        textStyle: {
                            fontSize: 14,
                            fontName: 'Poppins'
                        }
                    },
                    colors: ['#BDE90B']
                };

                var chart = new google.visualization.AreaChart(document.getElementById('culChart'));

                chart.draw(data, options);
                }
            </script>
        </div>
        <div class="col">
            <div class="row">
                <h3 data-aos="zoom-in" data-aos-duration="1000" style="text-align: center;margin-top: 30px;color: #161A55;font-size: 20px;font-weight :bold;padding-top: 20px;font-family: Poppins, sans-serif;">Strategy</h3>
            </div>
            <div id="strChart" data-aos="zoom-in" data-aos-duration="1000" style="height:400px;width:550px"></div>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script>
                google.charts.load('current', {packages: ['corechart']});
                google.charts.setOnLoadCallback(drawBasic);

                function drawBasic() {

                var data = google.visualization.arrayToDataTable({{ Js::from($strAvg) }});

                var options = {

                    chartArea: {width: '50%'},
                    hAxis: {
                        minValue: 0,
                        maxValue: 100,
                        textStyle: {
                            fontSize: 14,
                            fontName: 'Poppins'
                        }

                    },
                    vAxis: {
                        textStyle: {
                            fontSize: 14,
                            fontName: 'Poppins'
                        }
                    },
                    colors: ['#E77812']
                };

                var chart = new google.visualization.AreaChart(document.getElementById('strChart'));

                chart.draw(data, options);
                }
            </script>
        </div>
    </div>

    </table>
    <script>
        function submitForm(form) {
            swal({
                title: "Are you sure you want to delete this data?",
                text: "Deleting this data will remove it permanently.",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then(function (isOkay) {
                if (isOkay) {
                    form.submit();
                }
            });

            return false;
        }
    </script>

</div>
</div>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var ictCountElement = document.getElementById("govorganizationCount");

        var targetCount = {{$govorganizationCount}}; // Get the actual value from the PHP variable
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
        var ictCountElement = document.getElementById("percentagesCount");

        var targetCount = {{$percentagesCount}}; // Get the actual value from the PHP variable
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
