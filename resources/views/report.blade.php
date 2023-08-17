<!DOCTYPE html>
<html data-bs-theme="light" lang="en">
<head>
    <style>

        @media print {
          .page-break {
            page-break-before: always;
          }
        }
      </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Preliminary Assessment Report</title>
        <link rel="stylesheet" href="{{asset('cssfile/bootstrap2.min.css')}}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    </head>
        <body>
            {{--  Page 01  --}}
        <div style="border-style: solid;border-color: #000000; width:700px;height:1450px"
            <div class="container" style="width: 535px;height: 782px;text-align:center">
                <div class="row" style="margin-top: 100px;">
                    <div class="col" style="text-align: center;"><img src="{{ asset('emblem.png') }}" style="width:58px;height:82px"></div>
                </div>
                <div class="row" style="margin-top: 50px;">
                    <div class="col" style="text-align: center;"><span style="font-size: 40px;color: #1c2c84;font-family: Poppins, sans-serif;font-weight: bold;">Preliminary Assessment<br>Report of<br>{{ Auth::user()->govorganizationdetail->govorganizationname->gov_org_name }}</span></div>
                </div>
                <div class="row" style="text-align: center;margin-top: 650px;">
                    <div class="col"><span style="font-family: Poppins, sans-serif;color: var(--bs-emphasis-color);">Prepared by</span></div>
                </div>
                <div class="row" style="text-align: center;margin-top: 25px;">
                    <div class="col"><img src="{{ asset('ICTA01.png') }}" style=""><img src="{{ asset('ICTA01.png') }}" style=""></div>
                </div>
            </div>
        </div>

            {{--  Page 02  --}}
            {{--  <div class="page-break"></div>
            <div style="border-style: solid;border-color: #000000; width:700px;height:1450px"
            <div class="container" style="width: 535px;height: 800px;">
                <div class="row" style="margin-top: 200px;text-align: center;">
                    <div class="col">
                        <div class="container" >
                            <div class="row" style="margin-top: 50px;text-align: center;">
                                <div class="col"><img src="{{ asset('Award.png') }}"></div>
                            </div>
                            <div class="row" style="text-align: center;">
                                <div class="col" ><span style="font-size: 24px;color: var(--bs-emphasis-color);font-weight: bold;"><br>Successfully completed<br>Preliminary Assessment</span></div>
                            </div>
                            <div class="row" style="text-align: center;margin-top:50px">
                                <div class="col" ><span style="font-family: Poppins, sans-serif;font-size: 16px;">Your Organization gained<br>{{ Auth::user()->govorganizationdetail->percentage->overall }}% for the Preliminary Assessment.</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>  --}}

        {{--  Page 03  --}}
        <div class="page-break"></div>
        <div style="border-style: solid;border-color: #000000; width:700px;height:1450px"
        <div class="container" style="width: 2400px; height: 782px; ">

            <div class="row" style="text-align: center; margin-top: 10px">
                <div class="col"><span style="font-family: Poppins, sans-serif; font-size: 20px;">Overall Results of the Preliminary Assessment</span></div>
            </div>
            <div class="row" style="margin-top:50px;text-align: center;border-style: solid;border-width: 1px;border-color: #ff0000;width: 500px;margin-left: 25%">
                <div class="col" ><span style="font-family: Poppins, sans-serif;font-size: 16px;">Your Organization gained<br><b>{{ Auth::user()->govorganizationdetail->percentage->overall }}%</b> for the Preliminary Assessment.</span></div>
            </div>
            <div class="row" style="text-align: center;margin-top:20px">
                <div class="col" style="width:600px ">
                    <canvas id="chartId" aria-label="chart" style="margin-top:30px; font-size: 20px;" height="500" width="500"></canvas>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
                    <script type="text/javascript">
                        var ctx = document.getElementById("chartId").getContext("2d");
                        var radarData = {
                            labels: {!! json_encode($labels) !!},
                            datasets: [{
                                label: "Marks for each dimension",
                                data: {!! json_encode($percentage) !!},
                                backgroundColor: 'transparent',
                                borderColor: '#C51010',
                                borderWidth: 2,
                                pointRadius: 6,
                            }],
                        };

                        var radarOptions = {
                            responsive: false,
                            elements: {
                                line: {
                                    borderWidth: 6,
                                }
                            },
                            scales: {
                                r: {
                                    angleLines: {
                                        display: false
                                    },
                                    suggestedMin: 0,
                                    suggestedMax: 100
                                }
                            }
                        };

                        var radarChart = new Chart(ctx, {
                            type: 'radar',
                            data: radarData,
                            options: radarOptions,
                        });
                    </script>
                </div>
                <div class="col">
                    <ul style="font-family: Poppins, sans-serif;text-align: left;margin-top: 200px">You gained,
                        <li style="font-family: Poppins, sans-serif;margin-left: 20px"> {{ Auth::user()->govorganizationdetail->percentage->technology }}% for Technology & Data dimension.</li>
                        <li style="font-family: Poppins, sans-serif;margin-left: 20px"> {{ Auth::user()->govorganizationdetail->percentage->customer }}% for Customer dimension.</li>
                        <li style="font-family: Poppins, sans-serif;margin-left: 20px"> {{ Auth::user()->govorganizationdetail->percentage->operation }}% for Operation dimension.</li>
                        <li style="font-family: Poppins, sans-serif;margin-left: 20px"> {{ Auth::user()->govorganizationdetail->percentage->strategy }}% for Strategy dimension.</li>
                        <li style="font-family: Poppins, sans-serif;margin-left: 20px"> {{ Auth::user()->govorganizationdetail->percentage->culture }}% for Organization & Culture dimension.</li>
                    </ul>
                </div>
            </div>


            <h2 style="font-family: Poppins, sans-serif;text-align: center;margin-top: 20px">Description of each dimension</h2>
            <table class="table">
                <thead class="thead-light" style="font-family: Poppins, sans-serif;">
                    <tr>
                        <th scope="col" >Dimension</th>
                        <th scope="col">Description</th>
                    </tr>
                </thead>
                <tr>
                    <td>Customer:</td>
                    <td>This dimension evaluates how well government services prioritize citizens by assessing the design of services and interactions to meet their needs, including personalized experiences, user-friendly digital platforms, and data-driven anticipation of preferences.</td>
                </tr>
                <tr>
                    <td>Strategy:</td>
                    <td>This dimension evaluates the alignment of digital initiatives with organizational goals and the presence of a comprehensive and well-defined roadmap for digital transformation, emphasizing the importance of strategic prioritization and resource utilization.</td>
                </tr>
                <tr>
                    <td>Technology & Data:</td>
                    <td>This dimension concentrates on incorporating digital technologies such as cloud computing,AI, and IoT, with advanced maturity indicated by widespread technology adoption, strong infrastructure, data management,and effective data utilization for decision-making and predictive analytics.</td>
                </tr>
                <tr>
                    <td>Operation:</td>
                    <td>This dimension evaluates the integration of digital technology in government processes, with maturity shown by automated workflows, efficient resource use, and seamless digital tool incorporation, including e-governance, paperless processes, and real-time monitoring.</td>
                </tr>
                <tr>
                    <td>Organization & Culture:</td>
                    <td>This dimension gauges the organization's digital readiness and culture, assessing employee willingness to adopt technology, digital literacy, and innovation. Maturity here entails promoting a tech-embracing mindset, facilitating learning, empowering staff for digital input, and featuring digital skill development, change management, and innovation-oriented leadership.</td>
                </tr>
            </table>
            <div class="row" style="text-align: center">
                <div class="col"><img src="{{ asset('Light.png') }}" style=""></div>
            </div>



    </div>


        {{--  Page 03  --}}
        <div class="page-break"></div>
        <div style="border-style: solid;border-color: #000000; width:700px;height:1450px"
        <div class="container" style="width: 2400px; height: 782px; ">
            <div class="row" style="text-align: center; margin-top: 10px;">
                <div class="col"><span style="font-family: Poppins, sans-serif; font-size: 20px;">Overall Results of Preliminary Assessment</span></div>
            </div>
            <div class="row" style="margin-top: 10px;">
                <div class="col"><span style="color: #1c2c84; font-family: Poppins, sans-serif; font-weight: bold;">1.&nbsp; Technology and Data</span></div>
            </div>
            <div class="row" style="margin-top: 10px;text-align: center">
                <div class="col">
                    <div id="chart_div2" style="margin-left:50px;width: 900px; height: 350px;"></div>
                    <script>
                        google.charts.load('current', {packages: ['corechart']});
                        google.charts.setOnLoadCallback(drawBasic);

                        function drawBasic() {

                        var data = google.visualization.arrayToDataTable({{ Js::from($technology) }});

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
                            }
                        };

                        var chart = new google.visualization.BarChart(document.getElementById('chart_div2'));

                        chart.draw(data, options);
                        }
                    </script>
                </div>
            </div>
            <table class="table">
                <thead class="thead-light" style="font-family: Poppins, sans-serif;">
                    <tr>
                        <th scope="col" >Sub Dimension</th>
                        <th scope="col">Description</th>
                    </tr>
                </thead>
                <tr>
                    <td>Emerging Technology and Applications</td>
                    <td>Emerging technologies are technologies whose development, practical applications, or both are still largely unrealized, such that they are figuratively emerging into prominence from a background of nonexistence or obscurity. (e.g Mobile solution, drone technologies, etc.)</td>
                </tr>
                <tr>
                    <td>Data Management</td>
                    <td>Is an administrative process that includes acquiring, validating, storing, protecting, and processing required data to ensure the accessibility, reliability, and timeliness of the data for its users.</td>
                </tr>
                <tr>
                    <td>Delivery Governance</td>
                    <td>Delivery governance is a knowledge base of any service delivery organization's Operational processes and production support procedures.</td>
                </tr>
                <tr>
                    <td>Connectivity / Network</td>
                    <td>The quality, state, or capability of being connective or connected connectivity of a surface especially : the ability to connect to or communicate with another computer or computer system.</td>
                </tr>
                <tr>
                    <td>Security</td>
                    <td>The growing cyber threats in the world require public administrations to focus on e-governance security measures. It is important to be aware of the threats posed to e-governance. The coordinating institution is required to organise the development, monitoring and supervision of relevant information security rules and measures. Source (Maturity Model, Digital UK).</td>
                </tr>
                <tr>
                    <td>Technology Architecture</td>
                    <td>Technical Architecture (TA) is a form of IT architecture that is used to design computer systems. It involves the development of a technical blueprint with regard to the arrangement, interaction and interdependence of all elements, so that system-relevant requirements are met.</td>
                </tr>
                <tr>
                    <td>Data Governance</td>
                    <td>Is the process of managing the availability, usability, integrity and security of the data in enterprise systems, based on internal data standards and policies that also control data usage. Effective data governance ensures that data is consistent and trustworthy and doesn't get misused.</td>
                </tr>
                <tr>
                    <td>Data Engineering</td>
                    <td>Is the aspect of data science that focuses on practical applications of data collection and analysis.</td>
                </tr>
                <tr>
                    <td>Interoperability</td>
                    <td>The digitisation of public services means that ministries and government agencies capture and process data in a machine-readable form. Digital transformation requires digital databases and data exchange between those. Source (Maturity Model, Digital UK).</td>
                </tr>
                <tr>
                    <td>Application for Users</td>
                    <td>Type of online applications, benefits for citizens and gov officials and usage.</td>
                </tr>
            </table>
            <div class="row" style="text-align: center;">
                <div class="col"><img src="{{ asset('Light.png') }}" style=""></div>
            </div>
        </div>
    </div>

    <div class="page-break"></div>
    <div style="border-style: solid;border-color: #000000; width:700px;height:1450px"
    <div class="container" style="width: 2400px; height: 782px; ">
            <div class="row" style="margin-top: 50px;">
                <div class="col"><span style="color: #1c2c84;font-family: Poppins, sans-serif;font-weight: bold;">2.&nbsp; Customer</span></div>
            </div>
            <div class="row" style="margin-top: 50px;">
                <div class="col">
                    <div id="chart_div3" style="margin-left:100px;width: 800px; height: 300px;"></div>
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script>
                        google.charts.load('current', {packages: ['corechart']});
                        google.charts.setOnLoadCallback(drawBasic);

                    function drawBasic() {
                        {{--  var vAxis = ["Citizen Experience Strategy", "Citizen Engagement", "Citizen Experience", "Citizen Trust & Perception", "Citizen Insights & Behavior"];  --}}
                    var data = google.visualization.arrayToDataTable({{ Js::from($customer) }});

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

                    var chart = new google.visualization.BarChart(document.getElementById('chart_div3'));

                    chart.draw(data, options);
                    }
                    </script>
                </div>
            </div>
            <table class="table" style="margin-top: 10px">
                <thead class="thead-light" style="font-family: Poppins, sans-serif;">
                    <tr>
                        <th scope="col" >Sub Dimension</th>
                        <th scope="col">Description</th>
                    </tr>
                </thead>
                <tr>
                    <td>Citizen Experience Strategy</td>
                    <td>A plan that guides the activities and resource allocation required to deliver intended experiences that meet or exceed Citizen expectations in accordance with the goals of the Gov Institute.</td>
                </tr>
                <tr>
                    <td>Citizen Engagement</td>
                    <td>Citizen engagement is the means by which a Gov Institute creates a relationship with its Citizen base to foster brand loyalty and awareness. This can be accomplished via marketing campaigns, new content created for and posted to websites, and outreach via social media and mobile and wearable devices, among other methods.</td>
                </tr>
                <tr>
                    <td>Citizen Experience</td>
                    <td>Citizen experience is the internal and subjective response Citizens have to any direct or indirect contact with a Gov Institute.</td>
                </tr>
                <tr>
                    <td>Citizen trust & Perception</td>
                    <td>Citizen trust & Perception is the essential bond that underpins the relationships Gov Institutes have with the humans in their ecosystem— Citizens, workforce, and partners. It’s nearly impossible to build successful, lasting human experiences and relationships without trust, Data Privacy focuses on the rights of individuals, the purpose of data collection and processing, privacy preferences, and the way institutes govern personal data of data subjects.</td>
                </tr>
                <tr>
                    <td>Citizen Insights & Behaviour</td>
                    <td>A consumer is a person who identifies a need or desire, makes a purchase and then disposes of the product in the consumption process. A typical consumer’s utility is dependent on the consumption of agricultural and industrial goods, services, housing and wealth (Grundey, 2009). No two of them are the same, as everyone is influenced by different internal and external factors which form the consumer behaviour.</td>
                </tr>
            </table>
            <div class="row" style="text-align: center;">
                <div class="col"><img src="{{ asset('Light.png') }}" style="margin-top:300px"></div>
            </div>
        </div>
    </div>

    <div class="page-break"></div>
    <div style="border-style: solid;border-color: #000000; width:700px;height:1450px"
    <div class="container" style="width: 2400px; height: 782px; ">
            <div class="row" style="margin-top: 50px;">
                <div class="col"><span style="color: #1c2c84;font-family: Poppins, sans-serif;font-weight: bold;">3.&nbsp; Operation</span></div>
            </div>
            <div class="row" style="margin-top: 50px;">
                <div class="col">
                    <div id="chart_div4" style="margin-left:100px;width: 800px; height: 300px;"></div>
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script>
                        google.charts.load('current', {packages: ['corechart']});
                        google.charts.setOnLoadCallback(drawBasic);

                    function drawBasic() {

                      var data = google.visualization.arrayToDataTable({{ Js::from($operation) }});

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

                      var chart = new google.visualization.BarChart(document.getElementById('chart_div4'));

                      chart.draw(data, options);
                    }
                    </script>
                </div>
            </div>
            <table class="table" style="margin-top: 10px">
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
            <div class="row" style="text-align: center;">
                <div class="col"><img src="{{ asset('Light.png') }}" style="margin-top:300px"></div>
            </div>
        </div>
    </div>

    {{--  Page 05  --}}
    <div class="page-break"></div>
    <div style="border-style: solid;border-color: #000000; width:700px;height:1450px"
    <div class="container" style="width: 535px;height: 782px;">
        <div class="row" style="margin-top: 50px;">
            <div class="col"><span style="color: #1c2c84;font-family: Poppins, sans-serif;font-weight: bold;">4.&nbsp; Strategy</span></div>
        </div>
        <div class="row" style="margin-top: 50px;">
            <div class="col">
                <div id="chart_div5" style="margin-left:100px;width: 800px; height: 300px;"></div>
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script>
                    google.charts.load('current', {packages: ['corechart']});
                    google.charts.setOnLoadCallback(drawBasic);

                    function drawBasic() {

                    var data = google.visualization.arrayToDataTable({{ Js::from($strategy) }});

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

                    var chart = new google.visualization.BarChart(document.getElementById('chart_div5'));

                    chart.draw(data, options);
                    }
                </script>
            </div>
        </div>
        <table class="table" style="margin-top: 10px">
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
            <div class="row" style="text-align: center;">
                <div class="col"><img src="{{ asset('Light.png') }}" style="margin-top:100px"></div>
            </div>
    </div>
</div>

    <div class="page-break"></div>
    <div style="border-style: solid;border-color: #000000; width:700px;height:1450px"
    <div class="container" style="width: 535px;height: 782px;">
        <div class="row" style="margin-top: 50px;">
            <div class="col"><span style="color: #1c2c84;font-family: Poppins, sans-serif;font-weight: bold;">5.&nbsp; Organization & Culture</span></div>
        </div>
        <div class="row" style="margin-top: 50px;">
            <div class="col">
                <div id="chart_div6" style="margin-left:100px;width: 800px; height: 300px;"></div>
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script>
                    google.charts.load('current', {packages: ['corechart']});
                    google.charts.setOnLoadCallback(drawBasic);

                function drawBasic() {

                  var data = google.visualization.arrayToDataTable({{ Js::from($culture) }});

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

                  var chart = new google.visualization.BarChart(document.getElementById('chart_div6'));

                  chart.draw(data, options);
                }
                </script>
            </div>
        </div>
        <table class="table" style="margin-top: 10px">
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
        <div class="row" style="text-align: center;margin-top: 300px;">
            <div class="col"><img src="{{ asset('Light.png') }}" style=""></div>
        </div>
    </div>
    </div>
</body>
</html>



