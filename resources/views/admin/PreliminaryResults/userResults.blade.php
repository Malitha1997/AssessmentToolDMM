@extends('layouts.adminNavbar')

@section('content')

<div class="container" style="margin-left: 0px;margin-top: 30px;width: 900px;font-family: Poppins, sans-serif;">
    <h3 data-aos="fade-down" data-aos-duration="1000" style="color: #1F2471;width: 900px;text-align: center;font-weight: bold;margin-left: 130px;">Summery of the Preliminary Assessment Results</h3>
    <div data-aos="fade-down" data-aos-duration="1000" style="width: 1100px;height: 128px;margin-left: 30px;margin-top: 50px;text-align: left;border-radius: 5px;border: 1px none var(--bs-emphasis-color);">
        <div class="row">
            <div class="col-xxl-7" style="width: 762px;text-align: center;height: 128px;margin-right: 20px;border-radius: 10px;background: var(--bs-gray-200);border-style: none;border-color: var(--bs-emphasis-color);margin-left: -20px;"><span style="color: var(--bs-emphasis-color);font-size: 20px;text-align: center">{{ $g_user->govorganizationname->gov_org_name }}</span>
                <div class="row">
                    <div class="col"><span style="color: var(--bs-emphasis-color);"><br>This Organization gained a {{ $g_user->percentage->overall }}% result for the Preliminary Assessment.<br><br></span></div>
                </div>
            </div>
            <div class="col" style="text-align: center;border-radius: 10px;background: var(--bs-secondary-bg);border-style: none;border-color: var(--bs-emphasis-color);"><span style="color: var(--bs-emphasis-color);margin-top: 10px;">Print Results Report</span>
                <div class="row">
                    <div class="col" style="margin-top: 30px;"><a class="btn btn-primary" type="button" href="{{ route('generate-pdf',$percentageExist->govorganizationdetail->user_id) }}" style="background: #EF4323;border-style: none;">Print Report</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="width:1000px">
        <div class="col">
            <div class="row" style="margin-top: 50px;">
                <div class="col">
                    <div data-aos="zoom-in" data-aos-duration="1000" style="margin-left:-10px;width: 600px;height: 600px;box-shadow: 5px 0px 15px 1px #747678;margin-top: 0px;">
                        <h1 style="color: rgb(0,0,0);text-align: center;font-size: 22px;padding-top: 20px;">Overall Results</h1>

                    <canvas id="chartId" aria-label="chart" data-aos="fade-down" data-aos-duration="1000" style="margin-left:40px; font-size: 20px;" height="500" width="500"></canvas>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
                    <script>
                        var ctx = document.getElementById("chartId").getContext("2d");
                        var radarData = {
                            labels: {!! json_encode($labels) !!},
                            datasets: [{
                                label: "Marks for each dimension",
                                data: {!! json_encode($percentages) !!},
                                backgroundColor: "rgba(255, 99, 132, 0.2)",
                                borderColor: "rgba(229, 89, 52, 1)",
                                borderWidth: 2,
                                pointBackgroundColor: "pink",
                                pointRadius: 6,
                            },
                            {
                                label: "Overall Results",
                                data: {!! json_encode($sums) !!},
                                backgroundColor: "rgba(54, 162, 235, 0.2)",
                                borderColor: "rgb(54, 162, 235)",
                                borderWidth: 2,
                                pointBackgroundColor: "#d0fbfe",
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

                            scale: {
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
                </div>
            </div>
        </div>
        <div class="col" style="margin-left: 70px;width: 100px;">
            <div class="row">
                <div class="col">
                    <div data-aos="zoom-in" data-aos-duration="1000" style="width: 341px;height: 134px;margin-top: 30px;box-shadow: 0px 0px 20px 4px var(--bs-body-color);border-radius: 10px;text-align: center;">
                        <div class="row">
                            <div class="col"><span style="color: rgb(22,26,85);font-size: 18px;text-align: center;margin-top: 0px;font-weight: bold;">Technology &amp; Data</span></div>
                        </div>
                        <div class="row">
                            <div class="col"><span style="color: var(--bs-emphasis-color);"></span>
                                <div class="row">
                                    <div class="col"><span style="color: var(--bs-emphasis-color);margin-top: -20px;">This Organization gained a {{ $g_user->percentage->technology }}% for Technology &amp; Data dimension.</span></div>
                                </div>
                                <div class="row">
                                    <div class="col"><a class="btn btn-primary" type="button" href="{{ route('technologyresults',$percentageExist->govorganizationdetail->user_id) }}" style="margin-top: 12px;text-align: justify;background: #1F2471;">See More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos="zoom-in" data-aos-duration="1000" style="width: 341px;height: 134px;margin-top: 30px;box-shadow: 0px 0px 20px 4px var(--bs-body-color);border-radius: 10px;text-align: center;">
                        <div class="row">
                            <div class="col"><span style="color: rgb(22,26,85);font-size: 18px;text-align: center;margin-top: 0px;font-weight: bold;">Customer</span></div>
                        </div>
                        <div class="row">
                            <div class="col"><span style="color: var(--bs-emphasis-color);"></span>
                                <div class="row">
                                    <div class="col"><span style="color: var(--bs-emphasis-color);margin-top: -20px;">This Organization gained a {{ $g_user->percentage->customer }}% for Customer dimension.</span></div>
                                </div>
                                <div class="row">
                                    <div class="col"><a class="btn btn-primary" type="button" href="{{ route('customerresults',$percentageExist->govorganizationdetail->user_id) }}" style="margin-top: 12px;text-align: justify;background: #1F2471;">See More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos="zoom-in" data-aos-duration="1000" style="width: 341px;height: 134px;margin-top: 30px;box-shadow: 0px 0px 20px 4px var(--bs-body-color);border-radius: 10px;text-align: center;">
                        <div class="row">
                            <div class="col"><span style="color: rgb(22,26,85);font-size: 18px;text-align: center;margin-top: 0px;font-weight: bold;">Operation</span></div>
                        </div>
                        <div class="row">
                            <div class="col"><span style="color: var(--bs-emphasis-color);"></span>
                                <div class="row">
                                    <div class="col"><span style="color: var(--bs-emphasis-color);margin-top: -20px;">This Organization gained a {{ $g_user->percentage->operation }}% for Operation dimension.</span></div>
                                </div>
                                <div class="row">
                                    <div class="col"><a class="btn btn-primary" type="button" href="{{ route('operationresults',$percentageExist->govorganizationdetail->user_id) }}" style="margin-top: 12px;text-align: justify;background: #1F2471;">See More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos="zoom-in" data-aos-duration="1000" style="width: 341px;height: 134px;margin-top: 30px;box-shadow: 0px 0px 20px 4px var(--bs-body-color);border-radius: 10px;text-align: center;">
                        <div class="row">
                            <div class="col"><span style="color: rgb(22,26,85);font-size: 18px;text-align: center;margin-top: 0px;font-weight: bold;">Strategy</span></div>
                        </div>
                        <div class="row">
                            <div class="col"><span style="color: var(--bs-emphasis-color);"></span>
                                <div class="row">
                                    <div class="col"><span style="color: var(--bs-emphasis-color);margin-top: -20px;">This Organization gained a {{ $g_user->percentage->strategy }}% for Strategy dimension</span></div>
                                </div>
                                <div class="row">
                                    <div class="col"><a class="btn btn-primary" type="button"  href="{{ route('strategyresults',$percentageExist->govorganizationdetail->user_id) }}" style="margin-top: 12px;text-align: justify;background: #1F2471;">See More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos="zoom-in" data-aos-duration="1000" style="width: 341px;height: 134px;margin-top: 30px;box-shadow: 0px 0px 20px 4px var(--bs-body-color);border-radius: 10px;text-align: center;">
                        <div class="row">
                            <div class="col"><span style="color: rgb(22,26,85);font-size: 18px;text-align: center;margin-top: 0px;font-weight: bold;">Organization &amp; Culture</span></div>
                        </div>
                        <div class="row">
                            <div class="col"><span style="color: var(--bs-emphasis-color);"></span>
                                <div class="row">
                                    <div class="col"><span style="color: var(--bs-emphasis-color);margin-top: -20px;">This Organization gained a {{ $g_user->percentage->culture }}% for Organization &amp; Culture dimension.</span></div>
                                </div>
                                <div class="row">
                                    <div class="col"><a class="btn btn-primary" type="button" href="{{ route('cultureresults',$percentageExist->govorganizationdetail->user_id) }}" style="margin-top: 12px;text-align: justify;background: #1F2471;">See More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
