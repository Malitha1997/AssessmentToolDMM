<!DOCTYPE html>
<html data-bs-theme="light" lang="en">
<head>
    <style>

        @media print {
          .page-break {
            page-break-before: always;
          }
        }
      </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Preliminary Assessment Report</title>
        <link rel="stylesheet" href="{{asset('cssfile/bootstrap2.min.css')}}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
    </head>
        <body>
            {{--  Page 01  --}}
        <div style="border-style: solid;border-color: #000000; width:700px;height:1450px"
            <div class="container" style="width: 535px;height: 782px;text-align:center">
                <div class="row" style="margin-top: 100px;">
                    <div class="col" style="text-align: center;"><img src="{{ asset('emblem.png') }}" style="width:58px;height:82px"></div>
                </div>
                <div class="row" style="margin-top: 50px;">
                    <div class="col" style="text-align: center;"><span style="font-size: 40px;color: #1c2c84;font-family: Poppins, sans-serif;font-weight: bold;">Results Report<br>of<br>Preliminary Assessment<br>for<br>{{ Auth::user()->govorganizationdetail->govorganizationname->gov_org_name }}</span></div>
                </div>
                <div class="row" style="text-align: center;margin-top: 650px;">
                    <div class="col"><span style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">Prepared by</span></div>
                </div>
                <div class="row" style="text-align: center;margin-top: 25px;">
                    <div class="col"><img src="{{ asset('icta2.png') }}" style="width:253px;height:55px"></div>
                </div>
            </div>
        </div>

            {{--  Page 02  --}}
            <div class="page-break"></div>
            <div style="border-style: solid;border-color: #000000; width:700px;height:1450px"
            <div class="container" style="width: 535px;height: 800px;">
                <div class="row" style="margin-top: 200px;text-align: center;">
                    <div class="col">
                        <div class="container" >
                            <div class="row" style="margin-top: 50px;text-align: center;">
                                <div class="col"><img src="{{ asset('Award.png') }}"></div>
                            </div>
                            <div class="row" style="text-align: center;">
                                <div class="col" ><span style="font-size: 24px;color: var(--bs-emphasis-color);font-weight: bold;"><br>Successfully completed<br>Preliminary Assessment</span></div>
                            </div>
                            <div class="row" style="text-align: center;margin-top:50px">
                                <div class="col" ><span style="font-family: Poppins, sans-serif;font-size: 16px;">Your Organization gained<br>{{ Auth::user()->govorganizationdetail->percentage->overall }} for the Preliminary Assessment.</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>

        {{--  Page 03  --}}
        <div class="page-break"></div>
        <div style="border-style: solid;border-color: #000000; width:700px;height:1450px"
        <div class="container" style="width: 2400px; height: 782px; ">
            <div class="row" style="text-align: center; margin-top: 50px;">
                <div class="col"><span style="font-family: Poppins, sans-serif; font-size: 20px;">Overall Results of Preliminary Assessment</span></div>
            </div>
            <div class="row" style="margin-top: 50px;text-align: center">
                <div class="col">
                    <canvas id="chartId" aria-label="chart" style="margin-left:200px;margin-top:200px; font-size: 20px;" height="500" width="500"></canvas>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
                    <script type="text/javascript">
                        var ctx = document.getElementById("chartId").getContext("2d");
                        var radarData = {
                            labels: {!! json_encode($labels) !!},
                            datasets: [{
                                label: "Marks for each dimension",
                                data: {!! json_encode($percentage) !!},
                                backgroundColor: 'transparent',
                                borderColor: '#C51010',
                                borderWidth: 2,
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
                                ticks: {
                                    beginAtZero: true,
                                    max: 100,
                                    stepSize: 10,
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

        {{--  Page 04  --}}
        <div class="page-break"></div>
        <div style="border-style: solid;border-color: #000000; width:700px;height:1450px"
        <div class="container" style="width: 2400px; height: 782px; ">
            <div class="row" style="text-align: center; margin-top: 50px;">
                <div class="col"><span style="font-family: Poppins, sans-serif; font-size: 20px;">Overall Results of Preliminary Assessment</span></div>
            </div>
            <div class="row" style="margin-top: 50px;">
                <div class="col"><span style="color: #1c2c84; font-family: Poppins, sans-serif; font-weight: bold;">1.&nbsp; Technology and Data</span></div>
            </div>
            <div class="row" style="margin-top: 50px;text-align: center">
                <div class="col">
                    <div id="chart_div2" style="margin-left:100px;width: 800px; height: 300px;"></div>
                    <script>
                        google.charts.load('current', {packages: ['corechart', 'bar']});
                        google.charts.setOnLoadCallback(drawBasic);

                        function drawBasic() {

                        var data = google.visualization.arrayToDataTable({{ Js::from($technology) }});

                        var options = {

                            chartArea: {width: '50%'},
                            hAxis: {
                            title: 'Percentages',
                            minValue: 0,
                            maxValue: 100
                            },
                            vAxis: {
                            title: 'Subdimentions',

                            }
                        };

                        var chart = new google.visualization.BarChart(document.getElementById('chart_div2'));

                        chart.draw(data, options);
                        }
                    </script>
                </div>
            </div>
            <div class="row" style="margin-top: 50px;">
                <div class="col"><span style="color: #1c2c84;font-family: Poppins, sans-serif;font-weight: bold;">2.&nbsp; Customer</span></div>
            </div>
            <div class="row" style="margin-top: 50px;">
                <div class="col">
                    <div id="chart_div3" style="margin-left:100px;width: 800px; height: 300px;"></div>
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script>
                        google.charts.load('current', {packages: ['corechart', 'bar']});
                        google.charts.setOnLoadCallback(drawBasic);

                    function drawBasic() {
                        {{--  var vAxis = ["Citizen Experience Strategy", "Citizen Engagement", "Citizen Experience", "Citizen Trust & Perception", "Citizen Insights & Behavior"];  --}}
                    var data = google.visualization.arrayToDataTable({{ Js::from($customer) }});

                    var options = {

                        chartArea: {width: '50%'},
                        hAxis: {
                        title: 'Percentages',
                        minValue: 0,
                        maxValue: 100
                        },
                        vAxis: {
                        title: 'Subdimentions',

                        }
                    };

                    var chart = new google.visualization.BarChart(document.getElementById('chart_div3'));

                    chart.draw(data, options);
                    }
                    </script>
                </div>
            </div>
            <div class="row" style="margin-top: 50px;">
                <div class="col"><span style="color: #1c2c84;font-family: Poppins, sans-serif;font-weight: bold;">3.&nbsp; Operation</span></div>
            </div>
            <div class="row" style="margin-top: 50px;">
                <div class="col">
                    <div id="chart_div4" style="margin-left:100px;width: 800px; height: 300px;"></div>
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script>
                        google.charts.load('current', {packages: ['corechart', 'bar']});
                        google.charts.setOnLoadCallback(drawBasic);

                    function drawBasic() {

                      var data = google.visualization.arrayToDataTable({{ Js::from($operation) }});

                      var options = {

                        chartArea: {width: '50%'},
                        hAxis: {
                          title: 'Percentages',
                          minValue: 0,
                          maxValue: 100
                        },
                        vAxis: {
                          title: 'Subdimentions',

                        }
                      };

                      var chart = new google.visualization.BarChart(document.getElementById('chart_div4'));

                      chart.draw(data, options);
                    }
                    </script>
                </div>
            </div>
        </div>
    </div>

    {{--  Page 05  --}}
    <div class="page-break"></div>
    <div style="border-style: solid;border-color: #000000; width:700px;height:1450px"
    <div class="container" style="width: 535px;height: 782px;">
        <div class="row" style="margin-top: 50px;">
            <div class="col"><span style="color: #1c2c84;font-family: Poppins, sans-serif;font-weight: bold;">4.&nbsp; Strategy</span></div>
        </div>
        <div class="row" style="margin-top: 50px;">
            <div class="col">
                <div id="chart_div5" style="margin-left:100px;width: 800px; height: 300px;"></div>
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script>
                    google.charts.load('current', {packages: ['corechart', 'bar']});
                    google.charts.setOnLoadCallback(drawBasic);

                    function drawBasic() {

                    var data = google.visualization.arrayToDataTable({{ Js::from($strategy) }});

                    var options = {

                        chartArea: {width: '50%'},
                        hAxis: {
                        title: 'Percentages',
                        minValue: 0,
                        maxValue: 100
                        },
                        vAxis: {
                        title: 'Subdimentions',

                        }
                    };

                    var chart = new google.visualization.BarChart(document.getElementById('chart_div5'));

                    chart.draw(data, options);
                    }
                </script>
            </div>
        </div>
        <div class="row" style="margin-top: 50px;">
            <div class="col"><span style="color: #1c2c84;font-family: Poppins, sans-serif;font-weight: bold;">5.&nbsp; Organization & Culture</span></div>
        </div>
        <div class="row" style="margin-top: 50px;">
            <div class="col">
                <div id="chart_div6" style="margin-left:100px;width: 800px; height: 300px;"></div>
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script>
                    google.charts.load('current', {packages: ['corechart', 'bar']});
                    google.charts.setOnLoadCallback(drawBasic);

                function drawBasic() {

                  var data = google.visualization.arrayToDataTable({{ Js::from($culture) }});

                  var options = {

                    chartArea: {width: '50%'},
                    hAxis: {
                      title: 'Percentages',
                      minValue: 0,
                      maxValue: 100
                    },
                    vAxis: {
                      title: 'Subdimentions',

                    },

                  };

                  var chart = new google.visualization.BarChart(document.getElementById('chart_div6'));

                  chart.draw(data, options);
                }
                </script>
            </div>
        </div>
    </div>
    </div>
</body>
</html>



