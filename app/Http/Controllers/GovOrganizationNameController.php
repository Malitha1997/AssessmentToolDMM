<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Govorganizationname;
use App\Models\GovernmentOrganizationName;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;

class GovOrganizationNameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('govOrganizations.test');
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
        //
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

    function fetch(Request $request): JsonResponse
    {
        $data = Govorganizationname::select("gov_org_name")
        ->where('gov_org_name', 'LIKE', '%'. $request->get('query'). '%')
        ->get();

        return response()->json($data);
    }

    public function autocomplete10(Request $request): JsonResponse
    {
        $query = $request->get('query');
          $govnames = Govorganizationname::where('gov_org_name', 'LIKE', '%'. $query. '%')->get();

          foreach($govnames as $govname){
            if($govname != null){

             $response[] = array("value"=>$govname->id,"label"=>$govname->gov_org_name);
                }
            }
          return response()->json($response);
    }

    public function getOrganizationNames(Request $request)
    {
    $searchTerm = $request->input('searchTerm');
    $organizationNames = Govorganizationname::where('gov_org_name', 'like', '%' . $searchTerm . '%')->get();

    return response()->json($organizationNames);
    }


}
