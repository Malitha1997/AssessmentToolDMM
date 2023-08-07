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
                    <input type="hidden" id="page1_total_marks" name="page1_total" value="{{ $inputValue['page1_total']}}" id="page1_total_marks">
                    <input class="form-control" type="hidden" id="customerPercentage" name="customer_percentage" value="{{ $inputValue['customer_percentage']}}">
                    <input class="form-control" type="hidden" id="percentage1" name="percentage_d1" value="{{ $inputValue['percentage_d1']}}">
                    <input class="form-control" type="hidden" id="percentage2" name="percentage_d2" value="{{ $inputValue['percentage_d2']}}">
                    <input class="form-control" type="hidden" id="percentage3" name="percentage_d3" value="{{ $inputValue['percentage_d3']}}">
                    <input class="form-control" type="hidden" id="percentage4" name="percentage_d4" value="{{ $inputValue['percentage_d4']}}">
                    <input class="form-control" type="hidden" id="percentage5" name="percentage_d5" value="{{ $inputValue['percentage_d5']}}">
                    <input class="form-control" type="hidden" id="strategyMarksPage1" name="strategy_marks_page1" value="{{ $inputValue['strategy_marks_page1']}}">
                    <input class="form-control" type="hidden" id="percentage6" name="percentage_d6" value="{{ $inputValue['percentage_d6']}}">
                    <input class="form-control" type="hidden" id="percentage7" name="percentage_d7" value="{{ $inputValue['percentage_d7']}}">
                    <input class="form-control" type="hidden" id="percentage8" name="percentage_d8" value="{{ $inputValue['percentage_d8']}}">
                    <input class="form-control" type="hidden" id="percentage9" name="percentage_d9" value="{{ $inputValue['percentage_d9']}}">
                    <input class="form-control" type="hidden" id="percentage10" name="percentage_d10" value="{{ $inputValue['percentage_d10']}}">
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
                    <input class="form-control" type="hidden" id="strategyPercentage" name="strategy_percentage">
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
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">16.&nbsp;How do you rate your organization’s strategy of data analytics? (1 is low and 5 is highest)</span></div>
                </div>
                <div class="row" id="choise16" style="margin-right: 292px;margin-top: 30px;margin-left: 220px;">
                    <div class="col"><input type="radio" id="sd16_1" value="2" name="sd16" style="width:15px;height:15px;font-size: 20px;margin-right: 20px;"><label class="form-label" for="sd16_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">1</label></div>
                    <div class="col"><input type="radio" id="sd16_2" value="4" name="sd16" style="width:15px;height:15px;font-size: 20px;margin-right: 20px;"><label class="form-label" for="sd16_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">2</label></div>
                    <div class="col"><input type="radio" id="sd16_3" value="6" name="sd16" style="width:15px;height:15px;font-size: 20px;margin-right: 20px;"><label class="form-label" for="sd16_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">3</label></div>
                    <div class="col"><input type="radio" id="sd16_4" value="8" name="sd16" style="width:15px;height:15px;font-size: 20px;margin-right: 20px;"><label class="form-label" for="sd16_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">4</label></div>
                    <div class="col"><input type="radio" id="sd16_5" value="10" name="sd16" style="width:15px;height:15px;font-size: 20px;margin-right: 20px;"><label class="form-label" for="sd16_5" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">5</label></div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" type="hidden" id="marks16" name="marks_d16">
                    <input class="form-control" type="hidden" id="percentage16" name="percentage_d16">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">17.&nbsp;Have your organization classified available data?</span></div>
                </div>
                <div class="row d-flex flex-column" id="choise17" style="text-align: center;">
                    <div class="col">
                        <div class="row d-flex flex-column" style="text-align: center;">
                            <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" id="sd17_1" value="10" name="sd17" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd17_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">Yes</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" id="sd17_2" value="0" name="sd17" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd17_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">No</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" id="sd17_3" value="0" name="sd17" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd17_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">No idea</label></div>
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
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">18.&nbsp;How do you rate your organization's data interoperability mechanism? (1 is low and 5 is highest)</span></div>
                </div>
                <div class="row" id="choise18" style="margin-right: 292px;margin-top: 30px;margin-left: 220px;">
                    <div class="col"><input type="radio" id="sd18_1" value="2" name="sd18" style="width:15px;height:15px;font-size: 20px;margin-right: 20px;"><label class="form-label" for="sd18_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">1</label></div>
                    <div class="col"><input type="radio" id="sd18_2" value="4" name="sd18" style="width:15px;height:15px;font-size: 20px;margin-right: 20px;"><label class="form-label" for="sd18_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">2</label></div>
                    <div class="col"><input type="radio" id="sd18_3" value="6" name="sd18" style="width:15px;height:15px;font-size: 20px;margin-right: 20px;"><label class="form-label" for="sd18_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">3</label></div>
                    <div class="col"><input type="radio" id="sd18_4" value="8" name="sd18" style="width:15px;height:15px;font-size: 20px;margin-right: 20px;"><label class="form-label" for="sd18_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">4</label></div>
                    <div class="col"><input type="radio" id="sd18_5" value="10" name="sd18" style="width:15px;height:15px;font-size: 20px;margin-right: 20px;"><label class="form-label" for="sd18_5" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">5</label></div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" type="hidden" id="marks18" name="marks_d18">
                    <input class="form-control" type="hidden" id="percentage18" name="percentage_d18">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">19.&nbsp;How do you rate social media support for your organization’s initiatives? (1 is low and 5 is highest)</span></div>
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
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">20.&nbsp;Do you have a well defined change management process in your organization to changes processes/ application’s&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; with minimum cost</span></div>
                </div>
                <div class="row d-flex flex-column" style="text-align: center;">
                    <div class="col">
                        <div class="row d-flex flex-column" id="choise20" style="text-align: center;">
                            <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" id="sd20_1" value="10" name="sd20" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd20_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">Yes</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" id="sd20_2" value="0" name="sd20" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd20_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">No</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" id="sd20_3" value="0" name="sd20" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd20_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">No idea</label></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px;">
                        <input class="form-control" type="hidden" id="marks20" name="marks_d20">
                        <input class="form-control" type="hidden" id="percentage20" name="percentage_d20">
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col" style="text-align: left;"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;text-align: left;">21.&nbsp;Rate your organization’s integrated service management to access data or services? (1 is low and 5 is highest)</span>
                                <div class="row" id="choise21" style="margin-right: 292px;margin-top: 30px;margin-left: 220px;">
                                    <div class="col"><input type="radio" id="sd21_1" value="2" name="sd21" style="width:15px;height:15px;font-size: 20px;margin-right: 20px;"><label class="form-label" for="sd21_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">1</label></div>
                                    <div class="col"><input type="radio" id="sd21_2" value="4" name="sd21" style="width:15px;height:15px;font-size: 20px;margin-right: 20px;"><label class="form-label" for="sd21_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">2</label></div>
                                    <div class="col"><input type="radio" id="sd21_3" value="6" name="sd21" style="width:15px;height:15px;font-size: 20px;margin-right: 20px;"><label class="form-label" for="sd21_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">3</label></div>
                                    <div class="col"><input type="radio" id="sd21_4" value="8" name="sd21" style="width:15px;height:15px;font-size: 20px;margin-right: 20px;"><label class="form-label" for="sd21_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">4</label></div>
                                    <div class="col"><input type="radio" id="sd21_5" value="10" name="sd21" style="width:15px;height:15px;font-size: 20px;margin-right: 20px;"><label class="form-label" for="sd21_5" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">5</label></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px;">
                        <input class="form-control" type="hidden" id="marks21" name="marks_d21">
                        <input class="form-control" type="hidden" id="percentage21" name="percentage_d21">
                    </div>
                    <div class="row" style="margin-top: 20px;">
                        <input class="form-control" type="hidden" id="page2_total_marks" name="page2_total" value="{{ session('input_value2')}}">
                        <input class="form-control" type="hidden" id="technologyMarksPage1" name="technology_marks_page1" >
                    </div>
                    <div class="col" data-aos="fade-down" data-aos-duration="1000" style="margin-top: 0px;height: 206px;">
                        <div class="row" style="margin-top: 150px;">
                            <div class="col"></div>
                            <div class="col" style="width: 250px;text-align: right;padding-left: 0px;margin-left: -390px;">
                                <a class="btn btn-primary" type="button" style="width: 152px;height: 55px;font-size: 20px;color: #1f2471;background: rgb(255,255,255);font-family: Poppins, sans-serif;font-weight: bold;border-radius: 10px;border: 2px solid #1f2471 ;margin-right: 30px;" href="/preliminaryAssessment1">Previous</a>
                                <a class="btn btn-primary" href="/home" type="button" style="width: 152px;height: 55px;font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;background: rgb(255,255,255);border-radius: 10px;font-weight: bold;border: 2px solid #1f2471;padding-left: 0px;margin-right: 30px;">Resume</a>
                                <button class="btn btn-primary" type="submit" style="width: 152px;height: 55px;font-family: Poppins, sans-serif;font-size: 24px;background: #1f2471;border-width: 0px;border-radius: 10px;" >Next</button></div>
                        </div>
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

        <script type="text/javascript">
            $('#page2').find(":radio").on('click', e => {
                p1 = document.getElementById("page1_total_marks").value;
                s1 = document.getElementById("strategyMarksPage1").value;
                q11 = document.getElementById("marks11").value;
                q12 = document.getElementById("marks12").value;
                q13 = document.getElementById("marks13").value;
                q14 = document.getElementById("marks14").value;
                q15 = document.getElementById("marks15").value;
                q16 = document.getElementById("marks16").value;
                q17 = document.getElementById("marks17").value;
                q18 = document.getElementById("marks18").value;
                q19 = document.getElementById("marks19").value;
                q20 = document.getElementById("marks20").value;
                q21 = document.getElementById("marks21").value;

                var a=Number(p1) + Number(q11) + Number(q12) + Number(q13) + Number(q14) + Number(q15) + Number(q16) + Number(q17) + Number(q18) + Number(q20) + Number(q21) ;
                document.getElementById("page2_total_marks").value= a;

                var stra= Number(s1) + Number(q11) + Number(q12) + Number(q13);
                var stra2= stra / 250;
                var strategy= (stra2 * 100).toFixed(0);
                document.getElementById("strategyPercentage").value= strategy;

                var technology=Number(q14) + Number(q15) + Number(q16) + Number(q17) + Number(q18) + Number(q20) + Number(q21) ;
                document.getElementById("technologyMarksPage1").value= technology;
            });
        </script>
    </section>
</body>
@endsection
