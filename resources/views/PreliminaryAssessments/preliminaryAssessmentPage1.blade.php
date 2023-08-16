@extends('layouts.userNavbar')

@section('content')

<body style="border-color: rgb(46,127,208);color: rgb(255,255,255);">
    <section class="d-flex flex-column align-items-center" style="height: 3500px;">
        <div class="container align-content-center align-self-center" style="margin: 150px;width: 1358px;height: 600px;">
            <form method="POST" action="{{ route('storeValue1') }}">
                {{csrf_field()}}
            <div class="d-flex justify-content-center mb-auto mb-md-auto" data-aos="fade-right" data-aos-duration="1000" style="width: 1358px;height: 163px;margin-top: 20px;background: #1f2471;border-radius: 10px;margin-left: -30px;">
                <div class="text-center d-flex flex-column justify-content-center" style="width: 1358px;height: 194px;color: rgb(255, 255, 255);background: #ffffff;padding-top: 0px;text-align: center;border-radius: 10px;border: 1px solid #1f2471;padding-bottom: 0px;margin-top: 25px;"><span style="color: #1f2471;font-size: 20px;font-family: Poppins, sans-serif;font-weight: bold;height: 90px;padding-bottom: 0px;margin-top: -38px;margin-bottom: -42px;"><br>Digital Maturity Preliminary Assessment for Government Organizations<br><br></span><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;text-align: center;font-weight: bold;margin-top: 10px;padding-top: 0px;margin-bottom: -12px;"><br>The preliminary assessment is focused on evaluating the readiness of government organizations to apply the digital maturity model to their organization. Any government organization can perform the preliminary assessment and if it fulfills the expected entry requirements to conduct the ‘Deep Assessment’.<br><br></span></div>
            </div>
            <input class="form-control" type="hidden" id="gov_org_id" name="govorganizationdetail_id" value="{{Auth::user()->govorganizationdetail->id}}" readonly>
            <input class="form-control" type="hidden" id="gov_org_id" name="govorganizationdetail_id" value="{{Auth::user()->govorganizationdetail->id}}" readonly>
            <div data-aos="fade-down" id="page1" data-aos-duration="1000" style="width: 1282px;height: 2850px;margin-top: 80px;border-radius: 10px;border: 2px solid #5f2b84;padding-left: 0px;margin-left: 6px;">
                <div class="row" style="margin-top: 20px;">
                    <div class="col" style="height: 60px;"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 50px;">1. Rate the following in terms of emerging technologies.</span></div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" type="hidden" value="3.125" id="weight">
                    <input class="form-control" type="hidden" value="31.25" id="max_weight">
                </div>
                <input class="form-control" type="hidden" id="weight3" name="weight3" value="1.5625">
                <div class="table-responsive" id="choise1" style="font-family: Poppins, sans-serif;font-size: 20px;margin-left: 80px;">
                    <table class="table">
                        <thead>
                            <tr>
                                <th></th>
                                <th style="color: #1f2471;">Excellent</th>
                                <th style="color: #1f2471;">Good</th>
                                <th style="color: #1f2471;">Average</th>
                                <th style="color: #1f2471;">Poor</th>
                                <th style="color: #1f2471;">Very poor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr id="choise1_1">
                                <td style="color: rgb(0,0,0);">a. How do you rate your organization’s usage of<br>&nbsp;&nbsp;&nbsp;Emerging Technologies and Applications such as<br>&nbsp;&nbsp;&nbsp;Artificial Intelligence (AI), Cryptocurrencies, etc.?<br>&nbsp;&nbsp;&nbsp;(1 is the lowest and 5 is the highest)</td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" style="width: 20px;height: 20px;margin-right: 20px;padding-left: 10px;text-align: center;" name="sd1_1" value="10"> </td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" style="width: 20px;height: 20px;margin-right: 20px;padding-left: 10px;text-align: center;" name="sd1_1" value="1"> </td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" style="width: 20px;height: 20px;margin-right: 20px;padding-left: 10px;text-align: center;" name="sd1_1" value="6"></td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" style="width: 20px;height: 20px;margin-right: 20px;padding-left: 10px;text-align: center;" name="sd1_1" value="4"></td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" style="width: 20px;height: 20px;margin-right: 20px;padding-left: 10px;text-align: center;" name="sd1_1" value="2"></td>
                            </tr>
                            <tr>
                                <td><input class="form-control" type="hidden" id="marks1_1" name="marks_d1_1"></td>
                            </tr>
                            <tr id="choise1_2">
                                <td style="color: rgb(0,0,0);margin-bottom: 0px;">b. Does your organization has a dedicated research<br>&nbsp;&nbsp;&nbsp;and development team to try out the emerging solutions?</td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" style="width: 20px;height: 20px;margin-right: 20px;padding-left: 10px;" name="sd1_2" value="10"></td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" style="width: 20px;height: 20px;margin-right: 20px;padding-left: 10px;" name="sd1_2" value="8"></td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" style="width: 20px;height: 20px;margin-right: 20px;padding-left: 10px;" name="sd1_2" value="6"></td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" style="width: 20px;height: 20px;margin-right: 20px;padding-left: 10px;" name="sd1_2" value="4"></td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" style="width: 20px;height: 20px;margin-right: 20px;padding-left: 10px;" name="sd1_2" value="2"></td>
                            </tr>
                            <tr>
                                <td><input class="form-control" type="hidden" id="marks1_2" name="marks_d1_1"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control"  type="hidden" id="marks1" name="marks_d1">
                    <input class="form-control"  type="hidden" id="percentage1" name="percentage_d1">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">2.&nbsp;How would you rate the availability of data in digital form within your organization? (1 is the lowest and 5 is the <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;highest)</span>
                            <div class="row" id="choise2" style="margin-right: 292px;margin-top: 30px;margin-left: 220px;">
                                <div class="col"><input type="radio" name="sd2" id="sd2_1" style="width:15px;height:15px;margin-right: 20px;" value="2"><label class="form-label" for="sd2_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">1</label></div>
                                <div class="col"><input type="radio" name="sd2" id="sd2_2" style="width:15px;height:15px;margin-right: 20px;" value="4"><label class="form-label" for="sd2_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">2</label></div>
                                <div class="col"><input type="radio" name="sd2" id="sd2_3" style="width:15px;height:15px;margin-right: 20px;" value="6"><label class="form-label" for="sd2_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">3</label></div>
                                <div class="col"><input type="radio" name="sd2" id="sd2_4" style="width:15px;height:15px;margin-right: 20px;" value="8"><label class="form-label" for="sd2_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">4</label></div>
                                <div class="col"><input type="radio" name="sd2" id="sd2_5" style="width:15px;height:15px;margin-right: 20px;" value="10"><label class="form-label"for="sd2_5"  style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;">5</label></div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px;">
                        <input class="form-control" oninput="calculateSum()" type="hidden" id="marks2" name="marks_d2">
                        <input class="form-control" type="hidden" id="percentage2" name="percentage_d2">
                    </div>
                    <div class="row" style="margin-top: 20px;">
                        <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">3.&nbsp;How the organizations data are protected according to the data protection act?</span></div>
                    </div>
                    <div class="row d-flex flex-column" style="text-align: center;">
                            <div class="col" id="choise3" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                                <div class="row" style="margin-bottom: 40px;margin-top:20px">
                                    <div class="col"><input type="radio" id="sd3_1" value="2" name="sd3" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd3_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">a. Risk for data loss, hacks, and major disruptions.  Organization have not classified the data and regular &nbsp;&nbsp;&nbsp;&nbsp;backups are not conducted.</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" id="sd3_2" value="4" name="sd3" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd3_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">b. Most of the risk already identified and align with data protection act. However there is no proper privacy <br>&nbsp;&nbsp;&nbsp;&nbsp;mechanism.</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 40px;">
                                    <div class="col"><input type="radio" id="sd3_3" value="6" name="sd3" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd3_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">c. All solutions aligned with the data protection regulations.</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 40px;">
                                    <div class="col"><input type="radio" id="sd3_4" value="8" name="sd3" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd3_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">d. Having proper document standards and follows the data protection act. All data are secured and have <br>&nbsp;&nbsp;&nbsp;&nbsp;a proper control mechanism.</label></div>
                                </div>
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col"><input type="radio" id="sd3_5" value="10" name="sd3" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd3_5" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">e. All solutions are aligned with data protection act and minimum of user involvement for accessing data. <br>&nbsp;&nbsp;&nbsp;&nbsp;All data are fully secured.</label></div>
                                </div>
                            </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" oninput="calculateSum()" type="hidden" id="marks3" name="marks_d3">
                    <input class="form-control" type="hidden" id="percentage3" name="percentage_d3">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">4.&nbsp;Up to what extent does your organization consume the network facility effectively throughout the business units?</span></div>
                </div>
                <div class="row d-flex flex-column" style="text-align: center;">
                    <div class="col" id="choise4" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" id="sd4_1" value="10" name="sd4" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd4_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">a. Fully</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" id="sd4_2" value="2.5" name="sd4" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd4_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">b. Up to some extent</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" id="sd4_3" value="5" name="sd4" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd4_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">c. Partially</label></div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" oninput="calculateSum()" type="hidden" id="marks4" name="marks_d4">
                    <input class="form-control" type="hidden" id="percentage4" name="percentage_d4">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" type="hidden" id="weight2" name="weight_2" value="0.78125">

                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">5.&nbsp;Rate your organization on the following security aspects?</span></div>
                </div>
                <div class="table-responsive" id="choise5" style="font-family: Poppins, sans-serif;font-size: 20px;margin-left: 50px;">
                    <table class="table">
                        <thead>
                            <tr>
                                <th></th>
                                <th style="color: #1f2471;">Excellent</th>
                                <th style="color: #1f2471;">Good</th>
                                <th style="color: #1f2471;">Average</th>
                                <th style="color: #1f2471;">Poor</th>
                                <th style="color: #1f2471;">Very poor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr id="choise5_1">
                                <td style="color: rgb(0,0,0);">a. Follow a security by design methodology for digital <br>&nbsp;&nbsp;&nbsp;projects / Security by design.</td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" style="width: 20px;height: 20px;margin-right: 20px;padding-left: 10px;text-align: center;" name="sd5_1" value="10"> </td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" style="width: 20px;height: 20px;margin-right: 20px;padding-left: 10px;text-align: center;" name="sd5_1" value="8"> </td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" style="width: 20px;height: 20px;margin-right: 20px;padding-left: 10px;text-align: center;" name="sd5_1" value="6"></td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" style="width: 20px;height: 20px;margin-right: 20px;padding-left: 10px;text-align: center;" name="sd5_1" value="4"></td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" style="width: 20px;height: 20px;margin-right: 20px;padding-left: 10px;text-align: center;" name="sd5_1" value="2"></td>
                            </tr>
                            <tr>
                                <td><input class="form-control" type="hidden" id="marks5_1" name="marks_d5_1"></td>
                            </tr>
                            <tr id="choise5_2">
                                <td style="color: rgb(0,0,0);margin-bottom: 0px;">b. A periodic security audit by a third party (SL CERT)</td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" style="width: 20px;height: 20px;margin-right: 20px;padding-left: 10px;" name="sd5_2" value="10"></td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" style="width: 20px;height: 20px;margin-right: 20px;padding-left: 10px;" name="sd5_2" value="8"></td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" style="width: 20px;height: 20px;margin-right: 20px;padding-left: 10px;" name="sd5_2" value="6"></td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" style="width: 20px;height: 20px;margin-right: 20px;padding-left: 10px;" name="sd5_2" value="4"></td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" style="width: 20px;height: 20px;margin-right: 20px;padding-left: 10px;" name="sd5_2" value="2"></td>
                            </tr>
                            <tr>
                                <td><input class="form-control" type="hidden" id="marks5_2" name="marks_d5_2"></td>
                            </tr>
                            <tr id="choise5_3">
                                <td style="color: rgb(0,0,0);">c. Internal security</td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" style="width: 20px;height: 20px;margin-right: 20px;padding-left: 10px;" name="sd5_3" value="10"></td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" style="width: 20px;height: 20px;margin-right: 20px;padding-left: 10px;" name="sd5_3" value="8"></td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" style="width: 20px;height: 20px;margin-right: 20px;padding-left: 10px;" name="sd5_3" value="6"></td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" style="width: 20px;height: 20px;margin-right: 20px;padding-left: 10px;" name="sd5_3" value="4"></td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" style="width: 20px;height: 20px;margin-right: 20px;padding-left: 10px;" name="sd5_3" value="2"></td>
                            </tr>
                            <tr>
                                <td><input class="form-control" type="hidden" id="marks5_3" name="marks_d5_3"></td>
                            </tr>
                            <tr id="choise5_4">
                                <td style="color: rgb(0,0,0);">d. Delegated Administration</td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" style="width: 20px;height: 20px;margin-right: 20px;padding-left: 10px;" name="sd5_4" value="10"></td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" style="width: 20px;height: 20px;margin-right: 20px;padding-left: 10px;" name="sd5_4" value="8"></td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" style="width: 20px;height: 20px;margin-right: 20px;padding-left: 10px;" name="sd5_4" value="6"></td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" style="width: 20px;height: 20px;margin-right: 20px;padding-left: 10px;" name="sd5_4" value="4"></td>
                                <td style="text-align: center;border-radius: 0px;border-width: 0px;border-color: rgb(0,0,0);"><input type="radio" style="width: 20px;height: 20px;margin-right: 20px;padding-left: 10px;" name="sd5_4" value="2"></td>
                            </tr>
                            <tr>
                                <td><input class="form-control" type="hidden" id="marks5_4" name="marks_d5_4"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" oninput="calculateSum()" type="hidden" id="marks5" name="marks_d5">
                    <input class="form-control" type="hidden" id="percentage5" name="percentage_d5">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">6.&nbsp;Does your organization follow the proper technology architecture to meet system-relevant requirements?</span></div>
                </div>
                <div class="row d-flex flex-column" id="choise6" style="text-align: center;">
                    <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" id="sd6_1" value="10" name="sd6" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd6_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">a.&nbsp;Yes. A well defined architecture is followed, which is aligned with government enterprise architecture.</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" id="sd6_2" value="5" name="sd6" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd6_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">b.&nbsp;Yes. We have defined solution architecture internally.</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" id="sd6_3" value="0" name="sd6" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd6_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">c.&nbsp;Do not have any idea on this.</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio" id="sd6_4" value="0" name="sd6" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd6_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">d.&nbsp;No</label></div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" oninput="calculateSum()" type="hidden" id="marks6" name="marks_d6">
                    <input class="form-control" type="hidden" id="percentage6" name="percentage_d6">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col" style="height: 60px;"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 50px;">7. How would you rate your organization following the proper data governance process and mechanism in place to <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;facilitate sharing data with outsiders and internal departments in electronic form? <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(1 is the lowest and 5 is the highest)</span></div>
                </div>
                <div class="row" id="choise7" style="margin-right: 292px;margin-top: 40px;margin-left: 220px;">
                    <div class="col"><input type="radio" style="height:15px;width:15px" name="sd7" id="sd7_1" value="2"><label class="form-label" for="sd7_1" style="font-family: Poppins, sanheight: 20p;font-size: 20px;width:30pxx;color: #1f2471;margin-left:20px">1</label></div>
                    <div class="col"><input type="radio" style="height:15px;width:15px" name="sd7" id="sd7_2" value="4" ><label class="form-label" for="sd7_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left:20px">2</label></div>
                    <div class="col"><input type="radio" style="height:15px;width:15px" name="sd7" id="sd7_3" value="6" ><label class="form-label" for="sd7_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left:20px">3</label></div>
                    <div class="col"><input type="radio" style="height:15px;width:15px" name="sd7" id="sd7_4" value="8" ><label class="form-label" for="sd7_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left:20px">4</label></div>
                    <div class="col"><input type="radio" style="height:15px;width:15px" name="sd7" id="sd7_5" value="10" ><label class="form-label" for="sd7_5" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left:20px">5</label></div>
                </div>

                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" oninput="calculateSum()" type="hidden" id="marks7" name="marks_d7">
                    <input class="form-control" type="hidden" id="percentage7" name="percentage_d7">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col" style="height: 60px;"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 50px;">8. How do you rate your organization’s strategy of data analytics? (1 is low and 5 is highest) </span></div>
                </div>
                <div class="row" id="choise8" style="margin-right: 292px;margin-top: 20px;margin-left: 220px;">
                    <div class="col"><input type="radio" style="height:15px;width:15px" name="sd8" id="sd8_1" value="2"><label class="form-label" for="sd8_1" style="font-family: Poppins, sanheight: 20p;font-size: 20px;width:30pxx;color: #1f2471;margin-left:20px">1</label></div>
                    <div class="col"><input type="radio" style="height:15px;width:15px" name="sd8" id="sd8_2" value="4" ><label class="form-label" for="sd8_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left:20px">2</label></div>
                    <div class="col"><input type="radio" style="height:15px;width:15px" name="sd8" id="sd8_3" value="6" ><label class="form-label" for="sd8_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left:20px">3</label></div>
                    <div class="col"><input type="radio" style="height:15px;width:15px" name="sd8" id="sd8_4" value="8" ><label class="form-label" for="sd8_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left:20px">4</label></div>
                    <div class="col"><input type="radio" style="height:15px;width:15px" name="sd8" id="sd8_5" value="10" ><label class="form-label" for="sd8_5" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left:20px">5</label></div>
                </div>

                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" type="hidden" id="marks8" name="marks_d8">
                    <input class="form-control" type="hidden" id="percentage8" name="percentage_d8">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col" style="height: 60px;"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 50px;">9. How do you rate your organization's data interoperability mechanism? (1 is low and 5 is highest)</span></div>
                </div>
                <div class="row" id="choise9" style="margin-right: 292px;margin-top: 20px;margin-left: 220px;">
                    <div class="col"><input type="radio" style="height:15px;width:15px" name="sd9" id="sd9_1" value="2"><label class="form-label" for="sd9_1" style="font-family: Poppins, sanheight: 20p;font-size: 20px;width:30pxx;color: #1f2471;margin-left:20px">1</label></div>
                    <div class="col"><input type="radio" style="height:15px;width:15px" name="sd9" id="sd9_2" value="4" ><label class="form-label" for="sd9_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left:20px">2</label></div>
                    <div class="col"><input type="radio" style="height:15px;width:15px" name="sd9" id="sd9_3" value="6" ><label class="form-label" for="sd9_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left:20px">3</label></div>
                    <div class="col"><input type="radio" style="height:15px;width:15px" name="sd9" id="sd9_4" value="8" ><label class="form-label" for="sd9_4" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left:20px">4</label></div>
                    <div class="col"><input type="radio" style="height:15px;width:15px" name="sd9" id="sd9_5" value="10" ><label class="form-label" for="sd9_5" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left:20px">5</label></div>
                </div>

                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" type="hidden" id="marks9" name="marks_d9">
                    <input class="form-control" type="hidden" id="percentage9" name="percentage_d9">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col"><span style="color: rgb(0,0,0);font-family: Poppins, sans-serif;font-size: 20px;margin-left: 40px;">10.&nbsp;To what extent does your organization have an online solution for providing services for citizens?</span></div>
                </div>
                <div class="row d-flex flex-column" id="choise10" style="text-align: center;">
                    <div class="col" style="margin-top: 20px;margin-bottom: 10px;text-align: left;">
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio"value="10" id="sd10_1" name="sd10" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd10_1" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;width: 1100px;">a.&nbsp;We have well developed single sign-on (SSO) solution to obtain services from an organization</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio"value="5" id="sd10_2" name="sd10" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd10_2" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">b.&nbsp;Some online services are available for citizens</label></div>
                        </div>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col"><input type="radio"value="0" id="sd10_3" name="sd10" style="width:15px;height:15px;margin-left: 100px;"><label class="form-label" for="sd10_3" style="font-family: Poppins, sans-serif;font-size: 20px;color: #1f2471;margin-left: 20px;margin-top: -28px;">c.&nbsp;We do not provide online services for citizens</label></div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control"  type="hidden" id="marks10" name="marks_d10">
                    <input class="form-control" type="hidden" id="percentage10" name="percentage_d10">
                </div>
                <div class="row" style="margin-top: 20px;">
                    <input class="form-control" type="hidden" id="technology_marks" name="technologyMarks" >
                    <input class="form-control" type="hidden" id="technology_percentage" name="technologyPercentage" >
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
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

        {{--  Q1  --}}
        <script type="text/javascript">
            $('#choise1_1').find(":radio").on('click', e => {
                wei = document.getElementById("weight3").value;
                choi = e.target.value;
                var x=wei * choi;
                document.getElementById("marks1_1").value = x;
            });
        </script>
        <script type="text/javascript">
            $('#choise1_2').find(":radio").on('click', e => {
                wei = document.getElementById("weight3").value;
                choi = e.target.value;
                var x=wei * choi;
                document.getElementById("marks1_2").value = x;
            });
        </script>
        <script type="text/javascript">
            $('#choise1').find(":radio").on('click', e => {
                wei = document.getElementById("weight3").value;
                max = document.getElementById("max_weight").value;
                m1 = document.getElementById("marks1_1").value;
                m2 = document.getElementById("marks1_2").value;


                choi = e.target.value;

                var t=Number(m1) + Number(m2) ;
                document.getElementById("marks1").value = t;

                var y=t / max;
                var z=y * 100;

                document.getElementById("percentage1").value = z ;
            });
        </script>

        {{--  Q2  --}}
        <script type="text/javascript">
            $('#choise2').find(":radio").on('click', e => {
                wei = document.getElementById("weight").value;
                max = document.getElementById("max_weight").value;
                choi = e.target.value;
                var x=wei * choi;
                var y=x / max;
                var z=y * 100;
                document.getElementById("marks2").value = x;
                document.getElementById("percentage2").value = z ;
            });

        </script>

        {{--  Q3  --}}
        <script type="text/javascript">
            $('#choise3').find(":radio").on('click', e => {
                wei = document.getElementById("weight").value;
                max = document.getElementById("max_weight").value;
                choi = e.target.value;
                var x=wei * choi;
                var y=x / max;
                var z=y * 100;
                document.getElementById("marks3").value = x;
                document.getElementById("percentage3").value = z ;
            });
        </script>

        {{--  Q4  --}}
        <script type="text/javascript">
            $('#choise4').find(":radio").on('click', e => {
                wei = document.getElementById("weight").value;
                max = document.getElementById("max_weight").value;
                choi = e.target.value;
                var x=wei * choi;
                var y=x / max;
                var z=y * 100;
                document.getElementById("marks4").value = x;
                document.getElementById("percentage4").value = z ;
            });
        </script>

        {{--  Q5  --}}
        <script type="text/javascript">
            $('#choise5_1').find(":radio").on('click', e => {
                wei = document.getElementById("weight2").value;
                choi = e.target.value;
                var x=wei * choi;
                document.getElementById("marks5_1").value = x;
            });
        </script>
        <script type="text/javascript">
            $('#choise5_2').find(":radio").on('click', e => {
                wei = document.getElementById("weight2").value;
                choi = e.target.value;
                var x=wei * choi;
                document.getElementById("marks5_2").value = x;
            });
        </script>
        <script type="text/javascript">
            $('#choise5_3').find(":radio").on('click', e => {
                wei = document.getElementById("weight2").value;
                choi = e.target.value;
                var x=wei * choi;
                document.getElementById("marks5_3").value = x;
            });
        </script>
        <script type="text/javascript">
            $('#choise5_4').find(":radio").on('click', e => {
                wei = document.getElementById("weight2").value;
                choi = e.target.value;
                var x=wei * choi;
                document.getElementById("marks5_4").value = x;
            });
        </script>
        <script type="text/javascript">
            $('#choise5').find(":radio").on('click', e => {
                wei = document.getElementById("weight2").value;
                max = document.getElementById("max_weight").value;
                m1 = document.getElementById("marks5_1").value;
                m2 = document.getElementById("marks5_2").value;
                m3 = document.getElementById("marks5_3").value;
                m4 = document.getElementById("marks5_4").value;


                choi = e.target.value;

                var t=Number(m1) + Number(m2) + Number(m3) + Number(m4) ;
                document.getElementById("marks5").value = t;

                var y=t / max;
                var z=y * 100;

                document.getElementById("percentage5").value = z ;
            });
        </script>

        {{--  Q6  --}}
        <script type="text/javascript">
            $('#choise6').find(":radio").on('click', e => {
                wei = document.getElementById("weight").value;
                max = document.getElementById("max_weight").value;
                choi = e.target.value;
                var x=wei * choi;
                var y=x / max;
                var z=y * 100;
                document.getElementById("marks6").value = x;
                document.getElementById("percentage6").value = z ;
            });
        </script>

        {{--  Q7  --}}
        <script type="text/javascript">
            $('#choise7').find(":radio").on('click', e => {
                wei = document.getElementById("weight").value;
                max = document.getElementById("max_weight").value;
                choi = e.target.value;
                var x=wei * choi;
                var y=x / max;
                var z=y * 100;
                document.getElementById("marks7").value = x;
                document.getElementById("percentage7").value = z ;
            });
        </script>

        {{--  Q8  --}}
        <script type="text/javascript">
            $('#choise8').find(":radio").on('click', e => {
                wei = document.getElementById("weight").value;
                max = document.getElementById("max_weight").value;
                choi = e.target.value;
                var x=wei * choi;
                var y=x / max;
                var z=y * 100;
                document.getElementById("marks8").value = x;
                document.getElementById("percentage8").value = z ;
            });
        </script>

        {{--  Q9  --}}
        <script type="text/javascript">
            $('#choise9').find(":radio").on('click', e => {
                wei = document.getElementById("weight").value;
                max = document.getElementById("max_weight").value;
                choi = e.target.value;
                var x=wei * choi;
                var y=x / max;
                var z=y * 100;
                document.getElementById("marks9").value = x;
                document.getElementById("percentage9").value = z ;
            });
        </script>

        {{--  Q10  --}}
        <script type="text/javascript">
            $('#choise10').find(":radio").on('click', e => {
                wei = document.getElementById("weight").value;
                max = document.getElementById("max_weight").value;
                choi = e.target.value;
                var x=wei * choi;
                var y=x / max;
                var z=y * 100;
                document.getElementById("marks10").value = x;
                document.getElementById("percentage10").value = z ;
            });
        </script>

        <script type="text/javascript">
            $('#page1').find(":radio").on('click', e => {
                q1 = document.getElementById("marks1").value;
                q2 = document.getElementById("marks2").value;
                q3 = document.getElementById("marks3").value;
                q4 = document.getElementById("marks4").value;
                q5 = document.getElementById("marks5").value;
                q6 = document.getElementById("marks6").value;
                q7 = document.getElementById("marks7").value;
                q8 = document.getElementById("marks8").value;
                q9 = document.getElementById("marks9").value;
                q10 = document.getElementById("marks10").value;


                var a= Number(q1) + Number(q2) + Number(q3) + Number(q4) + Number(q5) + Number(q6) + Number(q7) + Number(q8) + Number(q9) + Number(q10);
                document.getElementById("technology_marks").value= a;

                var b= a / 312.5;
                var technology= (b * 100).toFixed(0);
                document.getElementById("technology_percentage").value= technology;

            });
        </script>

    </section>
</body>
@endsection
