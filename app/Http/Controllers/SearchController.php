<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GovernmentOrganizationName;

class SearchController extends Controller
{
    // public function govOrgNameSearching(Request $request){
    //     if($request->ajax()){
    //         $data = GovernmentOrganizationName::where('gov_org_name','LIKE',$request->gov_org_name.'%')->get();
    //         $output = '';
    //         if(count($data) >0){
    //             $output = '<ul class="list-group" style="display:block;position:relative;z-indez:1">';
    //                 foreach($data as $row){
    //                     $output .='<li class="list-group-item">'.$row->gov_org_name.'</li>';
    //                 }
    //             $output .= '</ul>';
    //         }else{
    //             $output .= '<li class="list-group-item>No Data found</li>';

    //         }
    //         return $output;
    //     }
    //     return view('govOrganizations.create');
    // }

    public function livesearch(Request $request)
    { //dd('hi');
        $query = $request->get('query');
          $govOrgNames = GovernmentOrganizationName::where('gov_org_name', 'LIKE', '%'. $query. '%')->get();
          //dd($user->getRoleNames());


          foreach($govOrgNames as $govOrgName){
            if($govOrgName != null){

             $response[] = array("value"=>$govOrgName->id,"label"=>$govOrgName->gov_org_name);

                }
            }

          return response()->json($response);

    }

}
