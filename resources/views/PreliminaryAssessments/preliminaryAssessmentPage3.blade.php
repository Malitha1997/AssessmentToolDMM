@extends('layouts.userNavbar')

@section('content')

<body style="border-color: rgb(46,127,208);color: rgb(255,255,255);">
    <section class="d-flex flex-column align-items-center" style="height: 3200px;">
        <div class="container align-content-center align-self-center" style="margin: 150px;width: 1358px;height: 600px;">
            <div data-aos="fade-down" data-aos-duration="1000" style="width: 1282px;height: 2200px;margin-top: 80px;border-radius: 10px;border: 2px solid #5f2b84;padding-left: 0px;margin-left: 6px;">
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" type="hidden" value="3.125" id="weight">
                    <input class="form-control" type="hidden" value="31.25" id="max_weight">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col" style="height: 30px;"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 50px;">22.&nbsp;Could your organization generate real time reports if required?<br><br></span></div>
                </div>
                <div class="row d-flex flex-column" style="text-align: center;">
                    <div class="col">
                        <div class="row d-flex flex-column" style="text-align: center;">
                            <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" name="sd22" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">a.&nbsp;Yes, we can</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" name="sd22" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">b.&nbsp;No, we do not have a proper report generating tool</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" name="sd22" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">c.&nbsp;No, all report are generating manually</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" name="sd22" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">d.&nbsp;No idea on this</label></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">23.&nbsp;Who manage the investment for digital transformation?</span></div>
                </div>
                <div class="row d-flex flex-column" style="text-align: center;">
                    <div class="col">
                        <div class="row d-flex flex-column" style="text-align: center;">
                            <div class="col">
                                <div class="row d-flex flex-column" style="text-align: center;">
                                    <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                                        <div class="row" style="margin-bottom: 20px;">
                                            <div class="col"><input type="radio" name="sd23" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">a.&nbsp;Chief Digital Information Officer</label></div>
                                        </div>
                                        <div class="row" style="margin-bottom: 20px;">
                                            <div class="col"><input type="radio" name="sd23" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">b.&nbsp;Head of Organization</label></div>
                                        </div>
                                        <div class="row" style="margin-bottom: 20px;">
                                            <div class="col"><input type="radio" name="sd23" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">c.&nbsp;Department Head</label></div>
                                        </div>
                                        <div class="row" style="margin-bottom: 20px;">
                                            <div class="col"><input type="radio" name="sd23" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">d.&nbsp;No one</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <div class="col"><input type="radio" value="2.5" name="sd25" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">1</label></div>
                    <div class="col"><input type="radio" value="5" name="sd25" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">2</label></div>
                    <div class="col"><input type="radio" value="7.5" name="sd25" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">3</label></div>
                    <div class="col"><input type="radio" value="10" name="sd25" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">4</label></div>
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
                                <div class="row d-flex flex-column" style="text-align: center;">
                                    <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                                        <div class="row" style="margin-bottom: 20px;">
                                            <div class="col"><input type="radio" name="sd26" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">a.&nbsp;Digital transformation is not part of the organization policy</label></div>
                                        </div>
                                        <div class="row" style="margin-bottom: 20px;">
                                            <div class="col"><input type="radio" name="sd26" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">b.&nbsp;Digital transformation is included as a part of the organization policy</label></div>
                                        </div>
                                        <div class="row" style="margin-bottom: 20px;">
                                            <div class="col"><input type="radio" name="sd26" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">c.&nbsp;No idea</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">27.&nbsp;Rate your organization’s leader's understanding on the digital strategy? (1 is low and 5 is highest)</span></div>
                </div>
                <div class="row" id="choise27" style="margin-right: 292px;margin-top: 30px;margin-left: 220px;">
                    <div class="col"><input type="radio" value="2.5" name="sd27" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">1</label></div>
                    <div class="col"><input type="radio" value="5" name="sd27" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">2</label></div>
                    <div class="col"><input type="radio" value="7.5" name="sd27" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">3</label></div>
                    <div class="col"><input type="radio" value="10" name="sd27" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">4</label></div>
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
                        <div class="row d-flex flex-column" style="text-align: center;">
                            <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" name="sd28" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">a.&nbsp;Digital Transformation goals are not defined.</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" name="sd28" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -8px;">b.&nbsp;Digital Transformation goals are in place but no proper measurement criteria and rewards mechanism is <br>defined.</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" name="sd28" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -8px;">c.&nbsp;Employees are well aware about the digital transformation goals, measurement framework and the <br>rewards structure.</label></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">29.&nbsp;Rate your organization branding strategy? (1 is low and 5 is highest)</span></div>
                </div>
                <div class="row" id="choise29" style="margin-right: 292px;margin-top: 30px;margin-left: 220px;">
                    <div class="col"><input type="radio" value="2.5" name="sd29" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">1</label></div>
                    <div class="col"><input type="radio" value="5" name="sd29" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">2</label></div>
                    <div class="col"><input type="radio" value="7.5" name="sd29" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">3</label></div>
                    <div class="col"><input type="radio" value="10" name="sd29" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">4</label></div>
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
                        <div class="row d-flex flex-column" id="choice30" style="text-align: center;">
                            <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" value="" name="sd30" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">a.&nbsp;Digital appliances are not available</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" value="" name="sd30" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">b.&nbsp;Importance and requirement is identified.</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" value="" name="sd30" style="margin-left: 100px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">c.&nbsp;Digital appliances are in place and does not have a proper sustainable approach</label></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex flex-column" style="text-align: center;">
                    <div class="col">
                        <div class="row">
                            <div class="col" style="text-align: left;"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;text-align: left;">31.&nbsp;Rate your organization’s overall employees level of knowledge on Information Technology (IT)? (1 is low and 5 is highest)</span>
                                <div class="row" id="choise31" style="margin-right: 292px;margin-top: 30px;margin-left: 220px;">
                                    <div class="col"><input type="radio" value="2.5" name="sd31" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">1</label></div>
                                    <div class="col"><input type="radio" value="5" name="sd31" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">2</label></div>
                                    <div class="col"><input type="radio" value="7.5" name="sd31" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">3</label></div>
                                    <div class="col"><input type="radio" value="10" name="sd31" style="font-size: 20px;margin-right: 20px;"><label class="form-label" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">4</label></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px;">
                        <input class="form-control" type="hidden" id="marks31" name="marks_d31">
                        <input class="form-control" type="hidden" id="percentage31" name="percentage_d31">
                    </div>
                    <div class="col" data-aos="fade-down" data-aos-duration="1000" style="margin-top: 50px;">
                        <div class="row" style="margin-top: 150px;">
                            <div class="col ms-xxl-0" style="margin-left: 62px;"><span style="font-family: Poppins, sans-serif;color: #1f2471;font-size: 20px;font-weight: bold;margin-top: 50px;margin-left: 0px;">Continue to Next Section</span></div>
                            <div class="col" style="width: 250px;text-align: right;padding-left: 0px;margin-left: -390px;">
                                <a class="btn btn-primary" type="button" style="width: 152px;height: 55px;font-size: 20px;color: #1f2471;background: rgb(255,255,255);font-family: Poppins, sans-serif;font-weight: bold;border-radius: 10px;border: 2px solid #1f2471 ; margin-right : 30px;" href="/preliminaryAssessment2">Previous</a>
                                <a class="btn btn-primary" href="/home" type="button" style="width: 152px;height: 55px;font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;background: rgb(255,255,255);border-radius: 10px;font-weight: bold;border: 2px solid #1f2471;padding-left: 0px;margin-right: 30px;">Resume</a>
                                <a class="btn btn-primary" type="button" style="width: 152px;height: 55px;font-family: Poppins, sans-serif;font-size: 24px;background: #1f2471;border-width: 0px;border-radius: 10px;" href="/preliminaryResults">Submit</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
    </section>
</body>
@endsection
