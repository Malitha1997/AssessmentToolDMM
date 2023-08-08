@extends('layouts.userNavbar')

@section('content')

<body style="border-color: rgb(46,127,208);color: rgb(255,255,255);">
    <section class="d-flex flex-column align-items-center" style="height: 3200px;">
        <div class="container align-content-center align-self-center" style="margin: 150px;width: 1358px;height: 600px;">
            <form method="POST" action="{{ route('storeValue3') }}">
                {{csrf_field()}}
            <div data-aos="fade-down" id="page3" data-aos-duration="1000" style="width: 1282px;height: 2700px;margin-top: 80px;border-radius: 10px;border: 2px solid #5f2b84;padding-left: 0px;margin-left: 6px;">
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" type="hidden" value="3.125" id="weight">
                    <input class="form-control" type="hidden" value="31.25" id="max_weight">
                    <input class="form-control" type="" id="page2_total_marks" name="page2_marks" value="{{ $inputValue['page2_marks']}}">
                    <input type="hidden" id="technology_percentage" name="technologyPercentage" value="{{ $inputValue['technologyPercentage']}}">
                    <input type="hidden" id="customer_percentage" name="customerPercentage" value="{{ $inputValue['customerPercentage']}}">
                    <input class="form-control" type="hidden" id="gov_org_id" name="govorganizationdetail_id" value="{{Auth::user()->govorganizationdetail->id}}" readonly>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col" style="height: 30px;"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 50px;">16.&nbsp;Could your organization generate real time reports if required?<br><br></span></div>
                </div>
                <div class="row d-flex flex-column" style="text-align: center;">
                    <div class="col">
                        <div class="row d-flex flex-column" id="choise16" style="text-align: center;">
                            <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" id="sd16_1" value="10" name="sd16" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd16_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">a.&nbsp;Yes, we can</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" id="sd16_2" value="5" name="sd16" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd16_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">b.&nbsp;No, we do not have a proper report generating tool</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" id="sd16_3" value="2.5" name="sd16" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd16_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">c.&nbsp;No, all report are generating manually</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" id="sd16_4" value="0" name="sd16" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd16_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">d.&nbsp;No idea on this</label></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" type="hidden" id="marks16" name="marks_d16">
                    <input class="form-control" type="hidden" id="percentage16" name="percentage_d16">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">17.&nbsp;Who manage the investment for digital transformation?</span></div>
                </div>
                <div class="row d-flex flex-column" style="text-align: center;">
                    <div class="col">
                        <div class="row d-flex flex-column" style="text-align: center;">
                            <div class="col">
                                <div class="row d-flex flex-column" id="choise17" style="text-align: center;">
                                    <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                                        <div class="row" style="margin-bottom: 20px;">
                                            <div class="col"><input type="radio" id="sd17_1" value="5" name="sd17" style="margin-left: 100px;"><label class="form-label" for="sd17_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">a.&nbsp;Chief Digital Information Officer</label></div>
                                        </div>
                                        <div class="row" style="margin-bottom: 20px;">
                                            <div class="col"><input type="radio" id="sd17_2" value="10" name="sd17" style="margin-left: 100px;"><label class="form-label" for="sd17_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">b.&nbsp;Head of Organization</label></div>
                                        </div>
                                        <div class="row" style="margin-bottom: 20px;">
                                            <div class="col"><input type="radio" id="sd17_3" value="2.5" name="sd17" style="margin-left: 100px;"><label class="form-label" for="sd17_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">c.&nbsp;Department Head</label></div>
                                        </div>
                                        <div class="row" style="margin-bottom: 20px;">
                                            <div class="col"><input type="radio" id="sd17_4" value="0" name="sd17" style="margin-left: 100px;"><label class="form-label" for="sd17_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">d.&nbsp;No one</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" type="hidden" id="marks17" name="marks_d17">
                    <input class="form-control" type="hidden" id="percentage17" name="percentage_d17">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">18.&nbsp;Does your organization have the mechanism to develop a strategic plan?</span></div>
                </div>
                <div class="row d-flex flex-column" style="text-align: center;">
                    <div class="col">
                        <div class="row d-flex flex-column" style="text-align: center;">
                            <div class="col">
                                <div class="row d-flex flex-column" style="text-align: center;">
                                    <div class="col" id="choise18" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                                        <div class="row" style="margin-bottom: 20px;">
                                            <div class="col"><input type="radio" id="sd18_1" value="10" name="sd18" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd18_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">Yes</label></div>
                                        </div>
                                        <div class="row" style="margin-bottom: 20px;">
                                            <div class="col"><input type="radio" id="sd18_2" value="0" name="sd18" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd18_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">No</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" type="hidden" id="marks18" name="marks_d18">
                    <input class="form-control" type="hidden" id="percentage18" name="percentage_d18">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">19.&nbsp;How do you rate your organization's long term digital roadmap? (1 is low/no roadmap and 5 is highest/well defined&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; roadmap)</span></div>
                </div>
                <div class="row" id="choise19" style="margin-right: 292px;margin-top: 30px;margin-left: 220px;">
                    <div class="col"><input type="radio" id="sd19_1" value="2" name="sd19" style="width:15px;height:15px;font-size: 20px;margin-right: 20px;"><label class="form-label" for="sd19_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">1</label></div>
                    <div class="col"><input type="radio" id="sd19_2" value="4" name="sd19" style="width:15px;height:15px;font-size: 20px;margin-right: 20px;"><label class="form-label" for="sd19_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">2</label></div>
                    <div class="col"><input type="radio" id="sd19_3" value="6" name="sd19" style="width:15px;height:15px;font-size: 20px;margin-right: 20px;"><label class="form-label" for="sd19_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">3</label></div>
                    <div class="col"><input type="radio" id="sd19_4" value="8" name="sd19" style="width:15px;height:15px;font-size: 20px;margin-right: 20px;"><label class="form-label" for="sd19_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">4</label></div>
                    <div class="col"><input type="radio" id="sd19_5" value="10" name="sd19" style="width:15px;height:15px;font-size: 20px;margin-right: 20px;"><label class="form-label" for="sd19_5" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">5</label></div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" type="hidden" id="marks19" name="marks_d19">
                    <input class="form-control" type="hidden" id="percentage19" name="percentage_d19">
                    <input class="form-control" type="" id="page3_total_marks" name="page3_marks">
                    <input class="form-control" type="" id="operation_percentage" name="operationPercentage">
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

        {{--  Q16  --}}
        <script type="text/javascript">
            $('#choise16').find(":radio").on('click', e => {
                wei = document.getElementById("weight").value;
                max = document.getElementById("max_weight").value;
                choi = e.target.value;
                var x=wei * choi;
                var y=x / max;
                var z=y * 100;
                document.getElementById("marks16").value = x;
                document.getElementById("percentage16").value = z ;
            });

        </script>

        {{--  Q17  --}}
        <script type="text/javascript">
            $('#choise17').find(":radio").on('click', e => {
                wei = document.getElementById("weight").value;
                max = document.getElementById("max_weight").value;
                choi = e.target.value;
                var x=wei * choi;
                var y=x / max;
                var z=y * 100;
                document.getElementById("marks17").value = x;
                document.getElementById("percentage17").value = z ;
            });

        </script>

        {{--  Q18  --}}
        <script type="text/javascript">
            $('#choise18').find(":radio").on('click', e => {
                wei = document.getElementById("weight").value;
                max = document.getElementById("max_weight").value;
                choi = e.target.value;
                var x=wei * choi;
                var y=x / max;
                var z=y * 100;
                document.getElementById("marks18").value = x;
                document.getElementById("percentage18").value = z ;
            });

        </script>

        {{--  Q19  --}}
        <script type="text/javascript">
            $('#choise19').find(":radio").on('click', e => {
                wei = document.getElementById("weight").value;
                max = document.getElementById("max_weight").value;
                choi = e.target.value;
                var x=wei * choi;
                var y=x / max;
                var z=y * 100;
                document.getElementById("marks19").value = x;
                document.getElementById("percentage19").value = z ;
            });

        </script>

        <script type="text/javascript">
            $('#page3').find(":radio").on('click', e => {
                p2 = document.getElementById("page2_total_marks").value;
                q16 = document.getElementById("marks16").value;
                q17 = document.getElementById("marks17").value;
                q18 = document.getElementById("marks18").value;
                q19 = document.getElementById("marks19").value;

                var a=Number(p2) + Number(q16) + Number(q17) + Number(q18) + Number(q19) ;
                document.getElementById("page3_total_marks").value= a;

                var op= Number(q16) + Number(q17) + Number(q18) + Number(q19) ;
                var op2= op / 125;
                var operation= (op2 * 100).toFixed(0);
                document.getElementById("operation_percentage").value= operation;
            });
        </script>
    </section>
</body>
@endsection
