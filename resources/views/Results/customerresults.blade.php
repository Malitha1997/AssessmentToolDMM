@extends('layouts.userNavbar')

@section('content')

<body style="border-color: rgb(46,127,208);color: rgb(255,255,255);">

    <section >
        <div class="container" style="margin-top: 150px;" data-aos="zoom-in" data-aos-duration="1000">
            <h1 data-aos="fade-down" data-aos-duration="1000" style="text-align: center;color: #1f2471;font-family: Poppins, sans-serif;font-weight: bold;">
                <a class="btn btn-primary d-flex flex-row justify-content-center align-items-start" type="button" style="margin-left: 0px;background: url(&quot;{{ asset('img/Back.png') }}&quot;), rgba(13,110,253,0);border-color: rgba(255,255,255,0);width: 30px;height: 30px;" href="/preliminaryResults"></a>Customer</h1>

                <div id="chart_div" style="width:1200px;height:400px;font-family: Poppins;margin-left:50px"></div>
        </div>
    </section>
    <table class="table" style="margin-top: 10px" data-aos="fade-down" data-aos-duration="1000">
        <thead class="thead-light" style="font-family: Poppins, sans-serif;">
            <tr>
                <th scope="col" >Sub Dimension</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tr style="font-family: Poppins, sans-serif;">
            <td>Citizen Experience Strategy</td>
            <td>A plan that guides the activities and resource allocation required to deliver intended experiences that meet or exceed Citizen expectations in accordance with the goals of the Gov Institute.</td>
        </tr>
        <tr style="font-family: Poppins, sans-serif;">
            <td>Citizen Engagement</td>
            <td>Citizen engagement is the means by which a Gov Institute creates a relationship with its Citizen base to foster brand loyalty and awareness. This can be accomplished via marketing campaigns, new content created for and posted to websites, and outreach via social media and mobile and wearable devices, among other methods.</td>
        </tr>
        <tr style="font-family: Poppins, sans-serif;">
            <td>Citizen Experience</td>
            <td>Citizen experience is the internal and subjective response Citizens have to any direct or indirect contact with a Gov Institute.</td>
        </tr>
        <tr style="font-family: Poppins, sans-serif;">
            <td>Citizen trust & Perception</td>
            <td>Citizen trust & Perception is the essential bond that underpins the relationships Gov Institutes have with the humans in their ecosystem— Citizens, workforce, and partners. It’s nearly impossible to build successful, lasting human experiences and relationships without trust, Data Privacy focuses on the rights of individuals, the purpose of data collection and processing, privacy preferences, and the way institutes govern personal data of data subjects.</td>
        </tr>
        <tr style="font-family: Poppins, sans-serif;">
            <td>Citizen Insights & Behaviour</td>
            <td>A consumer is a person who identifies a need or desire, makes a purchase and then disposes of the product in the consumption process. A typical consumer’s utility is dependent on the consumption of agricultural and industrial goods, services, housing and wealth (Grundey, 2009). No two of them are the same, as everyone is influenced by different internal and external factors which form the consumer behaviour.</td>
        </tr>
    </table>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        google.charts.load('current', {packages: ['corechart', 'bar']});
        google.charts.setOnLoadCallback(drawBasic);

    function drawBasic() {
        {{--  var vAxis = ["Citizen Experience Strategy", "Citizen Engagement", "Citizen Experience", "Citizen Trust & Perception", "Citizen Insights & Behavior"];  --}}
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
        colors: ['#52ED59']
      };

      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

      chart.draw(data, options);
    }
    </script>
</body>
@endsection

