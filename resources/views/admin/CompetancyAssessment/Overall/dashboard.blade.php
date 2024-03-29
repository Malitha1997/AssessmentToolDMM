@extends('layouts.adminNavbar')

@section('content')
<div class="row" data-aos="fade-in" data-aos-duration="1000" style="height: 50px;font-family:poppins;">
    <div class="col" style="height: 50px;"><a href="#" style="font-size:5px;margin-left: 50px;color: var(--bs-gray-500);font-size: 20px;font-famly:poppins">Assessments&nbsp; &nbsp; &nbsp;&gt;</a><a href="#" style="font-size:5px;color: var(--bs-gray-500);font-size: 20px;">&nbsp; &nbsp; &nbsp; Competency Assessment&nbsp; &nbsp; &nbsp;&gt;</a><a href="{{route('competancyDashboard')}}" style="font-size:5px;color: var(--bs-emphasis-color);font-size: 20px;">&nbsp; &nbsp; &nbsp; Dashboard</a></div>
</div>
<div class="container" style="height: 100px;margin-top: 30px;margin-bottom:100px;font-family:poppins;">
    <div class="row" style="text-align: center;">
        <div class="col-md-4" data-aos="zoom-in" data-aos-duration="1000" style="margin-left:5%;width: 350px;text-align: center;box-shadow: 0px 0px 12px 1px rgb(37,30,30);border-radius: 20px;height: 170px;">
            <div class="row" style="height: 35px;background: #1F2471;border-radius: 20px;margin-top: 10px;width: 235px;text-align: center;margin-left: 40px;">
                <div class="col" style="width: 204px;border-radius: 20px;"><span style="margin-top: 2px;font-size: 20px;color: var(--bs-body-bg)">Registered Officials</span></div>
            </div>
            <div class="row">
                <span id="govofficialCount" class="d-xxl-flex justify-content-xxl-center align-items-xxl-center" style="color: #f01f75;font-size: 60px;font-family: Poppins, sans-serif;font-weight: bold;margin-left: 35%;margin-top: 10px;width: 106px;height: 108px;">{{ $govofficialCount }}</span>
            </div>
        </div>
        <div class="col-md-4" data-aos="zoom-in" data-aos-duration="1000" style="width: 350px;text-align: center;height: 170px;box-shadow: 0px 0px 12px 1px rgb(37,30,30);margin-left: 20px;border-radius: 20px;">
            <div class="row" style="height: 35px;background: #1F2471;border-radius: 20px;margin-top: 10px;width: 350px;text-align: center;">
                <div class="col" style="width: 204px;border-radius: 20px;"><span style="margin-top: 3px;font-size: 20px;color: var(--bs-body-bg)">Assessment Completed Officials</span></div>
            </div>
            <div class="row">
                <span id="assessmentCompletedCount" class="d-xxl-flex justify-content-xxl-center align-items-xxl-center" style="color: #f01f75;font-size: 60px;font-family: Poppins, sans-serif;font-weight: bold;margin-left: 35%;margin-top: 10px;width: 106px;height: 108px;">{{ $assessmentCompletedCount }}</span>
            </div>
        </div>
        <div class="col-md-4" data-aos="zoom-in" data-aos-duration="1000" style="width: 350px;text-align: center;height: 170px;box-shadow: 0px 0px 12px 1px rgb(37,30,30);margin-left: 20px;border-radius: 20px;">
            <div class="row" style="height: 35px;background: #1F2471;border-radius: 20px;margin-top: 10px;width: 235px;text-align: center;margin-left: 40px;">
                <div class="col" style="width: 204px;border-radius: 20px;"><span style="margin-top: 2px;font-size: 20px;color: var(--bs-body-bg)">Inprogress</span></div>
            </div>
            <div class="row">
                <span id="assessmentInprogress" class="d-xxl-flex justify-content-xxl-center align-items-xxl-center" style="color: #f01f75;font-size: 60px;font-family: Poppins, sans-serif;font-weight: bold;margin-left: 35%;margin-top: 10px;width: 106px;height: 108px;">{{ $assessmentInprogress }}</span>
            </div>
        </div>
    </div>
</div>
<div class="container" data-aos="fade-in" data-aos-duration="1000" style="margin-top: 30px;font-family:poppins">
    <div class="row">
        <div class="col-md-6" style="border-radius: 10px;box-shadow: 0px 0px 12px 1px rgb(37,30,30);height: 540px;">
             
                {{--<form class="form-control" method="GET" action="{{route('search')}}" style="border-width:0px;height:70px"> --}}
                    <div class="col">
                        <input class="form-control-md" id="search" name="search" type="text" placeholder="   Search by Name..." style="width: 580px;height: 52px;margin-left: -10px;margin-top: 20px;border: 1px solid #545658;text-align: left;border-radius: 5px;" />
                    </div>
                    <div class="col">               
                            <button id="searchButton" type="button" class="btn btn-primary" style="text-align: center;margin-left: 400px;width: 169px;height: 52px;font-size: 18px;border-radius: 5px;border: 2px solid #5f2b84;color: rgb(95,43,132);background: rgba(13,110,253,0);margin-top: -77px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" style="font-size: 34px;margin-right: 10px;width: 30px;height: 30px;margin-left: -10px;">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.319 14.4326C20.7628 11.2941 20.542 6.75347 17.6569 3.86829C14.5327 0.744098 9.46734 0.744098 6.34315 3.86829C3.21895 6.99249 3.21895 12.0578 6.34315 15.182C9.22833 18.0672 13.769 18.2879 16.9075 15.8442C16.921 15.8595 16.9351 15.8745 16.9497 15.8891L21.1924 20.1317C21.5829 20.5223 22.2161 20.5223 22.6066 20.1317C22.9971 19.7412 22.9971 19.1081 22.6066 18.7175L18.364 14.4749C18.3493 14.4603 18.3343 14.4462 18.319 14.4326ZM16.2426 5.28251C18.5858 7.62565 18.5858 11.4246 16.2426 13.7678C13.8995 16.1109 10.1005 16.1109 7.75736 13.7678C5.41421 11.4246 5.41421 7.62565 7.75736 5.28251C10.1005 2.93936 13.8995 2.93936 16.2426 5.28251Z" fill="currentColor"></path>
                            </svg>Search</button>
                    </div> 
                {{--</form>  --}}
                
            <div class="table-responsive" style="margin-top: 10px;height: 450px;">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="text-align: center;">Organization Name</th>
                            <th style="text-align: center;">Number of <br>Responses</th>
                            <th style="text-align: center;">Status</th>
                        </tr>
                    </thead>
                    <tbody id="org_table_body">
                    @foreach($counts->groupBy('gov_org_name') as $orgName => $orgCounts)
                    <tr style="text-align: center;">
                        <td style="font-size: 12px; text-align: left; font-size: 15px">{{ $orgName }}</td>
                        <td style="font-size: 12px; text-align: center; font-size: 15px">{{ $orgCounts->first()->count }}</td>
                        <td style="font-size: 12px; text-align: center; font-size: 15px">
                            <a class="btn btn-primary d-flex flex-row justify-content-center align-items-start;margin-left:50%" type="button" style="margin-left: 0px; background: url('{{ asset('img/Maximize.png') }}'), rgba(13,110,253,0); border-width: 0px; width: 25px; height: 25px;" href="{{ route('competancyAssessments.show', $orgCounts->first()->govorganizationname_id) }}"></a>
                        </td>
                    </tr>
                    @endforeach
                    
                    </tbody>
                </table>
            </div>

        </div>
        <div class="col-md-6" style="margin-left: 10px;width: 585px;box-shadow: 0px 0px 12px 1px rgb(37,30,30);border-radius: 10px;height: 540px;">
            @foreach($users as $user)
            <form method="POST" action="{{ route('create-user-govofficial',$user->id) }}">
                {{csrf_field()}}
                @endforeach
            <div class="row">
                <div class="col" style="text-align: center;background: var(--bs-secondary-bg-subtle);border-radius: 10px;border-style: none;border-color: var(--bs-secondary-bg);"><span style="color: #1F2471;font-weight: bold;text-align: center;font-size: 2;"><br>Add new official<br><br></span></div>
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col"><span style="color: var(--bs-emphasis-color);">Username</span><input type="text" name="username" id="username" style="height: 40px;width: 225px;margin-left: 10px;border-radius: 5px;border-style: solid;border-color: var(--bs-secondary-border-subtle);"></div>
                <div class="col"><span style="color: var(--bs-emphasis-color);">Email</span><input type="email" name="email" id="email" style="height: 40px;width: 225px;margin-left: 10px;border-radius: 5px;border-style: solid;border-color: var(--bs-secondary-border-subtle);"></div>
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col"><span style="color: var(--bs-emphasis-color);">Password</span><input name="password" id="password" type="password" style="height: 40px;width: 225px;margin-left: 10px;border-radius: 5px;border-style: solid;border-color: var(--bs-secondary-border-subtle);"></div>
                <div class="col"><span style="color: var(--bs-emphasis-color);">Confirm Password</span><input name="confirm-password" id="confirm-password" type="password" style="height: 40px;width: 225px;margin-left: 10px;border-radius: 5px;border-style: solid;border-color: var(--bs-secondary-border-subtle);"></div>
            </div>
            <input type="hidden" name="type" style="height: 40px;width: 225px;margin-left: 10px;border-radius: 5px;border-style: solid;border-color: var(--bs-secondary-border-subtle);" value="0">
            <div class="row" style="margin-top: 50px;">
                <div class="col"><a class="btn btn-primary" type="button" href="{{ route('competancyDashboard') }}" style="width: 104px;background: var(--bs-btn-active-color);border-style: solid;border-color: #1F2471;color: #1F2471;font-weight: bold;margin-left: 280px;">Cancel</a>
                    <button class="btn btn-primary" type="submit" style="width: 104px;background: #1F2471;margin-left: 30px;">Add</button></div>
            </div>
            </form>

        </div>
    </div>
</div>
<div data-aos="fade-in" data-aos-duration="1000" style="height: 630px;margin-top: 60px;width: 1165px;background: var(--bs-secondary-bg);text-align: center;font-family:poppins">
    <div class="row" style="width: 1160px;text-align: center;margin-left: 0px;margin-top: 50px;color: #1F2471;border-radius: 5px;border-style: solid;border-color: #1F2471;background: #1F2471;height: 50px;">
        <div class="col-xxl-11" style="color: #1F2471;"><span style="color: var(--bs-body-bg);font-size: 24px;text-align: center;border-color: var(--bs-secondary-text-emphasis);margin-left: 90px;">ICT</span></div>
    </div>
    <div class="row" style="margin-top: 40px;">
        <div class="col-xxl-7" style="width: 600px;">
            <div class="container" style="width: 600px;">
                <div class="row" style="width: 600px;">
                    <div class="col-md-6" data-aos="zoom-in" data-aos-duration="1000" style="width: 238px;height: 125px;margin-left: 20px;background: var(--bs-body-bg);border-radius: 10px;box-shadow: 0px 0px 10px #1F2471;">
                        <div class="row" style="height: 40px;background: var(--bs-body-bg);">
                            <div class="col"><span style="color: #1F2471;margin-top: 20px;font-size: 17px;">Number Of Responses</span></div>
                        </div>
                        <div class="row" style="background: var(--bs-body-bg);">
                            <div class="col"><span style="color: #CC1D56;margin-top: 20px;font-size: 36px;font-weight: bold;">{{ $ictCount }}</span></div>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="zoom-in" data-aos-duration="1000" style="width: 238px;background: var(--bs-body-bg);margin-left: 20px;border-radius: 10px;box-shadow: 0px 0px 10px #1F2471;">
                        <div class="row" style="height: 40px;background: var(--bs-body-bg);">
                            <div class="col"><span style="color: #1F2471;margin-top: 20px;font-size: 17px;">Organizations Count</span></div>
                        </div>
                        <div class="row" style="background: var(--bs-body-bg);">
                            <div class="col"><span style="color: #CC1D56;margin-top: 20px;font-size: 36px;font-weight: bold;">{{$countGovOrganizationIct}}</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-top: 50px;">
                <div class="container" style="width: 545px;height: 270px;text-align: center;margin-top: 0px;">
                    {{--  <img src="{{ asset('img/Group 2d83.png') }}" style="margin-top: 70px;width: 600px;height: 400px;">  --}}
                    <div data-aos="zoom-in" data-aos-duration="1000" id="chart_div" style="width: 542px; height: 259px; font-family: Poppins; margin-left: 50px; font-family: Poppins"></div>
                    
                    <script>
                        google.charts.load('current', { packages: ['corechart', 'bar'] });
                        google.charts.setOnLoadCallback(drawBasic);

                        function drawBasic() {
                            var data = google.visualization.arrayToDataTable({!! json_encode($ictAvg) !!});

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

                            var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

                            chart.draw(data, options);
                        }
                    </script>
                </div>
            </div>
        </div>
        <div class="col-xxl-5" style="height: 460px;">
                {{--<form class="form-control" method="GET" action="{{route('search')}}" style="border-width:0px;height:70px">--}}
                    <div class="col">
                        <input id="search2" name="search2" type="text" placeholder="   Search by Name..." style="width: 580px;height: 52px;margin-left: -10px;margin-top: 20px;border: 1px solid #545658;text-align: left;border-radius: 5px;" />
                    </div>
                    <div class="col">               
                            <button id="searchButton" type="button" class="btn btn-primary" style="text-align: center;margin-left: 400px;width: 169px;height: 52px;font-size: 18px;border-radius: 5px;border: 2px solid #5f2b84;color: rgb(95,43,132);background: rgba(13,110,253,0);margin-top: -77px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" style="font-size: 34px;margin-right: 10px;width: 30px;height: 30px;margin-left: -10px;">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.319 14.4326C20.7628 11.2941 20.542 6.75347 17.6569 3.86829C14.5327 0.744098 9.46734 0.744098 6.34315 3.86829C3.21895 6.99249 3.21895 12.0578 6.34315 15.182C9.22833 18.0672 13.769 18.2879 16.9075 15.8442C16.921 15.8595 16.9351 15.8745 16.9497 15.8891L21.1924 20.1317C21.5829 20.5223 22.2161 20.5223 22.6066 20.1317C22.9971 19.7412 22.9971 19.1081 22.6066 18.7175L18.364 14.4749C18.3493 14.4603 18.3343 14.4462 18.319 14.4326ZM16.2426 5.28251C18.5858 7.62565 18.5858 11.4246 16.2426 13.7678C13.8995 16.1109 10.1005 16.1109 7.75736 13.7678C5.41421 11.4246 5.41421 7.62565 7.75736 5.28251C10.1005 2.93936 13.8995 2.93936 16.2426 5.28251Z" fill="currentColor"></path>
                            </svg>Search</button>
                    </div> 
                {{--</form> --}}
            <div class="table-responsive" style="margin-top: 40px;height: 450px;margin-left: 50px;width: 480px;">
                <table class="table">
                    <thead>
                        <tr style="width: 480px;">
                            <th style="width: 300px;">Organization Name</th>
                            <th>Number of Responses</th>
                        </tr>
                    </thead>
                    <tbody id="org_table_body2">
                        @foreach($govIctOrgCounts as $govIctOrgCount)
                        <tr style="text-align: center;">
                            <td style="font-size: 12px;text-align: left;font-size:15px">{{ $govIctOrgCount -> gov_org_name}}</td>
                            <td style="font-size: 12px;text-align: center;font-size:15px">{{$govIctOrgCount -> count}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div data-aos="fade-in" data-aos-duration="1000" style="height: 690px;margin-top: 60px;width: 1165px;background: var(--bs-secondary-bg);text-align: center;font-family:poppins">
    <div class="row" style="width: 1160px;text-align: center;margin-left: 0px;margin-top: 50px;color: #1F2471;border-radius: 5px;border-style: solid;border-color: #1F2471;background: #1F2471;height: 50px;">
        <div class="col-xxl-11" style="color: #1F2471;"><span style="color: var(--bs-body-bg);font-size: 24px;text-align: center;border-color: var(--bs-secondary-text-emphasis);margin-left: 90px;width: 800px;height: 50px;">Digital Government<br><br></span></div>
    </div>
    <div class="row" style="margin-top: 40px;">
        <div class="col-xxl-7" style="width: 600px;">
            <div class="container" style="width: 600px;">
                <div class="row" style="width: 600px;">
                    <div class="col-md-6" data-aos="zoom-in" data-aos-duration="1000" style="width: 238px;height: 125px;margin-left: 20px;background: var(--bs-body-bg);border-radius: 10px;box-shadow: 0px 0px 10px #1F2471;">
                        <div class="row" style="height: 40px;background: var(--bs-body-bg);">
                            <div class="col"><span style="color: #1F2471;margin-top: 20px;font-size: 17px;">Number Of Responses</span></div>
                        </div>
                        <div class="row" style="background: var(--bs-body-bg);">
                            <div class="col"><span style="color: #92248D;margin-top: 20px;font-size: 36px;font-weight: bold;">{{ $digitalGovernmentCount }}</span></div>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="zoom-in" data-aos-duration="1000" style="width: 238px;background: var(--bs-body-bg);margin-left: 20px;border-radius: 10px;box-shadow: 0px 0px 10px #1F2471;">
                        <div class="row" style="height: 40px;background: var(--bs-body-bg);">
                            <div class="col"><span style="color: #1F2471;margin-top: 20px;font-size: 17px;">Organizations Count</span></div>
                        </div>
                        <div class="row" style="background: var(--bs-body-bg);">
                            <div class="col"><span style="color: #92248D;margin-top: 20px;font-size: 36px;font-weight: bold;">{{$countGovOrganizationDigitalGovernment}}</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-top: 50px;">
                <div class="container" style="width: 545px;height: 270px;text-align: center;margin-top: 0px;">
                    {{--  <img src="{{ asset('img/Group 2d83.png') }}" style="margin-top: 70px;width: 600px;height: 400px;">  --}}
                    <div data-aos="zoom-in" data-aos-duration="1000" id="chart_div2" style="width:542px;height:259px;font-family: Poppins;margin-left:50px;font-family:poppins"></div>
                   
                    <script>
                        google.charts.load('current', {packages: ['corechart', 'bar']});
                        google.charts.setOnLoadCallback(drawBasic);

                    function drawBasic() {
                        {{--  var vAxis = ["Citizen Experience Strategy", "Citizen Engagement", "Citizen Experience", "Citizen Trust & Perception", "Citizen Insights & Behavior"];  --}}
                    var data = google.visualization.arrayToDataTable({{ Js::from($digitalGovernmentAvg) }});

                    var options = {

                        chartArea: {width: '50%'},
                        hAxis: {
                        title: 'Proficiency',
                        minValue: 0,
                        maxValue: 100,
                        textStyle:{fontName:'Poppins'}
                        },
                        vAxis: {
                        title: 'Competency Area',
                        textStyle:{fontName:'Poppins'},

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
        <div class="col-xxl-5" style="height: 460px;">
        {{--<form class="form-control" method="GET" action="{{route('search')}}" style="border-width:0px;height:70px">--}}
                    <div class="col">
                        <input id="search3" name="search3" type="text" placeholder="   Search by Name..."  style="width: 580px;height: 52px;margin-left: -10px;margin-top: 20px;border: 1px solid #545658;text-align: left;border-radius: 5px;" />
                    </div>
                    <div class="col">               
                            <button id="searchButton" type="button" class="btn btn-primary" style="text-align: center;margin-left: 400px;width: 169px;height: 52px;font-size: 18px;border-radius: 5px;border: 2px solid #5f2b84;color: rgb(95,43,132);background: rgba(13,110,253,0);margin-top: -77px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" style="font-size: 34px;margin-right: 10px;width: 30px;height: 30px;margin-left: -10px;">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.319 14.4326C20.7628 11.2941 20.542 6.75347 17.6569 3.86829C14.5327 0.744098 9.46734 0.744098 6.34315 3.86829C3.21895 6.99249 3.21895 12.0578 6.34315 15.182C9.22833 18.0672 13.769 18.2879 16.9075 15.8442C16.921 15.8595 16.9351 15.8745 16.9497 15.8891L21.1924 20.1317C21.5829 20.5223 22.2161 20.5223 22.6066 20.1317C22.9971 19.7412 22.9971 19.1081 22.6066 18.7175L18.364 14.4749C18.3493 14.4603 18.3343 14.4462 18.319 14.4326ZM16.2426 5.28251C18.5858 7.62565 18.5858 11.4246 16.2426 13.7678C13.8995 16.1109 10.1005 16.1109 7.75736 13.7678C5.41421 11.4246 5.41421 7.62565 7.75736 5.28251C10.1005 2.93936 13.8995 2.93936 16.2426 5.28251Z" fill="currentColor"></path>
                            </svg>Search</button>
                    </div> 
                {{--</form> --}}
            <div class="table-responsive" style="margin-top: 40px;height: 450px;margin-left: 50px;width: 480px;">
                <table class="table">
                    <thead>
                        <tr style="width: 480px;">
                            <th style="width: 300px;">Organization Name</th>
                            <th>Number of Responses</th>
                        </tr>
                    </thead>
                    <tbody id="org_table_body3">
                        @foreach($govDigitalGovernmentOrgCounts as $govDigitalGovernmentOrgCount)
                        <tr style="text-align: center;">
                            <td style="font-size: 12px;text-align: left;font-size:15px">{{ $govDigitalGovernmentOrgCount->gov_org_name}}</td>
                            <td style="font-size: 12px;text-align: center;font-size:15px">{{$govDigitalGovernmentOrgCount->count}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div data-aos="fade-in" data-aos-duration="1000" style="height: 690px;margin-top: 60px;width: 1165px;background: var(--bs-secondary-bg);text-align: center;font-family:poppins">
    <div class="row" style="width: 1160px;text-align: center;margin-left: 0px;margin-top: 50px;color: #1F2471;border-radius: 5px;border-style: solid;border-color: #1F2471;background: #1F2471;height: 50px;">
        <div class="col-xxl-11" style="color: #1F2471;"><span style="color: var(--bs-body-bg);font-size: 24px;text-align: center;border-color: var(--bs-secondary-text-emphasis);margin-left: 90px;width: 800px;height: 50px;">Management</span></div>
    </div>
    <div class="row" style="margin-top: 40px;">
        <div class="col-xxl-7" style="width: 600px;">
            <div class="container" style="width: 600px;">
                <div class="row" style="width: 600px;">
                    <div class="col-md-6" data-aos="zoom-in" data-aos-duration="1000" style="width: 238px;height: 125px;margin-left: 20px;background: var(--bs-body-bg);border-radius: 10px;box-shadow: 0px 0px 10px #1F2471;">
                        <div class="row" style="height: 40px;background: var(--bs-body-bg);">
                            <div class="col"><span style="color: #1F2471;margin-top: 20px;font-size: 17px;">Number Of Responses</span></div>
                        </div>
                        <div class="row" style="background: var(--bs-body-bg);">
                            <div class="col"><span style="color: #037774;margin-top: 20px;font-size: 36px;font-weight: bold;">{{ $ManagementCount }}</span></div>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="zoom-in" data-aos-duration="1000" style="width: 238px;background: var(--bs-body-bg);margin-left: 20px;border-radius: 10px;box-shadow: 0px 0px 10px #1F2471;">
                        <div class="row" style="height: 40px;background: var(--bs-body-bg);">
                            <div class="col"><span style="color: #1F2471;margin-top: 20px;font-size: 17px;">Organizations Count</span></div>
                        </div>
                        <div class="row" style="background: var(--bs-body-bg);">
                            <div class="col"><span style="color: #037774;margin-top: 20px;font-size: 36px;font-weight: bold;">{{$countGovOrganizationManagement}}</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-top: 50px;">
                <div class="container" style="width: 545px;height: 270px;text-align: center;margin-top: 0px;">
                    {{--  <img src="{{ asset('img/Group 2d83.png') }}" style="margin-top: 70px;width: 600px;height: 400px;">  --}}
                    <div data-aos="zoom-in" data-aos-duration="1000" id="chart_div3" style="width:542px;height:259px;font-family: Poppins;margin-left:50px;font-family:poppins"></div>
                    
                    <script>
                        google.charts.load('current', {packages: ['corechart', 'bar']});
                        google.charts.setOnLoadCallback(drawBasic);

                    function drawBasic() {
                        {{--  var vAxis = ["Citizen Experience Strategy", "Citizen Engagement", "Citizen Experience", "Citizen Trust & Perception", "Citizen Insights & Behavior"];  --}}
                    var data = google.visualization.arrayToDataTable({{ Js::from($managementAvg) }});

                    var options = {

                        chartArea: {width: '50%'},
                        hAxis: {
                        title: 'Proficiency',
                        minValue: 0,
                        maxValue: 100,
                        textStyle:{fontName:'Poppins'}
                        },
                        vAxis: {
                        title: 'Competency Area',
                        textStyle:{fontName:'Poppins'},

                        },
                        colors: ['#037774']
                    };

                    var chart = new google.visualization.BarChart(document.getElementById('chart_div3'));

                    chart.draw(data, options);
                    }
                    </script>
                </div>
            </div>
        </div>
        <div class="col-xxl-5" style="height: 460px;">
        {{--<form class="form-control" method="GET" action="{{route('search')}}" style="border-width:0px;height:70px">--}}
                    <div class="col">
                        <input id="search4" name="search4" type="text" placeholder="   Search by Name..."   style="width: 580px;height: 52px;margin-left: -10px;margin-top: 20px;border: 1px solid #545658;text-align: left;border-radius: 5px;" />
                    </div>
                    <div class="col">               
                            <button id="searchButton" type="button" class="btn btn-primary" style="text-align: center;margin-left: 400px;width: 169px;height: 52px;font-size: 18px;border-radius: 5px;border: 2px solid #5f2b84;color: rgb(95,43,132);background: rgba(13,110,253,0);margin-top: -77px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" style="font-size: 34px;margin-right: 10px;width: 30px;height: 30px;margin-left: -10px;">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.319 14.4326C20.7628 11.2941 20.542 6.75347 17.6569 3.86829C14.5327 0.744098 9.46734 0.744098 6.34315 3.86829C3.21895 6.99249 3.21895 12.0578 6.34315 15.182C9.22833 18.0672 13.769 18.2879 16.9075 15.8442C16.921 15.8595 16.9351 15.8745 16.9497 15.8891L21.1924 20.1317C21.5829 20.5223 22.2161 20.5223 22.6066 20.1317C22.9971 19.7412 22.9971 19.1081 22.6066 18.7175L18.364 14.4749C18.3493 14.4603 18.3343 14.4462 18.319 14.4326ZM16.2426 5.28251C18.5858 7.62565 18.5858 11.4246 16.2426 13.7678C13.8995 16.1109 10.1005 16.1109 7.75736 13.7678C5.41421 11.4246 5.41421 7.62565 7.75736 5.28251C10.1005 2.93936 13.8995 2.93936 16.2426 5.28251Z" fill="currentColor"></path>
                            </svg>Search</button>
                    </div> 
                {{--</form> --}}
            <div class="table-responsive" style="margin-top: 40px;height: 450px;margin-left: 50px;width: 480px;">
                <table class="table">
                    <thead>
                        <tr style="width: 480px;">
                            <th style="width: 300px;">Organization Name</th>
                            <th>Number of Responses</th>
                        </tr>
                    </thead>
                    <tbody id="org_table_body4">
                        @foreach($govManagementOrgCounts as $govManagementOrgCount)
                        <tr style="text-align: center;">
                            <td style="font-size: 12px;text-align: left;font-size:15px">{{ $govManagementOrgCount -> gov_org_name}}</td>
                            <td style="font-size: 12px;text-align: center;font-size:15px">{{$govManagementOrgCount -> count}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var ictCountElement = document.getElementById("govofficialCount");

        var targetCount = {{$govofficialCount}}; // Get the actual value from the PHP variable
        var currentCount = 0;

        // Define the duration for the count animation (e.g., 2 seconds)
        var animationDuration = 1000; // 2 seconds
        var interval = 10; // Update every 100 milliseconds

        var increment = (targetCount / (animationDuration / interval));

        var animation = setInterval(function () {
            currentCount += increment;
            ictCountElement.textContent = Math.round(currentCount);

            if (currentCount >= targetCount) {
                clearInterval(animation);
                ictCountElement.textContent = targetCount; // Ensure the final count is exact
            }
        }, interval);
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var ictCountElement = document.getElementById("assessmentCompletedCount");

        var targetCount = {{$assessmentCompletedCount}}; // Get the actual value from the PHP variable
        var currentCount = 0;

        // Define the duration for the count animation (e.g., 2 seconds)
        var animationDuration = 1000; // 2 seconds
        var interval = 10; // Update every 100 milliseconds

        var increment = (targetCount / (animationDuration / interval));

        var animation = setInterval(function () {
            currentCount += increment;
            ictCountElement.textContent = Math.round(currentCount);

            if (currentCount >= targetCount) {
                clearInterval(animation);
                ictCountElement.textContent = targetCount; // Ensure the final count is exact
            }
        }, interval);
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var ictCountElement = document.getElementById("assessmentInprogress");

        var targetCount = {{$assessmentInprogress}}; // Get the actual value from the PHP variable
        var currentCount = 0;

        // Define the duration for the count animation (e.g., 2 seconds)
        var animationDuration = 1000; // 2 seconds
        var interval = 10; // Update every 100 milliseconds

        var increment = (targetCount / (animationDuration / interval));

        var animation = setInterval(function () {
            currentCount += increment;
            ictCountElement.textContent = Math.round(currentCount);

            if (currentCount >= targetCount) {
                clearInterval(animation);
                ictCountElement.textContent = targetCount; // Ensure the final count is exact
            }
        }, interval);
    });
</script>
<script>
    $(document).ready(function(){
    $("#search").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#org_table_body tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
    });
</script>
<script>
    $(document).ready(function(){
    $("#search2").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#org_table_body2 tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
    });
</script>
<script>
    $(document).ready(function(){
    $("#search3").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#org_table_body3 tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
    });
</script>
<script>
    $(document).ready(function(){
    $("#search4").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#org_table_body4 tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
    });
</script>

@endsection
