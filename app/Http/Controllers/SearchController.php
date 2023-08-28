<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Relatedministry;
use App\Models\Govorganizationname;
use App\Models\Organizationcategory;
use App\Models\GovernmentOrganizationName;

class SearchController extends Controller
{
    public function autocomplete(Request $request)
    {
        $query = $request->get('query');
          $govnames = Govorganizationname::where('gov_org_name', 'LIKE', '%'. $query. '%')->get();

          foreach($govnames as $govname){
            if($govname != null){

             $response[] = array("value"=>$govname->id,"label"=>$govname->gov_org_name);
                }
            }
          return response()->json($response);

    }

    public function autocomplete2(Request $request)
    {
        $query = $request->get('query');
          $relate = Relatedministry::where('related_ministry', 'LIKE', '%'. $query. '%')->get();

          foreach($relate as $relates){
            if($relates != null){

             $response[] = array("value"=>$relates->id,"label"=>$relates->related_ministry);
                }
            }
          return response()->json($response);

    }

    public function autocomplete3(Request $request)
    {
        $query = $request->get('query');
          $orgcategories = Organizationcategory::where('org_category', 'LIKE', '%'. $query. '%')->get();

          foreach($orgcategories as $orgcategory){
            if($orgcategory != null){

             $response[] = array("value"=>$orgcategory->id,"label"=>$orgcategory->org_category);
                }
            }
          return response()->json($response);

    }

    public function autocomplete4(Request $request)
    {
        $data = Govorganizationname::select("gov_org_name")
        ->where('gov_org_name', 'LIKE', '%'. $request->get('query'). '%')
        ->get();
          return response()->json($data);

    }



    // public function govOrgNameSearching(Request $request){
    //     if($request->ajax()) {
    //         $output = '';
    //         $govnames = Govorganizationname::where('gov_org_name', 'LIKE', '%'.$request->search.'%')
    //                         ->get();
    //         if($govnames) {
    //             foreach($govnames as $govname) {
    //                 $output .=
    //                 '<div class="card-body">
    //                     <h5 class="card-title"><b>'.$govname->gov_org_name.'</b></h5>
    //                 </div>';
    //             }
    //             return response()->json($output);
    //         }
    //         return $output;
    //     }
    //     return view('govOrganizations.test');
    // }

    // public function livesearch(Request $request)
    // { //dd('hi');
    //     $query = $request->get('query');
    //       $govOrgNames = GovernmentOrganizationName::where('gov_org_name', 'LIKE', '%'. $query. '%')->get();
    //       //dd($user->getRoleNames());


    //       foreach($govOrgNames as $govOrgName){
    //         if($govOrgName != null){

    //          $response[] = array("value"=>$govOrgName->id,"label"=>$govOrgName->gov_org_name);

    //             }
    //         }

    //       return response()->json($response);

    // }

    public function testsearch(Request $request){
        return view('govOrganizations.test');
    }





}
