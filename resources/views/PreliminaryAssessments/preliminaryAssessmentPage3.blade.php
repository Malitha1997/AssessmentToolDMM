@extends('layouts.userNavbar')

@section('content')

<body style="border-color: rgb(46,127,208);color: rgb(255,255,255);">
    <section class="d-flex flex-column align-items-center" style="height: 3200px;">
        <div class="container align-content-center align-self-center" style="margin: 150px;width: 1358px;height: 600px;">
            <div data-aos="fade-down" id="page3" data-aos-duration="1000" style="width: 1282px;height: 2400px;margin-top: 80px;border-radius: 10px;border: 2px solid #5f2b84;padding-left: 0px;margin-left: 6px;">
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" type="hidden" value="3.125" id="weight">
                    <input class="form-control" type="hidden" value="31.25" id="max_weight">
                    <input type="hidden" name="page2_total" value="{{  $inputValue['page2_total'] }}" id="page2_total_marks">
                    <input class="form-control" type="hidden" id="customerPercentage" name="customer_percentage" value="{{ $inputValue['customer_percentage']}}">
                    <input class="form-control" type="hidden" id="percentage1" name="percentage_d1" value="{{ $inputValue['percentage_d1']}}">
                    <input class="form-control" type="hidden" id="percentage2" name="percentage_d2" value="{{ $inputValue['percentage_d2']}}">
                    <input class="form-control" type="hidden" id="percentage3" name="percentage_d3" value="{{ $inputValue['percentage_d3']}}">
                    <input class="form-control" type="hidden" id="percentage4" name="percentage_d4" value="{{ $inputValue['percentage_d4']}}">
                    <input class="form-control" type="hidden" id="percentage5" name="percentage_d5" value="{{ $inputValue['percentage_d5']}}">
                    <input class="form-control" type="hidden" id="strategyPercentage" name="strategy_percentage" value="{{ $inputValue['strategy_percentage']}}">
                    <input class="form-control" type="hidden" id="percentage6" name="percentage_d6" value="{{ $inputValue['percentage_d6']}}">
                    <input class="form-control" type="hidden" id="percentage7" name="percentage_d7" value="{{ $inputValue['percentage_d7']}}">
                    <input class="form-control" type="hidden" id="percentage8" name="percentage_d8" value="{{ $inputValue['percentage_d8']}}">
                    <input class="form-control" type="hidden" id="percentage9" name="percentage_d9" value="{{ $inputValue['percentage_d9']}}">
                    <input class="form-control" type="hidden" id="percentage10" name="percentage_d10" value="{{ $inputValue['percentage_d10']}}">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col" style="height: 30px;"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 50px;">22.&nbsp;Could your organization generate real time reports if required?<br><br></span></div>
                </div>
                <div class="row d-flex flex-column" style="text-align: center;">
                    <div class="col">
                        <div class="row d-flex flex-column" id="choise22" style="text-align: center;">
                            <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" value="10" name="sd22" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">a.&nbsp;Yes, we can</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" value="5" name="sd22" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">b.&nbsp;No, we do not have a proper report generating tool</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" value="2.5" name="sd22" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">c.&nbsp;No, all report are generating manually</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" value="0" name="sd22" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">d.&nbsp;No idea on this</label></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" type="hidden" id="marks22" name="marks_d22">
                    <input class="form-control" type="hidden" id="percentage22" name="percentage_d22">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">23.&nbsp;Who manage the investment for digital transformation?</span></div>
                </div>
                <div class="row d-flex flex-column" style="text-align: center;">
                    <div class="col">
                        <div class="row d-flex flex-column" style="text-align: center;">
                            <div class="col">
                                <div class="row d-flex flex-column" id="choise23" style="text-align: center;">
                                    <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                                        <div class="row" style="margin-bottom: 20px;">
                                            <div class="col"><input type="radio" value="5" name="sd23" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">a.&nbsp;Chief Digital Information Officer</label></div>
                                        </div>
                                        <div class="row" style="margin-bottom: 20px;">
                                            <div class="col"><input type="radio" value="10" name="sd23" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">b.&nbsp;Head of Organization</label></div>
                                        </div>
                                        <div class="row" style="margin-bottom: 20px;">
                                            <div class="col"><input type="radio" value="2.5" name="sd23" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">c.&nbsp;Department Head</label></div>
                                        </div>
                                        <div class="row" style="margin-bottom: 20px;">
                                            <div class="col"><input type="radio" value="0" name="sd23" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">d.&nbsp;No one</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" type="hidden" id="marks23" name="marks_d23">
                    <input class="form-control" type="hidden" id="percentage23" name="percentage_d23">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">24.&nbsp;Does your organization have the mechanism to develop a strategic plan?</span></div>
                </div>
                <div class="row d-flex flex-column" style="text-align: center;">
                    <div class="col">
                        <div class="row d-flex flex-column" style="text-align: center;">
                            <div class="col">
                                <div class="row d-flex flex-column" style="text-align: center;">
                                    <div class="col" id="choise24" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                                        <div class="row" style="margin-bottom: 20px;">
                                            <div class="col"><input type="radio" value="10" name="sd24" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">Yes</label></div>
                                        </div>
                                        <div class="row" style="margin-bottom: 20px;">
                                            <div class="col"><input type="radio" value="0" name="sd24" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">No</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" type="hidden" id="marks24" name="marks_d24">
                    <input class="form-control" type="hidden" id="percentage24" name="percentage_d24">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">25.&nbsp;How do you rate your organization's long term digital roadmap? (1 is low/no roadmap and 5 is highest/well defined&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; roadmap)</span></div>
                </div>
                <div class="row" id="choise25" style="margin-right: 292px;margin-top: 30px;margin-left: 220px;">
                    <div class="col"><input type="radio" value="2" name="sd25" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">1</label></div>
                    <div class="col"><input type="radio" value="4" name="sd25" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">2</label></div>
                    <div class="col"><input type="radio" value="6" name="sd25" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">3</label></div>
                    <div class="col"><input type="radio" value="8" name="sd25" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">4</label></div>
                    <div class="col"><input type="radio" value="10" name="sd25" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">5</label></div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" type="hidden" id="marks25" name="marks_d25">
                    <input class="form-control" type="hidden" id="percentage25" name="percentage_d25">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">26.&nbsp;Have you consider digital transformation as a part of the organization policy?</span></div>
                </div>
                <div class="row d-flex flex-column" style="text-align: center;">
                    <div class="col">
                        <div class="row d-flex flex-column" style="text-align: center;">
                            <div class="col">
                                <div class="row d-flex flex-column" id="choise26" style="text-align: center;">
                                    <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                                        <div class="row" style="margin-bottom: 20px;">
                                            <div class="col"><input type="radio" value="0" name="sd26" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">a.&nbsp;Digital transformation is not part of the organization policy</label></div>
                                        </div>
                                        <div class="row" style="margin-bottom: 20px;">
                                            <div class="col"><input type="radio" value="10" name="sd26" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">b.&nbsp;Digital transformation is included as a part of the organization policy</label></div>
                                        </div>
                                        <div class="row" style="margin-bottom: 20px;">
                                            <div class="col"><input type="radio" value="0" name="sd26" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">c.&nbsp;No idea</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" type="hidden" id="marks26" name="marks_d26">
                    <input class="form-control" type="hidden" id="percentage26" name="percentage_d26">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">27.&nbsp;Rate your organization’s leader's understanding on the digital strategy? (1 is low and 5 is highest)</span></div>
                </div>
                <div class="row" id="choise27" style="margin-right: 292px;margin-top: 30px;margin-left: 220px;">
                    <div class="col"><input type="radio" value="2" name="sd27" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">1</label></div>
                    <div class="col"><input type="radio" value="4" name="sd27" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">2</label></div>
                    <div class="col"><input type="radio" value="6" name="sd27" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">3</label></div>
                    <div class="col"><input type="radio" value="8" name="sd27" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">4</label></div>
                    <div class="col"><input type="radio" value="10" name="sd27" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">5</label></div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" type="hidden" id="marks27" name="marks_d27">
                    <input class="form-control" type="hidden" id="percentage27" name="percentage_d27">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">28.&nbsp;How is the awareness on digital transformation goals among the employees?</span></div>
                </div>
                <div class="row d-flex flex-column" style="text-align: center;">
                    <div class="col">
                        <div class="row d-flex flex-column" id="choise28" style="text-align: center;">
                            <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" value="0" name="sd28" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">a.&nbsp;Digital Transformation goals are not defined.</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" value="5" name="sd28" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -8px;">b.&nbsp;Digital Transformation goals are in place but no proper measurement criteria and rewards mechanism is <br>defined.</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" value="10" name="sd28" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -8px;">c.&nbsp;Employees are well aware about the digital transformation goals, measurement framework and the <br>rewards structure.</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" value="2.5" name="sd28" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -8px;">d.&nbsp;</label></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" type="hidden" id="marks28" name="marks_d28">
                    <input class="form-control" type="hidden" id="percentage28" name="percentage_d28">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">29.&nbsp;Rate your organization branding strategy? (1 is low and 5 is highest)</span></div>
                </div>
                <div class="row" id="choise29" style="margin-right: 292px;margin-top: 30px;margin-left: 220px;">
                    <div class="col"><input type="radio" value="2" name="sd29" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">1</label></div>
                    <div class="col"><input type="radio" value="4" name="sd29" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">2</label></div>
                    <div class="col"><input type="radio" value="6" name="sd29" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">3</label></div>
                    <div class="col"><input type="radio" value="8" name="sd29" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">4</label></div>
                    <div class="col"><input type="radio" value="10" name="sd29" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">5</label></div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" type="hidden" id="marks29" name="marks_d29">
                    <input class="form-control" type="hidden" id="percentage29" name="percentage_d29">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">30.&nbsp;Availability of digital appliances in your organization?</span></div>
                </div>
                <div class="row d-flex flex-column" style="text-align: center;">
                    <div class="col">
                        <div class="row d-flex flex-column" id="choise30" style="text-align: center;">
                            <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" value="5" name="sd30" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">a.&nbsp;Importance and requirement is identified but digital appliances are not available</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" value="2.5" name="sd30" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">b.&nbsp;Importance and requirement is identified.</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" value="0" name="sd30" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">c.&nbsp;Importance and requirement is not identified.</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" value="7.5" name="sd30" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">d.&nbsp;Digital appliances are in place and does not have a proper sustainable approach</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" value="10" name="sd30" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">e.&nbsp;Inplace and organization has a sustainable approach</label></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" type="hidden" id="marks30" name="marks_d30">
                    <input class="form-control" type="hidden" id="percentage30" name="percentage_d30">
                </div>
                <div class="row d-flex flex-column" style="text-align: center;">
                    <div class="col">
                        <div class="row">
                            <div class="col" style="text-align: left;"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;text-align: left;">31.&nbsp;Rate your organization’s overall employees level of knowledge on Information Technology (IT)? (1 is low and 5 is highest)</span>
                                <div class="row" id="choise31" style="margin-right: 292px;margin-top: 30px;margin-left: 220px;">
                                    <div class="col"><input type="radio" value="2" name="sd31" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">1</label></div>
                                    <div class="col"><input type="radio" value="4" name="sd31" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">2</label></div>
                                    <div class="col"><input type="radio" value="6" name="sd31" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">3</label></div>
                                    <div class="col"><input type="radio" value="8" name="sd31" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">4</label></div>
                                    <div class="col"><input type="radio" value="10" name="sd31" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">5</label></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px;">
                        <input class="form-control" type="hidden" id="marks31" name="marks_d31">
                        <input class="form-control" type="hidden" id="percentage31" name="percentage_d31">
                    </div>
                    <div class="row" style="margin-top: 20px;">
                        <input class="form-control" type="hidden" id="page3_total_marks" name="page3_total" value="">
                        <input class="form-control" type="hidden" id="percentage20" name="percentage_d20">
                        <input class="form-control" type="text" id="overall_percentage" name="overall">
                    </div>
                    <div class="col" data-aos="fade-down" data-aos-duration="1000" style="margin-top: 50px;">
                        <div class="row" style="margin-top: 150px;">
                            <div class="col ms-xxl-0" style="margin-left: 62px;"></div>
                            <div class="col" style="width: 250px;text-align: right;padding-left: 0px;margin-left: -390px;">
                                <a class="btn btn-primary" type="button" style="width: 152px;height: 55px;font-size: 20px;color: #1f2471;background: rgb(255,255,255);font-family: Poppins, sans-serif;font-weight: bold;border-radius: 10px;border: 2px solid #1f2471 ; margin-right : 30px;" href="/preliminaryAssessment2">Previous</a>
                                <a class="btn btn-primary" href="/home" type="button" style="width: 152px;height: 55px;font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;background: rgb(255,255,255);border-radius: 10px;font-weight: bold;border: 2px solid #1f2471;padding-left: 0px;margin-right: 30px;">Resume</a>
                                <a class="btn btn-primary" type="button" style="width: 152px;height: 55px;font-family: Poppins, sans-serif;font-size: 24px;background: #1f2471;border-width: 0px;border-radius: 10px;" href="/preliminaryResults">Submit</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                document.getElementById("percentage22").value = z + '%';
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
                document.getElementById("percentage23").value = z + '%';
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
                document.getElementById("percentage24").value = z + '%';
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
                document.getElementById("percentage25").value = z + '%';
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
                document.getElementById("percentage26").value = z + '%';
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
                document.getElementById("percentage27").value = z + '%';
            });

        </script>

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
                document.getElementById("percentage28").value = z + '%';
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
                document.getElementById("percentage29").value = z + '%';
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
                document.getElementById("percentage30").value = z + '%';
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
                document.getElementById("percentage31").value = z + '%';
            });

        </script>

        <script type="text/javascript">
            $('#page3').find(":radio").on('click', e => {
                p2 = document.getElementById("page2_total_marks").value;
                q22 = document.getElementById("marks22").value;
                q23 = document.getElementById("marks23").value;
                q24 = document.getElementById("marks24").value;
                q25 = document.getElementById("marks25").value;
                q26 = document.getElementById("marks26").value;
                q27 = document.getElementById("marks27").value;
                q28 = document.getElementById("marks28").value;
                q29 = document.getElementById("marks29").value;
                q30 = document.getElementById("marks30").value;
                q31 = document.getElementById("marks31").value;

                var a=Number(p2) + Number(q22) + Number(q23) + Number(q24) + Number(q25) + Number(q26) + Number(q27) + Number(q28) + Number(q29) + Number(q30) + Number(q31);

                document.getElementById("page3_total_marks").value= a;

                var b= a / 1000;
                var c= (b * 100).toFixed(0);

                document.getElementById("overall_percentage").value= c+'%';
            });
        </script>
    </section>
</body>
@endsection
