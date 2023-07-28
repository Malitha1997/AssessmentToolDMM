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

    public function prepage2(){
        return view('PreliminaryAssessments.preliminaryAssessmentPage2');
    }

    public function prepage3(){
        return view('PreliminaryAssessments.preliminaryAssessmentPage3');
    }

    public function storeValue(Request $request)
    {//
        $inputValue = $request->input('page1_total');
        Session::put('input_value', $inputValue);

        return view('PreliminaryAssessments.preliminaryAssessmentPage2');
    }

    public function storeValue2(Request $request)
    {//dd('hi');
        $inputValue = $request->input('page2_total');
        Session::put('input_value2', $inputValue);

        return view('PreliminaryAssessments.preliminaryAssessmentPage3');
    }
}
