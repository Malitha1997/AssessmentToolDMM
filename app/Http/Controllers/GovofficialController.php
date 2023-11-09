<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Govofficial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GovofficialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("govOfficials.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {//dd($request);
        request()->validate([
            'user_id'=> 'required|string',
            'full_name'=> 'required|string',
            'preferred_name'=> 'required|string',
            'designation'=> 'required|string',
            'gov_org_name'=> 'required|string',
            'contact_number'=> 'required|string',
            'email'=> 'required|string',
            'employment_layer'=> 'required|string',
            'date_of_birth'=> 'required|string',
        ]);
//dd($request);
        $govofficial=new Govofficial;

        $govofficial->user_id=$request->user_id;
        $govofficial->full_name=$request->full_name;
        $govofficial->preferred_name=$request->preferred_name;
        $govofficial->designation=$request->designation;
        $govofficial->govorganizationdetail_id=$request->gov_org_name;
        $govofficial->contact_number=$request->contact_number;
        $govofficial->email=$request->email;
        $govofficial->employment_layer=$request->employment_layer;
        $govofficial->date_of_birth=$request->date_of_birth;

        $govofficial->save();

        return redirect("signup2");

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
