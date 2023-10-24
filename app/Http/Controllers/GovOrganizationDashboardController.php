<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GovOrganizationDashboardController extends Controller
{
    public function dashboard(){
        $govorgname=Auth::user()->govorganizationdetail->govorganizationname->gov_org_name;
        $govorgnameid=Auth::user()->govorganizationdetail->govorganizationname;
        $govofficials=$govorgnameid->govofficials->all();
        // $complete = [];

        // foreach ($govofficials as $govofficial) {
        //     // Check if the op_icts data exists for the current government official
        //     $opIctsData = $govofficial->op_icts;
            
        //     if ($opIctsData) {
        //         $complete[] = [
        //             // 'gov_org_name' => $govorgname,
        //             // 'govofficial_name' => $govofficial->govofficial_name,
        //             // Add other properties of the government official as needed
                    
        //             // Here, you can also add op_icts data to the array if needed
        //             'op_icts' => $opIctsData->toArray(),
        //         ];
        //     }
        // }

        // Now, $complete contains data for government officials with op_icts records

        // dd($complete);
        return view ('govOfficials.dashboard',compact('govorgname'));
    }
}
