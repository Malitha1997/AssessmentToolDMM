@extends('layouts.adminNavbar')

@section('content')
<div class="row" data-aos="fade-in" data-aos-duration="1000" style="height: 50px;font-family:poppins;">
    <div class="col" style="height: 50px;"><a href="#" style="font-size:5px;margin-left: 50px;color: var(--bs-gray-500);font-size: 20px;font-famly:poppins">Assessments&nbsp; &nbsp; &nbsp;&gt;</a><a href="#" style="font-size:5px;color: var(--bs-gray-500);font-size: 20px;">&nbsp; &nbsp; &nbsp; Competency Assessment&nbsp; &nbsp; &nbsp;&gt;</a><a href="{{route('competancyDashboard')}}" style="font-size:5px;color: var(--bs-gray-500);font-size: 20px;">&nbsp; &nbsp; &nbsp; Dashboard&nbsp; &nbsp; &nbsp;&gt;</a><a href="{{ route('competancyAssessments.show', $govorganizationname->id) }}" style="font-size:5px;color: var(--bs-gray-500);font-size: 20px;">&nbsp; &nbsp; &nbsp;Organization Dashboard&nbsp; &nbsp; &nbsp;&gt;</a><a href="#" style="font-size:5px;color: var(--bs-emphasis-color);font-size: 20px;">&nbsp; &nbsp; &nbsp;ICT</a></div>
</div>
    <div class="row" data-aos="fade-in" data-aos-duration="1000" style="text-align: center;font-size: 20px;font-family:poppins">
        <div class="col"><span style="color: #1F2471;font-weight: bold;font-size: 28px;"><br>Self Assessment - ICT</span></div>
    </div>
    <div data-aos="fade-in" data-aos-duration="1000" style="font-family:poppins;height: 1700px;margin-top: 50px;border-radius: 20px;border-style: solid;border-color: var(--bs-dark-border-subtle);">
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
                    <div class="row" style="width: 257px;height: 85px;margin-left: 150px;background: var(--bs-body-bg);border-radius: 10px;box-shadow: 0px 0px 12px 1px rgb(37,30,30);">
                        <div class="col"><span style="color: var(--bs-emphasis-color);margin-top: 10px;">Inprogress</span>
                            <div class="row" style="font-weight: bold;">
                                <div class="col"><span style="color: var(--bs-emphasis-color);font-size: 24px;">{{$countIctInprogress}}</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                <div data-aos="zoom-in" data-aos-duration="1000" id="chart_div" style="width: 542px; height: 259px; font-family: Poppins; margin-left: 25px; font-family: Poppins"></div>
                    
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
                                colors: ['#CC1D56']
                            };

                            var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

                            chart.draw(data, options);
                        }
                    </script>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top: 70px;">
            <div class="row">
                <div class="col-md-6" style="width: 550px;margin-left: 20px;height: 600px;box-shadow: 0px 10px 10px 1px var(--bs-body-color);">
                    <div class="row" style="background: #586CA9;text-align: center;">
                        <div class="col" style="height: 60px;"><span style="margin-top: 20px;color:#fff">Top &amp; 2nd Tier Management</span></div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="row" style="height: 40px;text-align: center;margin-top: 20px;">
                                <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>{{$countTopIct}}</span></div>
                                <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;">Assessment Completed</span></div>
                            </div>
                            <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>{{$countTopIctInprogress}}</span></div>
                                <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;margin-left: -100px;">Inprogress</span></div>
                            </div>
                            <!-- <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>22</span></div>
                                <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;margin-left: -120px;">Not start</span></div>
                            </div> -->
                            <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                <div class="col" style="margin-top: 40px;">
                                <div data-aos="zoom-in" data-aos-duration="1000" id="chart_div2" style="width: 460px; height: 259px; font-family: Poppins; margin-left: 25px; font-family: Poppins"></div>
                                
                                <script>
                                    google.charts.load('current', { packages: ['corechart', 'bar'] });
                                    google.charts.setOnLoadCallback(drawBasic);

                                    function drawBasic() {
                                        var data = google.visualization.arrayToDataTable({!! json_encode($overallIctTop) !!});

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
                                            colors: ['#CC1D56']
                                        };

                                        var chart = new google.visualization.BarChart(document.getElementById('chart_div2'));

                                        chart.draw(data, options);
                                    }
                                </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" style="width: 550px;margin-left: 20px;box-shadow: 0px 10px 10px 1px var(--bs-body-color);">
                    <div class="row" style="background: #586CA9;text-align: center;">
                        <div class="col" style="height: 60px;background: #0BA253;"><span style="margin-top: 20px;color:#fff">Chief Digital Information Officers</span></div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="row" style="height: 40px;text-align: center;margin-top: 20px;">
                                <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>0</span></div>
                                <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;">Assessment Completed</span></div>
                            </div>
                            <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>0</span></div>
                                <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;margin-left: -100px;">Inprogress</span></div>
                            </div>
                            <!-- <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>0</span></div>
                                <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;margin-left: -120px;">Not start</span></div>
                            </div> -->
                            <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                <div class="col" style="margin-top: 40px;">
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6" style="width: 550px;margin-left: 20px;height: 600px;box-shadow: 0px 10px 10px 1px var(--bs-body-color);margin-top: 20px;">
                    <div class="row" style="background: #586CA9;text-align: center;">
                        <div class="col" style="height: 60px;background: #ED2C3D;"><span style="margin-top: 20px;color:#fff">Middle &amp; Junior Management</span></div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="row" style="height: 40px;text-align: center;margin-top: 20px;">
                                <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>{{$countMidIct}}</span></div>
                                <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;">Assessment Completed</span></div>
                            </div>
                            <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>{{$countMidIctInprogress}}</span></div>
                                <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;margin-left: -100px;">Inprogress</span></div>
                            </div>
                            <!-- <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>22</span></div>
                                <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;margin-left: -120px;">Not start</span></div>
                            </div> -->
                            <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                <div class="col" style="margin-top: 40px;">
                                <div data-aos="zoom-in" data-aos-duration="1000" id="chart_div3" style="width: 460px; height: 259px; font-family: Poppins; margin-left: 25px; font-family: Poppins"></div>
                                
                                <script>
                                    google.charts.load('current', { packages: ['corechart', 'bar'] });
                                    google.charts.setOnLoadCallback(drawBasic);

                                    function drawBasic() {
                                        var data = google.visualization.arrayToDataTable({!! json_encode($overallIctMid) !!});

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
                                            colors: ['#CC1D56']
                                        };

                                        var chart = new google.visualization.BarChart(document.getElementById('chart_div3'));

                                        chart.draw(data, options);
                                    }
                                </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" style="width: 550px;margin-left: 20px;box-shadow: 0px 10px 10px 1px var(--bs-body-color);margin-top: 20px;">
                    <div class="row" style="background: #586CA9;text-align: center;">
                        <div class="col" style="height: 60px;background: #F68C42;"><span style="margin-top: 20px;color:#fff">Operational Staff</span></div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="row" style="height: 40px;text-align: center;margin-top: 20px;">
                                <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>{{$countOpIct}}</span></div>
                                <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;">Assessment Completed</span></div>
                            </div>
                            <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>{{$countOpIctInprogress}}</span></div>
                                <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;margin-left: -100px;">Inprogress</span></div>
                            </div>
                            <!-- <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                <div class="col-xxl-2" style="text-align: center;margin-left: 130px;height: 30px;color: rgb(47,52,56);background: var(--bs-secondary-bg);width: 60px;border-style: solid;border-color: var(--bs-gray-600);border-radius: 5px;"><span>22</span></div>
                                <div class="col-xxl-6" style="height: 40px;"><span style="color: var(--bs-emphasis-color);margin-top: 5px;margin-left: -120px;">Not start</span></div>
                            </div> -->
                            <div class="row" style="height: 40px;text-align: center;margin-top: 5px;">
                                <div class="col" style="margin-top: 40px;">
                                <div data-aos="zoom-in" data-aos-duration="1000" id="chart_div4" style="width: 460px; height: 259px; font-family: Poppins; margin-left: 25px; font-family: Poppins"></div>
                                
                                <script>
                                    google.charts.load('current', { packages: ['corechart', 'bar'] });
                                    google.charts.setOnLoadCallback(drawBasic);

                                    function drawBasic() {
                                        var data = google.visualization.arrayToDataTable({!! json_encode($overallIctOp) !!});

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
                                            colors: ['#CC1D56']
                                        };

                                        var chart = new google.visualization.BarChart(document.getElementById('chart_div4'));

                                        chart.draw(data, options);
                                    }
                                </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection