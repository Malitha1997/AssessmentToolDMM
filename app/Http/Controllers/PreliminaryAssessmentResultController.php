<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Percentage;
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

    public function result()
    {
        $percentages = DB::select('select * from percentages');
        return view('PreliminaryAssessments.results',['percentages'=>$percentages]);
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
}
