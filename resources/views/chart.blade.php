<html>
   <head>
      <title>Candlestick Chart Example</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.2.61/jspdf.min.js"></script>
   </head>
   <body>
      <div id="chart_div" style="width: 900px; height: 500px;"></div>
      <button id="download-pdf">Download PDF</button>
      <script type="text/javascript">
var imgData,//from   w w  w . j  ava2  s  . co  m
  id = 'chart_div',
   dataValues = [['Mon', 20, 28, 38, 45],
    ['Tue', 31, 38, 55, 66],
    ['Wed', 50, 55, 77, 80],
    ['Thu', 77, 77, 66, 50],
    ['Fri', 68, 66, 22, 15]]
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(function() {
   var data = google.visualization.arrayToDataTable(dataValues, true)
   var chart = new google.visualization.CandlestickChart(document.getElementById(id))
  chart.draw(data)
  imgData = chart.getImageURI()
})
function generatePDF() {
  var doc = new jsPDF();
  doc.setFontSize(33);
  doc.setFillColor(135, 124,45,0);
  doc.addImage(imgData, 'png', 10, 10, 150, 100);
  doc.save('sample.pdf');
}
$('#download-pdf').click(generatePDF)

      </script>
   </body>
</html>
