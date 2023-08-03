<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class PDFController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */



        public function cultureChart()
        {
        // Get the authenticated user's culture data
        $culture = Auth::user()->govorganizationdetail->culture;

        // If there is no culture data for the user, handle it accordingly
        if (!$culture) {
            return redirect()->route('home')->with('error', 'No culture data found.');
        }

        // Organize the culture data for Google Charts
        $result = [
            ['Category', 'Value'],
            ['Leadership', (int) $culture->leadership],
            ['Standards', (int) $culture->standards],
            ['Employee Engagement', (int) $culture->employee_engagement],
            ['Level of Skill', (int) $culture->level_of_skill],
            ['Talent Management', (int) $culture->talent_management],
        ];

        // Render the view with Google Charts code and other content
        $html = View::make('report', compact('result'))->render();
        //dd($html);
        // Generate the PDF
        $pdf = PDF::loadHTML($html);
        return $pdf->download('PreliminaryAssessmentReport.pdf');



     }


}
