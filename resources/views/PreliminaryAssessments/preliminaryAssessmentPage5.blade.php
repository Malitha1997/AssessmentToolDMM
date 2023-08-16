@extends('layouts.userNavbar')

@section('content')

<body style="border-color: rgb(46,127,208);color: rgb(255,255,255);">
    <section class="d-flex flex-column align-items-center" style="height: 2200px;">
        <div class="container align-content-center align-self-center" style="margin: 150px;width: 1358px;height: 600px;">
            <form method="POST" action="{{ route('storeValue5') }}">
                {{csrf_field()}}
            <div data-aos="fade-down" id="page5" data-aos-duration="1000" style="width: 1282px;height: 1900px;margin-top: 10px;border-radius: 10px;border: 2px solid #5f2b84;padding-left: 0px;margin-left: 6px;">
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" type="hidden" value="3.125" id="weight">
                    <input class="form-control" type="hidden" value="31.25" id="max_weight">
                    <input class="form-control" type="hidden" id="page4_total_marks" name="page4_marks" value="{{ $inputValue['page4_marks']}}">
                    <input type="hidden" id="technology_percentage" name="technologyPercentage" value="{{ $inputValue['technologyPercentage']}}">
                    <input type="hidden" id="customer_percentage" name="customerPercentage" value="{{ $inputValue['customerPercentage']}}">
                    <input type="hidden" id="operation_percentage" name="operationPercentage" value="{{ $inputValue['operationPercentage']}}">
                    <input type="hidden" id="strategy_percentage" name="strategyPercentage" value="{{ $inputValue['strategyPercentage']}}">
                    <input class="form-control" type="hidden" id="gov_org_id" name="govorganizationdetail_id" value="{{Auth::user()->govorganizationdetail->id}}" readonly>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col" style="height: 30px;"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 50px;">28.&nbsp;How is the awareness on digital transformation goals among the employees?</span></div>
                </div>
                <div class="col-xxl-12" id="choise28" style="margin-top: 20px;margin-bottom: 10px;">
                    <div class="row" style="margin-bottom: 40px;">
                        <div class="col"><input type="radio" id="sd28_1" value="0" name="sd28" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd28_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">Digital Transformation goals are not defined.</label></div>
                    </div>
                    <div class="row" style="margin-bottom: 40px;">
                        <div class="col"><input type="radio" id="sd28_2" value="2.5" name="sd28" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd28_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">Digital Transformation goals are in place but no proper measurement criteria and rewards mechanism is <br>defined.</label></div>
                    </div>
                    <div class="row" style="margin-bottom: 20px;">
                        <div class="col"><input type="radio" id="sd28_3" value="10" name="sd28" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd28_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">Employees are well aware about the digital transformation goals, measurement framework and the rewards <br>structure.</label></div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" type="hidden" id="marks28" name="marks_d28">
                    <input class="form-control" type="hidden" id="percentage28" name="percentage_d28">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">29.&nbsp;How are the standards and digital governance adopted?</span></div>
                </div>
                <div class="row d-flex flex-column" id="choise29" style="text-align: center;">
                    <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                        <div class="row" style="margin-bottom: 40px;">
                            <div class="col"><input type="radio" id="sd29_1" value="2.5" name="sd29" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd29_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">We do not capture citizens’ data</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 40px;">
                            <div class="col"><input type="radio" id="sd29_2" value="5" name="sd29" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd29_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">There is a document that has been reviewed and approved as the standard process. But activities might <br>not conducted according to the document as the document is outdated.</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 40px;">
                            <div class="col"><input type="radio" id="sd29_3" value="7.5" name="sd29" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd29_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">The activity that is documented is being deployed, It may not be deployed at all the intended locations, or <br>though all functions, or by all the intended owners, or all the activities defined in the process are not being <br>performed.</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" id="sd29_4" value="10" name="sd29" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd29_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">There is no inconsistency between the documented process and the deployed process. The process also shows <br>seamless linkage between functions and other processes wherever there needs to be any interaction. The <br>process shows greater consistency of actions and better communication between functions.</label></div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" type="hidden" id="marks29" name="marks_d29">
                    <input class="form-control" type="hidden" id="percentage29" name="percentage_d29">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">30.&nbsp;Availability of digital appliances in your organization?</span></div>
                </div>
                <div class="row d-flex flex-column" id="choise30" style="text-align: center;">
                    <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" id="sd30_1" value="0" name="sd30" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd30_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">Digital appliances are not available.</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" id="sd30_2" value="2.5" name="sd30" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd30_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">Importance and requirement is identified.</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" id="sd30_3" value="5" name="sd30" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd30_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">Digital appliances are in place and does not have a proper sustainable approach.</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" id="sd30_4" value="10" name="sd30" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd30_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">Digital appliances are in place and have a proper sustainability mechanism.</label></div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" type="hidden" id="marks30" name="marks_d30">
                    <input class="form-control" type="hidden" id="percentage30" name="percentage_d30">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">31.&nbsp;Does the organization take necessary actions to continuous right skilling, Upskilling, reskilling and cross skilling?</span></div>
                </div>
                <div class="row d-flex flex-column" style="text-align: center;">
                    <div class="col">
                        <div class="row d-flex flex-column" id="choise31" style="text-align: center;">
                            <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                                <div class="row" style="margin-bottom: 40px;">
                                    <div class="col"><input type="radio" id="sd31_1" value="0" name="sd31" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd31_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">a.&nbsp;There is no continuous progression for upgrading skills of employees.</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" id="sd31_2" value="2.5" name="sd31" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd31_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">b.&nbsp;Upskilling and reskilling is done only when there is a need for the organization to elevate an employee due to <br>criticality of the position. No proper plan is in place.</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 40px;">
                                    <div class="col"><input type="radio" id="sd31_3" value="5" name="sd31" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd31_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">c.&nbsp;There are intermediate actions to enhance/review and modify skills of employees.</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 40px;">
                                    <div class="col"><input type="radio" id="sd31_4" value="7.5" name="sd31" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd31_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">d.&nbsp;Majority of employee skill development through upskilling and reskilling have defined processes. There are <br>some elements those that need process definition and guidelines.</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" id="sd31_5" value="10" name="sd31" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd31_5" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">e.&nbsp;There are well defined practices to right skill, upskill and reskill employees and the employees are fully aware <br>of the processes and are fully aligned to them.</label></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" type="hidden" id="marks31" name="marks_d31">
                    <input class="form-control" type="hidden" id="percentage31" name="percentage_d31">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">32.&nbsp;How is the alignment of the organizational Talent Management (TM) strategy with the Digital Strategy (DS)?</span></div>
                </div>
                <div class="row d-flex flex-column" id="choise32" style="text-align: center;">
                    <div class="col">
                        <div class="row d-flex flex-column" style="text-align: center;">
                            <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                                <div class="row" style="margin-bottom: 40px;">
                                    <div class="col"><input type="radio" id="sd32_1" value="0" name="sd32" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd32_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">Talent Management is not considered as part of the Digital Strategy.</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 40px;">
                                    <div class="col"><input type="radio" id="sd32_2" value="2.5" name="sd32" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd32_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">Organization has identified the importance of aligning the Talent Management Strategy with the Digital Strategy. <br>However, no structured mechanism is in place to aligned the TM with DS.</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 40px;">
                                    <div class="col"><input type="radio" id="sd32_3" value="5" name="sd32" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd32_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">Talent management strategy is partially connected. However clear goals, objectives are not defined aligned <br>with the DS.</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" id="sd32_4" value="10" name="sd32" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd32_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">Talent Management plays a prominent role in the DS. The Talent Management strategy defines how it facilitate <br>the DS by recognizing and retaining the best talent.</label></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" type="hidden" id="marks32" name="marks_d32">
                    <input class="form-control" type="hidden" id="percentage32" name="percentage_d32">
                    <input class="form-control" type="hidden" id="culture_percentage" name="culturePercentage">
                    <input class="form-control" type="hidden" id="overall" name="overallPercentage">
                </div>
                <div class="col" data-aos="fade-down" data-aos-duration="1000">
                    <div class="row" style="margin-top: 50px;">
                        <div class="col ms-xxl-0" style="margin-left: 62px;"></div>
                        <div class="col" style="width: 250px;text-align: right;padding-left: 0px;margin-left: -390px;">
                            <a class="btn btn-primary" href="/home" type="button" style="width: 152px;margin-right: 30px;height: 55px;font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;background: rgb(255,255,255);border-radius: 10px;font-weight: bold;border: 2px solid #1f2471 ;">Resume</a>
                            <button class="btn btn-primary" id="next" type="submit" style="width: 152px;height: 55px;font-family: Poppins, sans-serif;font-size: 24px;background: #1f2471;border-width: 0px;border-radius: 10px;" >Next</button></div>
                    </div>
                </div>
            </div>
            </div>
            </form>
        </div>

        {{--  Q28  --}}
        <script type="text/javascript">
            $('#choise28').find(":radio").on('click', e => {
                wei = document.getElementById("weight").value;
                max = document.getElementById("max_weight").value;
                choi = e.target.value;
                var x=wei * choi;
                var y=x / max;
                var z=y * 100;
                document.getElementById("marks28").value = x;
                document.getElementById("percentage28").value = z ;
            });

        </script>

        {{--  Q29  --}}
        <script type="text/javascript">
            $('#choise29').find(":radio").on('click', e => {
                wei = document.getElementById("weight").value;
                max = document.getElementById("max_weight").value;
                choi = e.target.value;
                var x=wei * choi;
                var y=x / max;
                var z=y * 100;
                document.getElementById("marks29").value = x;
                document.getElementById("percentage29").value = z ;
            });

        </script>

        {{--  Q30  --}}
        <script type="text/javascript">
            $('#choise30').find(":radio").on('click', e => {
                wei = document.getElementById("weight").value;
                max = document.getElementById("max_weight").value;
                choi = e.target.value;
                var x=wei * choi;
                var y=x / max;
                var z=y * 100;
                document.getElementById("marks30").value = x;
                document.getElementById("percentage30").value = z ;
            });

        </script>

        {{--  Q31  --}}
        <script type="text/javascript">
            $('#choise31').find(":radio").on('click', e => {
                wei = document.getElementById("weight").value;
                max = document.getElementById("max_weight").value;
                choi = e.target.value;
                var x=wei * choi;
                var y=x / max;
                var z=y * 100;
                document.getElementById("marks31").value = x;
                document.getElementById("percentage31").value = z ;
            });

        </script>

        {{--  Q32  --}}
        <script type="text/javascript">
            $('#choise32').find(":radio").on('click', e => {
                wei = document.getElementById("weight").value;
                max = document.getElementById("max_weight").value;
                choi = e.target.value;
                var x=wei * choi;
                var y=x / max;
                var z=y * 100;
                document.getElementById("marks32").value = x;
                document.getElementById("percentage32").value = z ;
            });

        </script>

        <script type="text/javascript">
            $('#page5').find(":radio").on('click', e => {
                p4 = document.getElementById("page4_total_marks").value;
                q28 = document.getElementById("marks28").value;
                q29 = document.getElementById("marks29").value;
                q30 = document.getElementById("marks30").value;
                q31 = document.getElementById("marks31").value;
                q32 = document.getElementById("marks32").value;

                var cul= Number(q28) + Number(q29) + Number(q30) + Number(q31) + Number(q32) ;
                var cul2= cul / 156.25;
                var culture= (cul2 * 100).toFixed(0);
                document.getElementById("culture_percentage").value= culture;

                var a=Number(p4) + Number(q28) + Number(q29) + Number(q30) + Number(q31) + Number(q32) ;
                var b= a / 1000;
                var overall= (b * 100).toFixed(0);
                document.getElementById("overall").value= overall;


            });
        </script>
    </section>
</body>
@endsection
