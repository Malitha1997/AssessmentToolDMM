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



        public function generatePDF()
        {
            // Fetch data for the radar chart
        $labels = ["Customer", "Strategy", "Technology & data", "Operation", "Organization & culture"];

        // Assuming the authenticated user has a "govorganizationdetail" and it's related to a "percentage"
        $percentage = Auth::user()->govorganizationdetail->percentage;

        // If there is no percentage data for the user, you can handle it accordingly
        if (!$percentage) {
            // Handle the case where the authenticated user doesn't have a related "percentage"
            return redirect()->route('home')->with('error', 'No percentage data found.');
        }

        // Organize the percentage data for the radar chart
        $percentages = [
            (int) $percentage->customer,
            (int) $percentage->strategy,
            (int) $percentage->technology,
            (int) $percentage->operation,
            (int) $percentage->culture,
        ];
        //Get the government organization name
        $govorganizationname = Auth::user()->govorganizationdetail->govorganizationname;

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

        $technology = Auth::user()->govorganizationdetail->technology;

    // If there is no technology data for the user, you can handle it accordingly
    if (!$technology) {
        // Handle the case where the authenticated user doesn't have a related "technology"
        return redirect()->route('home')->with('error', 'No technology data found.');
    }

    // Organize the technology data for Google Charts
    $result2 = [
        ['Category', 'Value'],
        ['Emerging Technology', (int) $technology->emerging_technology],
        ['Data Management', (int) $technology->data_management],
        ['Delivery Goverance', (int) $technology->delivery_governance],
        ['Connectivity', (int) $technology->connectivity],
        ['Security', (int) $technology->security],
        ['Technology Architecture', (int) $technology->technology_architecture],
        ['Data Goverance', (int) $technology->data_governance],
        ['Data Engineering', (int) $technology->data_engineering],
        ['Interoperbility', (int) $technology->interoperbility],
        ['Application for users', (int) $technology->application_for_users],
    ];

        // Render the view with Google Charts code and other content
        $html = View::make('report', compact('result','govorganizationname','percentages','labels','result2'))->render();
        //dd($html);
        // Generate the PDF
        $pdf = PDF::loadHTML($html);
        return $pdf->download('PreliminaryAssessmentReport.pdf');



     }


}
