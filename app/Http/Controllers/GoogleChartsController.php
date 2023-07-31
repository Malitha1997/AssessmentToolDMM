<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Operation;
use App\Models\Technology;
use Illuminate\Http\Request;

class GoogleChartsController extends Controller
{
    public function customerChart()
    {//
        $customers = Customer::select("citizen_engagement","citizen_engagement", "citizen_experience", "citizen_experience_strategy", "citizen_insights", "citizen_trust")->get();
        $result = [['Citizen Engagement','Citizen Engagement', 'Citizen Experience', 'Citizen Experience Strategy', 'Citizen Insights', 'Citizen Trust']];
        foreach ($customers as $key => $value) {
            $result[++$key]= [
            (int) $value->citizen_engagement,
            (int) $value->citizen_engagement,
            (int) $value->citizen_experience,
            (int) $value->citizen_experience_strategy,
            (int) $value->citizen_insights,
            (int) $value->citizen_trust];
        }

        return view('Results.customerresults', compact('result'));

    }

    public function technologyChart()
    {//
        $technologies = Technology::select("emerging_technology","emerging_technology", "data_management", "delivery_governance", "connectivity", "security", "technology_architecture", "data_governance", "data_engineering", "interoperbility", "application_for_users")->get();
        $result = [['Emerging Technology','Emerging Technology', 'Data Management', 'Delivery Goverance', 'Connectivity', 'Security', 'Technology Architecture', 'Data Goverance', 'Data Engineering', 'Interoperbility', 'Application for users']];
        foreach ($technologies as $key => $value) {
            $result[++$key]= [
            (int) $value->emerging_technology,
            (int) $value->emerging_technology,
            (int) $value->data_management,
            (int) $value->delivery_governance,
            (int) $value->connectivity,
            (int) $value->security,
            (int) $value->technology_architecture,
            (int) $value->data_governance,
            (int) $value->data_engineering,
            (int) $value->interoperbility,
            (int) $value->application_for_users
        ];
        }

        return view('Results.technologyresults', compact('result'));

    }

    public function operationChart()
    {//
        $operations = Operation::select("agile_change_management","agile_change_management","integrated_service_management", "real_time_insights", "smart_process_management")->get();
        $result = [['Agile Change Management','Agile Change Management','Integrated Service Management', 'Real Time Insights', 'Smart Process Management']];
        foreach ($operations as $key => $value) {
            $result[++$key]= [
            (int) $value->agile_change_management,
            (int) $value->agile_change_management,
            (int) $value->integrated_service_management,
            (int) $value->real_time_insights,
            (int) $value->smart_process_management,
        ];
        }

        return view('Results.operationresults', compact('result'));

    }
}
