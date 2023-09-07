<?php

namespace App\Http\Controllers;

use App\Models\Cdio;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\RelatedMinistry;
use App\Models\TypesOfServices;
use App\Models\Percentage;
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


class GovorganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_govorganizations = DB::table('users')
        ->join('govorganizations', 'users.id', '=', 'govorganizations.user_id')
        ->select('users.*' ,'users.id as usr_id', 'govorganizations.*')
        ->paginate(10);

        return view('home',compact('user_govorganizations'))
        ->with('i', ($request->input('page', 1) - 1) * 5);
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

        $user=new User;

        Auth::login($user);

        return redirect("login");

        // return view("auth.login");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
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
        return view('govOrganizations.edit',compact('govorganizationdetail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    { //dd($request);
        request()->validate([
            'username' => 'required|string|max:255|regex:/^[a-zA-Z0-9]+$/',
            'email' => 'required|string|max:255',
            'password' => 'required|string|min:6|same:confirm-password',
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
            //'headTitle'=> 'required|string',
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

        $user->username=$request->username;
        $user->email=$request->email;
        $user->password = Hash::make($request->password);

        $user->update();

        //dd($request);
        $governmentOrganization =new Govorganizationdetail;

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

        //$headTitle = $request->input('headTitle');
        //$headName = $request->input('name_of_the_head');
        //$headNameWithTitle = $headTitle . ' ' . $headName;
        $governmentOrganization->name_of_the_head = $request->name_of_the_head;

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
    public function destroy(string $id)
    {
        //
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

}
