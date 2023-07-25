<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="{{ asset('cssfile/chart.css') }}">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<body>
<div>
<button class="btn btn-primary" id="clickModal" type="button" onclick="popup()">Click</button>
</div>
<div class="modal"  id="registerModal">
    <div class="overlay"></div>
    <div class="content">
        <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
    </div>
</div>
<script>
    const btn = document.getElementById('clickModal');
    const modal = document.getElementById('registerModal');
    const span = document.getElementsByClassName('close')[0];
    
    btn.onclick = function () {
      modal.style.display = 'block';
    };
    span.onclick = function () {
      modal.style.display = 'none';
    };
    
    window.onclick = function (event) {
      if (event.target == modal) {
        modal.style.display = 'none';
      }
    };
</script>
<script>
var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
var yValues = [55, 49, 44, 24, 15];
var barColors = ["red", "green","blue","orange","brown"];

new Chart("myChart", {
  type: "horizontalBar",
  data: {
  labels: xValues,
  datasets: [{
    backgroundColor: barColors,
    data: yValues
  }]
},
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "World Wine Production 2018"
    },
    scales: {
      xAxes: [{ticks: {min: 10, max:60}}]
    }
  }
});
</script>


</body>
</html>