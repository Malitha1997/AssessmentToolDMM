<?php

namespace App\Http\Controllers;

use App\Models\Culture;
use App\Models\Customer;
use App\Models\Strategy;
use App\Models\Operation;
use App\Models\Technology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GoogleChartsController extends Controller
{
    public function customerChart()
    {//
        // Retrieve the customer data for the authenticated user
    $customer = Auth::user()->govorganizationdetail->customer;

    // If there is no customer data for the user, you can handle it accordingly
    if (!$customer) {
        // Handle the case where the authenticated user doesn't have a related "customer"
        return redirect()->route('home')->with('error', 'No customer data found.');
    }

    // Organize the customer data for Google Charts
    $result = [
        ['Category', 'Value'],
        ['Citizen Engagement', (int) $customer->citizen_engagement],
        ['Citizen Experience', (int) $customer->citizen_experience],
        ['Citizen Experience Strategy', (int) $customer->citizen_experience_strategy],
        ['Citizen Insights', (int) $customer->citizen_insights],
        ['Citizen Trust', (int) $customer->citizen_trust],
    ];

    // Pass the organized data to the view
    return view('Results.customerresults', compact('result'));

    }

    public function technologyChart()
    {//
        $technology = Auth::user()->govorganizationdetail->technology;

    // If there is no technology data for the user, you can handle it accordingly
    if (!$technology) {
        // Handle the case where the authenticated user doesn't have a related "technology"
        return redirect()->route('home')->with('error', 'No technology data found.');
    }

    // Organize the technology data for Google Charts
    $result = [
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

    // Pass the organized data to the view
    return view('Results.technologyresults', compact('result'));

    }

    public function operationChart()
    {//
        $operation = Auth::user()->govorganizationdetail->operation;

        // If there is no operation data for the user, you can handle it accordingly
        if (!$operation) {
            // Handle the case where the authenticated user doesn't have a related "operation"
            return redirect()->route('home')->with('error', 'No operation data found.');
        }

        // Organize the operation data for Google Charts
        $result = [
            ['Category', 'Value'],
            ['Agile Change Management', (int) $operation->agile_change_management],
            ['Integrated Service Management', (int) $operation->integrated_service_management],
            ['Real-time insights and analytics', (int) $operation->real_time_insights],
            ['Smart Process Management', (int) $operation->smart_process_management]
        ];

        // Pass the organized data to the view
        return view('Results.operationresults', compact('result'));

    }

    public function strategyChart()
    {//
        $strategy = Auth::user()->govorganizationdetail->strategy;

        // If there is no strategy data for the user, you can handle it accordingly
        if (!$strategy) {
            // Handle the case where the authenticated user doesn't have a related "strategy"
            return redirect()->route('home')->with('error', 'No strategy data found.');
        }

        // Organize the strategy data for Google Charts
        $result = [
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

        // Pass the organized data to the view
        return view('Results.strategyresults', compact('result'));

    }

    public function cultureChart()
    {//

        $culture = Auth::user()->govorganizationdetail->culture;

        // If there is no culture data for the user, you can handle it accordingly
        if (!$culture) {
            // Handle the case where the authenticated user doesn't have a related "culture"
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

        // Pass the organized data to the view
        return view('Results.cultureresults', compact('result'));


    }
}
