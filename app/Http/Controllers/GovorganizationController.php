<?php

namespace App\Http\Controllers;

use App\Models\Cdio;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\RelatedMinistry;
use App\Models\TypesOfServices;
use App\Models\Percentage;
use App\Models\Strategy;
use App\Models\Operation;
use App\Models\Customer;
use App\Models\Technology;
use App\Models\Culture;
use Illuminate\Support\Facades\DB;
use App\Models\Govorganizationname;
use App\Models\OrganizationCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator;
use App\Models\Govorganizationdetail;
use App\Models\GovernmentOrganization;
use App\Providers\RouteServiceProvider;
use App\Models\GovernmentOrganizationName;
use App\Models\Governmentorganizationdetail;
use Illuminate\Http\RedirectResponse;


class GovorganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $user_govorganizations = DB::table('users')
        // ->join('govorganizations', 'users.id', '=', 'govorganizations.user_id')
        // ->select('users.*' ,'users.id as usr_id', 'govorganizations.*')
        // ->paginate(10);

        // return view('home',compact('user_govorganizations'))
        // ->with('i', ($request->input('page', 1) - 1) * 5);

        $govorganizations = Govorganizationdetail::get();
        $percentageExists = Percentage::get();

        $percentages = Percentage::all();

        $users = User::get();

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


        return view('adminHome',compact('govorganizations','sums','tecAvg','cusAvg','opAvg','culAvg','strAvg','percentageExists','users'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('govOrganizations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {//dd($request);
        request()->validate([
            'user_id'=> 'required|string',
            'gov_org_name'=> 'required|string|min:1|max:255',
            'gov_org_address'=> 'required|string|min:1|max:255',
            'gov_org_email'=> 'required|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
            'org_category'=> 'required|string',
            'number_of_employee'=> 'required|int',
            'related_ministry'=> 'required|string',
            'types_of_services_provide' => 'required|array',
            'types_of_services_provide.*' => 'required|string',
            'availablity_of_IT_unit'=>'required|string',
            'districts_of_operations' => 'required|array',
            'districts_of_operations.*' => 'required|string',
            'phone_number'=> 'required|regex:/^(?:\+\d{1,3}[- ]?)?\d{10}$/',
            'headTitle'=> 'required|string',
            'name_of_the_head'=> 'required|string',
            'head_email'=> 'required|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
            'designation'=> 'required|string',
            'contact_number_of_the_head'=> 'required|regex:/^(?:\+\d{1,3}[- ]?)?\d{10}$/',

        ]);
        //dd($request);
        $dtuToggleEnabled = $request->has('toggleSwitch'=='switched');

        if ($dtuToggleEnabled) {
            $request->validate([
                'dtu_type' => 'required|string',
                'number_of_employees_dtu' => 'required|int',
            ]);
        }
        //dd($request);
        $governmentOrganization = new Govorganizationdetail;

        $governmentOrganization->user_id = $request->user_id;
        $governmentOrganization->govorganizationname_id = $request->gov_org_name;
        $governmentOrganization->gov_org_email = $request->gov_org_email;
        $governmentOrganization->gov_org_address = $request->gov_org_address;
        $governmentOrganization->organization_category_id = $request->org_category;
        $governmentOrganization->number_of_employee = $request->number_of_employee;
        $governmentOrganization->related_ministry_id = $request->related_ministry;
        $governmentOrganization->availablity_of_IT_unit = $request->availablity_of_IT_unit;

        $districtsOfOperations = implode(' , ', $request->input('districts_of_operations'));
        $governmentOrganization->districts_of_operations = $districtsOfOperations;

        $governmentOrganization->phone_number = $request->phone_number;

        $headTitle = $request->input('headTitle');
        $headName = $request->input('name_of_the_head');
        $headNameWithTitle = $headTitle . ' ' . $headName;
        $governmentOrganization->name_of_the_head = $headNameWithTitle;

        $governmentOrganization->head_email = $request->head_email;
        $governmentOrganization->contact_number_of_the_head = $request->contact_number_of_the_head;
        $governmentOrganization->designation = $request->designation;

        $typesOfServices = implode(' , ', $request->input('types_of_services_provide'));
        $governmentOrganization->types_of_service = $typesOfServices;

        if ($request->has('toggleSwitch')) {
            $governmentOrganization->dtu_type = $request->input('dtu_type');
            $governmentOrganization->number_of_employees_dtu = $request->input('number_of_employees_dtu');
        } else {
            $governmentOrganization->dtu_type = 'No Data'; // Change to your actual default value
            $governmentOrganization->number_of_employees_dtu = 'No Data'; // Change to your actual default value
        }
        $governmentOrganization->save();

        // $user=new User;

        // Auth::login($user);

        return redirect()->route('userHome');

        // return view("auth.login");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {//dd('hi');
        $user=User::find($id);
        $g_user=$user->govorganizationdetail;
        $percentageExist = $g_user ? $g_user->percentage : null;

        return view('admin.organizationProfile',compact('user','g_user','percentageExist'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {//dd($id);
        $govorganizationdetail=Govorganizationdetail::find($id);

        $governmentToCitizenChecked = false;
        if ($govorganizationdetail && strpos($govorganizationdetail->types_of_service, 'Government to Citizen') !== false) {
        $governmentToCitizenChecked = true;
        }

        $governmentToBusinessChecked = false;
        if ($govorganizationdetail && strpos($govorganizationdetail->types_of_service, 'Government to Business') !== false) {
        $governmentToBusinessChecked = true;
        }

        $governmentToGovernmentChecked = false;
        if ($govorganizationdetail && strpos($govorganizationdetail->types_of_service, 'Government to Government') !== false) {
        $governmentToGovernmentChecked = true;
        }

        $governmentToEmployeeChecked = false;
        if ($govorganizationdetail && strpos($govorganizationdetail->types_of_service, 'Government to Employee') !== false) {
        $governmentToEmployeeChecked = true;
        }
        $districts = ['Ampara', 'Anuradhapura', 'Badulla', 'Batticaloa', 'Colombo', 'Galle', 'Gampaha', 'Hambantota', 'Jaffna', 'Kalutara', 'Kandy', 'Kegalle', 'Kilinochchi', 'Kurunegala', 'Mannar', 'Matale', 'Matara', 'Moneragala', 'Mullaitivu', 'Nuwara Eliya', 'Polonnaruwa', 'Puttalam', 'Ratnapura', 'Trincomalee', 'Vavuniya'];


        return view('govOrganizations.edit',compact('govorganizationdetail','governmentToCitizenChecked','governmentToBusinessChecked','governmentToGovernmentChecked','governmentToEmployeeChecked','districts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    { //dd($request);
        request()->validate([
            // 'username' => 'required|string|max:255|regex:/^[a-zA-Z0-9]+$/',
            // 'email' => 'required|string|max:255',
            // 'password' => 'required|string|min:6|same:confirm-password',
            'gov_org_name'=> 'required|string|min:1|max:255',
            'related_ministry'=> 'required|string',
            'org_category'=> 'required|string',
            'types_of_services_provide' => 'required|string',
            //'types_of_services_provide.*' => 'required|string',
            'number_of_employee'=> 'required|int',
            'districts_of_operations' => 'required|string',
            //'districts_of_operations.*' => 'required|string',
            'phone_number'=> 'required|regex:/^(?:\+\d{1,3}[- ]?)?\d{10}$/',
            'gov_org_address'=> 'required|string|min:1|max:255',
            'gov_org_email'=> 'required|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
            'headTitle'=> 'required|string',
            'name_of_the_head'=> 'required|string',
            'designation'=> 'required|string',
            'head_email'=> 'required|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
            'contact_number_of_the_head'=> 'required|regex:/^(?:\+\d{1,3}[- ]?)?\d{10}$/',
            'availablity_of_IT_unit'=>'required|string',
            'dtu_type' => 'required|string',
            'number_of_employees_dtu' => 'required|int',
        ]);
        //dd($request);
        $user = User::find($id);

        // $user->username=$request->username;
        // $user->email=$request->email;
        // $user->password = Hash::make($request->password);

        // $user->update();

        //dd($request);
        $governmentOrganization =new Govorganizationdetail;

        // $governmentOrganization->user_id = $request->user_id;
        $governmentOrganization->govorganizationname_id = $request->gov_org_name;
        $governmentOrganization->gov_org_email = $request->gov_org_email;
        $governmentOrganization->gov_org_address = $request->gov_org_address;
        $governmentOrganization->organization_category_id = $request->org_category;
        $governmentOrganization->number_of_employee = $request->number_of_employee;
        $governmentOrganization->related_ministry_id = $request->related_ministry;
        $governmentOrganization->availablity_of_IT_unit = $request->availablity_of_IT_unit;

        //$districtsOfOperations = implode(' , ', $request->input('districts_of_operations'));
        $governmentOrganization->districts_of_operations = $request->districts_of_operations;

        $governmentOrganization->phone_number = $request->phone_number;

        $headTitle = $request->input('headTitle');
        $headName = $request->input('name_of_the_head');
        $headNameWithTitle = $headTitle . ' ' . $headName;
        $governmentOrganization->name_of_the_head = $headNameWithTitle;

        $governmentOrganization->head_email = $request->head_email;
        $governmentOrganization->contact_number_of_the_head = $request->contact_number_of_the_head;
        $governmentOrganization->designation = $request->designation;

        //$typesOfServices = implode(' , ', $request->input('types_of_services_provide'));
        $governmentOrganization->types_of_service = $request->types_of_services_provide;

        $governmentOrganization->dtu_type = $request->dtu_type;
        $governmentOrganization->number_of_employees_dtu = $request->number_of_employees_dtu;
// dd($request);
        $user->govorganizationdetail()->update($governmentOrganization->toArray());

        // $user=new User;

        // Auth::login($user);

        return redirect("home");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Govorganizationdetail $govorganization) : RedirectResponse
    {
        $user = User::find($govorganization->user_id);

        // Delete the user if it exists
        if ($user) {
            $user->delete();
        }

        $govorganization->delete();

        return redirect()->route('home');

    }

    public function testing(Request $request){
        $query = $request->get('query');
          $govnames = Govorganizationname::where('gov_org_name', 'LIKE', '%'. $query. '%')->get();
          //dd($user->getRoleNames());

          foreach($govnames as $govname){
            if($govname != null){

             $response[] = array("value"=>$govname->id,"label"=>$govname->gov_org_name);

                }
            }

          return response()->json($response);
    }

    public function resources(){
        return view('govOrganizations.resources');
    }

    public function activateUser(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update([
            'is_active' => $request->has('is_active') ? 1 : 0,
        ]);

        return redirect()->back()->with('status', 'User account status updated.');
    }

}
