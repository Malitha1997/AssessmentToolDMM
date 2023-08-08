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
        // dd($request);
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

    public function prepage4(Request $request){
        $inputValue = $request->session()->get('input_value');
        return view('PreliminaryAssessments.preliminaryAssessmentPage4',compact('inputValue'));
    }

    public function prepage5(Request $request){
        $inputValue = $request->session()->get('input_value');
        return view('PreliminaryAssessments.preliminaryAssessmentPage5',compact('inputValue'));
    }

    public function storeValuePage01(Request $request)
    {//dd('hi');
        $data =[
            'technologyMarks'=> $request->input('technologyMarks'),
            'technologyPercentage'=> $request->input('technologyPercentage'),
        ];

        $request->session()->put('input_value', $data);

        return redirect()->route('preliminaryAssessment2');
    }

    public function storeValuePage02(Request $request)
    {//dd('hi');
        $data =[
            'page2_marks'=> $request->input('page2_marks'),
            'technologyPercentage'=> $request->input('technologyPercentage'),
            'customerPercentage'=> $request->input('customerPercentage'),
        ];

        $request->session()->put('input_value', $data);

        return redirect()->route('preliminaryAssessment3');
    }

    public function storeValuePage03(Request $request)
    {//dd('hi');
        $data =[
            'page3_marks'=> $request->input('page3_marks'),
            'technologyPercentage'=> $request->input('technologyPercentage'),
            'customerPercentage'=> $request->input('customerPercentage'),
            'operationPercentage'=> $request->input('operationPercentage'),
        ];

        $request->session()->put('input_value', $data);

        return redirect()->route('preliminaryAssessment4');
    }

    public function storeValuePage04(Request $request)
    {//dd('hi');
        $data =[
            'page4_marks'=> $request->input('page4_marks'),
            'technologyPercentage'=> $request->input('technologyPercentage'),
            'customerPercentage'=> $request->input('customerPercentage'),
            'operationPercentage'=> $request->input('operationPercentage'),
            'strategyPercentage'=> $request->input('strategyPercentage'),
        ];

        $request->session()->put('input_value', $data);

        return redirect()->route('preliminaryAssessment5');
    }
}
