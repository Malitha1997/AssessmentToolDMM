@extends('layouts.adminNavbar')

@section('content')

<body style="border-color: rgb(46,127,208);color: rgb(255,255,255);">

    <section >
        <div class="container" style="margin-top: 30px;" data-aos="zoom-in" data-aos-duration="1000">
            <h1 data-aos="fade-down" data-aos-duration="1000" style="text-align: center;color: #1f2471;font-family: Poppins, sans-serif;font-weight: bold;">
                <a class="btn btn-primary d-flex flex-row justify-content-center align-items-start" type="button" style="margin-left: 0px;background: url(&quot;{{ asset('img/Back.png') }}&quot;), rgba(13,110,253,0);border-color: rgba(255,255,255,0);width: 30px;height: 30px;" href="{{ route('show_results',$g_user->user_id) }}}"></a>Technology &amp; Data</h1>
                <div id="chart_div" style="width:1200px;height:400px;font-family: Poppins;margin-left:50px"></div>

            </div>
            {{--  <form method="post" action="{{ route('generate-pdf') }}">
                {{csrf_field()}}
                <input type="hidden" name="chartImg" id="chart_input">
                <button type="submit" >print</button>
            </form>  --}}
    </section>
    <table class="table" style="margin-top:10px" data-aos="fade-down" data-aos-duration="1000">
        <thead class="thead-light" style="font-family: Poppins, sans-serif;">
            <tr>
                <th scope="col" >Sub Dimension</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tr style="font-family: Poppins, sans-serif;">
            <td>Emerging Technology and Applications</td>
            <td>Emerging technologies are technologies whose development, practical applications, or both are still largely unrealized, such that they are figuratively emerging into prominence from a background of nonexistence or obscurity. (e.g Mobile solution, drone technologies, etc.)</td>
        </tr>
        <tr style="font-family: Poppins, sans-serif;">
            <td>Data Management</td>
            <td>Is an administrative process that includes acquiring, validating, storing, protecting, and processing required data to ensure the accessibility, reliability, and timeliness of the data for its users.</td>
        </tr>
        <tr style="font-family: Poppins, sans-serif;">
            <td>Delivery Governance</td>
            <td>Delivery governance is a knowledge base of any service delivery organization's Operational processes and production support procedures.</td>
        </tr>
        <tr style="font-family: Poppins, sans-serif;">
            <td>Connectivity / Network</td>
            <td>The quality, state, or capability of being connective or connected connectivity of a surface especially : the ability to connect to or communicate with another computer or computer system.</td>
        </tr>
        <tr style="font-family: Poppins, sans-serif;">
            <td>Security</td>
            <td>The growing cyber threats in the world require public administrations to focus on e-governance security measures. It is important to be aware of the threats posed to e-governance. The coordinating institution is required to organise the development, monitoring and supervision of relevant information security rules and measures. Source (Maturity Model, Digital UK).</td>
        </tr>
        <tr style="font-family: Poppins, sans-serif;">
            <td>Technology Architecture</td>
            <td>Technical Architecture (TA) is a form of IT architecture that is used to design computer systems. It involves the development of a technical blueprint with regard to the arrangement, interaction and interdependence of all elements, so that system-relevant requirements are met.</td>
        </tr>
        <tr style="font-family: Poppins, sans-serif;">
            <td>Data Governance</td>
            <td>Is the process of managing the availability, usability, integrity and security of the data in enterprise systems, based on internal data standards and policies that also control data usage. Effective data governance ensures that data is consistent and trustworthy and doesn't get misused.</td>
        </tr>
        <tr style="font-family: Poppins, sans-serif;">
            <td>Data Engineering</td>
            <td>Is the aspect of data science that focuses on practical applications of data collection and analysis.</td>
        </tr>
        <tr style="font-family: Poppins, sans-serif;">
            <td>Interoperability</td>
            <td>The digitisation of public services means that ministries and government agencies capture and process data in a machine-readable form. Digital transformation requires digital databases and data exchange between those. Source (Maturity Model, Digital UK).</td>
        </tr>
        <tr style="font-family: Poppins, sans-serif;">
            <td>Application for Users</td>
            <td>Type of online applications, benefits for citizens and gov officials and usage.</td>
        </tr>
    </table>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        google.charts.load('current', {packages: ['corechart', 'bar']});
        google.charts.setOnLoadCallback(drawBasic);

        function drawBasic() {

        var data = google.visualization.arrayToDataTable({{ Js::from($result) }});

        var options = {
            chartArea: {
                width: '50%'
            },
            hAxis: {
                title: 'Percentages',
                minValue: 0,
                maxValue: 100
            },
            vAxis: {
                title: 'Subdimentions',
            },
            colors: ['#64CDDB']
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

