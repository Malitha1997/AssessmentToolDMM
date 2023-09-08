@extends('layouts.adminNavbar')

@section('content')

<body style="border-color: rgb(46,127,208);color: rgb(255,255,255);">

    <section >
        <div class="container" style="margin-top: 30px;" data-aos="zoom-in" data-aos-duration="1000">
            <h1 data-aos="fade-down" data-aos-duration="1000" style="text-align: center;color: #1f2471;font-family: Poppins, sans-serif;font-weight: bold;">
                <a class="btn btn-primary d-flex flex-row justify-content-center align-items-start" type="button" style="margin-left: 0px;background: url(&quot;{{ asset('img/Back.png') }}&quot;), rgba(13,110,253,0);border-color: rgba(255,255,255,0);width: 30px;height: 30px;" href="{{ route('show_results',$g_user->user_id) }}"></a>Operation</h1>
                <div id="chart_div" style="width:1200px;height:400px;font-family: Poppins;margin-left:50px"></div>
        </div>
    </section>
    <table class="table" style="margin-top: 10px;font-family: Poppins, sans-serif;" data-aos="fade-down" data-aos-duration="1000">
        <thead class="thead-light" style="font-family: Poppins, sans-serif;">
            <tr>
                <th scope="col" >Sub Dimension</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tr>
            <td>Agile Change management</td>
            <td>Agile change management is a natural extension of Agile development methodologies including Scrum®, SAFe® and AgilePM® which set out how best to create a 'production line' that frequently delivers tangible change in the form of new features and functionality. (Agility) Change the wording accordingly. List of assumptions . Make it more generalized. New : Agile change Management is the alignment of Agile delivery mechanisms that create change, and change management activities that create and embed new ways of working.</td>
        </tr>
        <tr>
            <td>Integrated Service Management</td>
            <td>Integrated service management was created to give organizations a standardized method for implementing ITIL concepts quickly and easily.  New : Integrated Service Management provides an ITIL aligned Service Management framework with the simplicity of one touch point. Using digitisation and automation, organizations can seamlessly integrate tools and processes across multiple technology domains, environments and agreed third party providers.</td>
        </tr>
        <tr>
            <td>Real-time insights and analytics</td>
            <td>Real time analytics refers to the process of preparing and measuring data as soon as it enters the database.</td>
        </tr>
        <tr>
            <td>Smart Process Management</td>
            <td>Smart Process Management: Automated Generation of. Adaptive Cases based on Intelligent Planning.</td>
        </tr>
    </table>
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

        },
        colors: ['#DB64B3']
      };

      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

      chart.draw(data, options);
    }
    </script>
</body>
@endsection

