<?php

namespace App\Http\Controllers;

use App\Models\Culture;
use App\Models\Customer;
use App\Models\Strategy;
use App\Models\Operation;
use App\Models\Percentage;
use App\Models\Technology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PreliminaryassessmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('PreliminaryAssessments.preliminaryAssessmentPage1');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function prepage2(Request $request){
        $inputValue = $request->session()->get('input_value');
        return view('PreliminaryAssessments.preliminaryAssessmentPage2',compact('inputValue'));
    }

    public function prepage3(Request $request){
        $inputValue = $request->session()->get('input_value');
        return view('PreliminaryAssessments.preliminaryAssessmentPage3',compact('inputValue'));
    }

    public function prepage4(Request $request){
        $inputValue = $request->session()->get('input_value');
        return view('PreliminaryAssessments.preliminaryAssessmentPage4',compact('inputValue'));
    }

    public function prepage5(Request $request){
        $inputValue = $request->session()->get('input_value');
        return view('PreliminaryAssessments.preliminaryAssessmentPage5',compact('inputValue'));
    }

    public function storeValuePage01(Request $request)
    {//dd($request);
        request()->validate([
            'percentage_d1'=> 'required|string',
            'percentage_d2'=> 'required|string',
            'percentage_d3'=> 'required|string',
            'percentage_d4'=> 'required|string',
            'percentage_d5'=> 'required|string',
            'percentage_d6'=> 'required|string',
            'percentage_d7'=> 'required|string',
            'percentage_d8'=> 'required|string',
            'percentage_d9'=> 'required|string',
            'percentage_d10'=> 'required|string',
            'govorganizationdetail_id'=> 'required|string|unique:technologies'
        ]);

        $technology = new Technology;

        $technology->emerging_technology = $request->percentage_d1;
        $technology->data_management = $request->percentage_d2;
        $technology->delivery_governance = $request->percentage_d3;
        $technology->connectivity = $request->percentage_d4;
        $technology->security = $request->percentage_d5;
        $technology->technology_architecture = $request->percentage_d6;
        $technology->data_governance = $request->percentage_d7;
        $technology->data_engineering = $request->percentage_d8;
        $technology->interoperbility = $request->percentage_d9;
        $technology->application_for_users = $request->percentage_d10;
        $technology->govorganizationdetail_id = $request->govorganizationdetail_id;

        $technology->save();
 
        $data =[
            'technologyMarks'=> $request->input('technologyMarks'),
            'technologyPercentage'=> $request->input('technologyPercentage'),
        ];

        $request->session()->put('input_value', $data);

        return redirect()->route('preliminaryAssessment2');
    }

    public function storeValuePage02(Request $request)
    {//dd($request);
        request()->validate([
            'percentage_d11'=> 'required|string',
            'percentage_d12'=> 'required|string',
            'percentage_d13'=> 'required|string',
            'percentage_d14'=> 'required|string',
            'percentage_d15'=> 'required|string',
            'govorganizationdetail_id'=> 'required|string|unique:customers'
        ]);

        $customer = new Customer;

        $customer->citizen_experience_strategy = $request->percentage_d11;
        $customer->citizen_engagement = $request->percentage_d12;
        $customer->citizen_experience = $request->percentage_d13;
        $customer->citizen_trust= $request->percentage_d14;
        $customer->citizen_insights  = $request->percentage_d15;
        $customer->govorganizationdetail_id = $request->govorganizationdetail_id;

        $customer->save();

        $data =[
            'page2_marks'=> $request->input('page2_marks'),
            'technologyPercentage'=> $request->input('technologyPercentage'),
            'customerPercentage'=> $request->input('customerPercentage'),
        ];

        $request->session()->put('input_value', $data);

        return redirect()->route('preliminaryAssessment3');
    }

    public function storeValuePage03(Request $request)
    {//dd($request);
        request()->validate([
            'percentage_d16'=> 'required|string',
            'percentage_d17'=> 'required|string',
            'percentage_d18'=> 'required|string',
            'percentage_d19'=> 'required|string',
            'govorganizationdetail_id'=> 'required|string|unique:operations'
        ]);

        $operation = new Operation;

        $operation->agile_change_management = $request->percentage_d16;
        $operation->integrated_service_management = $request->percentage_d17;
        $operation->real_time_insights = $request->percentage_d18;
        $operation->smart_process_management = $request->percentage_d19;
        $operation->govorganizationdetail_id = $request->govorganizationdetail_id;

        $operation->save();

        $data =[
            'page3_marks'=> $request->input('page3_marks'),
            'technologyPercentage'=> $request->input('technologyPercentage'),
            'customerPercentage'=> $request->input('customerPercentage'),
            'operationPercentage'=> $request->input('operationPercentage'),
        ];

        $request->session()->put('input_value', $data);

        return redirect()->route('preliminaryAssessment4');
    }

    public function storeValuePage04(Request $request)
    {//dd($request);
        request()->validate([
            'percentage_d20'=> 'required|string',
            'percentage_d21'=> 'required|string',
            'percentage_d22'=> 'required|string',
            'percentage_d23'=> 'required|string',
            'percentage_d24'=> 'required|string',
            'percentage_d25'=> 'required|string',
            'percentage_d26'=> 'required|string',
            'percentage_d27'=> 'required|string',
            'govorganizationdetail_id'=> 'required|string|unique:strategies'
        ]);
        //dd($request);
        $strategy = new Strategy;

        $strategy->brand_management = $request->percentage_d20;
        $strategy->ecosystem_management = $request->percentage_d21;
        $strategy->finance = $request->percentage_d22;
        $strategy->market_intelligence = $request->percentage_d23;
        $strategy->strategic_management = $request->percentage_d24;
        $strategy->buisiness_assuarance = $request->percentage_d25;
        $strategy->policy = $request->percentage_d26;
        $strategy->invention = $request->percentage_d27;
        $strategy->govorganizationdetail_id = $request->govorganizationdetail_id;

        $strategy->save();

        $data =[
            'page4_marks'=> $request->input('page4_marks'),
            'technologyPercentage'=> $request->input('technologyPercentage'),
            'customerPercentage'=> $request->input('customerPercentage'),
            'operationPercentage'=> $request->input('operationPercentage'),
            'strategyPercentage'=> $request->input('strategyPercentage'),
        ];

        $request->session()->put('input_value', $data);

        return redirect()->route('preliminaryAssessment5');
    }

    public function storeValuePage05(Request $request)
    {//dd($request);
        request()->validate([
            'percentage_d28'=> 'required|string',
            'percentage_d29'=> 'required|string',
            'percentage_d30'=> 'required|string',
            'percentage_d31'=> 'required|string',
            'percentage_d32'=> 'required|string',
            'customerPercentage'=> 'required|string',
            'strategyPercentage'=> 'required|string',
            'technologyPercentage'=> 'required|string',
            'operationPercentage'=> 'required|string',
            'culturePercentage'=> 'required|string',
            'overallPercentage'=> 'required|string',
            'govorganizationdetail_id'=> 'required|string|unique:cultures'
        ]);
        //dd($request);
        $culture = new Culture;

        $culture->leadership = $request->percentage_d28;
        $culture->standards = $request->percentage_d29;
        $culture->employee_engagement = $request->percentage_d30;
        $culture->level_of_skill = $request->percentage_d31;
        $culture->talent_management = $request->percentage_d32;
        $culture->govorganizationdetail_id = $request->govorganizationdetail_id;

        $culture->save();

        $percentage = new Percentage;

        $percentage->customer = $request->customerPercentage;
        $percentage->strategy = $request->strategyPercentage;
        $percentage->technology = $request->technologyPercentage;
        $percentage->operation = $request->operationPercentage;
        $percentage->culture = $request->culturePercentage;
        $percentage->overall = $request->overallPercentage;
        $percentage->govorganizationdetail_id = $request->govorganizationdetail_id;


        $percentage->save();

        return redirect()->route('preliminaryResults');
    }
}
