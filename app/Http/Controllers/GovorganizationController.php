<?php

namespace App\Http\Controllers;

use App\Models\Cdio;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\RelatedMinistry;
use App\Models\TypesOfServices;
use Illuminate\Support\Facades\DB;
use App\Models\OrganizationCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator;
use App\Models\GovernmentOrganization;
use App\Providers\RouteServiceProvider;


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
            'organization_category'=> 'required|string',
            'number_of_employee'=> 'required|int',
            'related_ministry'=> 'required|string',
            'types_of_services_provide'=> 'required|string',
            'availablity_of_IT_unit'=>'required|string',
            'districts_of_operations'=> 'required|string',
            'phone_number'=> 'required|regex:/^(?:\+\d{1,3}[- ]?)?\d{10}$/',
            'name_of_the_head'=> 'required|string',
            'designation'=> 'required|string',
            'contact_number_of_the_head'=> 'required|regex:/^(?:\+\d{1,3}[- ]?)?\d{10}$/',
            'email_of_the_head'=> 'required|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
            'cdio_name'=> 'required|string|min:1|max:255',
            'cdio_email'=> 'required|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
            'cdio_contact_no'=> 'required|regex:/^(?:\+\d{1,3}[- ]?)?\d{10}$/',

        ]);
        //dd($request);
        $governmentOrganization = new GovernmentOrganization;

        $governmentOrganization->user_id = $request->user_id;
        $governmentOrganization->gov_org_name = $request->gov_org_name;
        $governmentOrganization->gov_org_email = $request->gov_org_email;
        $governmentOrganization->gov_org_address = $request->gov_org_address;
        $governmentOrganization->number_of_employee = $request->number_of_employee;
        $governmentOrganization->availablity_of_IT_unit = $request->availablity_of_IT_unit;
        $governmentOrganization->districts_of_operations = $request->districts_of_operations;
        $governmentOrganization->phone_number = $request->phone_number;
        $governmentOrganization->name_of_the_head = $request->name_of_the_head;
        $governmentOrganization->contact_number_of_the_head = $request->contact_number_of_the_head;
        $governmentOrganization->email_of_the_head = $request->email_of_the_head;
        $governmentOrganization->designation = $request->designation;

        $governmentOrganization->save();

        $orgCategory =new OrganizationCategory;

        $orgCategory->organization_category = $request->organization_category;

        $orgCategory->save();

        $relatedMinistry =new RelatedMinistry;

        $relatedMinistry->related_ministry = $request->related_ministry;

        $relatedMinistry->save();

        $typesOfServices =new TypesOfServices;

        $typesOfServices->types_of_services_provide = $request->types_of_services_provide;

        $cdio =new Cdio;

        $cdio->cdio_name = $request->cdio_name;
        $cdio->cdio_email = $request->cdio_email;
        $cdio->cdio_contact_no = $request->cdio_contact_no;

        $cdio->save();

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
        $governmentOrganization=GovernmentOrganization::find($id);
        return view('govOrganizations.edit',compact('governmentOrganization'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    { //dd($request);
        request()->validate([
            'user_id'=> 'required|string',
            'gov_org_name'=> 'required|string|min:1|max:255',
            'organization_category'=> 'required|string',
            'number_of_employee'=> 'required|int',
            'related_ministry'=> 'required|string',
            'types_of_services_provide'=> 'required|string',
            'availablity_of_IT_unit'=>'required|string',
            'districts_of_operations'=> 'required|string',
            'phone_number'=> 'required|regex:/^(?:\+\d{1,3}[- ]?)?\d{10}$/',
            'name_of_the_head'=> 'required|string',
            'designation'=> 'required|string',
            'cdio_name'=> 'required|string|min:1|max:255',
            'cdio_email'=> 'required|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
            'cdio_contact_no'=> 'required|regex:/^(?:\+\d{1,3}[- ]?)?\d{10}$/',

        ]);
        //dd($request);
        $governmentOrganization = new GovernmentOrganization;

        $governmentOrganization->user_id = $request->user_id;
        $governmentOrganization->gov_org_name = $request->gov_org_name;
        $governmentOrganization->organization_category = $request->organization_category;
        $governmentOrganization->number_of_employee = $request->number_of_employee;
        $governmentOrganization->related_ministry = $request->related_ministry;
        $governmentOrganization->types_of_services_provide = $request->types_of_services_provide;
        $governmentOrganization->availablity_of_IT_unit = $request->availablity_of_IT_unit;
        $governmentOrganization->districts_of_operations = $request->districts_of_operations;
        $governmentOrganization->phone_number = $request->phone_number;
        $governmentOrganization->name_of_the_head = $request->name_of_the_head;
        $governmentOrganization->designation = $request->designation;
        $governmentOrganization->cdio_name = $request->cdio_name;
        $governmentOrganization->cdio_email = $request->cdio_email;
        $governmentOrganization->cdio_contact_no = $request->cdio_contact_no;

        $governmentOrganization->update();

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
}
