<?php

namespace App\Http\Controllers;

use App\Models\Cdio;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\RelatedMinistry;
use App\Models\TypesOfServices;
use Illuminate\Support\Facades\DB;
use App\Models\Govorganizationname;
use App\Models\OrganizationCategory;
use Illuminate\Support\Facades\Auth;
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
            'types_of_service'=> 'required|string',
            'availablity_of_IT_unit'=>'required|string',
            'districts_of_operations'=> 'required|string',
            'phone_number'=> 'required|regex:/^(?:\+\d{1,3}[- ]?)?\d{10}$/',
            'name_of_the_head'=> 'required|string',
            'head_email'=> 'required|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
            'designation'=> 'required|string',
            'contact_number_of_the_head'=> 'required|regex:/^(?:\+\d{1,3}[- ]?)?\d{10}$/',
            'cdio_name'=> 'required|string|min:1|max:255',
            'cdio_email'=> 'required|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
            'cdio_contact_no'=> 'required|regex:/^(?:\+\d{1,3}[- ]?)?\d{10}$/',

        ]);
        //dd($request);
        $governmentOrganization = new Govorganizationdetail;

        $governmentOrganization->user_id = $request->user_id;
        $governmentOrganization->govorganizationname_id = $request->gov_org_name;
        $governmentOrganization->gov_org_email = $request->gov_org_email;
        $governmentOrganization->gov_org_address = $request->gov_org_address;
        $governmentOrganization->organizationcategory_id = $request->org_category;
        $governmentOrganization->number_of_employee = $request->number_of_employee;
        $governmentOrganization->relatedministry_id = $request->related_ministry;
        $governmentOrganization->availablity_of_IT_unit = $request->availablity_of_IT_unit;
        $governmentOrganization->districts_of_operations = $request->districts_of_operations;
        $governmentOrganization->phone_number = $request->phone_number;
        $governmentOrganization->name_of_the_head = $request->name_of_the_head;
        $governmentOrganization->head_email = $request->head_email;
        $governmentOrganization->contact_number_of_the_head = $request->contact_number_of_the_head;
        $governmentOrganization->designation = $request->designation;
        $governmentOrganization->types_of_service = $request->types_of_service;
        $governmentOrganization->cdio_name = $request->cdio_name;
        $governmentOrganization->cdio_email = $request->cdio_email;
        $governmentOrganization->cdio_contact_no = $request->cdio_contact_no;

        $governmentOrganization->save();

        $user=new User;

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
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
            'user_id'=> 'required|string',
            'gov_org_name'=> 'required|string|min:1|max:255',
            'gov_org_address'=> 'required|string|min:1|max:255',
            'gov_org_email'=> 'required|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
            'org_category'=> 'required|string',
            'number_of_employee'=> 'required|int',
            'related_ministry'=> 'required|string',
            'types_of_service'=> 'required|string',
            'availablity_of_IT_unit'=>'required|string',
            'districts_of_operations'=> 'required|string',
            'phone_number'=> 'required|regex:/^(?:\+\d{1,3}[- ]?)?\d{10}$/',
            'name_of_the_head'=> 'required|string',
            'head_email'=> 'required|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
            'designation'=> 'required|string',
            'contact_number_of_the_head'=> 'required|regex:/^(?:\+\d{1,3}[- ]?)?\d{10}$/',
            'cdio_name'=> 'required|string|min:1|max:255',
            'cdio_email'=> 'required|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
            'cdio_contact_no'=> 'required|regex:/^(?:\+\d{1,3}[- ]?)?\d{10}$/',
        ]);
        //dd($request);
        $govorganizationdetail = new Govorganizationdetail;

        $govorganizationdetail->user_id = $request->user_id;
        $govorganizationdetail->govorganizationname_id = $request->gov_org_name;
        $govorganizationdetail->gov_org_email = $request->gov_org_email;
        $govorganizationdetail->gov_org_address = $request->gov_org_address;
        $govorganizationdetail->organizationcategory_id = $request->org_category;
        $govorganizationdetail->number_of_employee = $request->number_of_employee;
        $govorganizationdetail->relatedministry_id = $request->related_ministry;
        $govorganizationdetail->availablity_of_IT_unit = $request->availablity_of_IT_unit;
        $govorganizationdetail->districts_of_operations = $request->districts_of_operations;
        $govorganizationdetail->phone_number = $request->phone_number;
        $govorganizationdetail->name_of_the_head = $request->name_of_the_head;
        $govorganizationdetail->head_email = $request->head_email;
        $govorganizationdetail->contact_number_of_the_head = $request->contact_number_of_the_head;
        $govorganizationdetail->designation = $request->designation;
        $govorganizationdetail->types_of_service = $request->types_of_service;
        $govorganizationdetail->cdio_name = $request->cdio_name;
        $govorganizationdetail->cdio_email = $request->cdio_email;
        $govorganizationdetail->cdio_contact_no = $request->cdio_contact_no;

        $govorganizationdetail->update();

        $user=new User;

        Auth::login($user);

        return redirect('home');
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
}
