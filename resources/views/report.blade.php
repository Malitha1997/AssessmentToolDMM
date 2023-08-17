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
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    </head>
        <body>
            {{--  Page 01  --}}
        <div style="border-style: solid;border-color: #000000; width:700px;height:1450px"
            <div class="container" style="width: 535px;height: 782px;text-align:center">
                <div class="row" style="margin-top: 100px;">
                    <div class="col" style="text-align: center;"><img src="{{ asset('emblem.png') }}" style="width:58px;height:82px"></div>
                </div>
                <div class="row" style="margin-top: 50px;">
                    <div class="col" style="text-align: center;"><span style="font-size: 40px;color: #1c2c84;font-family: Poppins, sans-serif;font-weight: bold;">Preliminary Assessment<br>Report of<br>{{ Auth::user()->govorganizationdetail->govorganizationname->gov_org_name }}</span></div>
                </div>
                <div class="row" style="text-align: center;margin-top: 650px;">
                    <div class="col"><span style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">Prepared by</span></div>
                </div>
                <div class="row" style="text-align: center;margin-top: 25px;">
                    <div class="col"><img src="{{ asset('ICTA1.png') }}" style="width:253px;height:100px"></div>
                </div>
            </div>
        </div>

            {{--  Page 02  --}}
            {{--  <div class="page-break"></div>
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
                                <div class="col" ><span style="font-family: Poppins, sans-serif;font-size: 16px;">Your Organization gained<br>{{ Auth::user()->govorganizationdetail->percentage->overall }}% for the Preliminary Assessment.</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>  --}}

        {{--  Page 03  --}}
        <div class="page-break"></div>
        <div style="border-style: solid;border-color: #000000; width:700px;height:1450px"
        <div class="container" style="width: 2400px; height: 782px; ">

            <div class="row" style="text-align: center; margin-top: 50px;">
                <div class="col"><span style="font-family: Poppins, sans-serif; font-size: 20px;">Overall Results of the Preliminary Assessment</span></div>
            </div>
            <div class="row" style="text-align: center;margin-top:50px;border-style: solid;border-width: 1px;border-color: #ff0000;width: 500px;margin-left: 25%">
                <div class="col" ><span style="font-family: Poppins, sans-serif;font-size: 16px;">Your Organization gained<br>{{ Auth::user()->govorganizationdetail->percentage->overall }}% for the Preliminary Assessment.</span></div>
            </div>
            <div class="row" style="margin-top: 50px;text-align: center">
                <div class="col">
                    <canvas id="chartId" aria-label="chart" style="margin-left:200px;margin-top:30px; font-size: 20px;" height="500" width="500"></canvas>
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
            <ul>
                <li style="font-family: Poppins, sans-serif;">You gained {{ Auth::user()->govorganizationdetail->percentage->technology }}% for Technology & Data dimension.</li>
                <li style="font-family: Poppins, sans-serif;">You gained {{ Auth::user()->govorganizationdetail->percentage->customer }}% for Customer dimension.</li>
                <li style="font-family: Poppins, sans-serif;">You gained {{ Auth::user()->govorganizationdetail->percentage->operation }}% for Operation dimension.</li>
                <li style="font-family: Poppins, sans-serif;">You gained {{ Auth::user()->govorganizationdetail->percentage->strategy }}% for Strategy dimension.</li>
                <li style="font-family: Poppins, sans-serif;">You gained {{ Auth::user()->govorganizationdetail->percentage->culture }}% for Organization & Culture dimension.</li>
            </ul>
            <div class="row" style="text-align: center;margin-top: 450px;">
                <div class="col"><img src="{{ asset('Lightning.png') }}" style="width:153px;height:50px"></div>
            </div>
        </div>
    </div>

        {{--  Page 03  --}}
        <div class="page-break"></div>
        <div style="border-style: solid;border-color: #000000; width:700px;height:1450px"
        <div class="container" style="width: 2400px; height: 782px;margin-top: 100px ">
            <h2 style="font-family: Poppins, sans-serif;text-align: center;margin-top: 20px">Description of each dimension</h2>
            <table class="table">
                <thead class="thead-light" style="font-family: Poppins, sans-serif;">
                    <tr>
                        <th scope="col" >Dimension</th>
                        <th scope="col">Description</th>
                    </tr>
                </thead>
                <tr>
                    <td>Customer:</td>
                    <td>The Customer dimension focuses on the government's commitment to citizen-centricity. It assesses the extent to which government services, processes, and interactions are designed to meet the needs and preferences of citizens. This involves understanding citizens' expectations, gathering feedback, and tailoring services accordingly. An advanced level in this dimension implies personalized services, user-friendly digital platforms, and active citizen engagement through digital channels. Effective use of data and analytics to anticipate citizen needs and preferences is a key indicator of maturity in this dimension.</td>
                </tr>
                <tr>
                    <td>Strategy:</td>
                    <td>The Strategy dimension evaluates the existence of a well-defined and comprehensive digital strategy. It assesses whether digital initiatives align with broader organizational goals and whether there is a clear roadmap for digital transformation. A mature organization will have a strategic approach that outlines priorities, investment plans, and a timeline for implementing digital initiatives. Alignment with national development goals, resource allocation, and a clear vision for leveraging technology to enhance government functions are essential aspects of a robust strategy.</td>
                </tr>
                <tr>
                    <td>Technology & Data:</td>
                    <td>In the Technology & Data dimension, the focus is on the adoption and integration of digital technologies. This includes the use of advanced technologies like cloud computing, artificial intelligence, and IoT. An advanced level in this dimension signifies a high degree of technology adoption, with well-established infrastructure, data centers, and modern digital tools. Data governance, data quality management, and robust architecture for data storage and processing are indicators of maturity. The ability to harness data for informed decision-making and predictive analytics is also crucial.</td>
                </tr>
                <tr>
                    <td>Operation:</td>
                    <td>The Operation dimension assesses the extent to which digital technologies are integrated into core government processes and operations. A mature organization will have digitized and automated processes, reducing manual interventions and improving efficiency. Advanced levels in this dimension involve the seamless integration of digital tools to streamline workflows, optimize resource allocation, and reduce operational bottlenecks. It also encompasses the implementation of e-governance practices, paperless processes, and real-time monitoring of operations.</td>
                </tr>
                <tr>
                    <td>Organization & Culture:</td>
                    <td>The Organization & Culture dimension examines the organizational culture and readiness for digital transformation. It evaluates the willingness of employees to adopt digital tools, their digital literacy, and the extent to which a culture of innovation and collaboration is fostered. A mature organization in this dimension encourages a mindset shift towards embracing technology, promotes continuous learning, and empowers employees to contribute to digital initiatives. Digital skills development, change management programs, and supportive leadership that champions innovation are key indicators of maturity.</td>
                </tr>
            </table>
            <div class="row" style="text-align: center;margin-top: 200px;">
                <div class="col"><img src="{{ asset('Lightning.png') }}" style="width:153px;height:50px"></div>
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

                            chartArea: {
                                width: '50%'
                            },
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

                        },
                        colors: ['#52ED59']
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

                        },
                        colors: ['#DB64B3']
                      };

                      var chart = new google.visualization.BarChart(document.getElementById('chart_div4'));

                      chart.draw(data, options);
                    }
                    </script>
                </div>
                <div class="row" style="text-align: center;margin-top: 425px;">
                    <div class="col"><img src="{{ asset('Lightning.png') }}" style="width:153px;height:50px"></div>
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

                        },
                        colors: ['#E77812']
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
                    colors: ['#BDE90B']
                  };

                  var chart = new google.visualization.BarChart(document.getElementById('chart_div6'));

                  chart.draw(data, options);
                }
                </script>
            </div>
        </div>
        <div class="row" style="text-align: center;margin-top: 425px;">
            <div class="col"><img src="{{ asset('Lightning.png') }}" style="width:153px;height:50px"></div>
        </div>
    </div>
    </div>
</body>
</html>



