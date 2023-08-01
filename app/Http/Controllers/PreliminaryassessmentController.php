<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PreliminaryassessmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('PreliminaryAssessments.preliminaryAssessmentPage1');
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

    public function prepage2(Request $request){
        $inputValue = $request->session()->get('input_value');
        return view('PreliminaryAssessments.preliminaryAssessmentPage2',compact('inputValue'));
    }

    public function prepage3(Request $request){
        $inputValue = $request->session()->get('input_value');
        return view('PreliminaryAssessments.preliminaryAssessmentPage3',compact('inputValue'));
    }

    public function storeValue(Request $request)
    {//dd('hi');
        $data =[
            'page1_total' => $request->input('page1_total'),
            'customer_percentage'=> $request->input('customer_percentage'),
            'percentage_d1'=> $request->input('percentage_d1'),
            'percentage_d2'=> $request->input('percentage_d2'),
            'percentage_d3'=> $request->input('percentage_d3'),
            'percentage_d4'=> $request->input('percentage_d4'),
            'percentage_d5'=> $request->input('percentage_d5'),
            'strategy_marks_page1'=> $request->input('strategy_marks_page1'),
            'percentage_d6'=> $request->input('percentage_d6'),
            'percentage_d7'=> $request->input('percentage_d7'),
            'percentage_d8'=> $request->input('percentage_d8'),
            'percentage_d9'=> $request->input('percentage_d9'),
            'percentage_d10'=> $request->input('percentage_d10'),
        ];

        $request->session()->put('input_value', $data);

        return redirect()->route('preliminaryAssessment2');
    }

    public function storeValue2(Request $request)
    {//dd('hi');
        $data =[
            'page2_total' => $request->input('page2_total'),
            'customer_percentage'=> $request->input('customer_percentage'),
            'percentage_d1'=> $request->input('percentage_d1'),
            'percentage_d2'=> $request->input('percentage_d2'),
            'percentage_d3'=> $request->input('percentage_d3'),
            'percentage_d4'=> $request->input('percentage_d4'),
            'percentage_d5'=> $request->input('percentage_d5'),
            'strategy_percentage'=> $request->input('strategy_percentage'),
            'percentage_d6'=> $request->input('percentage_d6'),
            'percentage_d7'=> $request->input('percentage_d7'),
            'percentage_d8'=> $request->input('percentage_d8'),
            'percentage_d9'=> $request->input('percentage_d9'),
            'percentage_d10'=> $request->input('percentage_d10'),
        ];

        $request->session()->put('input_value', $data);

        return redirect()->route('preliminaryAssessment3');
    }
}
