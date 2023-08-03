<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Preliminary Results</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container" style="width: 100%;height: 1000px;border-style: solid;border-color: #000000;">
        <div class="row" style="margin-top: 100px;">
            <div class="col" style="text-align: center;"><span style="font-size: 36px;color: #1c2c84;font-family: Poppins, sans-serif;font-weight: bold;">Results Report<br>of<br>Preliminary Assessment<br>for<br>{{ Auth::user()->govorganizationdetail->govorganizationname->gov_org_name }}</span></div>
        </div>
        <div class="row" style="text-align: center;margin-top: 350px;">
            <div class="col"><span style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">Prepared by</span></div>
        </div>
        <div class="row" style="text-align: center;margin-top: 25px;">
            <div class="col"><<img src="{{ public_path('icta2.png') }}" style="width:235px;height:55px"></div>
        </div>
    </div>

</body>
</html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Preliminary Results</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div class="container" style="width: 2400px;height: 1000px;border-style: solid;border-color: #000000;">
            <div class="row" style="text-align: center;margin-top: 100px;">
                <div class="col" style="text-align: center;">
                    <div style="width: 409px;height: 467px;margin-left: 60px;background: #eefefe;border-style: solid;border-color: #1C2C84;">
                        <div class="row" style="text-align: center;margin-top: 50px;">
                            <div class="col"><img src="{{ public_path('Award.png') }}"></div>
                        </div>
                        <div class="row" style="text-align: center;">
                            <div class="col"><span style="text-align: center;font-size: 24px;color: var(--bs-emphasis-color);font-weight: bold;"><br>Successfully completed<br>Preliminary Assessment</span></div>
                        </div>
                        <div class="row" style="text-align: center;">
                            <div class="col"><span style="text-align: center;font-family: Poppins, sans-serif;font-size: 16px;">Your Organization have achieved<br>a result of more than 50% in the<br>Preliminary Assessment. You are<br>eligible for the Deep<br>Assessment.</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Preliminary Results</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div class="container" style="width: 2400px;height: 1000px;border-style: solid;border-color: #000000">
            <div class="row" style="text-align: center;margin: -1px;margin-top: 50px;">
                <div class="col"><span style="font-family: Poppins, sans-serif;font-size: 20px;">Overall Results of Preliminary Assessment</span></div>
            </div>
            <div class="row" style="margin-top: 50px;">
                <div class="col">
                    <canvas id="chartId" aria-label="chart"  style="margin-left: 200px; font-size: 20px;" height="664" width="830"></canvas>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
                    <script>
                        var ctx = document.getElementById("chartId").getContext("2d");
                        var radarData = {
                            labels: {!! json_encode($labels) !!},
                            datasets: [{
                                label: "Marks for each dimension",
                                data: {!! json_encode($percentages) !!},
                                backgroundColor: "rgba(229, 89, 52, 0.6)",
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
                                ticks: {
                                    beginAtZero: true,
                                    max: 100,
                                    stepSize: 20,
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
    </body>
</html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Preliminary Results</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div class="container" style="width: 2400px; height: 1000px; border-style: solid; border-color: #000000">
            <div class="row" style="text-align: center; margin: -1px; margin-top: 50px;">
                <div class="col"><span style="font-family: Poppins, sans-serif; font-size: 20px;">Overall Results of Preliminary Assessment</span></div>
            </div>
            <div class="row" style="margin-top: 50px;">
                <div class="col"><span style="color: #1c2c84; font-family: Poppins, sans-serif; font-weight: bold;">1.&nbsp; Technology and Data</span></div>
            </div>
            <div class="row" style="margin-top: 50px;">
                <div class="col">

                    <div id="chart_div2" style="width: 1200px; height: 400px; font-family: Poppins; margin-left: 50px;"></div>
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script>
                        google.charts.load('current', { packages: ['corechart', 'bar'] });
                        google.charts.setOnLoadCallback(drawBasic);

                        function drawBasic() {
                            var data = google.visualization.arrayToDataTable({!! json_encode($result) !!});

                            var options = {
                                chartArea: { width: '50%' },
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
        </div>
    </body>
</html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Preliminary Results</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div class="container" style="width: 2400px;height: 1000px;border-style: solid;border-color: #000000">
            <div class="row" style="margin-top: 25px;">
                <div class="col"><span style="color: #1c2c84;font-family: Poppins, sans-serif;font-weight: bold;">2.&nbsp; Customer</span></div>
            </div>
            <div class="row" style="margin-top: 50px;">
                <div class="col">
                    <div style="width: 461px;height: 548px;margin-left: 25px;margin-top: 20px;box-shadow: 0px 0px 19px 3px var(--bs-body-color);"></div>
                </div>
            </div>
        </div>
    </body>
</html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Preliminary Results</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div class="container" style="width: 2400px;height: 1000px;border-style: solid;border-color: #000000">
            <div class="row" style="margin-top: 25px;">
                <div class="col"><span style="color: #1c2c84;font-family: Poppins, sans-serif;font-weight: bold;">3.&nbsp; Organization & Culture</span></div>
            </div>
            <div class="row" style="margin-top: 50px;">
                <div class="col">
                    <div style="width: 461px;height: 548px;margin-left: 25px;margin-top: 20px;box-shadow: 0px 0px 19px 3px var(--bs-body-color);"></div>
                </div>
            </div>
        </div>
    </body>
</html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Preliminary Results</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div class="container" style="width: 2400px;height: 1000px;border-style: solid;border-color: #000000">
            <div class="row" style="margin-top: 25px;">
                <div class="col"><span style="color: #1c2c84;font-family: Poppins, sans-serif;font-weight: bold;">4.&nbsp; Strategy</span></div>
            </div>
            <div class="row" style="margin-top: 50px;">
                <div class="col">
                    <div style="width: 461px;height: 548px;margin-left: 25px;margin-top: 20px;box-shadow: 0px 0px 19px 3px var(--bs-body-color);"></div>
                </div>
            </div>
        </div>
    </body>
</html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Preliminary Results</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div class="container" style="width: 2400px;height: 1000px;border-style: solid;border-color: #000000">
            <div class="row" style="margin-top: 25px;">
                <div class="col"><span style="color: #1c2c84;font-family: Poppins, sans-serif;font-weight: bold;">5.&nbsp; Operation</span></div>
            </div>
            <div class="row" style="margin-top: 50px;">
                <div class="col">
                    <div style="width: 461px;height: 548px;margin-left: 25px;margin-top: 20px;box-shadow: 0px 0px 19px 3px var(--bs-body-color);"></div>
                </div>
            </div>
        </div>
    </body>
</html>
