<!DOCTYPE>
<html>
<head>
   <meta charset- "UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
   <canvas id="chartId" aria-label="chart" height="750" width="800"></canvas>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.1.1/chart.min.js"></script>
   <script>
      var chrt = document.getElementById("chartId").getContext("2d");
      var chartId = new Chart(chrt, {
         type: 'radar',
         data: {
            labels: ["Technology & data", "Operation", "Organization & culture", "Strategy", "Customer"],
            datasets: [{
               label: "Marks for each dimension",
               data: [20, 40, 57, 95, 80],
               backgroundColor: ['lightgrey'],
               pointBackgroundColor: ['yellow', 'aqua', 'pink', 'lightgreen', 'lightblue', 'gold'],
               borderColor: ['black'],
               borderWidth: 1,
               pointRadius: 6,
            }],
         },
         options: {
            responsive: false,
            elements: {
               line: {
                  borderWidth: 6
               }
            }
         },
      });
   </script>
</body>
</html>
