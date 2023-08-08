@extends('layouts.userNavbar')

@section('content')

<body style="border-color: rgb(46,127,208);color: rgb(255,255,255);">
    <section class="d-flex flex-column align-items-center" style="height: 3600px;">
        <div class="container align-content-center align-self-center" style="margin: 150px;width: 1358px;height: 600px;">
            <form method="POST" action="{{ route('storeValue4') }}">
                {{csrf_field()}}
                <div class="row" style="margin-top: 10px;">
                    <input class="form-control" type="hidden" value="3.125" id="weight">
                    <input class="form-control" type="hidden" value="31.25" id="max_weight">
                    <input class="form-control" type="hidden" id="page3_total_marks" name="page3_marks" value="{{ $inputValue['page3_marks']}}">
                    <input type="hidden" id="technology_percentage" name="technologyPercentage" value="{{ $inputValue['technologyPercentage']}}">
                    <input type="hidden" id="customer_percentage" name="customerPercentage" value="{{ $inputValue['customerPercentage']}}">
                    <input type="hidden" id="operation_percentage" name="operationPercentage" value="{{ $inputValue['operationPercentage']}}">
                    <input class="form-control" type="hidden" id="gov_org_id" name="govorganizationdetail_id" value="{{Auth::user()->govorganizationdetail->id}}" readonly>
                </div>
            <div data-aos="fade-down" id="page4" data-aos-duration="1000" style="width: 1282px;height: 2900px;margin-top: 10px;border-radius: 10px;border: 2px solid #5f2b84;padding-left: 0px;margin-left: 6px;">
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" type="hidden" value="3.125" id="weight">
                    <input class="form-control" type="hidden" value="31.25" id="max_weight">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col" style="height: 60px;"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 50px;">20. How do you rate&nbsp;your organization’s usage of Emerging Technologies and Applications (1 is the lowest and 5 is the &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; highest) <br><br><br></span></div>
                </div>
                <div class="row" id="choise20" style="margin-right: 292px;margin-top: 30px;margin-left: 220px;">
                    <div class="col"><input type="radio" style="height:15px;width:15px" name="sd20" id="sd20_1" value="2"><label class="form-label" for="sd20_1" style="font-family: Poppins, sanheight: 20p;font-size: 20px;width:30pxx;color: #1f2471;margin-left:20px">1</label></div>
                    <div class="col"><input type="radio" style="height:15px;width:15px" name="sd20" id="sd20_2" value="4" ><label class="form-label" for="sd20_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left:20px">2</label></div>
                    <div class="col"><input type="radio" style="height:15px;width:15px" name="sd20" id="sd20_3" value="6" ><label class="form-label" for="sd20_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left:20px">3</label></div>
                    <div class="col"><input type="radio" style="height:15px;width:15px" name="sd20" id="sd20_4" value="8" ><label class="form-label" for="sd20_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left:20px">4</label></div>
                    <div class="col"><input type="radio" style="height:15px;width:15px" name="sd20" id="sd20_5" value="10" ><label class="form-label" for="sd20_5" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left:20px">5</label></div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control"  type="hidden" id="marks20" name="marks_d20">
                    <input class="form-control"  type="hidden" id="percentage20" name="percentage_d20">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">21.&nbsp;Does your organization has a dedicated research and development team to try out the emerging solutions? </span></div>
                </div>
                <div class="row d-flex flex-column" style="text-align: center;">
                    <div class="row d-flex flex-column" style="text-align: center;">
                        <div class="col" id="choise21" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                            <div class="row" style="margin-bottom: 20px;">
                                <div class="col"><input type="radio"  value="10" id="sd21_1" name="sd21" style="margin-left: 100px;height:15px;width:15px"><label class="form-label" for="sd21_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">Yes</label></div>
                            </div>
                            <div class="row" style="margin-bottom: 20px;">
                                <div class="col"><input type="radio" value="0" id="sd21_2" name="sd21" style="margin-left: 100px;height:15px;width:15px"><label class="form-label" for="sd21_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">No</label></div>
                            </div>
                        <div class="row" style="margin-top: 20px;">
                            <input class="form-control" type="hidden" id="marks21" name="marks_d21">
                            <input class="form-control" type="hidden"  id="percentage21" name="percentage_d21">
                        </div>
                    </div>
                </div>

                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">22.&nbsp;How would you rate your organization following the proper data governance process and mechanism in place to&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;facilitate sharing&nbsp;data with outsiders and internal departments in electronic form? (1 is the lowest and 5 is the highest) <br><br></span>
                        <div class="row" id="choise22" style="margin-right: 292px;margin-top: 30px;margin-left: 220px;">
                            <div class="col"><input type="radio" name="sd22" id="sd22_1" style="width:15px;height:15px;margin-right: 20px;" value="2"><label class="form-label" for="sd22_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">1</label></div>
                            <div class="col"><input type="radio" name="sd22" id="sd22_2" style="width:15px;height:15px;margin-right: 20px;" value="4"><label class="form-label" for="sd22_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">2</label></div>
                            <div class="col"><input type="radio" name="sd22" id="sd22_3" style="width:15px;height:15px;margin-right: 20px;" value="6"><label class="form-label" for="sd22_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">3</label></div>
                            <div class="col"><input type="radio" name="sd22" id="sd22_4" style="width:15px;height:15px;margin-right: 20px;" value="8"><label class="form-label" for="sd22_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">4</label></div>
                            <div class="col"><input type="radio" name="sd22" id="sd22_5" style="width:15px;height:15px;margin-right: 20px;" value="10"><label class="form-label"for="sd22_5"  style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">5</label></div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" oninput="calculateSum()" type="hidden" id="marks22" name="marks_d22">
                    <input class="form-control" type="hidden" id="percentage22" name="percentage_d22">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">23.&nbsp;Up to what extent does your organization conduct security audits for the systems in operation?</span></div>
                </div>
                <div class="row d-flex flex-column" style="text-align: center;">
                    <div class="col" id="choise23" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" id="sd23_1" value="0" name="sd23" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd23_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">a. None</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" id="sd23_2" value="0" name="sd23" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd23_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">b. Not relevant (No system in operation)</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" id="sd23_3" value="5" name="sd23" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd23_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">c. Few Systems</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" id="sd23_4" value="7.5" name="sd23" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd23_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">d. Majority of the systems</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" id="sd23_5" value="10" name="sd23" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd23_5" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">e. All systems</label></div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" oninput="calculateSum()" type="hidden" id="marks23" name="marks_d23">
                    <input class="form-control" type="hidden" id="percentage23" name="percentage_d23">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">24.&nbsp;Up to what extent does your organization conduct security audits for the systems in operation?</span></div>
                </div>
                <div class="row d-flex flex-column" style="text-align: center;">
                    <div class="col" id="choise24" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" id="sd24_1" value="0" name="sd24" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd24_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">a. None</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" id="sd24_2" value="0" name="sd24" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd24_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">b. Not relevant (No system in operation)</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" id="sd24_3" value="5" name="sd24" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd24_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">c. Few Systems</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" id="sd24_4" value="7.5" name="sd24" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd24_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">d. Majority of the systems</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" id="sd24_5" value="10" name="sd24" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd24_5" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">e. All systems</label></div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" oninput="calculateSum()" type="hidden" id="marks24" name="marks_d24">
                    <input class="form-control" type="hidden" id="percentage24" name="percentage_d24">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">25.&nbsp;To what extent does your organization have the processes automated?</span></div>
                </div>
                <div class="row d-flex flex-column" id="choise25" style="text-align: center;">
                    <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" value="10" id="sd25_1" name="sd25" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd25_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">a.&nbsp;Fully automated</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" value="7.5" id="sd25_2" name="sd25" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd25_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">b.&nbsp;Majority of the processes are automated</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" value="5" id="sd25_3" name="sd25" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd25_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">c.&nbsp;Some processes are automated</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" value="0" id="sd25_4" name="sd25" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd25_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">d.&nbsp;Nothing is automated</label></div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" oninput="calculateSum()" type="hidden" id="marks25" name="marks_d25">
                    <input class="form-control" type="hidden" id="percentage25" name="percentage_d25">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">26.&nbsp;Does your organization has a network/ system administrator who has access to the organization's network/systems?</span></div>
                </div>
                <div class="row d-flex flex-column" id="choise26" style="text-align: center;">
                    <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" id="sd26_1" value="10" name="sd26" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd26_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">a.&nbsp;Yes</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" id="sd26_2" value="0" name="sd26" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd26_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">b.&nbsp;No</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" id="sd26_3" value="0" name="sd26" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd26_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">c.&nbsp;Not relevant</label></div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" oninput="calculateSum()" type="hidden" id="marks26" name="marks_d26">
                    <input class="form-control" type="hidden" id="percentage26" name="percentage_d26">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">27.&nbsp;Up to what extent does your organization consume the network facility effectively throughout the business units?</span></div>
                </div>
                <div class="row d-flex flex-column" id="choise27" style="text-align: center;">
                    <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" value="10" id="sd27_1" name="sd27" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd27_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">a.&nbsp;Fully</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" value="7.5" id="sd27_2" name="sd27" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd27_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">b.&nbsp;Up to some extent</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" value="5" id="sd27_3" name="sd27" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd27_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">c.&nbsp;Partially</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" value="0" id="sd27_4" name="sd27" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd27_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">c.&nbsp;Not applicable</label></div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" oninput="calculateSum()" type="hidden" id="marks27" name="marks_d27">
                    <input class="form-control" type="hidden" id="percentage27" name="percentage_d27">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" type="hidden" id="page4_total_marks" name="page4_marks" >
                    <input class="form-control" type="hidden" id="strategy_percentage" name="strategyPercentage" >
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
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

        {{--  Q20  --}}
        <script type="text/javascript">
            $('#choise20').find(":radio").on('click', e => {
                wei = document.getElementById("weight").value;
                max = document.getElementById("max_weight").value;
                choi = e.target.value;
                var x=wei * choi;
                var y=x / max;
                var z=y * 100;
                document.getElementById("marks20").value = x;
                document.getElementById("percentage20").value = z ;
            });

        </script>

        {{--  Q21  --}}
        <script type="text/javascript">
            $('#choise21').find(":radio").on('click', e => {
                wei = document.getElementById("weight").value;
                max = document.getElementById("max_weight").value;
                choi = e.target.value;
                var x=wei * choi;
                var y=x / max;
                var z=y * 100;
                document.getElementById("marks21").value = x;
                document.getElementById("percentage21").value = z ;
            });

        </script>

        {{--  Q22  --}}
        <script type="text/javascript">
            $('#choise22').find(":radio").on('click', e => {
                wei = document.getElementById("weight").value;
                max = document.getElementById("max_weight").value;
                choi = e.target.value;
                var x=wei * choi;
                var y=x / max;
                var z=y * 100;
                document.getElementById("marks22").value = x;
                document.getElementById("percentage22").value = z ;
            });
        </script>

        {{--  Q23  --}}
        <script type="text/javascript">
            $('#choise23').find(":radio").on('click', e => {
                wei = document.getElementById("weight").value;
                max = document.getElementById("max_weight").value;
                choi = e.target.value;
                var x=wei * choi;
                var y=x / max;
                var z=y * 100;
                document.getElementById("marks23").value = x;
                document.getElementById("percentage23").value = z ;
            });
        </script>

        {{--  Q24  --}}
        <script type="text/javascript">
            $('#choise24').find(":radio").on('click', e => {
                wei = document.getElementById("weight").value;
                max = document.getElementById("max_weight").value;
                choi = e.target.value;
                var x=wei * choi;
                var y=x / max;
                var z=y * 100;
                document.getElementById("marks24").value = x;
                document.getElementById("percentage24").value = z ;
            });
        </script>

        {{--  Q25  --}}
        <script type="text/javascript">
            $('#choise25').find(":radio").on('click', e => {
                wei = document.getElementById("weight").value;
                max = document.getElementById("max_weight").value;
                choi = e.target.value;
                var x=wei * choi;
                var y=x / max;
                var z=y * 100;
                document.getElementById("marks25").value = x;
                document.getElementById("percentage25").value = z ;
            });
        </script>

        {{--  Q26  --}}
        <script type="text/javascript">
            $('#choise26').find(":radio").on('click', e => {
                wei = document.getElementById("weight").value;
                max = document.getElementById("max_weight").value;
                choi = e.target.value;
                var x=wei * choi;
                var y=x / max;
                var z=y * 100;
                document.getElementById("marks26").value = x;
                document.getElementById("percentage26").value = z ;
            });
        </script>

        {{--  Q27  --}}
        <script type="text/javascript">
            $('#choise27').find(":radio").on('click', e => {
                wei = document.getElementById("weight").value;
                max = document.getElementById("max_weight").value;
                choi = e.target.value;
                var x=wei * choi;
                var y=x / max;
                var z=y * 100;
                document.getElementById("marks27").value = x;
                document.getElementById("percentage27").value = z ;
            });
        </script>

        <script type="text/javascript">
            $('#page4').find(":radio").on('click', e => {
                p3 = document.getElementById("page3_total_marks").value;
                q20 = document.getElementById("marks20").value;
                q21 = document.getElementById("marks21").value;
                q22 = document.getElementById("marks22").value;
                q23 = document.getElementById("marks23").value;
                q24 = document.getElementById("marks24").value;
                q25 = document.getElementById("marks25").value;
                q26 = document.getElementById("marks26").value;
                q27 = document.getElementById("marks27").value;



                var a= Number(p3) + Number(q20) + Number(q21) + Number(q22) + Number(q23) + Number(q24) + Number(q25) + Number(q26) + Number(q27) ;
                document.getElementById("page4_total_marks").value= a;

                var str= Number(q20) + Number(q21) + Number(q22) + Number(q23) + Number(q24) + Number(q25) + Number(q26) + Number(q27) ;
                var str2= str / 250;
                var strategy= (str2 * 100).toFixed(0);
                document.getElementById("strategy_percentage").value= strategy;

            });
        </script>

    </section>
</body>
@endsection
