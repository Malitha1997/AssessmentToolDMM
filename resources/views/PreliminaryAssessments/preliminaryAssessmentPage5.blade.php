@extends('layouts.userNavbar')

@section('content')

<body style="border-color: rgb(46,127,208);color: rgb(255,255,255);">
    <section class="d-flex flex-column align-items-center" style="height: 3200px;">
        <div class="container align-content-center align-self-center" style="margin: 150px;width: 1358px;height: 600px;">
            <form method="POST" action="{{ route('storeValue5') }}">
                {{csrf_field()}}
            <div data-aos="fade-down" id="page5" data-aos-duration="1000" style="width: 1282px;height: 2560px;margin-top: 10px;border-radius: 10px;border: 2px solid #5f2b84;padding-left: 0px;margin-left: 6px;">
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
                    <div class="col" style="height: 30px;"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 50px;">28.&nbsp;What is your organization's strategy for the digital citizen experience?</span></div>
                </div>
                <div class="col-xxl-12" id="choise28" style="margin-top: 20px;margin-bottom: 10px;">
                    <div class="row" style="margin-bottom: 20px;">
                        <div class="col"><input type="radio" id="sd28_1" value="2.5" name="sd28" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd28_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">a. Do not have a citizen experience strategy</label></div>
                    </div>
                    <div class="row" style="margin-bottom: 20px;">
                        <div class="col"><input type="radio" id="sd28_2" value="5" name="sd28" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd28_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">b.&nbsp;Multi- channel citizen experience strategy</label></div>
                    </div>
                    <div class="row" style="margin-bottom: 20px;">
                        <div class="col"><input type="radio" id="sd28_3" value="7.5" name="sd28" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd28_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">c.&nbsp;Cross channel citizen experience strategy</label></div>
                    </div>
                    <div class="row" style="margin-bottom: 20px;">
                        <div class="col"><input type="radio" id="sd29_4" value="10" name="sd29" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd29_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">d.&nbsp;Omni-channel citizen experience strategy</label></div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" type="hidden" id="marks28" name="marks_d28">
                    <input class="form-control" type="hidden" id="percentage28" name="percentage_d28">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">29.&nbsp;How does your organization capture citizens’ data?</span></div>
                </div>
                <div class="row d-flex flex-column" id="choise29" style="text-align: center;">
                    <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" id="sd29_1" value="0" name="sd29" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd29_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">a.&nbsp;We do not capture citizens’ data</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" id="sd29_2" value="2.5" name="sd29" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd29_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">b.&nbsp;Manually (once they come)</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" id="sd29_3" value="5" name="sd29" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd29_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">c.&nbsp;Have an online process for some applications</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" id="sd29_4" value="10" name="sd29" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd29_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">d.&nbsp;Fully automated</label></div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" type="hidden" id="marks29" name="marks_d29">
                    <input class="form-control" type="hidden" id="percentage29" name="percentage_d29">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">30.&nbsp;Does the organization has a proper mechanism to maintain citizens' data privacy by digitalizing and resolving the&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;citizen's problems?</span></div>
                </div>
                <div class="row d-flex flex-column" id="choise30" style="text-align: center;">
                    <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" id="sd30_1" value="5" name="sd30" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd30_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">Yes. We have a well defined digitalized data privacy mechanism to resolve the citizen's problems</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" id="sd30_2" value="10" name="sd30" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd30_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">Yes. We have a partially automated solution</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" id="sd30_3" value="0" name="sd30" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd30_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">We do not have proper mechanism. All manual</label></div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" type="hidden" id="marks30" name="marks_d30">
                    <input class="form-control" type="hidden" id="percentage30" name="percentage_d30">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">31.&nbsp;How does your organization manage citizens trust &amp; perception</span></div>
                </div>
                <div class="row d-flex flex-column" style="text-align: center;">
                    <div class="col">
                        <div class="row d-flex flex-column" id="choise31" style="text-align: center;">
                            <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" id="sd31_1" value="10" name="sd31" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd31_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">a.&nbsp;We have a well defined digital workflows triggered dynamically for problem resolution and communication</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" id="sd31_2" value="7.5" name="sd31" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd31_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">b.&nbsp;Citizen information are captured using digital means</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" id="sd31_3" value="0" name="sd31" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd31_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">c.&nbsp;We do not have proper mechanism</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" id="sd31_4" value="2.5" name="sd31" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd31_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">d.&nbsp;Citizen's data are captured manually and connecting them manually</label></div>
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
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">32.&nbsp;Does your organization practice Agile Change Management?</span></div>
                </div>
                <div class="row d-flex flex-column" id="choise32" style="text-align: center;">
                    <div class="col">
                        <div class="row d-flex flex-column" style="text-align: center;">
                            <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" id="sd32_1" value="10" name="sd32" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd32_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">Yes. we are practicing</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" id="sd32_2" value="5" name="sd32" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd32_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">Sometimes</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" id="sd32_3" value="0" name="sd32" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd32_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">Do not have any idea on Agile Change Management</label></div>
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
                    <div class="row" style="margin-top: 150px;">
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
