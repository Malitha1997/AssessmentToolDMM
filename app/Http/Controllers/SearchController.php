<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Govorganizationname;
use App\Models\GovernmentOrganizationName;

class SearchController extends Controller
{
    public function govOrgNameSearching(Request $request){
        if($request->ajax()) {
            $output = '';
            $govnames = Govorganizationname::where('gov_org_name', 'LIKE', '%'.$request->search.'%')
                            ->get();
            if($govnames) {
                foreach($govnames as $govname) {
                    $output .=
                    '<div class="card-body">
                        <h5 class="card-title"><b>'.$govname->gov_org_name.'</b></h5>
                    </div>';
                }
                return response()->json($output);
            }
            return $output;
        }
        return view('govOrganizations.test');
    }

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

    public function testsearch(Request $request){
        if($request->ajax()){
            $data = Govorganizationname::where('gov_org_name','LIKE',$request->gov_org_name.'%')->get();
            $output = " ";
            if(count($data)>0){
                $output = '<ul class="list-group" style="display:block;position:relative;z-indez:1">';
                    foreach($data as $row){
                        $output .='<li class="list-group-item">'.$row->gov_org_name.'</li>';
                    }
                $output .='</ul>';
            }
            else{
                $output .='<li class="list-group-item">No data found</li>';
            }
            return $output;
        }
        return view('govOrganizations.testsearch');
    }

    public function index()
    {
        return view('govOrganizations.create');
    }

    public function autocomplete(Request $request)
    {
        $data = Govorganizationname::select("gov_org_name as value", "id")
                      ->where('gov_org_name', 'LIKE', '%'. $request->get('gov_org_name'). '%')
                    ->get();
        return response()->json($data);

    }
}
