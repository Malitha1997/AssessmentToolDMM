<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GovernmentOrganization;

class GovorganizationController extends Controller
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
        return view('govOrganizations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'gov_org_name'=> 'required|string|min:1|max:255',
            'organization_category'=> 'required|string',
            'number_of_employee'=> 'required|string',
            'related_ministry'=> 'required|string',
            'types_of_services_provide'=> 'required|string',
            'districts_of_operations'=> 'required|string',
            'phone_number'=> 'required|regex:/^(?:\+\d{1,3}[- ]?)?\d{10}$/',
            'email'=> 'required|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
            'name_of_the_head'=> 'required|string',
            'designation'=> 'required|string',
            'cdio_name'=> 'required|string|min:1|max:255',
            'cdio_email'=> 'required|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
            'cdio_contact_no'=> 'required|regex:/^(?:\+\d{1,3}[- ]?)?\d{10}$/'

        ]);

        $governmentOrganization = new GovernmentOrganization;

        $governmentOrganization->gov_org_name = $request->gov_org_name;
        $governmentOrganization->organization_category = $request->organization_category;
        $governmentOrganization->number_of_employee = $request->number_of_employee;
        $governmentOrganization->related_ministry = $request->related_ministry;
        $governmentOrganization->types_of_services_provide = $request->types_of_services_provide;
        $governmentOrganization->districts_of_operations = $request->districts_of_operations;
        $governmentOrganization->phone_number = $request->phone_number;
        $governmentOrganization->email = $request->email;
        $governmentOrganization->name_of_the_head = $request->name_of_the_head;
        $governmentOrganization->designation = $request->designation;
        $governmentOrganization->cdio_name = $request->cdio_name;
        $governmentOrganization->cdio_email = $request->cdio_email;
        $governmentOrganization->cdio_contact_no = $request->cdio_contact_no;

        $governmentOrganization->save();

        return redirect()->route('home')
                        ->with('success','User created successfully.');
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
}
