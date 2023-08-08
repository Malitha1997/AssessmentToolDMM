@extends('layouts.userNavbar')

@section('content')

<body style="border-color: rgb(46,127,208);color: rgb(255,255,255);">
    <section class="d-flex flex-column align-items-center" style="height: 3200px;">
        <div class="container align-content-center align-self-center" style="margin: 150px;width: 1358px;height: 600px;">
            <form method="POST" action="{{ route('storeValue2') }}">
                {{csrf_field()}}
            <div data-aos="fade-down" id="page2" data-aos-duration="1000" style="width: 1282px;height: 2560px;margin-top: 80px;border-radius: 10px;border: 2px solid #5f2b84;padding-left: 0px;margin-left: 6px;">
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" type="hidden" value="3.125" id="weight">
                    <input class="form-control" type="hidden" value="31.25" id="max_weight">
                    <input type="hidden" id="technology_marks" name="technologyMarks" value="{{ $inputValue['technologyMarks']}}">
                    <input type="hidden" id="technology_percentage" name="technologyPercentage" value="{{ $inputValue['technologyPercentage']}}">
                    <input class="form-control" type="hidden" id="gov_org_id" name="govorganizationdetail_id" value="{{Auth::user()->govorganizationdetail->id}}" readonly>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col" style="height: 30px;"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 50px;">11.&nbsp;What is your organization's strategy for the digital citizen experience?</span></div>
                </div>
                <div class="col-xxl-12" id="choise11" style="margin-top: 20px;margin-bottom: 10px;">
                    <div class="row" style="margin-bottom: 20px;">
                        <div class="col"><input type="radio" id="sd11_1" value="2.5" name="sd11" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd11_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">a. Do not have a citizen experience strategy</label></div>
                    </div>
                    <div class="row" style="margin-bottom: 20px;">
                        <div class="col"><input type="radio" id="sd11_2" value="5" name="sd11" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd11_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">b.&nbsp;Multi- channel citizen experience strategy</label></div>
                    </div>
                    <div class="row" style="margin-bottom: 20px;">
                        <div class="col"><input type="radio" id="sd11_3" value="7.5" name="sd11" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd11_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">c.&nbsp;Cross channel citizen experience strategy</label></div>
                    </div>
                    <div class="row" style="margin-bottom: 20px;">
                        <div class="col"><input type="radio" id="sd11_4" value="10" name="sd11" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd11_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">d.&nbsp;Omni-channel citizen experience strategy</label></div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" type="hidden" id="marks11" name="marks_d11">
                    <input class="form-control" type="hidden" id="percentage11" name="percentage_d11">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">12.&nbsp;How does your organization capture citizens’ data?</span></div>
                </div>
                <div class="row d-flex flex-column" id="choise12" style="text-align: center;">
                    <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" id="sd12_1" value="0" name="sd12" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd12_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">a.&nbsp;We do not capture citizens’ data</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" id="sd12_2" value="2.5" name="sd12" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd12_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">b.&nbsp;Manually (once they come)</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" id="sd12_3" value="5" name="sd12" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd12_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">c.&nbsp;Have an online process for some applications</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" id="sd12_4" value="10" name="sd12" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd12_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">d.&nbsp;Fully automated</label></div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" type="hidden" id="marks12" name="marks_d12">
                    <input class="form-control" type="hidden" id="percentage12" name="percentage_d12">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">13.&nbsp;Does the organization has a proper mechanism to maintain citizens' data privacy by digitalizing and resolving the&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;citizen's problems?</span></div>
                </div>
                <div class="row d-flex flex-column" id="choise13" style="text-align: center;">
                    <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" id="sd13_1" value="5" name="sd13" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd13_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">Yes. We have a well defined digitalized data privacy mechanism to resolve the citizen's problems</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" id="sd13_2" value="10" name="sd13" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd13_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">Yes. We have a partially automated solution</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" id="sd13_3" value="0" name="sd13" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd13_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">We do not have proper mechanism. All manual</label></div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" type="hidden" id="marks13" name="marks_d13">
                    <input class="form-control" type="hidden" id="percentage13" name="percentage_d13">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">14.&nbsp;How does your organization manage citizens trust &amp; perception</span></div>
                </div>
                <div class="row d-flex flex-column" style="text-align: center;">
                    <div class="col">
                        <div class="row d-flex flex-column" id="choise14" style="text-align: center;">
                            <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" id="sd14_1" value="10" name="sd14" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd14_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">a.&nbsp;We have a well defined digital workflows triggered dynamically for problem resolution and communication</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" id="sd14_2" value="7.5" name="sd14" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd14_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">b.&nbsp;Citizen information are captured using digital means</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" id="sd14_3" value="0" name="sd14" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd14_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">c.&nbsp;We do not have proper mechanism</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" id="sd14_4" value="2.5" name="sd14" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd14_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">d.&nbsp;Citizen's data are captured manually and connecting them manually</label></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" type="hidden" id="marks14" name="marks_d14">
                    <input class="form-control" type="hidden" id="percentage14" name="percentage_d14">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">15.&nbsp;Does your organization practice Agile Change Management?</span></div>
                </div>
                <div class="row d-flex flex-column" id="choise15" style="text-align: center;">
                    <div class="col">
                        <div class="row d-flex flex-column" style="text-align: center;">
                            <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" id="sd15_1" value="10" name="sd15" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd15_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">Yes. we are practicing</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" id="sd15_2" value="5" name="sd15" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd15_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">Sometimes</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" id="sd15_3" value="0" name="sd15" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd15_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">Do not have any idea on Agile Change Management</label></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" type="hidden" id="marks15" name="marks_d15">
                    <input class="form-control" type="hidden" id="percentage15" name="percentage_d15">
                    <input class="form-control" type="" id="page2_total_marks" name="page2_marks">
                    <input class="form-control" type="" id="customer_percentage" name="customerPercentage">
                </div>
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
        </form>
        </div>

        {{--  Q11  --}}
        <script type="text/javascript">
            $('#choise11').find(":radio").on('click', e => {
                wei = document.getElementById("weight").value;
                max = document.getElementById("max_weight").value;
                choi = e.target.value;
                var x=wei * choi;
                var y=x / max;
                var z=y * 100;
                document.getElementById("marks11").value = x;
                document.getElementById("percentage11").value = z ;
            });

        </script>

        {{--  Q12  --}}
        <script type="text/javascript">
            $('#choise12').find(":radio").on('click', e => {
                wei = document.getElementById("weight").value;
                max = document.getElementById("max_weight").value;
                choi = e.target.value;
                var x=wei * choi;
                var y=x / max;
                var z=y * 100;
                document.getElementById("marks12").value = x;
                document.getElementById("percentage12").value = z ;
            });

        </script>

        {{--  Q13  --}}
        <script type="text/javascript">
            $('#choise13').find(":radio").on('click', e => {
                wei = document.getElementById("weight").value;
                max = document.getElementById("max_weight").value;
                choi = e.target.value;
                var x=wei * choi;
                var y=x / max;
                var z=y * 100;
                document.getElementById("marks13").value = x;
                document.getElementById("percentage13").value = z ;
            });

        </script>

        {{--  Q14  --}}
        <script type="text/javascript">
            $('#choise14').find(":radio").on('click', e => {
                wei = document.getElementById("weight").value;
                max = document.getElementById("max_weight").value;
                choi = e.target.value;
                var x=wei * choi;
                var y=x / max;
                var z=y * 100;
                document.getElementById("marks14").value = x;
                document.getElementById("percentage14").value = z ;
            });

        </script>

        {{--  Q15  --}}
        <script type="text/javascript">
            $('#choise15').find(":radio").on('click', e => {
                wei = document.getElementById("weight").value;
                max = document.getElementById("max_weight").value;
                choi = e.target.value;
                var x=wei * choi;
                var y=x / max;
                var z=y * 100;
                document.getElementById("marks15").value = x;
                document.getElementById("percentage15").value = z ;
            });

        </script>

        <script type="text/javascript">
            $('#page2').find(":radio").on('click', e => {
                tec = document.getElementById("technology_marks").value;
                q11 = document.getElementById("marks11").value;
                q12 = document.getElementById("marks12").value;
                q13 = document.getElementById("marks13").value;
                q14 = document.getElementById("marks14").value;
                q15 = document.getElementById("marks15").value;

                var a=Number(tec) + Number(q11) + Number(q12) + Number(q13) + Number(q14) + Number(q15) ;
                document.getElementById("page2_total_marks").value= a;

                var cus= Number(q11) + Number(q12) + Number(q13) + Number(q14) + Number(q15) ;
                var cus2= cus / 156.25;
                var customer= (cus2 * 100).toFixed(0);
                document.getElementById("customer_percentage").value= customer;

            });
        </script>
    </section>
</body>
@endsection
