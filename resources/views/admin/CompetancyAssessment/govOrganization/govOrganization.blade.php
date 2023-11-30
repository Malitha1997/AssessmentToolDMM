@extends('layouts.adminNavbar')

@section('content')
<div class="row" data-aos="fade-in" data-aos-duration="1000" style="height: 50px;font-family:poppins;">
    <div class="col" style="height: 50px;"><a href="#" style="font-size:5px;margin-left: 50px;color: var(--bs-gray-500);font-size: 20px;font-famly:poppins">Assessments&nbsp; &nbsp; &nbsp;&gt;</a><a href="#" style="font-size:5px;color: var(--bs-gray-500);font-size: 20px;">&nbsp; &nbsp; &nbsp; Competency Assessment&nbsp; &nbsp; &nbsp;&gt;</a><a href="{{route('competancyDashboard')}}" style="font-size:5px;color: var(--bs-gray-500);font-size: 20px;">&nbsp; &nbsp; &nbsp; Dashboard&nbsp; &nbsp; &nbsp;&gt;</a><a href="{{route('competancyGovorganization')}}" style="font-size:5px;color: var(--bs-emphasis-color);font-size: 20px;">&nbsp; &nbsp; &nbsp;Organization Dashboard</a></div>
</div>
<span data-aos="fade-in" data-aos-duration="1000" style="margin-top: 180px;color: #1F2471;font-size: 24px;font-weight: bold;margin-left: 400px;font-family:poppins">{{ $govorganizationname->gov_org_name }}</span>
<div class="container" data-aos="fade-in" data-aos-duration="1000" style="margin-top: 50px;font-family:poppins">
    <div class="row" style="height: 479px;">
        <div class="col-md-6" style="height: 420px;border-radius: 10px;box-shadow: 0px 0px 12px 1px rgb(37,30,30);"><span style="color: #F01F75;">General Information</span>
            <div class="row">
                <div class="col" style="margin-top: 30px;"><span style="color: var(--bs-emphasis-color);">User Name</span><input type="text" style="margin-left: 150px;width: 300px;border-style: solid;border-color: var(--bs-secondary-border-subtle);border-radius: 5px;" value="{{ $govorganizationname->govorganizationdetail->user->username}}" readonly></div>
            </div>
            <div class="row">
                <div class="col" style="margin-top: 30px;"><span style="color: var(--bs-emphasis-color);">Organization Name</span><input type="text" style="margin-left: 84px;width: 300px;border-style: solid;border-color: var(--bs-secondary-border-subtle);border-radius: 5px;" value="{{ $govorganizationname->gov_org_name }}" readonly></div>
            </div>
            <div class="row">
                <div class="col" style="margin-top: 30px;"><span style="color: var(--bs-emphasis-color);">CDIO Name</span><input type="text" style="margin-left: 145px;width: 300px;border-style: solid;border-color: var(--bs-secondary-border-subtle);border-radius: 5px;" readonly></div>
            </div>
            <div class="row">
                <div class="col" style="margin-top: 30px;"><span style="color: var(--bs-emphasis-color);">NextGenGov Officers</span><input type="text" style="margin-left: 75px;width: 300px;border-style: solid;border-color: var(--bs-secondary-border-subtle);border-radius: 5px;" readonly></div>
            </div>
            <div class="row">
                <div class="col" style="margin-top: 10px;"><input type="text" style="margin-left: 240px;width: 300px;border-style: solid;border-color: var(--bs-secondary-border-subtle);border-radius: 5px;" readonly></div>
            </div>
            <div class="row">
                <div class="col" style="margin-top: 10px;"><input type="text" style="margin-left: 240px;width: 300px;border-style: solid;border-color: var(--bs-secondary-border-subtle);border-radius: 5px;" readonly><input type="text" style="margin-left: 240px;width: 300px;border-style: solid;border-color: var(--bs-secondary-border-subtle);border-radius: 5px;margin-top: 10px;" readonly></div>
            </div>
        </div>
        <div class="col-md-6" style="margin-left: 20px;height: 420px;width: 550px;border-radius: 10px;box-shadow: 0px 0px 12px 1px rgb(37,30,30);"><span style="color: #F01F75;">Responses</span>
            <div class="row">
                <div class="col" style="text-align: center;">
                <div data-aos="zoom-in" data-aos-duration="1000" id="chart_div" style="width:500px;height:350px;font-family: Poppins;margin-left:5%;font-family:poppins"></div>
                   
                    <script>
                        google.charts.load('current', { packages: ['corechart'] });
                        google.charts.setOnLoadCallback(drawPieChart);

                        function drawPieChart() {
                            var data = google.visualization.arrayToDataTable({{ Js::from($opAvg) }});

                            var options = {
                                
                                titleTextStyle: {
                                    fontName: 'Poppins',
                                    fontSize: 18,
                                },
                                colors: ['#FF5733', '#33FF57', '#3357FF'],
                            };

                            var chart = new google.visualization.PieChart(document.getElementById('chart_div'));

                            chart.draw(data, options);
                        }
                    </script>
                </div>
            </div>
            <!-- <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: #d7d373;width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"></div>
                <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;">Assessment Completed</span></div>
            </div>
            <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: #dfcfc4;width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"></div>
                <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;margin-left: -100px;">Inprogress</span></div>
            </div>
            <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: #fbfada;width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"></div>
                <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;margin-left: -120px;">Not start</span></div>
            </div> -->
        </div>
    </div>
</div>
<div data-aos="fade-in" data-aos-duration="1000" class="row" style="background: #1F2471;text-align: center;font-family:poppins">
    <div class="col" style="height: 75px;"><span style="font-size: 24px;color: #ffff;">Overall Results of Digital Government Competency Assessment</span></div>
</div>
<div data-aos="fade-in" data-aos-duration="1000" style="height: 500px;margin-top: 20px;box-shadow: 0px 0px 12px 1px rgb(37,30,30);font-family:poppins">
    <div class="row" style="text-align: center;font-size: 20px;">
        <div class="col"><span style="color: var(--bs-emphasis-color);"><br>Self Assessment - ICT</span></div>
    </div>
    <div class="container" style="margin-top: 40px;">
        <div class="row">
            <div class="col-md-6" style="text-align: center;">
                <div class="row" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="col">
                        <div class="row" style="width: 257px;height: 85px;margin-top: 50px;margin-bottom: 50px;margin-left: 150px;background: var(--bs-body-bg);border-radius: 10px;box-shadow: 0px 0px 12px 1px rgb(37,30,30);">
                            <div class="col" style="border-radius: 10px;"><span style="color: var(--bs-emphasis-color);margin-top: 10px;">Number of Responses</span>
                                <div class="row" style="font-weight: bold;">
                                    <div class="col"><span style="color: var(--bs-emphasis-color);font-size: 24px;">{{$countIct}}</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" data-aos="zoom-in" data-aos-duration="1000" style="width: 257px;height: 85px;margin-left: 150px;background: var(--bs-body-bg);border-radius: 10px;box-shadow: 0px 0px 12px 1px rgb(37,30,30);">
                    <div class="col"><span style="color: var(--bs-emphasis-color);margin-top: 10px;">Inprogress</span>
                        <div class="row" style="font-weight: bold;">
                            <div class="col"><span style="color: var(--bs-emphasis-color);font-size: 24px;">{{$countIctInprogress}}</span></div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top:10px">
                    <div class="col"><a type="button" href="{{route('competancyGovorganizationIct',$govorganizationname->id)}}">See more</a></div>
                </div>
            </div>
            <div data-aos="zoom-in" data-aos-duration="1000" id="chart_div2" style="width: 542px; height: 259px; font-family: Poppins; margin-left: 50px; font-family: Poppins"></div>
                    
                    <script>
                        google.charts.load('current', { packages: ['corechart', 'bar'] });
                        google.charts.setOnLoadCallback(drawBasic);

                        function drawBasic() {
                            var data = google.visualization.arrayToDataTable({!! json_encode($overallIct) !!});

                            var options = {
                                chartArea: { width: '50%' },
                                hAxis: {
                                    title: 'Proficiency',
                                    minValue: 0,
                                    maxValue: 100,
                                    textStyle: { fontName: 'Poppins' }
                                },
                                vAxis: {
                                    title: 'Competency Area',
                                    textStyle: { fontName: 'Poppins' }
                                },
                                colors: ['#92248D']
                            };

                            var chart = new google.visualization.BarChart(document.getElementById('chart_div2'));

                            chart.draw(data, options);
                        }
                    </script>
        </div>
    </div>
</div>
<div data-aos="fade-in" data-aos-duration="1000" style="height: 500px;margin-top: 20px;box-shadow: 0px 0px 12px 1px rgb(37,30,30);font-family:poppins">
    <div class="row" style="text-align: center;font-size: 20px;">
        <div class="col"><span style="color: var(--bs-emphasis-color);"><br>Self Assessment -Digital Government</span></div>
    </div>
    <div class="container" style="margin-top: 40px;">
        <div class="row">
            <div class="col-md-6" style="text-align: center;">
                <div class="row"data-aos="zoom-in" data-aos-duration="1000">
                    <div class="col">
                        <div class="row" style="width: 257px;height: 85px;margin-top: 50px;margin-bottom: 50px;margin-left: 150px;background: var(--bs-body-bg);border-radius: 10px;box-shadow: 0px 0px 12px 1px rgb(37,30,30);">
                            <div class="col" style="border-radius: 10px;"><span style="color: var(--bs-emphasis-color);margin-top: 10px;">Number of Responses</span>
                                <div class="row" style="font-weight: bold;">
                                    <div class="col"><span style="color: var(--bs-emphasis-color);font-size: 24px;">{{$countDigitalGovernment}}</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" data-aos="zoom-in" data-aos-duration="1000" style="width: 257px;height: 85px;margin-left: 150px;background: var(--bs-body-bg);border-radius: 10px;box-shadow: 0px 0px 12px 1px rgb(37,30,30);">
                    <div class="col"><span style="color: var(--bs-emphasis-color);margin-top: 10px;">Inprogress</span>
                        <div class="row" style="font-weight: bold;">
                            <div class="col"><span style="color: var(--bs-emphasis-color);font-size: 24px;">{{$countDigitalGovernmentInprogress}}</span></div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top:10px">
                            <div class="col"><a href="{{route('competancyGovorganizationDigitalGovernment',$govorganizationname->id)}}" type="button">See more</a></div>
                </div>
            </div>
            <div data-aos="zoom-in" data-aos-duration="1000" id="chart_div3" style="width: 542px; height: 380px; font-family: Poppins; font-family: Poppins"></div>
                    
                    <script>
                        google.charts.load('current', { packages: ['corechart', 'bar'] });
                        google.charts.setOnLoadCallback(drawBasic);

                        function drawBasic() {
                            var data = google.visualization.arrayToDataTable({!! json_encode($overallDigitalGovernment) !!});

                            var options = {
                                chartArea: { width: '50%' },
                                hAxis: {
                                    title: 'Proficiency',
                                    minValue: 0,
                                    maxValue: 100,
                                    textStyle: { fontName: 'Poppins' }
                                },
                                vAxis: {
                                    title: 'Competency Area',
                                    textStyle: { fontName: 'Poppins' }
                                },
                                colors: ['#0BA253']
                            };

                            var chart = new google.visualization.BarChart(document.getElementById('chart_div3'));

                            chart.draw(data, options);
                        }
                    </script>
        </div>
    </div>
</div>
<div data-aos="fade-in" data-aos-duration="1000" style="height: 500px;margin-top: 20px;box-shadow: 0px 0px 12px 1px rgb(37,30,30);font-family:poppins">
    <div class="row" style="text-align: center;font-size: 20px;">
        <div class="col"><span style="color: var(--bs-emphasis-color);"><br>Self Assessment - Management</span></div>
    </div>
    <div class="container" style="margin-top: 40px;">
        <div class="row">
            <div class="col-md-6" style="text-align: center;">
                <div class="row" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="col">
                        <div class="row" style="width: 257px;height: 85px;margin-top: 50px;margin-bottom: 50px;margin-left: 150px;background: var(--bs-body-bg);border-radius: 10px;box-shadow: 0px 0px 12px 1px rgb(37,30,30);">
                            <div class="col" style="border-radius: 10px;"><span style="color: var(--bs-emphasis-color);margin-top: 10px;">Number of Responses</span>
                                <div class="row" style="font-weight: bold;">
                                    <div class="col"><span style="color: var(--bs-emphasis-color);font-size: 24px;">{{$countManagement}}</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" data-aos="zoom-in" data-aos-duration="1000" style="width: 257px;height: 85px;margin-left: 150px;background: var(--bs-body-bg);border-radius: 10px;box-shadow: 0px 0px 12px 1px rgb(37,30,30);">
                    <div class="col"><span style="color: var(--bs-emphasis-color);margin-top: 10px;">Inprogress</span>
                        <div class="row" style="font-weight: bold;">
                            <div class="col"><span style="color: var(--bs-emphasis-color);font-size: 24px;">{{$countManagementInprogress}}</span></div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top:10px">
                            <div class="col"><a type="button" href="{{route('competancyGovorganizationManagement',$govorganizationname->id)}}">See more</a></div>
                </div>
            </div>
            <div data-aos="zoom-in" data-aos-duration="1000" id="chart_div4" style="width: 542px; height: 259px; font-family: Poppins; margin-left: 50px; font-family: Poppins"></div>
                    
                    <script>
                        google.charts.load('current', { packages: ['corechart', 'bar'] });
                        google.charts.setOnLoadCallback(drawBasic);

                        function drawBasic() {
                            var data = google.visualization.arrayToDataTable({!! json_encode($overallManagement) !!});

                            var options = {
                                chartArea: { width: '50%' },
                                hAxis: {
                                    title: 'Proficiency',
                                    minValue: 0,
                                    maxValue: 100,
                                    textStyle: { fontName: 'Poppins' }
                                },
                                vAxis: {
                                    title: 'Competency Area',
                                    textStyle: { fontName: 'Poppins' }
                                },
                                colors: ['#ED2C3D']
                            };

                            var chart = new google.visualization.BarChart(document.getElementById('chart_div4'));

                            chart.draw(data, options);
                        }
                    </script>
        </div>
    </div>
</div>
@endsection
