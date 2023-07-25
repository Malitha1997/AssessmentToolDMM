@extends('layouts.userNavbar')

@section('content')
<body style="border-color: rgb(46,127,208);color: rgb(255,255,255);">
    <section style="height: 3100px;">
        <div class="container" data-aos="zoom-in" data-aos-duration="1000" style="text-align: center;width: 1211px;height: 480px;margin-top: 150px;border-width: 2px;border-color: #5f2b84;">
            <div class="flex-column justify-content-center" style="width: 1211px;height: 480px;border-style: solid;border-color: #5f2b84;">
                <div class="row" style="margin-top: 30px;">
                    <div class="col"><img src="{{ asset('img/Award.png') }}"></div>
                </div>
                <div class="row" style="height: 100px;">
                    <div class="col"><span style="color: #1f2471;font-size: 32px;font-weight: bold;font-family: Poppins, sans-serif;"><br>Successfully completed Preliminary Assessment<br><br></span></div>
                </div>
                <div class="row">
                    <div class="col"><span style="font-size: 20px;color: rgb(0,0,0);font-family: Poppins, sans-serif;text-align: center;"><br>You gained a result more than 50% for the Preliminary Assessment. You are eligible for <br>deep assessment.<br><br></span></div>
                </div>
                <div class="row">
                    <div class="col"><button class="btn btn-primary" type="button" style="width: 266px;height: 55px;color: #ef4323;font-size: 20px;background: rgb(255,255,255);border: 2px solid #ef4323;font-weight: bold;font-family: Poppins, sans-serif;">Show Results</button></div>
                    <div class="col"><button class="btn btn-primary" type="button" style="width: 266px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 6.png') }}&quot;);border-width: 0px;font-size: 20px;font-family: Poppins, sans-serif;">Deep Assessment</button></div>
                </div>
                <div class="row">
                    <div class="col"><span style="font-size: 16px;color: rgb(0,0,0);font-family: Poppins, sans-serif;text-align: center;">Back to&nbsp;<a href="/home" style="color: #5f2b84;"><span style="color: #5f2b84;">Organization profile</span><br><br></a></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row" style="text-align: center;">
                <div class="col"><span data-aos="fade-down" data-aos-duration="1000" style="color: #1f2471;font-size: 40px;font-family: Poppins, sans-serif;font-weight: bold;text-align: center;"><br>Summery of the Preliminary Assessment Results<br><br></span></div>
            </div>
            {{--  <div class="row" style="text-align: center;">
                <div class="col"><canvas id="chartId" aria-label="chart" data-aos="fade-down" data-aos-duration="1000" style="margin-left: 200px;font-size: 20px" height="664" width="830"></canvas>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.1.1/chart.min.js"></script>
                    <script>
                       var chrt = document.getElementById("chartId").getContext("2d");
                       var chartId = new Chart(chrt, {
                          type: 'radar',
                          data: {
                             labels: ["Technology & data", "Operation", "Organization & culture", "Strategy", "Customer"],
                             datasets: [{
                                label: "Marks for each dimension",
                                data: [20, 40, 57, 95, 80],
                                backgroundColor: ['#E5593499'],
                                pointBackgroundColor: ['pink', 'pink', 'pink', 'pink', 'pink', 'pink'],
                                borderColor: ['red'],
                                borderWidth: 1,
                                pointRadius: 6,

                             }],
                          },
                          options: {
                             responsive: false,
                             elements: {
                                line: {
                                   borderWidth: 6
                                }
                             }
                          },
                       });
                    </script></div>
            </div>  --}}
            <div class="row" style="text-align: center;">
                <div class="col"><span data-aos="fade-down" data-aos-duration="1000" style="color: #1f2471;font-size: 40px;font-family: Poppins, sans-serif;font-weight: bold;"><br>Summery of the Preliminary Assessment Results <br>for each dimensions<br><br></span></div>
            </div>
            <div class="row">
                <div class="col" style="text-align: center;">
                    <div data-aos="zoom-in" data-aos-duration="1000" style="width: 538px;height: 457px;box-shadow: 10px 10px 20px 2px rgb(146,140,140);margin-left: 35px;">
                        <div class="row">
                            <div class="col"><span style="color: #1f2471;font-size: 24px;font-family: Poppins, sans-serif;font-weight: bold;" ><br>Technology &amp; Data<br><br></span></div>
                        </div>
                        <div class="row" style="height: 110px;">
                            <div class="col"><img src="{{ asset('img/Robotic%20hand.png') }}"></div>
                        </div>
                        <div class="row" style="text-align: left;margin-left: 5px;">
                            <div class="col" style="height: 150px;"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 24px;text-align: left;margin-left: 5px;"><br>You gained a 50% result for the Preliminary Assessment. You are eligible for deep assessment.<br><br></span></div>
                        </div>

                        <div class="row">
                            <div class="col"><a class="btn btn-primary" href="/technologyresults" type="button" style="font-size: 20px;font-family: Poppins, sans-serif;width: 188px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 6(1).png') }}&quot;);border-width: 0px;" >Read More</a></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div data-aos="zoom-in" data-aos-duration="1000" style="width: 538px;height: 457px;box-shadow: 10px 10px 20px 2px rgb(146,140,140);margin-left: 35px;">
                        <div class="row" style="text-align: center;">
                            <div class="col"><span style="color: #1f2471;font-size: 24px;font-family: Poppins, sans-serif;font-weight: bold;"><br>Customer<br><br></span></div>
                        </div>
                        <div class="row" style="text-align: center;height: 110px;">
                            <div class="col"><img src="{{ asset('img/Support.png') }}"></div>
                        </div>
                        <div class="row" style="text-align: left;margin-left: 5px;">
                            <div class="col" style="height: 150px;"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 24px;text-align: left;margin-left: 5px;"><br>You gained a 50% result for the Preliminary Assessment. You are eligible for deep assessment.<br><br></span></div>
                        </div>
                        <div class="row" style="text-align: center;">
                            <div class="col"><button class="btn btn-primary" type="button" style="font-size: 20px;font-family: Poppins, sans-serif;width: 188px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 6(1).png') }}&quot;);border-width: 0px;">Read More</button></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 50px;">
                <div class="col">
                    <div data-aos="zoom-in" data-aos-duration="1000" style="width: 538px;height: 457px;box-shadow: 10px 10px 20px 2px rgb(146,140,140);margin-left: 35px;">
                        <div class="row" style="text-align: center;">
                            <div class="col"><span style="color: #1f2471;font-size: 24px;font-family: Poppins, sans-serif;font-weight: bold;"><br>Operation<br><br></span></div>
                        </div>
                        <div class="row" style="text-align: center;height: 110px;">
                            <div class="col"><img src="{{ asset('img/Gears.png') }}"></div>
                        </div>
                        <div class="row" style="text-align: left;margin-left: 5px;">
                            <div class="col" style="height: 150px;"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 24px;text-align: left;margin-left: 5px;"><br>You gained a 50% result for the Preliminary Assessment. You are eligible for deep assessment.<br><br></span></div>
                        </div>
                        <div class="row" style="text-align: center;">
                            <div class="col"><button class="btn btn-primary" type="button" style="font-size: 20px;font-family: Poppins, sans-serif;width: 188px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 6(1).png') }}&quot;);border-width: 0px;">Read More</button></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div data-aos="zoom-in" data-aos-duration="1000" style="width: 538px;height: 457px;box-shadow: 10px 10px 20px 2px rgb(146,140,140);margin-left: 35px;">
                        <div class="row" style="text-align: center;">
                            <div class="col"><span style="color: #1f2471;font-size: 24px;font-family: Poppins, sans-serif;font-weight: bold;"><br>Strategy<br><br></span></div>
                        </div>
                        <div class="row" style="text-align: center;height: 110px;">
                            <div class="col"><img src="{{ asset('img/Marketing.png') }}"></div>
                        </div>
                        <div class="row" style="text-align: left;margin-left: 5px;">
                            <div class="col" style="height: 150px;"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 24px;text-align: left;margin-left: 5px;"><br>You gained a 50% result for the Preliminary Assessment. You are eligible for deep assessment.<br><br></span></div>
                        </div>
                        <div class="row" style="text-align: center;">
                            <div class="col"><button class="btn btn-primary" type="button" style="font-size: 20px;font-family: Poppins, sans-serif;width: 188px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 6(1).png') }}&quot;);border-width: 0px;">Read More</button></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-center" style="text-align: center;margin-top: 50px;">
                <div class="col" style="text-align: center;">
                    <div data-aos="zoom-in" data-aos-duration="1000" style="width: 538px;height: 457px;box-shadow: 10px 10px 20px 2px rgb(146,140,140);margin-left: 360px;text-align: center;">
                        <div class="row" style="text-align: center;">
                            <div class="col"><span style="color: #1f2471;font-size: 24px;font-family: Poppins, sans-serif;font-weight: bold;"><br>Organization & Culture<br><br></span></div>
                        </div>
                        <div class="row" style="text-align: center;height: 110px;">
                            <div class="col"><img src="{{ asset('img/Unity.png') }}"></div>
                        </div>
                        <div class="row" style="text-align: left;margin-left: 5px;">
                            <div class="col" style="height: 150px;"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 24px;text-align: left;margin-left: 5px;"><br>You gained a 50% result for the Preliminary Assessment. You are eligible for deep assessment.<br><br></span></div>
                        </div>
                        <div class="row" style="text-align: center;">
                            <div class="col"><button class="btn btn-primary" type="button" style="font-size: 20px;font-family: Poppins, sans-serif;width: 188px;height: 55px;background: url(&quot;{{ asset('img/Screenshot (561) 6(1).png') }}&quot;);border-width: 0px;">Read More</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal"  id="registerModal">
            <div class="overlay"></div>
            <div class="content">
                <div class="row" style="text-align: center;">
                    <div class="col"><span style="color: #1f2471;font-size: 24px;font-family: Poppins, sans-serif;font-weight: bold;"><br>Technology & Data<br><br></span></div>
                </div>
                            <div class="bar-graph bar-graph-horizontal bar-graph-one" >
                                <div class="bar-one" >
                                    <span class="year">Emerging Technology and Applications</span>
                                    <div class="bar" data-percentage="69.6%"></div>
                                </div>
                                <div class="bar-two">
                                    <span class="year">Data Management</span>
                                    <div class="bar" data-percentage="71%"></div>
                                </div>
                                <div class="bar-three">
                                    <span class="year">Delivery Governance</span>
                                    <div class="bar" data-percentage="74.7%"></div>
                                </div>
                            </div>

            </div>
        </div>
    </section>

    {{--  <script>
        function myFunction() {
            document.getElementById("popup-1").classList.toggle("active");
        }
    </script>  --}}


</body>
@endsection
