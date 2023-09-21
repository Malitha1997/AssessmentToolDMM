@extends('layouts.userNavbar')

@section('content')

<body style="border-color: rgb(46,127,208);color: rgb(255,255,255);">
    <section class="d-flex flex-column align-items-center" style="height: 2000px;">
        <div class="container align-content-center align-self-center" style="margin: 150px;width: 1358px;height: 600px;">
            <form method="POST" action="{{ route('storeValue2') }}">
                {{csrf_field()}}
            <div data-aos="fade-down" id="page2" data-aos-duration="1000" style="width: 1282px;height: 1660px;margin-top: 10px;border-radius: 10px;border: 2px solid #5f2b84;padding-left: 0px;margin-left: 6px;">
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" type="hidden" value="3.125" id="weight">
                    <input class="form-control" type="hidden" value="31.25" id="max_weight">
                    {{--  <input type="hidden" id="technology_marks" name="technologyMarks" value="{{ $inputValue['technologyMarks']}}">
                    <input type="hidden" id="technology_percentage" name="technologyPercentage" value="{{ $inputValue['technologyPercentage']}}">  --}}
                    <input class="form-control" type="hidden" id="gov_org_id" name="govorganizationdetail_id" value="{{Auth::user()->govorganizationdetail->id}}" readonly>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col" style="height: 30px;"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 50px;">11.&nbsp;What is your organization's strategy for the digital citizen/customer experience?</span></div>
                </div>
                <div class="col-xxl-12" id="choise11" style="margin-top: 20px;margin-bottom: 10px;">
                    <div class="row" style="margin-bottom: 20px;">
                        <div class="col"><input type="radio" id="sd11_1" value="0" name="sd11" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd11_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">a. Do not have a citizen/customer experience strategy</label></div>
                    </div>
                    <div class="row" style="margin-bottom: 20px;">
                        <div class="col"><input type="radio" id="sd11_2" value="5" name="sd11" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd11_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">b.&nbsp;Multi- channel citizen/customer experience strategy</label></div>
                    </div>
                    <div class="row" style="margin-bottom: 20px;">
                        <div class="col"><input type="radio" id="sd11_3" value="7.5" name="sd11" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd11_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">c.&nbsp;Cross channel citizen/customer experience strategy</label></div>
                    </div>
                    <div class="row" style="margin-bottom: 20px;">
                        <div class="col"><input type="radio" id="sd11_4" value="10" name="sd11" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd11_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">d.&nbsp;Omni-channel citizen/customer experience strategy</label></div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" type="hidden" id="marks11" name="marks_d11">
                    <input class="form-control" type="hidden" id="percentage11" name="percentage_d11">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col" style="height: 60px;"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 50px;">12. How do you rate social media support for your organization’s initiatives?  (1 is low and 5 is highest)</span></div>
                </div>
                <div class="row" id="choise12" style="margin-right: 292px;margin-top: 20px;margin-left: 220px;">
                    <div class="col"><input type="radio" style="height:15px;width:15px" name="sd12" id="sd12_1" value="2"><label class="form-label" for="sd12_1" style="font-family: Poppins, sanheight: 20p;font-size: 20px;width:30pxx;color: #1f2471;margin-left:20px">1</label></div>
                    <div class="col"><input type="radio" style="height:15px;width:15px" name="sd12" id="sd12_2" value="4" ><label class="form-label" for="sd12_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left:20px">2</label></div>
                    <div class="col"><input type="radio" style="height:15px;width:15px" name="sd12" id="sd12_3" value="6" ><label class="form-label" for="sd12_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left:20px">3</label></div>
                    <div class="col"><input type="radio" style="height:15px;width:15px" name="sd12" id="sd12_4" value="8" ><label class="form-label" for="sd12_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left:20px">4</label></div>
                    <div class="col"><input type="radio" style="height:15px;width:15px" name="sd12" id="sd12_5" value="10" ><label class="form-label" for="sd12_5" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left:20px">5</label></div>
                </div>

                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" oninput="calculateSum()" type="hidden" id="marks12" name="marks_d12">
                    <input class="form-control" type="hidden" id="percentage12" name="percentage_d12">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">13.&nbsp;Have you enabled digital self service capabilities for end users?</span></div>
                </div>
                <div class="row d-flex flex-column" id="choise13" style="text-align: center;">
                    <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" id="sd13_1" value="0" name="sd13" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd13_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">No self service through available digital means</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 40px;">
                            <div class="col"><input type="radio" id="sd13_2" value="5" name="sd13" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd13_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">Enablement of digital self service through only few channels. Partial digital self service</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 40px;">
                            <div class="col"><input type="radio" id="sd13_3" value="7.5" name="sd13" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd13_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">Digital self service enabled through all available channels. There is scope for further addition of self service <br>capabilities across channels</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" id="sd13_4" value="10" name="sd13" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd13_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">Self Service enabled through all possible digital means. All that can be self served is <br>self served - Assisted service only for services where human intervention is unavoidable.</label></div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" type="hidden" id="marks13" name="marks_d13">
                    <input class="form-control" type="hidden" id="percentage13" name="percentage_d13">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">14.&nbsp;How does your organization manage citizens/customers trust &amp; perception</span></div>
                </div>
                <div class="row d-flex flex-column" style="text-align: center;">
                    <div class="col">
                        <div class="row d-flex flex-column" id="choise14" style="text-align: center;">
                            <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" id="sd14_1" value="10" name="sd14" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd14_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">a.&nbsp;We have a well defined digital workflows triggered dynamically for problem resolution and communication</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" id="sd14_2" value="7.5" name="sd14" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd14_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">b.&nbsp;Citizen/Customer information are captured using digital means</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" id="sd14_3" value="0" name="sd14" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd14_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">c.&nbsp;We do not have proper mechanism</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" id="sd14_4" value="2.5" name="sd14" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd14_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">d.&nbsp;Citizen's/Customer's data are captured manually and connecting them manually</label></div>
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
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">15.&nbsp; How do you capture Citizens/Customers feedbacks and generate insights?</span></div>
                </div>
                <div class="row d-flex flex-column" id="choise15" style="text-align: center;">
                    <div class="col">
                        <div class="row d-flex flex-column" style="text-align: center;">
                            <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" id="sd15_1" value="0" name="sd15" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd15_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">Do not capture citizen/customer feedback</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" id="sd15_2" value="2.5" name="sd15" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd15_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">Unstructured and irregular feedback capture mechanism.  Manual activities.</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 40px;">
                                    <div class="col"><input type="radio" id="sd15_3" value="5" name="sd15" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd15_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">Citizen/Customer feedback through limited mediums. Manual interventions to identify insights and actions</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 40px;">
                                    <div class="col"><input type="radio" id="sd15_4" value="7.5" name="sd15" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd15_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">Regular Citizen/Customer feedback capture through digital means (mobile app, portals etc.).<br>Manual interventions for generating actionable insights.</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" id="sd15_5" value="10" name="sd15" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd15_5" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Regular, real time Citizen/Customer feedback capture through digital interfaces including Citizen/Customer <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;portals, mobile apps etc. Analytics powered solutions for Citizen/Customer insight analysis. Automatic usage of &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Citizen/Customer feedbacks for experience capability enhancement.</label></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" type="hidden" id="marks15" name="marks_d15">
                    <input class="form-control" type="hidden" id="percentage15" name="percentage_d15">
                    <input class="form-control" type="hidden" id="page2_total_marks" name="page2_marks">
                    <input class="form-control" type="hidden" id="customer_percentage" name="customerPercentage">
                </div>
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
                {{--  tec = document.getElementById("technology_marks").value;  --}}
                q11 = document.getElementById("marks11").value;
                q12 = document.getElementById("marks12").value;
                q13 = document.getElementById("marks13").value;
                q14 = document.getElementById("marks14").value;
                q15 = document.getElementById("marks15").value;

                var a=Number(q11) + Number(q12) + Number(q13) + Number(q14) + Number(q15) ;
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
