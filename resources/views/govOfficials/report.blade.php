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
    <title>Report - Competancy Assessment</title>
    <link rel="stylesheet" href="{{asset('cssfile/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
</head>

<body>
    <div class="container" style="width: 535px;height: 900px;border-style:solid">
        <div class="row" style="margin-top: 100px;">
            <div class="col" style="text-align: center;">
                <div class="row">
                    <div class="col"><span style="font-family: poppins;font-weight: bold;font-size: 24px;">Digital Government Competency Framework<br><br></span></div>
                </div><span style="font-size: 22px;color: #1c2c84;font-family: Poppins, sans-serif;font-weight: bold;"><br>Competency Proficiency&nbsp;</span>
            </div>
        </div>
        <div class="row" style="margin-top: 100px;">
            <div class="col" style="text-align: center;font-size: 28px;"><span style="font-family: poppins;font-weight: bold;"><br><br>{{$govorgname}}&nbsp;<br><br></span></div>
        </div>
        <div class="row" style="text-align: center;margin-top: 200px;">
            <div class="col"><span style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">Prepared by</span></div>
        </div>
        <div class="row">
            <div class="col"><img src="{{ asset('ICTA.png') }}" style="margin-left:25%;margin-top:10px;width: 160px;height: 64px"> </div>
            <div class="col"><img src="{{ asset('Light2.png') }}" style="margin-left:10%;margin-top:10px;width:126px;"></div> 
        </div>
    </div>
    


<div class="page-break"></div>
<div class="container" style="width: 535px;height: 900px;border-style: solid;">
        <div class="row">
            <div class="col" style="text-align: center;"><span style="font-family: poppins;font-weight: bold;text-align: center;font-size: 14px;color: #1C2C84;"><br>Number of Total Employees</span></div>
        </div>
        <div class="row" style="margin-top: 20px;margin-left: 10px;margin-right: 10px;border-radius: 10px;height: 210px;">
            <div class="col-md-5" style="margin-left: 10px;">
            <!-- <img src="assets/img/Figpie.png" width="209" height="202" style="margin-left: 10px;margin-top: 4px;"> -->
            <div id="chart_div" style="background-color: var(--bs-gray-200);width:400px;height:180px;font-family: Poppins;margin-left:10%"></div>
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
        <div class="row">
            <div class="col" style="text-align: center;"><span style="font-family: poppins;font-weight: bold;font-size: 14px;color: #1C2C84;"><br>Overall Competency Proficiency <br><br></span></div>
        </div>
        <div class="row">
            <div class="col">
            <canvas id="radarChart" aria-label="chart" data-aos="fade-down" data-aos-duration="1000" width="350" height="350" style="margin-left:10%"></canvas>
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

    <div class="page-break"></div>
    <div class="container" style="width: 535px;height: 900px;background: rgba(243,141,70,0.44);border-style: solid;border-color: rgb(245,144,26);">
        <div class="row">
            <div class="col" style="text-align: center;"><span style="font-family: poppins;font-weight: bold;text-align: center;font-size: 14px;color: #1C2C84;"></span></div>
        </div>
        <div class="row">
            <div class="col" style="text-align: center;margin-top: 310px;"><span style="font-family: poppins;font-weight: bold;font-size: 20px;text-align: center;"><br>Competency Proficiency<br><br></span></div>
        </div>
        <div class="row">
            <div class="col" style="text-align: center;margin-top: -10px;"><span style="font-family: poppins;font-weight: bold;font-size: 24px;text-align: center;color: #CC1D56;"><br>Operational Level<br><br></span></div>
        </div>
    </div>

    <div class="page-break"></div>
    <div class="container" style="width: 535px;height: 900px;background: var(--bs-body-bg);border: 28.4px solid #CC1D56 ;">
        <div class="row">
            <div class="col" style="text-align: center;"><span style="font-family: poppins;font-weight: bold;text-align: center;font-size: 14px;color: #1C2C84;"></span></div>
        </div>
        <div class="row" style="background: #ffffff;">
            <div class="col" style="text-align: center;margin-top: 300px;"><span style="font-family: poppins;font-weight: bold;font-size: 20px;text-align: center;"><br>ICT Proficiency<br><br></span></div>
        </div>
        <div class="row">
            <div class="col" style="text-align: center;margin-top: -10px;"><span style="font-family: poppins;font-weight: bold;font-size: 24px;text-align: center;color: #CC1D56;"><br><br></span></div>
        </div>
    </div>

    <div class="page-break"></div>
    <div class="container" style="width: 535px;height: 900px;border-style: solid;">
        <div class="row">
            <div class="col" style="text-align: center;margin-top: 20px;"><span style="font-family: poppins;font-weight: bold;text-align: center;font-size: 14px;color: #1C2C84;"><br>Number of Total Operational Level Employees</span></div>
        </div>
        <div class="row" style="margin-top: 40px;margin-left: 10px;margin-right: 10px;border-radius: 10px;height: 210px;">
            <div class="col-md-5" style="margin-left: 10px;">
                <!-- <img src="assets/img/Figpie.png" width="209" height="202" style="margin-left: 10px;margin-top: 4px;"> -->
                <div id="chart_div2" style="background-color: var(--bs-gray-200);width:400px;height:180px;font-family: Poppins;margin-left:10%"></div>
                                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                    <script>
                                        google.charts.load('current', { packages: ['corechart'] });
                                        google.charts.setOnLoadCallback(drawPieChart);

                                        function drawPieChart() {
                                            var data = google.visualization.arrayToDataTable({{ Js::from($responsesOpIct) }});

                                            var options = {
                                                
                                                titleTextStyle: {
                                                    fontName: 'Poppins',
                                                    fontSize: 24,
                                                },
                                                colors: ['#FF5733', '#33FF57', '#3357FF'],
                                                fontName: 'Poppins',
                                                fontSize: 8,
                                            };

                                            var chart = new google.visualization.PieChart(document.getElementById('chart_div2'));

                                            chart.draw(data, options);
                                        }
                                    </script>
            </div>
        </div>
        <div class="row">
            <div class="col" style="text-align: center;margin-top: 10px;"><span style="font-family: poppins;font-weight: bold;font-size: 14px;color: #1C2C84;"><br>Overall Competency Proficiency <br><br></span></div>
        </div>
        <div class="row">
            <div class="col" style="margin-top: 20px;">
            <!-- <img src="assets/img/Group%20185.png" style="text-align: center;margin-top: -10px;" width="443" height="317"> -->
            <div data-aos="zoom-in" data-aos-duration="1000" id="chart_div3" style="margin-left:10%;width: 426px; height: 239px; font-family: Poppins; font-family: Poppins;margin-top: 20px;"></div>
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

                                var chart = new google.visualization.BarChart(document.getElementById('chart_div3'));

                                chart.draw(data, options);
                            }
                            </script>
        </div>
        </div>
    </div>

    <div class="page-break"></div>
    <div class="container" style="width: 535px;height: 900px;background: var(--bs-body-bg);border: 28.4px solid #92248D;">
        <div class="row">
            <div class="col" style="text-align: center;"><span style="font-family: poppins;font-weight: bold;text-align: center;font-size: 14px;color: #1C2C84;"></span></div>
        </div>
        <div class="row" style="background: #ffffff;">
            <div class="col" style="text-align: center;margin-top: 300px;"><span style="font-family: poppins;font-weight: bold;font-size: 20px;text-align: center;"><br>Digital Government Proficiency<br><br></span></div>
        </div>
        <div class="row">
            <div class="col" style="text-align: center;margin-top: -10px;"><span style="font-family: poppins;font-weight: bold;font-size: 24px;text-align: center;color: #CC1D56;"><br><br></span></div>
        </div>
    </div>

    <div class="page-break"></div>
    <div class="container" style="width: 535px;height: 900px;border-style: solid;">
        <div class="row">
            <div class="col" style="text-align: center;margin-top: 20px;"><span style="font-family: poppins;font-weight: bold;text-align: center;font-size: 14px;color: #1C2C84;"><br>Number of Total Operational Level Employees</span></div>
        </div>
        <div class="row" style="margin-top: 40px;margin-left: 10px;margin-right: 10px;border-radius: 10px;height: 210px;">
            <div class="col-md-5" style="margin-left: 10px;">
                <!-- <img src="assets/img/Figpie.png" width="209" height="202" style="margin-left: 10px;margin-top: 4px;"> -->
                <div id="chart_div4" style="background-color: var(--bs-gray-200);width:400px;height:180px;font-family: Poppins;margin-left:10%"></div>
                                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                    <script>
                                        google.charts.load('current', { packages: ['corechart'] });
                                        google.charts.setOnLoadCallback(drawPieChart);

                                        function drawPieChart() {
                                            var data = google.visualization.arrayToDataTable({{ Js::from($responsesOpDigitalGovernment) }});

                                            var options = {
                                                
                                                titleTextStyle: {
                                                    fontName: 'Poppins',
                                                    fontSize: 24,
                                                },
                                                colors: ['#FF5733', '#33FF57', '#3357FF'],
                                                fontName: 'Poppins',
                                                fontSize: 8,
                                            };

                                            var chart = new google.visualization.PieChart(document.getElementById('chart_div4'));

                                            chart.draw(data, options);
                                        }
                                    </script>
            </div>
        
        </div>
        <div class="row">
            <div class="col" style="text-align: center;margin-top: 10px;"><span style="font-family: poppins;font-weight: bold;font-size: 14px;color: #1C2C84;"><br>Overall Competency Proficiency <br><br></span></div>
        </div>
        <div class="row">
            <div class="col" style="margin-top: 20px;">
            <!-- <img src="assets/img/Group%20185.png" style="text-align: center;margin-top: -10px;" width="443" height="317"> -->
            <div id="chart_div5" style="margin-left:10%;width: 426px; height: 400px; font-family: Poppins; font-family: Poppins;margin-top: 20px;"></div>
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

                                var chart = new google.visualization.BarChart(document.getElementById('chart_div5'));

                                chart.draw(data, options);
                            }
                            </script>
        </div>
        </div>
    </div>

    <div class="page-break"></div>
    <div class="container" style="width: 535px;height: 900px;background: var(--bs-body-bg);border: 28.4px solid #037774;">
        <div class="row">
            <div class="col" style="text-align: center;"><span style="font-family: poppins;font-weight: bold;text-align: center;font-size: 14px;color: #1C2C84;"></span></div>
        </div>
        <div class="row" style="background: #ffffff;">
            <div class="col" style="text-align: center;margin-top: 300px;"><span style="font-family: poppins;font-weight: bold;font-size: 20px;text-align: center;"><br>Management Proficiency<br><br></span></div>
        </div>
        <div class="row">
            <div class="col" style="text-align: center;margin-top: -10px;"><span style="font-family: poppins;font-weight: bold;font-size: 24px;text-align: center;color: #CC1D56;"><br><br></span></div>
        </div>
    </div>

    <div class="page-break"></div>
    <div class="container" style="width: 535px;height: 900px;border-style: solid;">
        <div class="row">
            <div class="col" style="text-align: center;margin-top: 20px;"><span style="font-family: poppins;font-weight: bold;text-align: center;font-size: 14px;color: #1C2C84;"><br>Number of Total Operational Level Employees</span></div>
        </div>
        <div class="row" style="margin-top: 40px;margin-left: 10px;margin-right: 10px;border-radius: 10px;height: 210px;">
            <div class="col-md-5" style="margin-left: 10px;">
                <!-- <img src="assets/img/Figpie.png" width="209" height="202" style="margin-left: 10px;margin-top: 4px;"> -->
                <div id="chart_div6" style="background-color: var(--bs-gray-200);width:400px;height:180px;font-family: Poppins;margin-left:10%"></div>
                                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                    <script>
                                        google.charts.load('current', { packages: ['corechart'] });
                                        google.charts.setOnLoadCallback(drawPieChart);

                                        function drawPieChart() {
                                            var data = google.visualization.arrayToDataTable({{ Js::from($responsesOpManagement) }});

                                            var options = {
                                                
                                                titleTextStyle: {
                                                    fontName: 'Poppins',
                                                    fontSize: 24,
                                                },
                                                colors: ['#FF5733', '#33FF57', '#3357FF'],
                                                fontName: 'Poppins',
                                                fontSize: 8,
                                            };

                                            var chart = new google.visualization.PieChart(document.getElementById('chart_div6'));

                                            chart.draw(data, options);
                                        }
                                    </script>
            </div>
        
        </div>
        <div class="row">
            <div class="col" style="text-align: center;margin-top: 10px;"><span style="font-family: poppins;font-weight: bold;font-size: 14px;color: #1C2C84;"><br>Overall Competency Proficiency <br><br></span></div>
        </div>
        <div class="row">
            <div class="col" style="margin-top: 20px;">
            <!-- <img src="assets/img/Group%20185.png" style="text-align: center;margin-top: -10px;" width="443" height="317"> -->
            <div id="chart_div7" style="margin-left:10%;width: 426px; height: 400px; font-family: Poppins; font-family: Poppins;margin-top: 20px;"></div>
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

                                var chart = new google.visualization.BarChart(document.getElementById('chart_div7'));

                                chart.draw(data, options);
                            }
                            </script>
        </div>
        </div>
    </div>

    <div class="page-break"></div>
    <div class="container" style="width: 535px;height: 900px;background: rgba(243,141,70,0.44);border-style: solid;border-color: rgb(245,144,26);">
        <div class="row">
            <div class="col" style="text-align: center;"><span style="font-family: poppins;font-weight: bold;text-align: center;font-size: 14px;color: #1C2C84;"></span></div>
        </div>
        <div class="row">
            <div class="col" style="text-align: center;margin-top: 310px;"><span style="font-family: poppins;font-weight: bold;font-size: 20px;text-align: center;"><br>Competency Proficiency<br><br></span></div>
        </div>
        <div class="row">
            <div class="col" style="text-align: center;margin-top: -10px;"><span style="font-family: poppins;font-weight: bold;font-size: 24px;text-align: center;color: #CC1D56;"><br>Middle & Junior Level<br><br></span></div>
        </div>
    </div>

    <div class="page-break"></div>
    <div class="container" style="width: 535px;height: 900px;background: var(--bs-body-bg);border: 28.4px solid #CC1D56 ;">
        <div class="row">
            <div class="col" style="text-align: center;"><span style="font-family: poppins;font-weight: bold;text-align: center;font-size: 14px;color: #1C2C84;"></span></div>
        </div>
        <div class="row" style="background: #ffffff;">
            <div class="col" style="text-align: center;margin-top: 300px;"><span style="font-family: poppins;font-weight: bold;font-size: 20px;text-align: center;"><br>ICT Proficiency<br><br></span></div>
        </div>
        <div class="row">
            <div class="col" style="text-align: center;margin-top: -10px;"><span style="font-family: poppins;font-weight: bold;font-size: 24px;text-align: center;color: #CC1D56;"><br><br></span></div>
        </div>
    </div>

    <div class="page-break"></div>
    <div class="container" style="width: 535px;height: 900px;border-style: solid;">
        <div class="row">
            <div class="col" style="text-align: center;margin-top: 20px;"><span style="font-family: poppins;font-weight: bold;text-align: center;font-size: 14px;color: #1C2C84;"><br>Number of Total Operational Level Employees</span></div>
        </div>
        <div class="row" style="margin-top: 40px;margin-left: 10px;margin-right: 10px;border-radius: 10px;height: 210px;">
            <div class="col-md-5" style="margin-left: 10px;">
                <!-- <img src="assets/img/Figpie.png" width="209" height="202" style="margin-left: 10px;margin-top: 4px;"> -->
                <div id="chart_div8" style="background-color: var(--bs-gray-200);width:400px;height:180px;font-family: Poppins;margin-left:10%"></div>
                                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                    <script>
                                        google.charts.load('current', { packages: ['corechart'] });
                                        google.charts.setOnLoadCallback(drawPieChart);

                                        function drawPieChart() {
                                            var data = google.visualization.arrayToDataTable({{ Js::from($responsesMidIct) }});

                                            var options = {
                                                
                                                titleTextStyle: {
                                                    fontName: 'Poppins',
                                                    fontSize: 24,
                                                },
                                                colors: ['#FF5733', '#33FF57', '#3357FF'],
                                                fontName: 'Poppins',
                                                fontSize: 8,
                                            };

                                            var chart = new google.visualization.PieChart(document.getElementById('chart_div8'));

                                            chart.draw(data, options);
                                        }
                                    </script>
            </div>
        </div>
        <div class="row">
            <div class="col" style="text-align: center;margin-top: 10px;"><span style="font-family: poppins;font-weight: bold;font-size: 14px;color: #1C2C84;"><br>Overall Competency Proficiency <br><br></span></div>
        </div>
        <div class="row">
            <div class="col" style="margin-top: 20px;">
            <!-- <img src="assets/img/Group%20185.png" style="text-align: center;margin-top: -10px;" width="443" height="317"> -->
            <div data-aos="zoom-in" data-aos-duration="1000" id="chart_div9" style="margin-left:10%;width: 426px; height: 239px; font-family: Poppins; font-family: Poppins;margin-top: 20px;"></div>
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

                                var chart = new google.visualization.BarChart(document.getElementById('chart_div9'));

                                chart.draw(data, options);
                            }
                            </script>
        </div>
        </div>
    </div>

    <div class="page-break"></div>
    <div class="container" style="width: 535px;height: 900px;background: var(--bs-body-bg);border: 28.4px solid #92248D ;">
        <div class="row">
            <div class="col" style="text-align: center;"><span style="font-family: poppins;font-weight: bold;text-align: center;font-size: 14px;color: #1C2C84;"></span></div>
        </div>
        <div class="row" style="background: #ffffff;">
            <div class="col" style="text-align: center;margin-top: 300px;"><span style="font-family: poppins;font-weight: bold;font-size: 20px;text-align: center;"><br>Digital Government Proficiency<br><br></span></div>
        </div>
        <div class="row">
            <div class="col" style="text-align: center;margin-top: -10px;"><span style="font-family: poppins;font-weight: bold;font-size: 24px;text-align: center;color: #CC1D56;"><br><br></span></div>
        </div>
    </div>

    <div class="page-break"></div>
    <div class="container" style="width: 535px;height: 900px;border-style: solid;">
        <div class="row">
            <div class="col" style="text-align: center;margin-top: 20px;"><span style="font-family: poppins;font-weight: bold;text-align: center;font-size: 14px;color: #1C2C84;"><br>Number of Total Operational Level Employees</span></div>
        </div>
        <div class="row" style="margin-top: 40px;margin-left: 10px;margin-right: 10px;border-radius: 10px;height: 210px;">
            <div class="col-md-5" style="margin-left: 10px;">
                <!-- <img src="assets/img/Figpie.png" width="209" height="202" style="margin-left: 10px;margin-top: 4px;"> -->
                <div id="chart_div10" style="background-color: var(--bs-gray-200);width:400px;height:180px;font-family: Poppins;margin-left:10%"></div>
                                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                    <script>
                                        google.charts.load('current', { packages: ['corechart'] });
                                        google.charts.setOnLoadCallback(drawPieChart);

                                        function drawPieChart() {
                                            var data = google.visualization.arrayToDataTable({{ Js::from($responsesMidDigitalGovernment) }});

                                            var options = {
                                                
                                                titleTextStyle: {
                                                    fontName: 'Poppins',
                                                    fontSize: 24,
                                                },
                                                colors: ['#FF5733', '#33FF57', '#3357FF'],
                                                fontName: 'Poppins',
                                                fontSize: 8,
                                            };

                                            var chart = new google.visualization.PieChart(document.getElementById('chart_div10'));

                                            chart.draw(data, options);
                                        }
                                    </script>
            </div>
        </div>
        <div class="row">
            <div class="col" style="text-align: center;margin-top: 10px;"><span style="font-family: poppins;font-weight: bold;font-size: 14px;color: #1C2C84;"><br>Overall Competency Proficiency <br><br></span></div>
        </div>
        <div class="row">
            <div class="col" style="margin-top: 20px;">
            <!-- <img src="assets/img/Group%20185.png" style="text-align: center;margin-top: -10px;" width="443" height="317"> -->
            <div id="chart_div11" style="margin-left:10%;width: 426px; height: 239px; font-family: Poppins; font-family: Poppins;margin-top: 20px;"></div>
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

                                var chart = new google.visualization.BarChart(document.getElementById('chart_div11'));

                                chart.draw(data, options);
                            }
                            </script>
        </div>
        </div>
    </div>

    <div class="page-break"></div>
    <div class="container" style="width: 535px;height: 900px;background: var(--bs-body-bg);border: 28.4px solid #037774 ;">
        <div class="row">
            <div class="col" style="text-align: center;"><span style="font-family: poppins;font-weight: bold;text-align: center;font-size: 14px;color: #1C2C84;"></span></div>
        </div>
        <div class="row" style="background: #ffffff;">
            <div class="col" style="text-align: center;margin-top: 300px;"><span style="font-family: poppins;font-weight: bold;font-size: 20px;text-align: center;"><br>Management Proficiency<br><br></span></div>
        </div>
        <div class="row">
            <div class="col" style="text-align: center;margin-top: -10px;"><span style="font-family: poppins;font-weight: bold;font-size: 24px;text-align: center;color: #CC1D56;"><br><br></span></div>
        </div>
    </div>

    <div class="page-break"></div>
    <div class="container" style="width: 535px;height: 900px;border-style: solid;">
        <div class="row">
            <div class="col" style="text-align: center;margin-top: 20px;"><span style="font-family: poppins;font-weight: bold;text-align: center;font-size: 14px;color: #1C2C84;"><br>Number of Total Operational Level Employees</span></div>
        </div>
        <div class="row" style="margin-top: 40px;margin-left: 10px;margin-right: 10px;border-radius: 10px;height: 210px;">
            <div class="col-md-5" style="margin-left: 10px;">
                <!-- <img src="assets/img/Figpie.png" width="209" height="202" style="margin-left: 10px;margin-top: 4px;"> -->
                <div id="chart_div12" style="background-color: var(--bs-gray-200);width:400px;height:180px;font-family: Poppins;margin-left:10%"></div>
                                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                    <script>
                                        google.charts.load('current', { packages: ['corechart'] });
                                        google.charts.setOnLoadCallback(drawPieChart);

                                        function drawPieChart() {
                                            var data = google.visualization.arrayToDataTable({{ Js::from($responsesMidManagement) }});

                                            var options = {
                                                
                                                titleTextStyle: {
                                                    fontName: 'Poppins',
                                                    fontSize: 24,
                                                },
                                                colors: ['#FF5733', '#33FF57', '#3357FF'],
                                                fontName: 'Poppins',
                                                fontSize: 8,
                                            };

                                            var chart = new google.visualization.PieChart(document.getElementById('chart_div12'));

                                            chart.draw(data, options);
                                        }
                                    </script>
            </div>
        </div>
        <div class="row">
            <div class="col" style="text-align: center;margin-top: 10px;"><span style="font-family: poppins;font-weight: bold;font-size: 14px;color: #1C2C84;"><br>Overall Competency Proficiency <br><br></span></div>
        </div>
        <div class="row">
            <div class="col" style="margin-top: 20px;">
            <!-- <img src="assets/img/Group%20185.png" style="text-align: center;margin-top: -10px;" width="443" height="317"> -->
            <div id="chart_div13" style="margin-left:10%;width: 426px; height: 400px; font-family: Poppins; font-family: Poppins;margin-top: 20px;"></div>
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

                                var chart = new google.visualization.BarChart(document.getElementById('chart_div13'));

                                chart.draw(data, options);
                            }
                            </script>
        </div>
        </div>
    </div>

    <div class="page-break"></div>
    <div class="container" style="width: 535px;height: 900px;background: rgba(243,141,70,0.44);border-style: solid;border-color: rgb(245,144,26);">
        <div class="row">
            <div class="col" style="text-align: center;"><span style="font-family: poppins;font-weight: bold;text-align: center;font-size: 14px;color: #1C2C84;"></span></div>
        </div>
        <div class="row">
            <div class="col" style="text-align: center;margin-top: 310px;"><span style="font-family: poppins;font-weight: bold;font-size: 20px;text-align: center;"><br>Competency Proficiency<br><br></span></div>
        </div>
        <div class="row">
            <div class="col" style="text-align: center;margin-top: -10px;"><span style="font-family: poppins;font-weight: bold;font-size: 24px;text-align: center;color: #CC1D56;"><br>Top & 2nd Tier Level<br><br></span></div>
        </div>
    </div>

    <div class="page-break"></div>
    <div class="container" style="width: 535px;height: 900px;background: var(--bs-body-bg);border: 28.4px solid #CC1D56 ;">
        <div class="row">
            <div class="col" style="text-align: center;"><span style="font-family: poppins;font-weight: bold;text-align: center;font-size: 14px;color: #1C2C84;"></span></div>
        </div>
        <div class="row" style="background: #ffffff;">
            <div class="col" style="text-align: center;margin-top: 300px;"><span style="font-family: poppins;font-weight: bold;font-size: 20px;text-align: center;"><br>ICT Proficiency<br><br></span></div>
        </div>
        <div class="row">
            <div class="col" style="text-align: center;margin-top: -10px;"><span style="font-family: poppins;font-weight: bold;font-size: 24px;text-align: center;color: #CC1D56;"><br><br></span></div>
        </div>
    </div>

    <div class="page-break"></div>
    <div class="container" style="width: 535px;height: 900px;border-style: solid;">
        <div class="row">
            <div class="col" style="text-align: center;margin-top: 20px;"><span style="font-family: poppins;font-weight: bold;text-align: center;font-size: 14px;color: #1C2C84;"><br>Number of Total Operational Level Employees</span></div>
        </div>
        <div class="row" style="margin-top: 40px;margin-left: 10px;margin-right: 10px;border-radius: 10px;height: 210px;">
            <div class="col-md-5" style="margin-left: 10px;">
                <!-- <img src="assets/img/Figpie.png" width="209" height="202" style="margin-left: 10px;margin-top: 4px;"> -->
                <div id="chart_div14" style="background-color: var(--bs-gray-200);width:400px;height:180px;font-family: Poppins;margin-left:10%"></div>
                                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                    <script>
                                        google.charts.load('current', { packages: ['corechart'] });
                                        google.charts.setOnLoadCallback(drawPieChart);

                                        function drawPieChart() {
                                            var data = google.visualization.arrayToDataTable({{ Js::from($responsesTopIct) }});

                                            var options = {
                                                
                                                titleTextStyle: {
                                                    fontName: 'Poppins',
                                                    fontSize: 24,
                                                },
                                                colors: ['#FF5733', '#33FF57', '#3357FF'],
                                                fontName: 'Poppins',
                                                fontSize: 8,
                                            };

                                            var chart = new google.visualization.PieChart(document.getElementById('chart_div14'));

                                            chart.draw(data, options);
                                        }
                                    </script>
            </div>
        </div>
        <div class="row">
            <div class="col" style="text-align: center;margin-top: 10px;"><span style="font-family: poppins;font-weight: bold;font-size: 14px;color: #1C2C84;"><br>Overall Competency Proficiency <br><br></span></div>
        </div>
        <div class="row">
            <div class="col" style="margin-top: 20px;">
            <!-- <img src="assets/img/Group%20185.png" style="text-align: center;margin-top: -10px;" width="443" height="317"> -->
            <div id="chart_div15" style="margin-left:10%;width: 426px; height: 239px; font-family: Poppins; font-family: Poppins;margin-top: 20px;"></div>
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

                                var chart = new google.visualization.BarChart(document.getElementById('chart_div15'));

                                chart.draw(data, options);
                            }
                            </script>
        </div>
        </div>
    </div>

    <div class="page-break"></div>
    <div class="container" style="width: 535px;height: 900px;background: var(--bs-body-bg);border: 28.4px solid #92248D ;">
        <div class="row">
            <div class="col" style="text-align: center;"><span style="font-family: poppins;font-weight: bold;text-align: center;font-size: 14px;color: #1C2C84;"></span></div>
        </div>
        <div class="row" style="background: #ffffff;">
            <div class="col" style="text-align: center;margin-top: 300px;"><span style="font-family: poppins;font-weight: bold;font-size: 20px;text-align: center;"><br>Digital Government Proficiency<br><br></span></div>
        </div>
        <div class="row">
            <div class="col" style="text-align: center;margin-top: -10px;"><span style="font-family: poppins;font-weight: bold;font-size: 24px;text-align: center;color: #CC1D56;"><br><br></span></div>
        </div>
    </div>

    <div class="page-break"></div>
    <div class="container" style="width: 535px;height: 900px;border-style: solid;">
        <div class="row">
            <div class="col" style="text-align: center;margin-top: 20px;"><span style="font-family: poppins;font-weight: bold;text-align: center;font-size: 14px;color: #1C2C84;"><br>Number of Total Operational Level Employees</span></div>
        </div>
        <div class="row" style="margin-top: 40px;margin-left: 10px;margin-right: 10px;border-radius: 10px;height: 210px;">
            <div class="col-md-5" style="margin-left: 10px;">
                <!-- <img src="assets/img/Figpie.png" width="209" height="202" style="margin-left: 10px;margin-top: 4px;"> -->
                <div id="chart_div16" style="background-color: var(--bs-gray-200);width:400px;height:180px;font-family: Poppins;margin-left:10%"></div>
                                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                    <script>
                                        google.charts.load('current', { packages: ['corechart'] });
                                        google.charts.setOnLoadCallback(drawPieChart);

                                        function drawPieChart() {
                                            var data = google.visualization.arrayToDataTable({{ Js::from($responsesTopDigitalGovernment) }});

                                            var options = {
                                                
                                                titleTextStyle: {
                                                    fontName: 'Poppins',
                                                    fontSize: 24,
                                                },
                                                colors: ['#FF5733', '#33FF57', '#3357FF'],
                                                fontName: 'Poppins',
                                                fontSize: 8,
                                            };

                                            var chart = new google.visualization.PieChart(document.getElementById('chart_div16'));

                                            chart.draw(data, options);
                                        }
                                    </script>
            </div>
        </div>
        <div class="row">
            <div class="col" style="text-align: center;margin-top: 10px;"><span style="font-family: poppins;font-weight: bold;font-size: 14px;color: #1C2C84;"><br>Overall Competency Proficiency <br><br></span></div>
        </div>
        <div class="row">
            <div class="col" style="margin-top: 20px;">
            <!-- <img src="assets/img/Group%20185.png" style="text-align: center;margin-top: -10px;" width="443" height="317"> -->
            <div id="chart_div17" style="margin-left:10%;width: 426px; height: 400px; font-family: Poppins; font-family: Poppins;margin-top: 20px;"></div>
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

                                var chart = new google.visualization.BarChart(document.getElementById('chart_div17'));

                                chart.draw(data, options);
                            }
                            </script>
        </div>
        </div>
    </div>

    <div class="page-break"></div>
    <div class="container" style="width: 535px;height: 900px;background: var(--bs-body-bg);border: 28.4px solid #037774 ;">
        <div class="row">
            <div class="col" style="text-align: center;"><span style="font-family: poppins;font-weight: bold;text-align: center;font-size: 14px;color: #1C2C84;"></span></div>
        </div>
        <div class="row" style="background: #ffffff;">
            <div class="col" style="text-align: center;margin-top: 300px;"><span style="font-family: poppins;font-weight: bold;font-size: 20px;text-align: center;"><br>Management Proficiency<br><br></span></div>
        </div>
        <div class="row">
            <div class="col" style="text-align: center;margin-top: -10px;"><span style="font-family: poppins;font-weight: bold;font-size: 24px;text-align: center;color: #CC1D56;"><br><br></span></div>
        </div>
    </div>

    <div class="page-break"></div>
    <div class="container" style="width: 535px;height: 900px;border-style: solid;">
        <div class="row">
            <div class="col" style="text-align: center;margin-top: 20px;"><span style="font-family: poppins;font-weight: bold;text-align: center;font-size: 14px;color: #1C2C84;"><br>Number of Total Operational Level Employees</span></div>
        </div>
        <div class="row" style="margin-top: 40px;margin-left: 10px;margin-right: 10px;border-radius: 10px;height: 210px;">
            <div class="col-md-5" style="margin-left: 10px;">
                <!-- <img src="assets/img/Figpie.png" width="209" height="202" style="margin-left: 10px;margin-top: 4px;"> -->
                <div id="chart_div18" style="background-color: var(--bs-gray-200);width:400px;height:180px;font-family: Poppins;margin-left:10%"></div>
                                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                    <script>
                                        google.charts.load('current', { packages: ['corechart'] });
                                        google.charts.setOnLoadCallback(drawPieChart);

                                        function drawPieChart() {
                                            var data = google.visualization.arrayToDataTable({{ Js::from($responsesTopManagement) }});

                                            var options = {
                                                
                                                titleTextStyle: {
                                                    fontName: 'Poppins',
                                                    fontSize: 24,
                                                },
                                                colors: ['#FF5733', '#33FF57', '#3357FF'],
                                                fontName: 'Poppins',
                                                fontSize: 8,
                                            };

                                            var chart = new google.visualization.PieChart(document.getElementById('chart_div18'));

                                            chart.draw(data, options);
                                        }
                                    </script>
            </div>
        </div>
        <div class="row">
            <div class="col" style="text-align: center;margin-top: 10px;"><span style="font-family: poppins;font-weight: bold;font-size: 14px;color: #1C2C84;"><br>Overall Competency Proficiency <br><br></span></div>
        </div>
        <div class="row">
            <div class="col" style="margin-top: 20px;">
            <!-- <img src="assets/img/Group%20185.png" style="text-align: center;margin-top: -10px;" width="443" height="317"> -->
            <div id="chart_div19" style="margin-left:10%;width: 426px; height: 400px; font-family: Poppins; font-family: Poppins;margin-top: 20px;"></div>
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

                                var chart = new google.visualization.BarChart(document.getElementById('chart_div19'));

                                chart.draw(data, options);
                            }
                            </script>
        </div>
        </div>
    </div>
    </body>
</html>
<script src="{{asset('jsfile/bootstrap.min.js')}}"></script>