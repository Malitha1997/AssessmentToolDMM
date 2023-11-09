@extends('layouts.userNavbar')

@section('content')

<body style="border-color: rgb(46,127,208);color: rgb(255,255,255);">

    <section >
        <div class="container" style="margin-top: 150px;" data-aos="zoom-in" data-aos-duration="1000">
            <h1 data-aos="fade-down" data-aos-duration="1000" style="text-align: center;color: #1f2471;font-family: Poppins, sans-serif;font-weight: bold;">
                <a class="btn btn-primary d-flex flex-row justify-content-center align-items-start" type="button" style="margin-left: 0px;background: url(&quot;{{ asset('img/Back.png') }}&quot;), rgba(13,110,253,0);border-color: rgba(255,255,255,0);width: 30px;height: 30px;" href="{{route('preliminaryResults')}}"></a>Strategy</h1>
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
            <td>Brand Management</td>
            <td>Brand management is a function of marketing that uses techniques to increase the perceived value of a product line or brand over time.</td>
        </tr>
        <tr>
            <td>Ecosystem Management</td>
            <td>Ecosystem management is an approach to natural resource management that aims to ensure the long-term sustainability and persistence of an ecosystems function and services while meeting socioeconomic, political, and cultural needs. Further solution should be align with ICTA national strategy. (Source: Deloitte).</td>
        </tr>
        <tr>
            <td>Finance & Investments</td>
            <td>"General financing and financial models for e-services need to be developed in order to ensure sustainability. For every e-governance solution, the total cost of ownership of the solution must be planned. The introduction of e-governance will have a cost, even if it will soon lead to savings in other respects, so it is essential that there is adequate provision for the necessary funds in a sustainable manner. (Source: Deloitte)"</td>
        </tr>
        <tr>
            <td>Market Intelligence</td>
            <td>The information or data that is derived by an organization from the market it operates in or wants to operate in, to help determine market segmentation, market penetration, market opportunity, and existing market metrics.</td>
        </tr>
        <tr>
            <td>Strategic Management</td>
            <td>Strategic management is the ongoing planning, monitoring, analysis and assessment of all necessities an organization needs to meet its goals and objectives. Changes in business environments will require organizations to constantly assess their strategies for success.</td>
        </tr>
        <tr>
            <td>Business Assurance</td>
            <td>With ecosystem-based business becoming the norm, there are a multitude of opportunities for revenue to seep through the cracks, whether intentionally (fraud) or not (leakage). As organizations transform to meet the needs of the connected digital economy, business must be assured, future-proofed, and rooted across the operational processes, systems and data of the organization and ecosystem. (Source: TM Forum)</td>
        </tr>
        <tr>
            <td>Policy</td>
            <td>Organization policies or align with national policy.</td>
        </tr>
        <tr>
            <td>Invention & Innovation</td>
            <td>Invention is about creating something new, while innovation introduces the concept of “use” of an idea or method.An invention is usually a “thing”, while an innovation is usually an invention that causes change in behavior or interactions.</td>
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
        colors: ['#E77812']
      };

      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

      chart.draw(data, options);
    }
    </script>
</body>
@endsection

