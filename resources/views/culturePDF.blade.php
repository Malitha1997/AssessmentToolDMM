<!DOCTYPE html>
<html>
<head>
    <title>Culture</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.2.61/jspdf.min.js"></script>
</head>
<body>
    <h1>Culture</h1>
    <div id="chart_div" style="width: 800px; height: 400px;"></div>
    <script>
        google.charts.load('current', { packages: ['corechart', 'bar'] });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable(@json($result));
            //console.log('Data:', data);
            var options = {
                chartArea: { width: '50%' },
                hAxis: {
                    title: 'Percentages',
                    minValue: 0,
                    maxValue: 100
                },
                vAxis: {
                    title: 'Culture Dimension'
                }
            };

            var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>
</body>
</html>
