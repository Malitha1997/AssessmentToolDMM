@extends('layouts.userNavbar')

@section('content')

<body style="border-color: rgb(46,127,208);color: rgb(255,255,255);">

    <section >
        <div class="container" style="margin-top: 150px;">
            <h1 data-aos="fade-down" data-aos-duration="1000" style="text-align: center;color: #1f2471;font-family: Poppins, sans-serif;font-weight: bold;">
                <a class="btn btn-primary d-flex flex-row justify-content-center align-items-start" type="button" style="margin-left: 0px;background: url(&quot;{{ asset('img/Back.png') }}&quot;), rgba(13,110,253,0);border-color: rgba(255,255,255,0);width: 30px;height: 30px;" href="/preliminaryResults"></a>Technology &amp; Data</h1>
                <div id="chart_div" style="width:1200px;height:400px;font-family: Poppins;margin-left:50px"></div>

            </div>
            {{--  <form method="post" action="{{ route('generate-pdf') }}">
                {{csrf_field()}}
                <input type="hidden" name="chartImg" id="chart_input">
                <button type="submit" >print</button>
            </form>  --}}
    </section>
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

      {{--  var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
      google.visualization.events.addListener(chart, 'ready', function () {
       var chart_div = '<img src="' + chart.getImageURI() + '">';
       chart_input.value = chart.getImageURI();


      });
      chart.draw(data, options);  --}}
      
      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

      chart.draw(data, options);
    }
    </script>
</body>
@endsection

