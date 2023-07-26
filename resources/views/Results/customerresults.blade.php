@extends('layouts.userNavbar')

@section('content')

<body style="border-color: rgb(46,127,208);color: rgb(255,255,255);">

    <section >
        <div class="container" style="margin-top: 150px;">
            <h1 data-aos="fade-down" data-aos-duration="1000" style="text-align: center;color: #1f2471;font-family: Poppins, sans-serif;font-weight: bold;">
                <a class="btn btn-primary d-flex flex-row justify-content-center align-items-start" type="button" style="margin-left: 0px;background: url(&quot;{{ asset('img/Back.png') }}&quot;), rgba(13,110,253,0);border-color: rgba(255,255,255,0);width: 30px;height: 30px;" href="/preliminaryResults"></a>Customer</h1>
            <canvas id="myChart" style="width:100%;max-width:800px;margin-left:10%;margin-top:30px;font-family: Poppins, sans-serif;margin-bottom:30px"></canvas>
        </div>
    </section>
    <script>
        var xValues = ["Citizen Experience Strategy", "Citizen Engagement", "Citizen Experience", "Citizen Trust & Perception", "Citizen Insights & Behavior"];
        var yValues = [25, 87, 13, 25, 50];
        var barColors = ["#52ED59", "#52ED59","#52ED59","#52ED59","#52ED59"];

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
              text: ""
            },
            scales: {
              xAxes: [{ticks: {min: 0, max:100}}]
            }
          }
        });
        </script>
</body>
@endsection

