@extends('layouts.userNavbar')

@section('content')

<body style="border-color: rgb(46,127,208);color: rgb(255,255,255);">
    <section >
        <div class="container" style="margin-top: 150px;" data-aos="zoom-in" data-aos-duration="1000">
            <h1 data-aos="fade-down" data-aos-duration="1000" style="text-align: center;color: #1f2471;font-family: Poppins, sans-serif;font-weight: bold;">
                <a class="btn btn-primary d-flex flex-row justify-content-center align-items-start" type="button" style="margin-left: 0px;background: url(&quot;{{ asset('img/Back.png') }}&quot;), rgba(13,110,253,0);border-color: rgba(255,255,255,0);width: 30px;height: 30px;" href="{{route('preliminaryResults')}}"></a>Organization & Culture</h1>
                <div id="chart_div" style="width:1200px;height:400px;font-family: Poppins;margin-left: 50px"></div>
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
            <td>Leadership and culture</td>
            <td>Leadership goes hand-in-hand with strategy formation, and most leaders understand the fundamentals. Culture, however, is a more elusive lever, because much of it is anchored in unspoken behaviors, mindsets, and social patterns.</td>
        </tr>
        <tr>
            <td>Standards and Governance</td>
            <td>Standards are the distilled wisdom of people with expertise in their subject matter and who know the needs of the organizations they represent – people such as manufacturers, sellers, buyers, customers, trade associations, users or regulators. Governance has been defined to refer to structures and processes that are designed to ensure accountability, transparency, responsiveness, rule of law, stability, equity and inclusiveness, empowerment, and broad-based participation. </td>
        </tr>
        <tr>
            <td>Employee Enablement / Employee Engagement</td>
            <td>Reskilling and upskilling workforces to make them more digitally savvy—another digital pivot—can pay dividends in the form of increased employee engagement. (Deloitte)</td>
        </tr>
        <tr>
            <td>Level of Skill</td>
            <td>The measurement of the skills available in an organization to mature digitally.</td>
        </tr>
        <tr>
            <td>Organization design and Talent management </td>
            <td>Is a constant process that involves attracting and retaining high-quality employees, developing their skills, and continuously motivating them to improve their performance. </td>
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
        colors: ['#BDE90B']
      };

      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

      chart.draw(data, options);
    }
    </script>
</body>
@endsection

