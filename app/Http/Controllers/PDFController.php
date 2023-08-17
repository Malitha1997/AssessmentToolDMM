<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\User;
use App\Models\Percentage;
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



        public function generatePDF(Request $request)
        {//dd($request);

        //Get the government organization name
        $govorganizationname = Auth::user()->govorganizationdetail->govorganizationname;

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
        $percentage = [
            (int) $percentage->customer,
            (int) $percentage->strategy,
            (int) $percentage->technology,
            (int) $percentage->operation,
            (int) $percentage->culture,
        ];

        $technology = Auth::user()->govorganizationdetail->technology;

        // If there is no technology data for the user, you can handle it accordingly
        if (!$technology) {
            // Handle the case where the authenticated user doesn't have a related "technology"
            return redirect()->route('home')->with('error', 'No technology data found.');
        }

        // Organize the technology data for Google Charts
        $technology = [
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

        // Retrieve the customer data for the authenticated user
        $customer = Auth::user()->govorganizationdetail->customer;

        // If there is no customer data for the user, you can handle it accordingly
        if (!$customer) {
            // Handle the case where the authenticated user doesn't have a related "customer"
            return redirect()->route('home')->with('error', 'No customer data found.');
        }

        // Organize the customer data for Google Charts
        $customer = [
            ['Category', 'Value'],
            ['Citizen Engagement', (int) $customer->citizen_engagement],
            ['Citizen Experience', (int) $customer->citizen_experience],
            ['Citizen Experience Strategy', (int) $customer->citizen_experience_strategy],
            ['Citizen Insights', (int) $customer->citizen_insights],
            ['Citizen Trust', (int) $customer->citizen_trust],
        ];

        // Retrieve the operation data for the authenticated user
        $operation = Auth::user()->govorganizationdetail->operation;

        // If there is no operation data for the user, you can handle it accordingly
        if (!$operation) {
            // Handle the case where the authenticated user doesn't have a related "operation"
            return redirect()->route('home')->with('error', 'No operation data found.');
        }

        // Organize the operation data for Google Charts
        $operation = [
            ['Category', 'Value'],
            ['Agile Change Management', (int) $operation->agile_change_management],
            ['Integrated Service Management', (int) $operation->integrated_service_management],
            ['Real-time insights and analytics', (int) $operation->real_time_insights],
            ['Smart Process Management', (int) $operation->smart_process_management]
        ];

         // Organize the strategy data for Google Charts
        $strategy = Auth::user()->govorganizationdetail->strategy;

        // If there is no strategy data for the user, you can handle it accordingly
        if (!$strategy) {
            // Handle the case where the authenticated user doesn't have a related "strategy"
            return redirect()->route('home')->with('error', 'No strategy data found.');
        }

        // Organize the strategy data for Google Charts
        $strategy = [
            ['Category', 'Value'],
            ['Brand Management', (int) $strategy->brand_management],
            ['Ecosystem Management', (int) $strategy->ecosystem_management],
            ['Finance', (int) $strategy->finance],
            ['Market Intelligence', (int) $strategy->market_intelligence],
            ['Strategy Management', (int) $strategy->strategic_management],
            ['Buisiness Assuarance', (int) $strategy->buisiness_assuarance],
            ['Policy', (int) $strategy->policy],
            ['Invention', (int) $strategy->invention]
        ];

        // Get the authenticated user's culture data
        $culture = Auth::user()->govorganizationdetail->culture;

        // If there is no culture data for the user, handle it accordingly
        if (!$culture) {
            return redirect()->route('home')->with('error', 'No culture data found.');
        }

        // Organize the culture data for Google Charts
        $culture = [
            ['Category', 'Value'],
            ['Leadership', (int) $culture->leadership],
            ['Standards', (int) $culture->standards],
            ['Employee Engagement', (int) $culture->employee_engagement],
            ['Level of Skill', (int) $culture->level_of_skill],
            ['Talent Management', (int) $culture->talent_management],
        ];

        $percentages = Percentage::all();

        $sums = [
            'customer' => $percentages->avg('customer'),
            'strategy' => $percentages->avg('strategy'),
            'technology' => $percentages->avg('technology'),
            'operation' => $percentages->avg('operation'),
            'culture' => $percentages->avg('culture'),

        ];

        return view('report',compact('request','govorganizationname','percentage','culture','technology','labels','customer','operation','strategy','sums'));
        // Render the view with Google Charts code and other content
        //$html = View::make('report', compact('request','govorganizationname','percentage','culture','technology','labels'))->render();
        // //dd($html);
        // // Generate the PDF
        //$pdf = PDF::loadHTML($html);
        //return $pdf->download('PreliminaryAssessmentReport.pdf');



     }


}
