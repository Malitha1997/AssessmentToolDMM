<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Culture;
use App\Models\Customer;
use App\Models\Strategy;
use App\Models\Operation;
use App\Models\Percentage;
use App\Models\Technology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Govorganizationdetail;

class PreliminaryAssessmentResultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Results.technologyresults');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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
            'percentage_d11'=> 'required|string',
            'percentage_d12'=> 'required|string',
            'percentage_d13'=> 'required|string',
            'percentage_d14'=> 'required|string',
            'percentage_d15'=> 'required|string',
            'percentage_d16'=> 'required|string',
            'percentage_d17'=> 'required|string',
            'percentage_d18'=> 'required|string',
            'percentage_d19'=> 'required|string',
            'percentage_d20'=> 'required|string',
            'percentage_d21'=> 'required|string',
            'percentage_d22'=> 'required|string',
            'percentage_d23'=> 'required|string',
            'percentage_d24'=> 'required|string',
            'percentage_d25'=> 'required|string',
            'percentage_d26'=> 'required|string',
            'percentage_d27'=> 'required|string',
            'percentage_d28'=> 'required|string',
            'percentage_d29'=> 'required|string',
            'percentage_d30'=> 'required|string',
            'percentage_d31'=> 'required|string',
            'percentage_d32'=> 'required|string',
            'customer_percentage'=> 'required|string',
            'strategy_percentage'=> 'required|string',
            'technology_percentage'=> 'required|string',
            'operation_percentage'=> 'required|string',
            'culture_percentage'=> 'required|string',
            'overall'=> 'required|string',
            'govorganizationdetail_id'=> 'required|string|unique:percentages'
        ]);
        //dd($request);
        $customer= new Customer;

        $customer->citizen_engagement=$request->percentage_d1;
        $customer->citizen_experience=$request->percentage_d2;
        $customer->citizen_experience_strategy=$request->percentage_d3;
        $customer->citizen_insights=$request->percentage_d4;
        $customer->citizen_trust=$request->percentage_d5;
        $customer->govorganizationdetail_id=$request->govorganizationdetail_id;

        $customer->save();

        $strategy=new Strategy;

        $strategy->brand_management=$request->percentage_d6;
        $strategy->ecosystem_management=$request->percentage_d7;
        $strategy->finance=$request->percentage_d8;
        $strategy->market_intelligence=$request->percentage_d9;
        $strategy->strategic_management=$request->percentage_d10;
        $strategy->buisiness_assuarance=$request->percentage_d11;
        $strategy->policy=$request->percentage_d12;
        $strategy->invention=$request->percentage_d13;
        $strategy->govorganizationdetail_id=$request->govorganizationdetail_id;

        $strategy->save();

        $technology=new Technology;

        $technology->emerging_technology=$request->percentage_d14;
        $technology->data_management=$request->percentage_d15;
        $technology->delivery_governance=$request->percentage_d16;
        $technology->connectivity=$request->percentage_d17;
        $technology->security=$request->percentage_d18;
        $technology->technology_architecture=$request->percentage_d19;
        $technology->data_governance=$request->percentage_d20;
        $technology->data_engineering=$request->percentage_d21;
        $technology->interoperbility=$request->percentage_d22;
        $technology->application_for_users=$request->percentage_d23;
        $technology->govorganizationdetail_id=$request->govorganizationdetail_id;

        $technology->save();

        $operation=new Operation;

        $operation->agile_change_management=$request->percentage_d24;
        $operation->integrated_service_management=$request->percentage_d25;
        $operation->real_time_insights=$request->percentage_d26;
        $operation->smart_process_management=$request->percentage_d27;
        $operation->govorganizationdetail_id=$request->govorganizationdetail_id;

        $operation->save();

        $culture= new Culture;

        $culture->leadership=$request->percentage_d28;
        $culture->standards=$request->percentage_d29;
        $culture->employee_engagement=$request->percentage_d30;
        $culture->level_of_skill=$request->percentage_d31;
        $culture->talent_management=$request->percentage_d32;
        $culture->govorganizationdetail_id=$request->govorganizationdetail_id;

        $culture->save();

        $percentage=new Percentage;

        $percentage->customer=$request->customer_percentage;
        $percentage->strategy=$request->strategy_percentage;
        $percentage->technology=$request->technology_percentage;
        $percentage->operation=$request->operation_percentage;
        $percentage->culture=$request->culture_percentage;
        $percentage->overall=$request->overall;
        $percentage->govorganizationdetail_id=$request->govorganizationdetail_id;

        $percentage->save();

        return redirect()->route('preliminaryResults');
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

    public function result()
    {

        // Fetch data for the radar chart
        $labels = ["Customer", "Strategy", "Technology & data", "Operation", "Organization & culture"];

        // Assuming the authenticated user has a "govorganizationdetail" and it's related to a "percentage"
        $percentage = Auth::user()->govorganizationdetail->percentage;

        // If there is no percentage data for the user, you can handle it accordingly
        if (!$percentage) {
            // Handle the case where the authenticated user doesn't have a related "percentage"
            return redirect()->route('home')->with('error', 'No percentage data found.');
        }

        // Organize the percentage data for the radar chart
        $percentages = [
            (int) $percentage->customer,
            (int) $percentage->strategy,
            (int) $percentage->technology,
            (int) $percentage->operation,
            (int) $percentage->culture,
        ];

        return view('PreliminaryAssessments.results',compact('labels', 'percentages'));
    }

    public function customerresult(){
        return view('Results.customerresults');
    }

    public function cultureresult(){
        return view('Results.cultureresults');
    }

    public function strategyresult(){
        return view('Results.strategyresults');
    }

    public function operationresult(){
        return view('Results.operationresults');
    }

    public function radarChart()
    {//
        $percentages = Percentage::select("customer","strategy","technology", "operation", "culture")->get();
        $result = [['Customer','Strategy','Technology & data', 'Operation', 'Organization & culture']];
        foreach ($percentages as $key => $value) {
            $result[++$key]= [
            (int) $value->customer,
            (int) $value->strategy,
            (int) $value->technology,
            (int) $value->operation,
            (int) $value->culture,
        ];
        }

        return view('PreliminaryAssessments.results', compact('result'));

    }

    public function adminResult(string $id){

        $user=User::find($id);
        $g_user=$user->govorganizationdetail;
        $percentageExist = $g_user ? $g_user->percentage : null;
        $labels = ["Customer", "Strategy", "Technology & data", "Operation", "Organization & culture"];

        return view('admin.PreliminaryResults.results',compact('user','g_user','percentageExist','labels'));
    }

}
