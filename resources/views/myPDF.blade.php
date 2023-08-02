<!DOCTYPE html>
<html>
<head>
    <title>PDF Report</title>
    <!-- Add any CSS styles specific to the PDF report here -->
</head>
<body>
    <h1>PDF Report</h1>
    <canvas id="chart_div" height="400" width="400"></canvas>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        google.charts.load('current', {packages: ['corechart', 'bar']});
        google.charts.setOnLoadCallback(drawBasic);

    function drawBasic() {

      var data = google.visualization.arrayToDataTable({{ Js::from($result) }});

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

      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

      chart.draw(data, options);
    }
    </script>
</body>
</html>
