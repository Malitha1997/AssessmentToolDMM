<?php



namespace App\Http\Controllers;



use App\Models\Culture;

use App\Models\Customer;
use App\Models\Strategy;
use App\Models\Operation;
use Illuminate\View\View;
use App\Models\Percentage;
use App\Models\Technology;
use Illuminate\Http\Request;
use App\Models\Govorganizationname;
use Illuminate\Support\Facades\Auth;
use App\Models\Govorganizationdetail;



class HomeController extends Controller

{

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function __construct()

    {
        $this->middleware('auth');
    }



    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function index(): View
    {
        $dataExists = Auth::user()->govorganizationdetail->percentage;
        $technologyDataExists = Auth::user()->govorganizationdetail->technology;
        $customerDataExists = Auth::user()->govorganizationdetail->customer;
        $operationDataExists = Auth::user()->govorganizationdetail->operation;
        $strategyDataExists = Auth::user()->govorganizationdetail->strategy;
        $cultureDataExists = Auth::user()->govorganizationdetail->culture;
        return view('home',compact('dataExists','technologyDataExists','customerDataExists','operationDataExists','strategyDataExists','cultureDataExists'));
    }



    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function adminHome(): View
    {
        $govorganizations = Govorganizationdetail::get();

        $percentages = Percentage::all();

    $sums = [
        'customer' => $percentages->avg('customer'),
        'strategy' => $percentages->avg('strategy'),
        'technology' => $percentages->avg('technology'),
        'operation' => $percentages->avg('operation'),
        'culture' => $percentages->avg('culture'),

    ];

    //Technology chart
    $technologies = Technology::all();

    $tecColumnSums = [
        'emerging_technology' => 0,
        'data_management' => 0,
        'delivery_governance' => 0,
        'connectivity' => 0,
        'security' => 0,
        'technology_architecture' => 0,
        'data_governance' => 0,
        'data_engineering' => 0,
        'interoperbility' => 0,
        'application_for_users' => 0,
    ];


    // Calculate the sum of each column
    foreach ($technologies as $technology) {
        foreach ($tecColumnSums as $column => $sum) {
            $tecColumnSums[$column] += (int) $technology->$column;
        }
    }

    $tecRowCount = count($technologies);

    // Calculate the average of each column
    foreach ($tecColumnSums as $column => $sum) {
        $tecColumnSums[$column] = $sum / $tecRowCount;
    }

    $tecAvg = [
        ['Category', 'Value'],
        ['Emerging Technology', $tecColumnSums['emerging_technology']],
        ['Data Management', $tecColumnSums['data_management']],
        ['Delivery Governance', $tecColumnSums['delivery_governance']],
        ['Connectivity', $tecColumnSums['connectivity']],
        ['Security', $tecColumnSums['security']],
        ['Technology Architecture', $tecColumnSums['technology_architecture']],
        ['Data Governance', $tecColumnSums['data_governance']],
        ['Data Engineering', $tecColumnSums['data_engineering']],
        ['Interoperability', $tecColumnSums['interoperbility']],
        ['Application for Users', $tecColumnSums['application_for_users']],
    ];

    //Customer chart
    $customers = Customer::all();

    $cusColumnSums =[
        'citizen_engagement' => 0,
        'citizen_experience' => 0,
        'citizen_experience_strategy' => 0,
        'citizen_insights' => 0,
        'citizen_trust' => 0,
    ];

    foreach ($customers as $customer) {
        foreach ($cusColumnSums as $column => $sum) {
            $cusColumnSums[$column] += (int) $customer->$column;
        }
    }

    $cusRowCount = count($customers);

    foreach ($cusColumnSums as $column => $sum) {
        $cusColumnSums[$column] = $sum / $cusRowCount;
    }

    $cusAvg = [
        ['Category', 'Value'],
        ['Citizen Engagement', $cusColumnSums['citizen_engagement']],
        ['Citizen Experience', $cusColumnSums['citizen_experience']],
        ['Citizen Experience Strategy', $cusColumnSums['citizen_experience_strategy']],
        ['Citizen Insights & Behavior', $cusColumnSums['citizen_insights']],
        ['Citizen Trust & Perceptiont', $cusColumnSums['citizen_trust']],
    ];

    //Operation
    $operations = Operation::all();

    $opColumnSums =[
        'agile_change_management' => 0,
        'integrated_service_management' => 0,
        'real_time_insights' => 0,
        'smart_process_management' => 0,
    ];

    foreach ($operations as $operation) {
        foreach ($opColumnSums as $column => $sum) {
            $opColumnSums[$column] += (int) $operation->$column;
        }
    }

    $opRowCount = count($operations);

    foreach ($opColumnSums as $column => $sum) {
        $opColumnSums[$column] = $sum / $opRowCount;
    }

    $opAvg = [
        ['Category', 'Value'],
        ['Agile Change Management', $opColumnSums['agile_change_management']],
        ['Integrated Service Management', $opColumnSums['integrated_service_management']],
        ['Real-time insights and analytics', $opColumnSums['real_time_insights']],
        ['Smart Process Management', $opColumnSums['smart_process_management']],
    ];

    //Organization & culture
    $cultures = Culture::all();

    $culColumnSums =[
        'leadership' => 0,
        'standards' => 0,
        'employee_engagement' => 0,
        'level_of_skill' => 0,
        'talent_management' => 0,
    ];

    foreach ($cultures as $culture) {
        foreach ($culColumnSums as $column => $sum) {
            $culColumnSums[$column] += (int) $culture->$column;
        }
    }

    $culRowCount = count($cultures);

    foreach ($culColumnSums as $column => $sum) {
        $culColumnSums[$column] = $sum / $culRowCount;
    }

    $culAvg = [
        ['Category', 'Value'],
        ['Leadership', $culColumnSums['leadership']],
        ['Standards', $culColumnSums['standards']],
        ['Employee Engagement', $culColumnSums['employee_engagement']],
        ['Level of Skill', $culColumnSums['level_of_skill']],
        ['Talent Management', $culColumnSums['talent_management']],
    ];

    //Strategy
    $strategies = Strategy::all();

    $strColumnSums =[
        'brand_management' => 0,
        'ecosystem_management' => 0,
        'finance' => 0,
        'market_intelligence' => 0,
        'strategic_management' => 0,
        'buisiness_assuarance' => 0,
        'policy' => 0,
        'invention' => 0,
    ];

    foreach ($strategies as $strategy) {
        foreach ($strColumnSums as $column => $sum) {
            $strColumnSums[$column] += (int) $strategy->$column;
        }
    }

    $strRowCount = count($strategies);

    foreach ($strColumnSums as $column => $sum) {
        $strColumnSums[$column] = $sum / $strRowCount;
    }

    $strAvg = [
        ['Category', 'Value'],
        ['Brand Management', $strColumnSums['brand_management']],
        ['Ecosystem Management', $strColumnSums['ecosystem_management']],
        ['Finance', $strColumnSums['finance']],
        ['Market Intelligence', $strColumnSums['market_intelligence']],
        ['Strategy Management', $strColumnSums['strategic_management']],
        ['Buisiness Assuarance', $strColumnSums['buisiness_assuarance']],
        ['Policy', $strColumnSums['policy']],
        ['Invention', $strColumnSums['invention']],
    ];
        return view('adminHome',compact('govorganizations','sums','tecAvg','cusAvg','opAvg','culAvg','strAvg'));
    }



    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function govofficialHome(): View
    {
        return view('govOfficials.profile');
    }

    public function userHome(): View
    {
        return view('userHome');
    }

    public function landingHome(): View
    {
        return view('landing');
    }
}
