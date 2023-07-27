@extends('layouts.userNavbar')

@section('content')

<body style="border-color: rgb(46,127,208);color: rgb(255,255,255);">
    <section class="d-flex flex-column align-items-center" style="height: 3200px;">
        <div class="container align-content-center align-self-center" style="margin: 150px;width: 1358px;height: 600px;">
            <div data-aos="fade-down" data-aos-duration="1000" style="width: 1282px;height: 2448px;margin-top: 80px;border-radius: 10px;border: 2px solid #5f2b84;padding-left: 0px;margin-left: 6px;">
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" value="3.125" id="weight">
                    <input class="form-control" value="31.25" id="max_weight">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col" style="height: 30px;"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 50px;">11.&nbsp;What is your organization's strategy for the digital citizen experience?</span></div>
                </div>
                <div class="col-xxl-12" style="margin-top: 20px;margin-bottom: 10px;">
                    <div class="row" style="margin-bottom: 20px;">
                        <div class="col"><input type="radio" name="sd11" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">a. Do not have a citizen experience strategy</label></div>
                    </div>
                    <div class="row" style="margin-bottom: 20px;">
                        <div class="col"><input type="radio" name="sd11" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">b.&nbsp;Multi- channel citizen experience strategy</label></div>
                    </div>
                    <div class="row" style="margin-bottom: 20px;">
                        <div class="col"><input type="radio" name="sd11" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">c.&nbsp;Cross channel citizen experience strategy</label></div>
                    </div>
                    <div class="row" style="margin-bottom: 20px;">
                        <div class="col"><input type="radio" name="sd11" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">d.&nbsp;Omni-channel citizen experience strategy</label></div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">12.&nbsp;How does your organization capture citizens’ data?</span></div>
                </div>
                <div class="row d-flex flex-column" style="text-align: center;">
                    <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" name="sd12" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">a.&nbsp;We do not capture citizens’ data</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" name="sd12" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">b.&nbsp;No proper mechanism</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" name="sd12" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">c.&nbsp;Manually (once they come)</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" name="sd12" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">d.&nbsp;Have an online process for some applications</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" name="sd12" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">e.&nbsp;Fully automated</label></div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">13.&nbsp;Does the organization has a proper mechanism to maintain citizens' data privacy by digitalizing and resolving the&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;citizen's problems?</span></div>
                </div>
                <div class="row d-flex flex-column" id="choise13" style="text-align: center;">
                    <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" value="5" name="sd13" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">Yes. We have a well defined digitalized data privacy mechanism to resolve the citizen's problems</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" value="5" name="sd13" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">Yes. We have a partially automated solution</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" value="0" name="sd13" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">We do not have proper mechanism. All manual</label></div>
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
                        <div class="row d-flex flex-column" style="text-align: center;">
                            <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" name="sd14" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">a.&nbsp;We have a well defined digital workflows triggered dynamically for problem resolution and communication</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" name="sd14" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">b.&nbsp;Citizen information are captured using digital means</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" name="sd14" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">c.&nbsp;We do not have proper mechanism</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" name="sd14" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">d.&nbsp;Citizen's data are captured manually and connecting them manually</label></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">15.&nbsp;Does your organization practice Agile Change Management?</span></div>
                </div>
                <div class="row d-flex flex-column" id="choise15" style="text-align: center;">
                    <div class="col">
                        <div class="row d-flex flex-column" style="text-align: center;">
                            <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" value="5" name="sd15" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">Yes. we are practicing</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" value="5" name="sd15" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">Sometimes</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" value="0" name="sd15" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">Do not have any idea on Agile Change Management</label></div>
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
                    <div class="col"><input type="radio" value="2.5" name="sd16" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">1</label></div>
                    <div class="col"><input type="radio" value="5" name="sd16" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">2</label></div>
                    <div class="col"><input type="radio" value="7.5" name="sd16" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">3</label></div>
                    <div class="col"><input type="radio" value="10" name="sd16" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">4</label></div>
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
                                    <div class="col"><input type="radio" value="10" name="sd17" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">Yes</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" value="0" name="sd17" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">No</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" value="0" name="sd17" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">No idea</label></div>
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
                    <div class="col"><input type="radio" value="2.5" name="sd18" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">1</label></div>
                    <div class="col"><input type="radio" value="5" name="sd18" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">2</label></div>
                    <div class="col"><input type="radio" value="7.5" name="sd18" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">3</label></div>
                    <div class="col"><input type="radio" value="10" name="sd18" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">4</label></div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" type="hidden" id="marks18" name="marks_d18">
                    <input class="form-control" type="hidden" id="percentage18" name="percentage_d18">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">19.&nbsp;How do you rate social media support for your organization’s initiatives? (1 is low and 5 is highest)</span></div>
                </div>
                <div class="row" id="choise19" style="margin-right: 292px;margin-top: 30px;margin-left: 220px;">
                    <div class="col"><input type="radio" value="2.5" name="sd19" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">1</label></div>
                    <div class="col"><input type="radio" value="5" name="sd19" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">2</label></div>
                    <div class="col"><input type="radio" value="7.5" name="sd19" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">3</label></div>
                    <div class="col"><input type="radio" value="10" name="sd19" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">4</label></div>
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
                                    <div class="col"><input type="radio" value="10" name="sd20" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">Yes</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" value="0" name="sd20" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">No</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" value="0" name="sd20" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">No idea</label></div>
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
                                    <div class="col"><input type="radio" value="2.5" name="sd21" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">1</label></div>
                                    <div class="col"><input type="radio" value="5" name="sd21" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">2</label></div>
                                    <div class="col"><input type="radio" value="7.5" name="sd21" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">3</label></div>
                                    <div class="col"><input type="radio" value="10" name="sd21" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">4</label></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px;">
                        <input class="form-control"  id="marks21" name="marks_d21">
                        <input class="form-control"  id="percentage21" name="percentage_d21">
                    </div>
                    <div class="col" data-aos="fade-down" data-aos-duration="1000" style="margin-top: 0px;height: 206px;">
                        <div class="row" style="margin-top: 150px;">
                            <div class="col ms-xxl-0" style="margin-left: 62px;"><span style="font-family: Poppins, sans-serif;color: #1f2471;font-size: 20px;font-weight: bold;margin-top: 50px;margin-left: 50px;">Continue to Next Section</span></div>
                            <div class="col"></div>
                            <div class="col" style="width: 250px;text-align: right;padding-left: 0px;margin-left: -390px;">
                                <a class="btn btn-primary" type="button" style="width: 152px;height: 55px;font-size: 20px;color: #1f2471;background: rgb(255,255,255);font-family: Poppins, sans-serif;font-weight: bold;border-radius: 10px;border: 2px solid #1f2471 ;margin-right: 30px;" href="/preliminaryAssessment1">Previous</a>
                                <a class="btn btn-primary" href="/home" type="button" style="width: 152px;height: 55px;font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;background: rgb(255,255,255);border-radius: 10px;font-weight: bold;border: 2px solid #1f2471;padding-left: 0px;margin-right: 30px;">Resume</a>
                                <a class="btn btn-primary" type="button" style="width: 152px;height: 55px;font-family: Poppins, sans-serif;font-size: 24px;background: #1f2471;border-width: 0px;border-radius: 10px;" href="/preliminaryAssessment3">Next</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                document.getElementById("percentage13").value = z + '%';
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
                document.getElementById("percentage15").value = z + '%';
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
                document.getElementById("percentage16").value = z + '%';
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
                document.getElementById("percentage17").value = z + '%';
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
                document.getElementById("percentage18").value = z + '%';
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
                document.getElementById("percentage19").value = z + '%';
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
                document.getElementById("percentage20").value = z + '%';
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
                document.getElementById("percentage21").value = z + '%';
            });

        </script>
    </section>
</body>
@endsection
