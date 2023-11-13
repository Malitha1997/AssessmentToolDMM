<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\OpIct;
use App\Models\MidIct;
use App\Models\TopIct;
use App\Models\Govofficial;
use App\Models\OpManagement;
use Illuminate\Http\Request;
use App\Models\MidManagement;
use App\Models\TopManagement;
use Illuminate\Support\Facades\DB;
use App\Models\Govorganizationname;
use App\Models\OpDigitalGovernment;
use App\Models\MidDigitalGovernment;
use App\Models\TopDigitalGovernment;
use Illuminate\Support\Facades\Hash;
use App\Models\Govorganizationdetail;

class CompetancyAssessmentController extends Controller
{
    public function operational(Request $request)
    {
    $users = User::get();
    $govofficialCount = Govofficial::count();
    $govofficials = Govofficial::all();

    $opIct = OpIct::all();
    $opDigitalGovernment = OpDigitalGovernment::all();
    $opManagement = OpManagement::all();

    $midIct = MidIct::all();
    $midDigitalGovernment = MidDigitalGovernment::all();
    $midManagement = MidManagement::all();

    $topIct = TopIct::all();
    $topDigitalGovernment = TopDigitalGovernment::all();
    $topManagement = TopManagement::all();

    $govOrganizationIct = DB::table('govofficials')
    ->join('op_icts', 'govofficials.id', '=', 'op_icts.govofficial_id')
    ->select('govofficials.govorganizationname_id as organization_id')
    ->union(DB::table('govofficials')
        ->join('mid_icts', 'govofficials.id', '=', 'mid_icts.govofficial_id')
        ->select('govofficials.govorganizationname_id')
    )
    ->union(DB::table('govofficials')
        ->join('top_icts', 'govofficials.id', '=', 'top_icts.govofficial_id')
        ->select('govofficials.govorganizationname_id')
    )
    ->distinct()
    ->pluck('organization_id');

    $govIctOrgNames = DB::table('govorganizationnames')
    ->whereIn('id', $govOrganizationIct)
    ->pluck('gov_org_name');

    $countGovOrganizationIct = $govOrganizationIct->count();

    $govIctOrgCounts = DB::table('govorganizationnames')
        ->whereIn('govorganizationnames.id', $govOrganizationIct)
        ->select(
            'govorganizationnames.gov_org_name',
            'govorganizationnames.id as govorganizationname_id',
            DB::raw('(SELECT COUNT(*) FROM govofficials 
                  WHERE govofficials.govorganizationname_id = govorganizationnames.id 
                  AND (EXISTS (SELECT 1 FROM op_icts WHERE op_icts.govofficial_id = govofficials.id) 
                    OR EXISTS (SELECT 1 FROM mid_icts WHERE mid_icts.govofficial_id = govofficials.id) 
                    OR EXISTS (SELECT 1 FROM top_icts WHERE top_icts.govofficial_id = govofficials.id))
                 ) as count')
        )
        ->leftJoin('govofficials', 'govorganizationnames.id', '=', 'govofficials.govorganizationname_id')
        ->groupBy('govorganizationnames.gov_org_name', 'govorganizationnames.id')
        ->get();  

    $govOrganizationDigitalGovernment = DB::table('govofficials')
    ->join('op_digital_governments', 'govofficials.id', '=', 'op_digital_governments.govofficial_id')
    ->select('govofficials.govorganizationname_id as organization_id')
    ->union(DB::table('govofficials')
        ->join('mid_digital_governments', 'govofficials.id', '=', 'mid_digital_governments.govofficial_id')
        ->select('govofficials.govorganizationname_id')
    )
    ->union(DB::table('govofficials')
        ->join('top_digital_governments', 'govofficials.id', '=', 'top_digital_governments.govofficial_id')
        ->select('govofficials.govorganizationname_id')
    )
    ->distinct()
    ->pluck('organization_id');

    $govDigitalGovernmentOrgNames = DB::table('govorganizationnames')
    ->whereIn('id', $govOrganizationDigitalGovernment)
    ->pluck('gov_org_name');

    $countGovOrganizationDigitalGovernment = $govOrganizationDigitalGovernment->count();

    $govOrganizationDigitalGovernment = DB::table('govofficials')
        ->join('op_digital_governments', 'govofficials.id', '=', 'op_digital_governments.govofficial_id')
        ->select('govofficials.govorganizationname_id as organization_id')
        ->union(DB::table('govofficials')
            ->join('mid_digital_governments', 'govofficials.id', '=', 'mid_digital_governments.govofficial_id')
            ->select('govofficials.govorganizationname_id')
        )
        ->union(DB::table('govofficials')
            ->join('top_digital_governments', 'govofficials.id', '=', 'top_digital_governments.govofficial_id')
            ->select('govofficials.govorganizationname_id')
        )
        ->distinct()
        ->pluck('organization_id');
        
        $govDigitalGovernmentOrgCounts = DB::table('govorganizationnames')
        ->whereIn('govorganizationnames.id', $govOrganizationDigitalGovernment)
        ->select(
            'govorganizationnames.gov_org_name',
            'govorganizationnames.id as govorganizationname_id',
            DB::raw('(SELECT COUNT(*) FROM govofficials 
                  WHERE govofficials.govorganizationname_id = govorganizationnames.id 
                  AND (EXISTS (SELECT 1 FROM op_digital_governments WHERE op_digital_governments.govofficial_id = govofficials.id) 
                    OR EXISTS (SELECT 1 FROM mid_digital_governments WHERE mid_digital_governments.govofficial_id = govofficials.id) 
                    OR EXISTS (SELECT 1 FROM top_digital_governments WHERE top_digital_governments.govofficial_id = govofficials.id))
                 ) as count')
        )
        ->leftJoin('govofficials', 'govorganizationnames.id', '=', 'govofficials.govorganizationname_id')
        ->groupBy('govorganizationnames.gov_org_name', 'govorganizationnames.id')
        ->get(); 

    $govOrganizationManagement = DB::table('govofficials')
    ->join('op_management', 'govofficials.id', '=', 'op_management.govofficial_id')
    ->select('govofficials.govorganizationname_id as organization_id')
    ->union(DB::table('govofficials')
        ->join('mid_management', 'govofficials.id', '=', 'mid_management.govofficial_id')
        ->select('govofficials.govorganizationname_id')
    )
    ->union(DB::table('govofficials')
        ->join('top_management', 'govofficials.id', '=', 'top_management.govofficial_id')
        ->select('govofficials.govorganizationname_id')
    )
    ->distinct()
    ->pluck('organization_id');

    $govManagementOrgNames = DB::table('govorganizationnames')
    ->whereIn('id', $govOrganizationManagement)
    ->pluck('gov_org_name');

    $countGovOrganizationManagement = $govOrganizationManagement->count();

    $govOrganizationManagement = DB::table('govofficials')
        ->join('op_management', 'govofficials.id', '=', 'op_management.govofficial_id')
        ->select('govofficials.govorganizationname_id as organization_id')
        ->union(DB::table('govofficials')
            ->join('mid_management', 'govofficials.id', '=', 'mid_management.govofficial_id')
            ->select('govofficials.govorganizationname_id')
        )
        ->union(DB::table('govofficials')
            ->join('top_management', 'govofficials.id', '=', 'top_management.govofficial_id')
            ->select('govofficials.govorganizationname_id')
        )
        ->distinct()
        ->pluck('organization_id');
        
        $govManagementOrgCounts = DB::table('govorganizationnames')
        ->whereIn('govorganizationnames.id', $govOrganizationManagement)
        ->select(
            'govorganizationnames.gov_org_name',
            'govorganizationnames.id as govorganizationname_id',
            DB::raw('(SELECT COUNT(*) FROM govofficials 
                  WHERE govofficials.govorganizationname_id = govorganizationnames.id 
                  AND (EXISTS (SELECT 1 FROM op_management WHERE op_management.govofficial_id = govofficials.id) 
                    OR EXISTS (SELECT 1 FROM mid_management WHERE mid_management.govofficial_id = govofficials.id) 
                    OR EXISTS (SELECT 1 FROM top_management WHERE top_management.govofficial_id = govofficials.id))
                 ) as count')
        )
        ->leftJoin('govofficials', 'govorganizationnames.id', '=', 'govofficials.govorganizationname_id')
        ->groupBy('govorganizationnames.gov_org_name', 'govorganizationnames.id')
        ->get(); 




        $opIctGovOfficialIds = OpIct::select('govofficial_id')->distinct()->pluck('govofficial_id')->toArray();
        $opDigitalGovernmentGovOfficialIds = OpDigitalGovernment::select('govofficial_id')->distinct()->pluck('govofficial_id')->toArray();
        $opManagementGovOfficialIds = OpManagement::select('govofficial_id')->distinct()->pluck('govofficial_id')->toArray();
        $midIctGovOfficialIds = MidIct::select('govofficial_id')->distinct()->pluck('govofficial_id')->toArray();
        $midDigitalGovernmentGovOfficialIds = MidDigitalGovernment::select('govofficial_id')->distinct()->pluck('govofficial_id')->toArray();
        $midManagementGovOfficialIds = MidManagement::select('govofficial_id')->distinct()->pluck('govofficial_id')->toArray();
        $topIctGovOfficialIds = TopIct::select('govofficial_id')->distinct()->pluck('govofficial_id')->toArray();
        $topDigitalGovernmentGovOfficialIds = TopDigitalGovernment::select('govofficial_id')->distinct()->pluck('govofficial_id')->toArray();
        $topManagementGovOfficialIds = TopManagement::select('govofficial_id')->distinct()->pluck('govofficial_id')->toArray();

        $opCompleteIds = array_intersect($opIctGovOfficialIds, $opDigitalGovernmentGovOfficialIds, $opManagementGovOfficialIds);
        $midCompleteIds = array_intersect($midIctGovOfficialIds, $midDigitalGovernmentGovOfficialIds, $midManagementGovOfficialIds );
        $topCompleteIds = array_intersect($topIctGovOfficialIds, $topDigitalGovernmentGovOfficialIds, $topManagementGovOfficialIds );

        $countOpCompleteIds = count($opCompleteIds);
        $countMidCompleteIds = count($midCompleteIds);
        $countTopCompleteIds = count($topCompleteIds);

    $assessmentCompletedCount = $countOpCompleteIds + $countMidCompleteIds + $countTopCompleteIds;
    
    $assessmentInprogress = $govofficialCount - $assessmentCompletedCount;

    $ictCount = $opIct->count() + $midIct->count() + $topIct->count();
    $digitalGovernmentCount = $opDigitalGovernment->count() + $midDigitalGovernment->count() + $topDigitalGovernment->count();

    $avgIctInWorkplace = ($opIct->avg('op_ict_in_workplace') + $midIct->avg('ict_in_workplace') + $topIct->avg('ict_in_workplace'));
    $avgInformationManagement = ($opIct->avg('op_information_management') + $midIct->avg('information_management') + $topIct->avg('information_management'));
    $avgDigitalCitizenship = ($opIct->avg('op_digital_citizenship') + $midIct->avg('digital_citizenship') + $topIct->avg('digital_citizenship'));

    $ictAvg = [
        ['Category', 'Percentage'],
        ['ICT In Workplace', (int) $avgIctInWorkplace],
        ['Information Management', (int) $avgInformationManagement],
        ['Digital Citizenship', (int) $avgDigitalCitizenship],
    ];

    $digitalGovernmentCount = $opDigitalGovernment->count() + $midDigitalGovernment->count() + $topDigitalGovernment->count();

    $avgChangeManagement = ($opDigitalGovernment->avg('op_change_management') + $midDigitalGovernment->avg('mid_change_management'));
    $avgCollaboration = ($opDigitalGovernment->avg('op_collaboration') + $midDigitalGovernment->avg('mid_collaboration') + $topDigitalGovernment->avg('collaboration'));
    $avgOrientation = ($opDigitalGovernment->avg('op_orientation') + $midDigitalGovernment->avg('mid_orientation') + $topDigitalGovernment->avg('orientation'));
    $avgQualityManagement = ($opDigitalGovernment->avg('op_quality_management') + $midDigitalGovernment->avg('mid_quality_management') + $topDigitalGovernment->avg('quality_management'));
    $avgInitiative = ($opDigitalGovernment->avg('op_initiative') + $midDigitalGovernment->avg('mid_initiative'));
    $avgLeadership = $topDigitalGovernment->avg('leadership');

    $digitalGovernmentAvg = [
        ['Category', 'Percentage'],
        ['Change Management', (int) $avgChangeManagement],
        ['Collaboration', (int) $avgCollaboration],
        ['Orientation', (int) $avgOrientation],
        ['Quality Management', (int) $avgQualityManagement],
        ['Initiative', (int) $avgInitiative],
        ['Leadership', (int) $avgLeadership],
    ];

    $ManagementCount = $opManagement->count() + $midManagement->count() + $topManagement->count();

    $avgCommunication = ($opManagement->avg('op_communication') + $midManagement->avg('mid_communication') + $topManagement->avg('communication'));
    $avgWorkplaceManagement = ($opManagement->avg('op_workplace_management') + $midManagement->avg('mid_workplace_management') + $topManagement->avg('workplace_management'));
    $avgDecisionMaking = $midManagement->avg('mid_decision_making') + $topManagement->avg('decision_making');
    $avgStakeholderManagement = ($opManagement->avg('op_stakeholder_management') + $midManagement->avg('mid_stakeholder') + $topManagement->avg('stakeholder_management'));
    $avgTeamwork = ($opManagement->avg('op_teamwork') + $midManagement->avg('mid_team_work'));
    $avgPersonalDevelopment = ($opManagement->avg('op_personal_development') + $midManagement->avg('mid_personal_development') + $topManagement->avg('personal_development'));
    $avgCapacityBuilding = ($midManagement->avg('mid_capacity_building') + $topManagement->avg('capacity_building'));
    $avgPerformanceManagement = $midManagement->avg('mid_performance_management');

    $managementAvg = [
        ['Category', 'Percentage'],
        ['Workplace Management', (int) $avgWorkplaceManagement],
        ['Decision Making', (int) $avgDecisionMaking],
        ['Stakeholder Management', (int) $avgStakeholderManagement],
        ['Teamwork', (int) $avgTeamwork],
        ['Personal Development', (int) $avgPersonalDevelopment],
        ['Capacity Building', (int) $avgCapacityBuilding],
        ['Performance Management', (int) $avgPerformanceManagement],
    ];

    $counts = DB::table('govorganizationnames')
    ->select(
        'govorganizationnames.gov_org_name',
        'govorganizationnames.id as govorganizationname_id',
        'govofficials.id as govofficial_id',
        DB::raw('(SELECT COUNT(*) FROM govofficials WHERE govofficials.govorganizationname_id = govorganizationnames.id) as count')
    )
    ->join('govofficials', 'govorganizationnames.id', '=', 'govofficials.govorganizationname_id')
    ->get();

    return view('admin.CompetancyAssessment.Overall.dashboard', compact('govManagementOrgCounts','govDigitalGovernmentOrgCounts','govIctOrgCounts','counts','govManagementOrgNames','govDigitalGovernmentOrgNames','govIctOrgNames','countGovOrganizationManagement','countGovOrganizationDigitalGovernment','countGovOrganizationIct','counts', 'users', 'opIct', 'managementAvg', 'ManagementCount', 'digitalGovernmentAvg', 'digitalGovernmentCount', 'ictAvg', 'govofficials', 'digitalGovernmentCount', 'ictCount', 'assessmentInprogress', 'govofficialCount', 'assessmentCompletedCount'));
}


    public function create(Request $request){
        request()->validate([
            'username' => 'required|string|max:255|unique:users|regex:/^[a-zA-Z0-9]+$/',
            'email' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:6|same:confirm-password',
            'type' => 'required|integer'
        ]);
        //dd($request);

        $user=new User;

        $user->username=$request->username;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->type=$request->type;

        $user->save();

        return view('admin.CompetancyAssessment.createGovOfficial', ['user_id' => $request->input('user_id')]);
    }

    public function createGovOfficial(String $id){
        request()->validate([
            'user_id'=> 'required|string',
            'full_name'=> 'required|string',
            'preferred_name'=> 'required|string',
            'designation'=> 'required|string',
            'gov_org_name'=> 'required|string',
            'contact_number'=> 'required|string',
            'email'=> 'required|string',
            'employment_layer'=> 'required|string',
            'date_of_birth'=> 'required|string',
        ]);
//dd($request);
        $govofficial=new Govofficial;

        $govofficial->user_id=$request->user_id;
        $govofficial->full_name=$request->full_name;
        $govofficial->preferred_name=$request->preferred_name;
        $govofficial->designation=$request->designation;
        $govofficial->govorganizationdetail_id=$request->gov_org_name;
        $govofficial->contact_number=$request->contact_number;
        $govofficial->email=$request->email;
        $govofficial->employment_layer=$request->employment_layer;
        $govofficial->date_of_birth=$request->date_of_birth;

        $govofficial->save();

        return redirect("competancyOperational");
    }

    public function show(String $id){
        $govorganizationname=Govorganizationname::find($id);
        $countGovOfficials = $govorganizationname->govofficials->count();

        $govofficials=$govorganizationname->govofficials;
        $opGovofficials = $govorganizationname->govofficials()
            ->where('employment_layer', 'operational')
            ->get();

        $opGovofficials2 = $govorganizationname->govofficials()
            ->where('employment_layer', 'operational')
            ->exists();

        $countOperationalCompleted=0;
        $countOperationalNotCompleted=0;
        if($opGovofficials2==true){
        foreach ($opGovofficials as $opGovofficial) {
            if ($opGovofficial) {
                $hasOpIctData = $opGovofficial->opIct ? $opGovofficial->opIct->exists() : false;
                $hasOpDigitalGovernmentData = $opGovofficial->opDigitalGovernment ? $opGovofficial->opDigitalGovernment->exists() : false;
                $hasOpManagementData = $opGovofficial->opManagement ? $opGovofficial->opManagement->exists() : false;
                
                if ($hasOpIctData ?? 0 && $hasOpDigitalGovernmentData ?? 0 && $hasOpManagementData ?? 0) {
                    $opGovofficialOperationalCompleted[] = $opGovofficial;
                } 
                $opGovofficialOperationalNot=[];
                if (!$hasOpIctData && !$hasOpDigitalGovernmentData && !$hasOpManagementData){
                    $opGovofficialOperationalNot[] = $opGovofficial;
                }
            }
        }
        $countOperationalCompleted=count($opGovofficialOperationalCompleted);
        $countOperationalNotCompleted=count($opGovofficialOperationalNot);
        }
        $midGovofficials = $govorganizationname->govofficials()
            ->where('employment_layer', 'middle')
            ->get();
        $midGovofficials2 = $govorganizationname->govofficials()
            ->where('employment_layer', 'middle')
            ->exists();
        if($midGovofficials2 == true){
        foreach ($midGovofficials as $midGovofficial) {
            if ($midGovofficial) {
                $hasMidIctData = $midGovofficial->midIct ? $midGovofficial->midIct->exists() : false;
                $hasMidDigitalGovernmentData = $midGovofficial->midDigitalGovernment ? $midGovofficial->midDigitalGovernment->exists() : false;
                $hasMidManagementData = $midGovofficial->midManagement ? $midGovofficial->midManagement->exists() : false;
                
                if (($hasMidIctData ?? 0) && ($hasMidDigitalGovernmentData ?? 0) && ($hasMidManagementData ?? 0)) {
                    $midGovofficialMidCompleted[] = $midGovofficial;
                } 
                $midGovofficialMidNot=[];
                if (!$hasMidIctData && !$hasMidDigitalGovernmentData && !$hasMidManagementData) {
                    $midGovofficialMidNot[] = $midGovofficial;
                }
            }
        }
        
        $countMidCompleted=count($midGovofficialMidCompleted);
        $countMidNotCompleted=count($midGovofficialMidNot);
    }
        $topGovofficials = $govorganizationname->govofficials()
            ->where('employment_layer', 'top')
            ->get();
        $topGovofficials2 = $govorganizationname->govofficials()
            ->where('employment_layer', 'top')
            ->exists();
        $topManagementGovofficials=$topGovofficials
            ->has('topManagement');

        $countTopCompleted=0;
        $countTopNotCompleted=0;
        if($topManagementGovofficials== true){
        foreach ($topGovofficials as $topGovofficial) {
            if ($topGovofficial) {
                $hasTopIctData = $topGovofficial->topIct ? $topGovofficial->topIct->exists() : false;
                $hasTopDigitalGovernmentData = $topGovofficial->topDigitalGovernment ? $topGovofficial->topDigitalGovernment->exists() : false;
                $hasTopManagementData = $topGovofficial->topManagement ? $topGovofficial->topManagement->exists() : false;

                if ($hasTopIctData && $hasTopDigitalGovernmentData && $hasTopManagementData) {
                    $topGovofficialTopCompleted[] = $topGovofficial;
                } 
                $topGovofficialTopNot=[];
                if (!$hasTopIctData && !$hasTopDigitalGovernmentData && !$hasTopManagementData) {
                    $topGovofficialTopNot[] = $topGovofficial;
                }
            }
        }
        $countTopCompleted=count($topGovofficialTopCompleted);
        $countTopNotCompleted=count($topGovofficialTopNot);
    }
        $countGovofficialsCompleted = $countOperationalCompleted ?? 0 + $countMidCompleted ?? 0 + $countTopCompleted ?? 0;
        $countGovofficialsNotCompleted = $countOperationalNotCompleted ?? 0 + $countMidNotCompleted ?? 0 + $countTopNotCompleted ?? 0;
        $countGovofficialsInprogress = $countGovOfficials - ($countGovofficialsCompleted+$countGovofficialsNotCompleted);

        $opAvg = [
            ['Category', 'Percentage'],
            ['Assessment Completed', (int) ($countGovofficialsCompleted?? 0)],
            ['Inprogress', (int) ($countGovofficialsInprogress ?? 0)],
            ['Not start', (int) ($countGovofficialsNotCompleted ?? 0)],
        ];

        $operationalGovofficials = $govorganizationname->govofficials()
                            ->where('employment_layer', 'operational')
                            ->get();

        $countOperationalGovofficials=count($operationalGovofficials);

        $opIctGovofficials= $operationalGovofficials -> has('opIct');
        $countOpIct=0;
        $countOpIctInprogress=0;
        if($opIctGovofficials==true){
        foreach ($operationalGovofficials as $operationalGovofficial) {
            if ($operationalGovofficial) {
                $hasOpIctData = $operationalGovofficial->opIct ? $operationalGovofficial->opIct->exists() : false;

                if ($hasOpIctData) {
                    $govofficialOpIct[] = $operationalGovofficial;
                } 
            }
        }

        $countOpIct=count($govofficialOpIct);
        $countOpIctInprogress=$countOperationalGovofficials - $countOpIct;
        }

        $midGovofficials = $govorganizationname->govofficials()
                            ->where('employment_layer', 'middle')
                            ->get();
        $countMidGovofficials=count($midGovofficials);

        if($midGovofficials2 == true){
        foreach ($midGovofficials as $midGovofficial) {
            if ($midGovofficial) {
                $hasMidIctData = $midGovofficial->midIct ? $midGovofficial->midIct->exists() : false;

                if ($hasMidIctData) {
                    $govofficialMidIct[] = $midGovofficial;
                } 
                
            }
        }

        $countMidIct=count($govofficialMidIct);
        $countMidIctInprogress=$countMidGovofficials - $countMidIct;
        }
        
        $topGovofficials = $govorganizationname->govofficials()
                            ->where('employment_layer', 'top')
                            ->get();
        $countTopGovofficials=count($topGovofficials);

        $topIctGovofficials= $topGovofficials
                            ->has('topIct');

        $countTopIct=0;
        $countTopIctInprogress=0;
        if($topIctGovofficials== true){
        foreach ($topGovofficials as $topGovofficial) {
            if ($topGovofficial) {
                $hasTopIctData = $topGovofficial->topIct ? $topGovofficial->topIct->exists() : false;

                if ($hasTopIctData) {
                    $govofficialTopIct[] = $topGovofficial;
                } 
                
            }
        }
        
        $countTopIct=count($govofficialTopIct);
        $countTopIctInprogress=$countTopGovofficials - $countTopIct;
        }

        $countIct=$countOpIct  + $countMidIct  + $countTopIct ;
        $countIctInprogress=$countOpIctInprogress ?? 0 + $countMidIctInprogress ?? 0 + $countTopIctInprogress ?? 0;

        $operationalGovofficials = $govorganizationname->govofficials()
                            ->where('employment_layer', 'operational')
                            ->get();

        $countOperationalGovofficials=count($operationalGovofficials);

        $opDigitalGovernmentOfficials=$operationalGovofficials
                            ->has('opDigitalGovernment');
         
        $countOpDigitalGovernment=0;
        $countOpDigitalGovernmentInprogress=0;
        if($opDigitalGovernmentOfficials==true){                    
        foreach ($operationalGovofficials as $operationalGovofficial) {
            if ($operationalGovofficial) {
                $hasOpDigitalGovernmentData = $operationalGovofficial->opDigitalGovernment ? $operationalGovofficial->opDigitalGovernment->exists() : false;

                if ($hasOpDigitalGovernmentData) {
                    $govofficialOpDigitalGovernment[] = $operationalGovofficial;
                } 
            }
        }

        $countOpDigitalGovernment=count($govofficialOpDigitalGovernment);
        $countOpDigitalGovernmentInprogress=$countOperationalGovofficials - $countOpDigitalGovernment;
        }

        $midGovofficials = $govorganizationname->govofficials()
                            ->where('employment_layer', 'middle')
                            ->get();
        $countMidGovofficials=count($midGovofficials);

        if($midGovofficials2==true){
        foreach ($midGovofficials as $midGovofficial) {
            if ($midGovofficial) {
                $hasMidDigitalGovernmentData = $midGovofficial->midDigitalGovernment ? $midGovofficial->midDigitalGovernment->exists() : false;

                if ($hasMidDigitalGovernmentData) {
                    $govofficialMidDigitalGovernment[] = $midGovofficial;
                } 
                
            }
        }

        $countMidDigitalGovernment=count($govofficialMidDigitalGovernment);
        $countMidDigitalGovernmentInprogress=$countMidGovofficials - $countMidDigitalGovernment;
        }
        $topGovofficials = $govorganizationname->govofficials()
                            ->where('employment_layer', 'top')
                            ->get();
        $countTopGovofficials=count($topGovofficials);

        $topDigitalGovernmentOfficials=$topGovofficials
                                ->has('topDigitalGovernment');

        $countTopDigitalGovernment=0;
        $countTopDigitalGovernmentInprogress=0;
        if($topDigitalGovernmentOfficials==true){
        foreach ($topGovofficials as $topGovofficial) {
            if ($topGovofficial) {
                $hasTopDigitalGovernmentData = $topGovofficial->topDigitalGovernment ? $topGovofficial->topDigitalGovernment->exists() : false;

                if ($hasTopDigitalGovernmentData) {
                    $govofficialTopDigitalGovernment[] = $topGovofficial;
                } 
                
            }
        }

        $countTopDigitalGovernment=count($govofficialTopDigitalGovernment);
        $countTopDigitalGovernmentInprogress=$countTopGovofficials - $countTopDigitalGovernment;
        }
        $countDigitalGovernment=$countOpDigitalGovernment ?? 0 + $countMidDigitalGovernment ?? 0 + $countTopDigitalGovernment ?? 0;
        $countDigitalGovernmentInprogress=$countOpDigitalGovernmentInprogress ?? 0 + $countMidDigitalGovernmentInprogress ?? 0 + $countTopDigitalGovernmentInprogress ?? 0;

        $operationalGovofficials = $govorganizationname->govofficials()
                            ->where('employment_layer', 'operational')
                            ->get();

        $operationalGovofficials2 = $govorganizationname->govofficials()
                            ->where('employment_layer', 'operational')
                            ->exists();

        $countOperationalGovofficials=count($operationalGovofficials);

        if ($operationalGovofficials->isNotEmpty()) {
            $operationalManagementExists = $operationalGovofficials
                ->has('opManagement');
                
        }
        $countOpManagement=0;
        $countOpManagementInprogress=0;
        if($operationalGovofficials2==true){  
            if($operationalManagementExists==true){    
                foreach ($operationalGovofficials as $operationalGovofficial) {
                    if ($operationalGovofficial) {
                        $hasOpManagementData = $operationalGovofficial->opManagement ? $operationalGovofficial->opManagement->exists() : false;

                        if ($hasOpManagementData) {
                            $govofficialOpManagement[] = $operationalGovofficial;
                        } 
                    }
                }

                $countOpManagement=count($govofficialOpManagement);
                $countOpManagementInprogress=$countOperationalGovofficials - $countOpManagement;
            }
        }
        $midGovofficials = $govorganizationname->govofficials()
                            ->where('employment_layer', 'middle')
                            ->get();
        $countMidGovofficials=count($midGovofficials);

        $midGovofficials2 = $govorganizationname->govofficials()
                            ->where('employment_layer', 'middle')
                            ->exists();

        if ($midGovofficials->isNotEmpty()) {
            $middleManagementExists = $midGovofficials
                ->has('midManagement');
                
        }
        $countMidManagement=0;
        $countMidManagementInprogress=0;
        if($midGovofficials2==true){
            if($middleManagementExists==true){
                foreach ($midGovofficials as $midGovofficial) {
                    if ($midGovofficial) {
                        $hasMidManagementData = $midGovofficial->midManagement ? $midGovofficial->midManagement->exists() : false;

                        if ($hasMidManagementData) {
                            $govofficialMidManagement[] = $midGovofficial;
                        } 
                        
                    }
                }

                $countMidManagement=count($govofficialMidManagement);
                $countMidManagementInprogress=$countMidGovofficials - $countMidManagement;
            }
        }

        $topGovofficials = $govorganizationname->govofficials()
                            ->where('employment_layer', 'top')
                            ->get();
        $countTopGovofficials=count($topGovofficials);

        $topGovofficials2 = $govorganizationname->govofficials()
                            ->where('employment_layer', 'top')
                            ->exists();
        
        if ($topGovofficials->isNotEmpty()) {
            $topManagementExists = $topGovofficials
                ->has('topManagement');
                
        }

        $countTopManagement=0;
        $countManagementInprogress=0;
        if($topGovofficials2){
            if($topManagementExists){
                foreach ($topGovofficials as $topGovofficial) {
                    if ($topGovofficial) {
                        $hasTopManagementData = $topGovofficial->topManagement ? $topGovofficial->topManagement->exists() : false;

                        if ($hasTopManagementData) {
                            $govofficialTopManagement[] = $topGovofficial;
                        } 
                        
                    }
                }

                $countTopManagement=count($govofficialTopManagement);
                $countTopManagementInprogress=$countTopGovofficials - $countTopManagement;
            }
        }
        $countManagement=$countOpManagement ?? 0 + $countMidManagement ?? 0 + $countTopManagement ?? 0;
        $countManagementInprogress=$countOpManagementInprogress ?? 0 + $countMidManagementInprogress ?? 0 + $countTopManagementInprogress ?? 0;

        //Ict In Workplace
        $opIctInWorkplace = $govorganizationname->govofficials()
            ->where('employment_layer', 'operational')
            ->join('op_icts', 'govofficials.id', '=', 'op_icts.govofficial_id')
            ->pluck('op_icts.op_ict_in_workplace')
            ->toArray();

        $opGovofficials = $govorganizationname->govofficials()
            ->where('employment_layer', 'operational')
            ->get()
            ->toArray();

        $sumOpIctInWorkplace=array_sum($opIctInWorkplace);
        $countOpGovofficials=count($opGovofficials);
        $avgOpIctInWorkplace=0;
        if($countOpGovofficials!==0){
            $avgOpIctInWorkplace=round(($sumOpIctInWorkplace/($countOpGovofficials*40))*100 , 0);
        }

        $midIctInWorkplace = $govorganizationname->govofficials()
            ->where('employment_layer', 'middle')
            ->join('mid_icts', 'govofficials.id', '=', 'mid_icts.govofficial_id')
            ->pluck('mid_icts.ict_in_workplace')
            ->toArray();

        $midGovofficials = $govorganizationname->govofficials()
            ->where('employment_layer', 'middle')
            ->get()
            ->toArray();
        
        $sumMidIctInWorkplace=array_sum($midIctInWorkplace);
        $countMidGovofficials=count($midGovofficials);
        $avgMidIctInWorkplace=0;
        if($countMidGovofficials!==0){
            $avgMidIctInWorkplace=round(($sumMidIctInWorkplace/($countMidGovofficials*32))*100 , 0);
        }
        $topIctInWorkplace = $govorganizationname->govofficials()
            ->where('employment_layer', 'top')
            ->join('top_icts', 'govofficials.id', '=', 'top_icts.govofficial_id')
            ->pluck('top_icts.ict_in_workplace')
            ->toArray();
        
        $topGovofficials = $govorganizationname->govofficials()
            ->where('employment_layer', 'top')
            ->get()
            ->toArray();

        $sumTopIctInWorkplace=array_sum($topIctInWorkplace);
        $countTopGovofficials=count($topGovofficials);
        $avgTopIctInWorkplace=0;
        if($countTopGovofficials!==0){
            $avgTopIctInWorkplace=round(($sumTopIctInWorkplace/($countTopGovofficials*24))*100 , 0);
        }

        $sumIctInWorkplace=$sumOpIctInWorkplace+$sumMidIctInWorkplace+$sumTopIctInWorkplace;
        $avgIctInWorkplace=0;
        if($countGovOfficials!==0){
            $avgIctInWorkplace=round(($sumIctInWorkplace/($countGovOfficials * 96)) * 100, 0);
        }
        //Information Management
        $opIctInfromationManagement = $govorganizationname->govofficials()
            ->where('employment_layer', 'operational')
            ->join('op_icts', 'govofficials.id', '=', 'op_icts.govofficial_id')
            ->pluck('op_icts.op_information_management')
            ->toArray();

        $sumOpIctInfromationManagement=array_sum($opIctInfromationManagement);
        $avgOpInfromationManagement=0;
        if($countOpGovofficials!==0){
            $avgOpInfromationManagement=round(($sumOpIctInfromationManagement/($countOpGovofficials*10))*100 , 0);
        }

        $midIctInformationManagement = $govorganizationname->govofficials()
            ->where('employment_layer', 'middle')
            ->join('mid_icts', 'govofficials.id', '=', 'mid_icts.govofficial_id')
            ->pluck('mid_icts.information_management')
            ->toArray();

        $sumMidIctInformationManagement=array_sum($midIctInformationManagement);
        $avgMidInformationManagement=0;
        if($countMidGovofficials!==0){
            $avgMidInformationManagement=round(($sumMidIctInformationManagement/($countMidGovofficials*10))*100 , 0);
        }

        $topIctInformationManagement = $govorganizationname->govofficials()
            ->where('employment_layer', 'top')
            ->join('top_icts', 'govofficials.id', '=', 'top_icts.govofficial_id')
            ->pluck('top_icts.information_management')
            ->toArray();

        $sumTopIctInformationManagement=array_sum($topIctInformationManagement);
        $avgTopInformationManagement=0;
        if($countTopGovofficials!==0){
            $avgTopInformationManagement=round(($sumIctInformationManagement ?? 0/($countTopGovofficials*11))*100 , 0);
        }
        $sumIctInformationManagement=$sumOpIctInfromationManagement+$sumMidIctInformationManagement+$sumTopIctInformationManagement;
        $avgIctInformationManagement=0;
        if($countGovOfficials!==0){
            $avgIctInformationManagement=round(($sumIctInformationManagement/($countGovOfficials * 31)) * 100, 0);
        }

        //Digital Citizenship
        $opIctDigitalCitizenship = $govorganizationname->govofficials()
            ->where('employment_layer', 'operational')
            ->join('op_icts', 'govofficials.id', '=', 'op_icts.govofficial_id')
            ->pluck('op_icts.op_digital_citizenship')
            ->toArray();

        $sumOpIctDigitalCitizenship=array_sum($opIctDigitalCitizenship);
        $avgOpDigitalCitizenship=0;
        if($countOpGovofficials!==0){
            $avgOpDigitalCitizenship=round(($sumOpIctDigitalCitizenship/($countOpGovofficials*36))*100 , 0);
        }

        $midIctDigitalCitizenship = $govorganizationname->govofficials()
            ->where('employment_layer', 'middle')
            ->join('mid_icts', 'govofficials.id', '=', 'mid_icts.govofficial_id')
            ->pluck('mid_icts.digital_citizenship')
            ->toArray();

        $sumMidIctDigitalCitizenship=array_sum($midIctDigitalCitizenship);
        $avgMidDigitalCitizenship=0;
        if($countMidGovofficials!==0){
            $avgMidDigitalCitizenship=round(($sumMidIctDigitalCitizenship/($countMidGovofficials*58))*100 , 0);
        }
        $topIctDigitalCitizenship = $govorganizationname->govofficials()
            ->where('employment_layer', 'top')
            ->join('top_icts', 'govofficials.id', '=', 'top_icts.govofficial_id')
            ->pluck('top_icts.digital_citizenship')
            ->toArray();

        $sumTopIctDigitalCitizenship=array_sum($topIctDigitalCitizenship);
        $avgTopDigitalCitizenship=0;
        if($countTopGovofficials!==0){
            $avgTopDigitalCitizenship=round(($sumTopIctDigitalCitizenship/($countTopGovofficials*65))*100 , 0);
        }
        $sumIctDigitalCitizenship=$sumOpIctInfromationManagement+$sumMidIctDigitalCitizenship+$sumTopIctDigitalCitizenship;
        $avgIctDigitalCitizenship=0;
        if($countGovOfficials!==0){
            $avgIctDigitalCitizenship=round(($sumIctDigitalCitizenship/($countGovOfficials * 159)) * 100, 0);
        }
        $overallIct = [
            ['Category', 'Percentage'],
            ['ICT In Workplace', (int) ($avgIctInWorkplace?? 0)],
            ['Information Management', (int) ($avgIctInformationManagement ?? 0)],
            ['Digital Citizenship', (int) ($avgIctDigitalCitizenship ?? 0)],
           
        ];

        //Communication
        $opCommunication = $govorganizationname->govofficials()
            ->where('employment_layer', 'operational')
            ->join('op_management', 'govofficials.id', '=', 'op_management.govofficial_id')
            ->pluck('op_management.op_communication')
            ->toArray();

        $opGovofficials = $govorganizationname->govofficials()
            ->where('employment_layer', 'operational')
            ->get()
            ->toArray();

        $sumOpCommunication=array_sum($opCommunication);
        $countOpGovofficials=count($opGovofficials);
        $avgOpCommunication=0;
        if($countOpGovofficials!==0){
            $avgOpCommunication=round(($sumOpCommunication/($countOpGovofficials*28))*100 , 0);
        }

        $midIctCommunication = $govorganizationname->govofficials()
            ->where('employment_layer', 'middle')
            ->join('mid_management', 'govofficials.id', '=', 'mid_management.govofficial_id')
            ->pluck('mid_management.mid_communication')
            ->toArray();

        $midGovofficials = $govorganizationname->govofficials()
            ->where('employment_layer', 'middle')
            ->get()
            ->toArray();
        
        $sumMidCommunication=array_sum($midIctCommunication);
        $countMidGovofficials=count($midGovofficials);
        $avgMidCommunication=0;
        if($countMidGovofficials!==0){
            $avgMidCommunication=round(($sumMidCommunication/($countMidGovofficials*12))*100 , 0);
        }

        $topCommunication = $govorganizationname->govofficials()
            ->where('employment_layer', 'top')
            ->join('top_management', 'govofficials.id', '=', 'top_management.govofficial_id')
            ->pluck('top_management.communication')
            ->toArray();
        
        $topGovofficials = $govorganizationname->govofficials()
            ->where('employment_layer', 'top')
            ->get()
            ->toArray();

        $sumTopCommunication=array_sum($topCommunication);
        $countTopGovofficials=count($topGovofficials);
        $avgTopCommunication=0;
        if($countTopGovofficials!==0){
            $avgTopCommunication=round(($sumTopCommunication/($countTopGovofficials*13))*100 , 0);
        }

        $sumCommunication=$sumOpCommunication+$sumMidCommunication+$sumTopCommunication;
        $avgCommunication=0;
        if($countGovOfficials!==0){
            $avgCommunication=round(($sumCommunication/($countGovOfficials * 53)) * 100, 0);
        }

        //Workplace Management
        $opWorkplaceManagement = $govorganizationname->govofficials()
            ->where('employment_layer', 'operational')
            ->join('op_management', 'govofficials.id', '=', 'op_management.govofficial_id')
            ->pluck('op_management.op_workplace_management')
            ->toArray();
        
        $sumOpWorkplaceManagement=array_sum($opWorkplaceManagement);
        $countOpGovofficials=count($opGovofficials);
        $avgOpWorkplaceManagement=0;
        if($countOpGovofficials!==0){
            $avgOpWorkplaceManagement=round(($sumOpWorkplaceManagement/($countOpGovofficials*12))*100 , 0);
        }

        $midWorkplaceManagement = $govorganizationname->govofficials()
            ->where('employment_layer', 'middle')
            ->join('mid_management', 'govofficials.id', '=', 'mid_management.govofficial_id')
            ->pluck('mid_management.mid_workplace_management')
            ->toArray();
    
        $sumMidWorkplaceManagement=array_sum($midWorkplaceManagement);
        $countMidGovofficials=count($midGovofficials);
        $avgMidWorkplaceManagement=0;
        if($countMidGovofficials!==0){
            $avgMidWorkplaceManagement=round(($sumMidWorkplaceManagement/($countMidGovofficials*10))*100 , 0);
        }

        $topWorkplaceManagement = $govorganizationname->govofficials()
            ->where('employment_layer', 'top')
            ->join('top_management', 'govofficials.id', '=', 'top_management.govofficial_id')
            ->pluck('top_management.workplace_management')
            ->toArray();

        $sumTopWorkplaceManagement=array_sum($topWorkplaceManagement);
        $countTopGovofficials=count($topGovofficials);
        $avgTopWorkplaceManagement=0;
        if($countTopGovofficials!==0){
            $avgTopWorkplaceManagement=round(($sumTopWorkplaceManagement/($countTopGovofficials*20))*100 , 0);
        }

        $sumWorkplaceManagement=$sumOpWorkplaceManagement+$sumMidWorkplaceManagement+$sumTopWorkplaceManagement;
        $avgWorkplaceManagement=0;
        if($countGovOfficials!==0){
            $avgWorkplaceManagement=round(($sumWorkplaceManagement/($countGovOfficials * 42)) * 100, 0);
        }

        //Decision Making
        $midDecisionMaking = $govorganizationname->govofficials()
            ->where('employment_layer', 'middle')
            ->join('mid_management', 'govofficials.id', '=', 'mid_management.govofficial_id')
            ->pluck('mid_management.mid_decision_making')
            ->toArray();
    
        $sumMidDecisionMaking=array_sum($midDecisionMaking);
        $countMidGovofficials=count($midGovofficials);
        $avgMidDecisionMaking=0;
        if($countMidGovofficials!=0){
            $avgMidDecisionMaking=round(($sumMidDecisionMaking/($countMidGovofficials*19))*100 , 0);
        }

        $topDecisionMaking = $govorganizationname->govofficials()
            ->where('employment_layer', 'top')
            ->join('top_management', 'govofficials.id', '=', 'top_management.govofficial_id')
            ->pluck('top_management.decision_making')
            ->toArray();

        $sumTopDecisionMaking=array_sum($topDecisionMaking);
        $countTopGovofficials=count($topGovofficials);
        $avgTopDecisionMaking=0;
        if($countTopGovofficials){
            $avgTopDecisionMaking=round(($sumTopDecisionMaking/($countTopGovofficials*20))*100 , 0);
        }

        $sumDecisionMaking=$sumMidDecisionMaking+$sumTopDecisionMaking;
        $avgDecisionMaking=0;
        if($countGovOfficials!==0){
            $avgDecisionMaking=round(($sumDecisionMaking/($countGovOfficials * 39)) * 100, 0);
        }

        //Stakeholder
        $opStakeholderManagement = $govorganizationname->govofficials()
            ->where('employment_layer', 'operational')
            ->join('op_management', 'govofficials.id', '=', 'op_management.govofficial_id')
            ->pluck('op_management.op_stakeholder_management')
            ->toArray();
        
        $sumOpStakeholderManagement=array_sum($opStakeholderManagement);
        $countOpGovofficials=count($opGovofficials);
        $avgOpStakeholderManagement=0;
        if($countOpGovofficials!==0){
            $avgOpStakeholderManagement=round(($sumOpStakeholderManagement/($countOpGovofficials*24))*100 , 0);
        }

        $midStakeholderManagement = $govorganizationname->govofficials()
            ->where('employment_layer', 'middle')
            ->join('mid_management', 'govofficials.id', '=', 'mid_management.govofficial_id')
            ->pluck('mid_management.mid_stakeholder')
            ->toArray();
    
        $sumMidStakeholderManagement=array_sum($midStakeholderManagement);
        $countMidGovofficials=count($midGovofficials);
        $avgMidStakeholderManagement=0;
        if($countMidGovofficials!==0){
            $avgMidStakeholderManagement=round(($sumMidStakeholderManagement/($countMidGovofficials*25))*100 , 0);
        }

        $topStakeholderManagement = $govorganizationname->govofficials()
            ->where('employment_layer', 'top')
            ->join('top_management', 'govofficials.id', '=', 'top_management.govofficial_id')
            ->pluck('top_management.stakeholder_management')
            ->toArray();

        $sumTopStakeholderManagement=array_sum($topStakeholderManagement);
        $countTopGovofficials=count($topGovofficials);
        $avgTopStakeholderManagement=0;
        if($countTopGovofficials!==0){
            $avgTopStakeholderManagement=round(($sumTopStakeholderManagement/($countTopGovofficials*20))*100 , 0);
        }

        $sumStakeholderManagement=$sumOpStakeholderManagement+$sumMidStakeholderManagement+$sumTopStakeholderManagement;
        $avgStakeholderManagement=0;
        if($countGovOfficials!==0){
            $avgStakeholderManagement=round(($sumStakeholderManagement/($countGovOfficials * 69)) * 100, 0);
        }

        //Teamwork
        $opTeamwork = $govorganizationname->govofficials()
            ->where('employment_layer', 'operational')
            ->join('op_management', 'govofficials.id', '=', 'op_management.govofficial_id')
            ->pluck('op_management.op_teamwork')
            ->toArray();
        
        $sumOpTeamwork=array_sum($opTeamwork);
        $countOpGovofficials=count($opGovofficials);
        $avgOpTeamwork=0;
        if($countOpGovofficials!==0){
            $avgOpTeamwork=round(($sumOpTeamwork/($countOpGovofficials*24))*100 , 0);
        }

        $midTeamwork = $govorganizationname->govofficials()
            ->where('employment_layer', 'middle')
            ->join('mid_management', 'govofficials.id', '=', 'mid_management.govofficial_id')
            ->pluck('mid_management.mid_team_work')
            ->toArray();
    
        $sumMidTeamwork=array_sum($midTeamwork);
        $countMidGovofficials=count($midGovofficials);
        $avgMidTeamwork=0;
        if($countMidGovofficials!==0){
            $avgMidTeamwork=round(($sumMidTeamwork/($countMidGovofficials*4))*100 , 0);
        }

        $sumTeamwork=$sumOpTeamwork+$sumMidTeamwork;
        $avgTeamwork=0;
        if($countGovOfficials!==0){
            $avgTeamwork=round(($sumTeamwork/($countGovOfficials * 28)) * 100, 0);
        }

        //Personal Development
        $opPersonalDevelopment = $govorganizationname->govofficials()
            ->where('employment_layer', 'operational')
            ->join('op_management', 'govofficials.id', '=', 'op_management.govofficial_id')
            ->pluck('op_management.op_personal_development')
            ->toArray();
        
        $sumOpPersonalDevelopment=array_sum($opPersonalDevelopment);
        $countOpGovofficials=count($opGovofficials);
        $avgOpPersonalDevelopment=0;
        if($countOpGovofficials!==0){
            $avgOpPersonalDevelopment=round(($sumOpPersonalDevelopment/($countOpGovofficials*12))*100 , 0);
        }

        $midPersonalDevelopment = $govorganizationname->govofficials()
            ->where('employment_layer', 'middle')
            ->join('mid_management', 'govofficials.id', '=', 'mid_management.govofficial_id')
            ->pluck('mid_management.mid_personal_development')
            ->toArray();
    
        $sumMidPersonalDevelopment=array_sum($midPersonalDevelopment);
        $countMidGovofficials=count($midGovofficials);
        $avgMidPersonalDevelopment=0;
        if($countMidGovofficials!==0){
            $avgMidPersonalDevelopment=round(($sumMidPersonalDevelopment/($countMidGovofficials*5))*100 , 0);
        }

        $topPersonalDevelopment = $govorganizationname->govofficials()
            ->where('employment_layer', 'top')
            ->join('top_management', 'govofficials.id', '=', 'top_management.govofficial_id')
            ->pluck('top_management.personal_development')
            ->toArray();

        $sumTopPersonalDevelopment=array_sum($topPersonalDevelopment);
        $countTopGovofficials=count($topGovofficials);
        $avgTopPersonalDevelopment=0;
        if($countTopGovofficials!==0){
            $avgTopPersonalDevelopment=round(($sumTopPersonalDevelopment/($countTopGovofficials*20))*100 , 0);
        }

        $sumPersonalDevelopment=$sumOpPersonalDevelopment+$sumMidPersonalDevelopment;
        $avgPersonalDevelopment=0;
        if($countGovOfficials!==0){
            $avgPersonalDevelopment=round(($sumPersonalDevelopment/($countGovOfficials * 37)) * 100, 0);
        }

        //Capacity Building
        $midCapacityBuilding = $govorganizationname->govofficials()
            ->where('employment_layer', 'middle')
            ->join('mid_management', 'govofficials.id', '=', 'mid_management.govofficial_id')
            ->pluck('mid_management.mid_capacity_building')
            ->toArray();

        $sumMidCapacityBuilding=array_sum($midCapacityBuilding);
        $countMidGovofficials=count($midGovofficials);
        $avgMidCapacityBuilding=0;
        if($countMidGovofficials!==0){
            $avgMidCapacityBuilding=round(($sumMidCapacityBuilding/($countMidGovofficials*8))*100 , 0);
        }

        $topCapacityBuilding = $govorganizationname->govofficials()
            ->where('employment_layer', 'top')
            ->join('top_management', 'govofficials.id', '=', 'top_management.govofficial_id')
            ->pluck('top_management.capacity_building')
            ->toArray();

        $sumTopCapacityBuilding=array_sum($topCapacityBuilding);
        $countTopGovofficials=count($topGovofficials);
        $avgTopCapacityBuilding=0;
        if($countTopGovofficials!==0){
            $avgTopCapacityBuilding=round(($sumTopCapacityBuilding/($countTopGovofficials*20))*100 , 0);
        }

        $sumCapacityBuilding=$sumMidCapacityBuilding+$sumTopCapacityBuilding;
        $avgCapacityBuilding=0;
        if($countGovOfficials!==0){
            $avgCapacityBuilding=round(($sumCapacityBuilding/($countGovOfficials * 28)) * 100, 0);
        }

        //Performance Management
        $midPerformanceManagement = $govorganizationname->govofficials()
            ->where('employment_layer', 'middle')
            ->join('mid_management', 'govofficials.id', '=', 'mid_management.govofficial_id')
            ->pluck('mid_management.mid_performance_management')
            ->toArray();

        $sumMidPerformanceManagement=array_sum($midPerformanceManagement);
        $countMidGovofficials=count($midGovofficials);
        $avgMidPerformanceManagement=0;
        if($countMidGovofficials!==0){
            $avgMidPerformanceManagement=round(($sumMidPerformanceManagement/($countMidGovofficials*17))*100 , 0);
        }

        $sumPerformanceManagement=$sumMidPerformanceManagement;
        $avgPerformanceManagement=0;
        if($countGovOfficials!==0){
            $avgPerformanceManagement=round(($sumPerformanceManagement/($countGovOfficials * 17)) * 100, 0);
        }

        //Human Resource
        $topHumanResource = $govorganizationname->govofficials()
            ->where('employment_layer', 'top')
            ->join('top_management', 'govofficials.id', '=', 'top_management.govofficial_id')
            ->pluck('top_management.human_resource')
            ->toArray();

        $sumTopHumanResource=array_sum($topHumanResource);
        $countTopGovofficials=count($topGovofficials);
        $avgTopHumanResource=0;
        if($countTopGovofficials!==0){
            $avgTopHumanResource=round(($sumTopHumanResource/($countTopGovofficials*20))*100 , 0);
        }

        $sumHumanResource=$sumTopHumanResource;
        $avgHumanResource=0;
        if($countGovOfficials!==0){
            $avgHumanResource=round(($sumHumanResource/($countGovOfficials * 20)) * 100, 0);
        }

        $overallManagement = [
            ['Category', 'Percentage'],
            ['Communication', (int) ($avgCommunication?? 0)],
            ['Decision Making', (int) ($avgDecisionMaking?? 0)],
            ['Workplace Management', (int) ($avgWorkplaceManagement?? 0)],
            ['Stakeholder Management', (int) ($avgStakeholderManagement ?? 0)],
            ['Teamwork', (int) ($avgTeamwork ?? 0)],
            ['Personal Development', (int) ($avgPersonalDevelopment ?? 0)],
            ['Capacity Building', (int) ($avgCapacityBuilding ?? 0)],
            ['Performance Management', (int) ($avgPerformanceManagement ?? 0)],
            ['Human Resource', (int) ($avgHumanResource ?? 0)],
        ];

        //Change Management
        $opChangeManagement = $govorganizationname->govofficials()
            ->where('employment_layer', 'operational')
            ->join('op_digital_governments', 'govofficials.id', '=', 'op_digital_governments.govofficial_id')
            ->pluck('op_digital_governments.op_change_management')
            ->toArray();

        $opGovofficials = $govorganizationname->govofficials()
            ->where('employment_layer', 'operational')
            ->get()
            ->toArray();

        $sumOpChangeManagement=array_sum($opChangeManagement);
        $countOpGovofficials=count($opGovofficials);
        $avgOpChangeManagement=0;
        if($countOpGovofficials!==0){
            $avgOpChangeManagement=round(($sumOpChangeManagement/($countOpGovofficials*11))*100 , 0);
        }

        $midIctChangeManagement = $govorganizationname->govofficials()
            ->where('employment_layer', 'middle')
            ->join('mid_digital_governments', 'govofficials.id', '=', 'mid_digital_governments.govofficial_id')
            ->pluck('mid_digital_governments.mid_change_management')
            ->toArray();

        $midGovofficials = $govorganizationname->govofficials()
            ->where('employment_layer', 'middle')
            ->get()
            ->toArray();
        
        $sumMidChangeManagement=array_sum($midIctChangeManagement);
        $countMidGovofficials=count($midGovofficials);
        $avgMidChangeManagement=0;
        if($countMidGovofficials!==0){
            $avgMidChangeManagement=round(($sumMidChangeManagement/($countMidGovofficials*18))*100 , 0);
        }

        $topChangeManagement = $govorganizationname->govofficials()
            ->where('employment_layer', 'top')
            ->join('top_digital_governments', 'govofficials.id', '=', 'top_digital_governments.govofficial_id')
            ->pluck('top_digital_governments.change_management')
            ->toArray();
        
        $topGovofficials = $govorganizationname->govofficials()
            ->where('employment_layer', 'top')
            ->get()
            ->toArray();

        $sumTopChangeManagement=array_sum($topChangeManagement);
        $countTopGovofficials=count($topGovofficials);
        $avgTopChangeManagement=0;
        if($countTopGovofficials!==0){
            $avgTopChangeManagement=round(($sumTopChangeManagement/($countTopGovofficials*13))*100 , 0);
        }

        $sumChangeManagement=$sumOpChangeManagement+$sumMidChangeManagement+$sumTopChangeManagement;
        $avgChangeManagement=0;
        if($countGovOfficials!==0){
            $avgChangeManagement=round(($sumChangeManagement/($countGovOfficials * 42)) * 100, 0);
        }

        //Project Management
        $midProjectManagement = $govorganizationname->govofficials()
            ->where('employment_layer', 'middle')
            ->join('mid_digital_governments', 'govofficials.id', '=', 'mid_digital_governments.govofficial_id')
            ->pluck('mid_digital_governments.mid_project_management')
            ->toArray();
        
        $sumMidProjectManagement=array_sum($midProjectManagement);
        $countMidGovofficials=count($midGovofficials);
        $avgMidProjectManagement=0;
        if($countMidGovofficials!==0){
            $avgMidProjectManagement=round(($sumMidProjectManagement/($countMidGovofficials*12))*100 , 0);
        }

        $topProjectManagement = $govorganizationname->govofficials()
            ->where('employment_layer', 'top')
            ->join('top_digital_governments', 'govofficials.id', '=', 'top_digital_governments.govofficial_id')
            ->pluck('top_digital_governments.project_management')
            ->toArray();

        $sumTopProjectManagement=array_sum($topProjectManagement);
        $countTopGovofficials=count($topGovofficials);
        $avgTopProjectManagement=0;
        if($countTopGovofficials!==0){
            $avgTopProjectManagement=round(($sumTopProjectManagement/($countTopGovofficials*23))*100 , 0);
        }

        $sumProjectManagement=$sumMidProjectManagement+$sumTopProjectManagement;
        $avgProjectManagement=0;
        if($countGovOfficials!==0){
            $avgProjectManagement=round(($sumProjectManagement/($countGovOfficials * 55)) * 100, 0);
        }

        //Collaboration
        $opCollaboration = $govorganizationname->govofficials()
            ->where('employment_layer', 'operational')
            ->join('op_digital_governments', 'govofficials.id', '=', 'op_digital_governments.govofficial_id')
            ->pluck('op_digital_governments.op_collaboration')
            ->toArray();
        
        $sumOpCollaboration=array_sum($opCollaboration);
        $countOpGovofficials=count($opGovofficials);
        $avgOpCollaboration=0;
        if($countOpGovofficials!==0){
            $avgOpCollaboration=round(($sumOpCollaboration/($countOpGovofficials*11))*100 , 0);
        }

        $midCollaboration = $govorganizationname->govofficials()
            ->where('employment_layer', 'middle')
            ->join('mid_digital_governments', 'govofficials.id', '=', 'mid_digital_governments.govofficial_id')
            ->pluck('mid_digital_governments.mid_collaboration')
            ->toArray();
        
        $sumMidCollaboration=array_sum($midCollaboration);
        $countMidGovofficials=count($midGovofficials);
        $avgMidCollaboration=0;
        if($countMidGovofficials!==0){
            $avgMidCollaboration=round(($sumMidCollaboration/($countMidGovofficials*12))*100 , 0);
        }

        $topCollaboration = $govorganizationname->govofficials()
            ->where('employment_layer', 'top')
            ->join('top_digital_governments', 'govofficials.id', '=', 'top_digital_governments.govofficial_id')
            ->pluck('top_digital_governments.collaboration')
            ->toArray();

        $sumTopCollaboration=array_sum($topCollaboration);
        $countTopGovofficials=count($topGovofficials);
        $avgTopCollaboration=0;
        if($countTopGovofficials!==0){
            $avgTopCollaboration=round(($sumTopCollaboration/($countTopGovofficials*22))*100 , 0);
        }

        $sumCollaboration=$sumMidCollaboration+$sumTopCollaboration;
        $avgCollaboration=0;
        if($countGovOfficials!==0){
            $avgCollaboration=round(($sumCollaboration/($countGovOfficials * 45)) * 100, 0);
        }

        //Orientation
        $opOrientation = $govorganizationname->govofficials()
            ->where('employment_layer', 'operational')
            ->join('op_digital_governments', 'govofficials.id', '=', 'op_digital_governments.govofficial_id')
            ->pluck('op_digital_governments.op_orientation')
            ->toArray();
        
        $sumOpOrientation=array_sum($opOrientation);
        $countOpGovofficials=count($opGovofficials);
        $avgOpOrientation=0;
        if($countOpGovofficials!==0){
            $avgOpOrientation=round(($sumOpOrientation/($countOpGovofficials*12))*100 , 0);
        }

        $midOrientation = $govorganizationname->govofficials()
        ->where('employment_layer', 'middle')
        ->join('mid_digital_governments', 'govofficials.id', '=', 'mid_digital_governments.govofficial_id')
        ->pluck('mid_digital_governments.mid_orientation')
        ->toArray();
    
        $sumMidOrientation=array_sum($midOrientation);
        $countMidGovofficials=count($midGovofficials);
        $avgMidOrientation=0;
        if($countMidGovofficials!==0){
            $avgMidOrientation=round(($sumMidOrientation/($countMidGovofficials*14))*100 , 0);
        }

        $topOrientation = $govorganizationname->govofficials()
            ->where('employment_layer', 'top')
            ->join('top_digital_governments', 'govofficials.id', '=', 'top_digital_governments.govofficial_id')
            ->pluck('top_digital_governments.orientation')
            ->toArray();

        $sumTopOrientation=array_sum($topOrientation);
        $countTopGovofficials=count($topGovofficials);
        $avgTopOrientation=0;
        if($countTopGovofficials!==0){
            $avgTopOrientation=round(($sumTopOrientation/($countTopGovofficials*14))*100 , 0);
        }

        $sumOrientation=$sumOpOrientation+$sumMidOrientation+$sumTopOrientation;
        $avgOrientation=0;
        if($countGovOfficials!==0){
            $avgOrientation=round(($sumOrientation/($countGovOfficials * 40)) * 100, 0);
        }

        //Quality Management
        $opQualityManagement = $govorganizationname->govofficials()
            ->where('employment_layer', 'operational')
            ->join('op_digital_governments', 'govofficials.id', '=', 'op_digital_governments.govofficial_id')
            ->pluck('op_digital_governments.op_quality_management')
            ->toArray();
        
        $sumOpQualityManagement=array_sum($opQualityManagement);
        $countOpGovofficials=count($opGovofficials);
        $avgOpQualityManagement=0;
        if($countOpGovofficials!==0){
            $avgOpQualityManagement=round(($sumOpQualityManagement/($countOpGovofficials*18))*100 , 0);
        }

        $midQualityManagement = $govorganizationname->govofficials()
            ->where('employment_layer', 'middle')
            ->join('mid_digital_governments', 'govofficials.id', '=', 'mid_digital_governments.govofficial_id')
            ->pluck('mid_digital_governments.mid_quality_management')
            ->toArray();
    
        $sumMidQualityManagement=array_sum($midQualityManagement);
        $countMidGovofficials=count($midGovofficials);
        if($countMidGovofficials!==0){
            $avgMidQualityManagement=round(($sumMidQualityManagement/($countMidGovofficials*15))*100 , 0);
        }

        $topQualityManagement = $govorganizationname->govofficials()
            ->where('employment_layer', 'top')
            ->join('top_digital_governments', 'govofficials.id', '=', 'top_digital_governments.govofficial_id')
            ->pluck('top_digital_governments.quality_management')
            ->toArray();

        $sumTopQualityManagement=array_sum($topQualityManagement);
        $countTopGovofficials=count($topGovofficials);
        $avgTopQualityManagement=0;
        if($countTopGovofficials!==0){
            $avgTopQualityManagement=round(($sumTopQualityManagement/($countTopGovofficials*20))*100 , 0);
        }

        $sumQualityManagement=$sumOpQualityManagement+$sumMidQualityManagement+$sumTopQualityManagement;
        $avgQualityManagement=0;
        if($countGovOfficials!==0){
            $avgQualityManagement=round(($sumQualityManagement/($countGovOfficials * 53)) * 100, 0);
        }

        //Initiative
        $opInitiative = $govorganizationname->govofficials()
            ->where('employment_layer', 'operational')
            ->join('op_digital_governments', 'govofficials.id', '=', 'op_digital_governments.govofficial_id')
            ->pluck('op_digital_governments.op_initiative')
            ->toArray();
        
        $sumOpInitiative=array_sum($opInitiative);
        $countOpGovofficials=count($opGovofficials);
        $avgOpInitiative=0;
        if($countOpGovofficials!==0){
            $avgOpInitiative=round(($sumOpInitiative/($countOpGovofficials*48))*100 , 0);
        }

        $midInitiative = $govorganizationname->govofficials()
            ->where('employment_layer', 'middle')
            ->join('mid_digital_governments', 'govofficials.id', '=', 'mid_digital_governments.govofficial_id')
            ->pluck('mid_digital_governments.mid_initiative')
            ->toArray();
    
        $sumMidInitiative=array_sum($midInitiative);
        $countMidGovofficials=count($midGovofficials);
        $avgMidInitiative=0;
        if($countMidGovofficials!==0){
            $avgMidInitiative=round(($sumMidInitiative/($countMidGovofficials*29))*100 , 0);
        }

        $sumInitiative=$sumOpInitiative+$sumMidInitiative;
        $avgInitiative=0;
        if($countGovOfficials!==0){
            $avgInitiative=round(($sumInitiative/($countGovOfficials * 53)) * 100, 0);
        }

        $overallDigitalGovernment = [
            ['Category', 'Percentage'],
            ['Change Management', (int) ($avgChangeManagement?? 0)],
            ['Project and Program Management', (int) ($avgProjectManagement ?? 0)],
            ['Collaboration and Partnership', (int) ($avgCollaboration ?? 0)],
            ['Results Orientation', (int) ($avgOrientation ?? 0)],
            ['Quality Management', (int) ($avgQualityManagement ?? 0)],
            ['Execute digital government initiatives', (int) ($avgInitiative ?? 0)],
        ];

        return view('admin.CompetancyAssessment.govOrganization.govOrganization',compact('countManagementInprogress','countManagement','countDigitalGovernmentInprogress','countDigitalGovernment','countIctInprogress','countIct','countOpIctInprogress','countOpIct','overallDigitalGovernment','overallManagement','opAvg','overallIct','govorganizationname'));
    }

    public function govIct(String $id){
        $govorganizationname=Govorganizationname::find($id);

        $countGovOfficials = $govorganizationname->govofficials->count();

        $operationalGovofficials = $govorganizationname->govofficials()
                            ->where('employment_layer', 'operational')
                            ->get();

        $countOperationalGovofficials=count($operationalGovofficials);

        $opIctGovofficials=$operationalGovofficials -> has('opIct');
        $countOpIct=0;
        $countOpIctInprogress=0;
        if($opIctGovofficials==true){
        foreach ($operationalGovofficials as $operationalGovofficial) {
            if ($operationalGovofficial) {
                $hasOpIctData = $operationalGovofficial->opIct ? $operationalGovofficial->opIct->exists() : false;

                if ($hasOpIctData) {
                    $govofficialOpIct[] = $operationalGovofficial;
                } 
            }
        }

        $countOpIct=count($govofficialOpIct);
        $countOpIctInprogress=$countOperationalGovofficials - $countOpIct;
        }

        $midGovofficials = $govorganizationname->govofficials()
                            ->where('employment_layer', 'middle')
                            ->get();
        $countMidGovofficials=count($midGovofficials);

        $midGovofficials2 = $govorganizationname->govofficials()
                            ->where('employment_layer', 'middle')
                            ->exists();

        $countMidIctInprogress=0;
        $countMidIct=0;
        if($midGovofficials2==true){
        foreach ($midGovofficials as $midGovofficial) {
            if ($midGovofficial) {
                $hasMidIctData = $midGovofficial->midIct ? $midGovofficial->midIct->exists() : false;

                if ($hasMidIctData) {
                    $govofficialMidIct[] = $midGovofficial;
                } 
                
            }
        }

        $countMidIct=count($govofficialMidIct);
        $countMidIctInprogress=$countMidGovofficials - $countMidIct;
        }
        $topGovofficials = $govorganizationname->govofficials()
                            ->where('employment_layer', 'top')
                            ->get();
        $countTopGovofficials=count($topGovofficials);

        $topGovofficials2 = $govorganizationname->govofficials()
                            ->where('employment_layer', 'top')
                            ->exists();

        $topIctGovofficials=$topGovofficials -> has('topIct');
        $countTopIct=0;
        $countTopIctInprogress=0;
       
        if($topIctGovofficials==true){
        foreach ($topGovofficials as $topGovofficial) {
            if ($topGovofficial) {
                $hasTopIctData = $topGovofficial->topIct ? $topGovofficial->topIct->exists() : false;

                if ($hasTopIctData) {
                    $govofficialTopIct[] = $topGovofficial;
                } 
                
            }
        }

        $countTopIct=count($govofficialTopIct);
        $countTopIctInprogress=$countTopGovofficials - $countTopIct;
        }

        $countIct=$countOpIct  + $countMidIct  + $countTopIct ;
        $countIctInprogress=$countOpIctInprogress  + $countMidIctInprogress  + $countTopIctInprogress ;

        //Ict In Workplace
        $opIctInWorkplace = $govorganizationname->govofficials()
            ->where('employment_layer', 'operational')
            ->join('op_icts', 'govofficials.id', '=', 'op_icts.govofficial_id')
            ->pluck('op_icts.op_ict_in_workplace')
            ->toArray();

        $opGovofficials = $govorganizationname->govofficials()
            ->where('employment_layer', 'operational')
            ->get();

        $sumOpIctInWorkplace=array_sum($opIctInWorkplace);
        $countOpGovofficials=count($opGovofficials);

        $opIctInWorkplaceGovofficials=$opGovofficials -> has('opIctInWorkPlace');
        $avgOpIctInWorkplace=0;

        if($opIctInWorkplaceGovofficials==true){
            $avgOpIctInWorkplace=round(($sumOpIctInWorkplace/($countOpGovofficials*40))*100 , 0);
        }

        $midIctInWorkplace = $govorganizationname->govofficials()
            ->where('employment_layer', 'middle')
            ->join('mid_icts', 'govofficials.id', '=', 'mid_icts.govofficial_id')
            ->pluck('mid_icts.ict_in_workplace')
            ->toArray();

        $midGovofficials = $govorganizationname->govofficials()
            ->where('employment_layer', 'middle')
            ->get()
            ->toArray();
        
        $sumMidIctInWorkplace=array_sum($midIctInWorkplace);
        $countMidGovofficials=count($midGovofficials);
        $avgMidIctInWorkplace=0;
        if($countMidGovofficials!==0){
            $avgMidIctInWorkplace=round(($sumMidIctInWorkplace/($countMidGovofficials*32))*100 , 0);
        }

        $topIctInWorkplace = $govorganizationname->govofficials()
            ->where('employment_layer', 'top')
            ->join('top_icts', 'govofficials.id', '=', 'top_icts.govofficial_id')
            ->pluck('top_icts.ict_in_workplace')
            ->toArray();
        
        $topGovofficials = $govorganizationname->govofficials()
            ->where('employment_layer', 'top')
            ->get()
            ->toArray();

        $sumTopIctInWorkplace=array_sum($topIctInWorkplace);
        $countTopGovofficials=count($topGovofficials);
        $avgTopIctInWorkplace=0;
        if($countTopGovofficials!==0){
            $avgTopIctInWorkplace=round(($sumTopIctInWorkplace/($countTopGovofficials*24))*100 , 0);
        }

        $sumIctInWorkplace=$sumOpIctInWorkplace+$sumMidIctInWorkplace+$sumTopIctInWorkplace;
        $avgIctInWorkplace=0;
        if($countGovOfficials!==0){
            $avgIctInWorkplace=round(($sumIctInWorkplace/($countGovOfficials * 96)) * 100, 0);
        }

        //Information Management
        $opIctInfromationManagement = $govorganizationname->govofficials()
            ->where('employment_layer', 'operational')
            ->join('op_icts', 'govofficials.id', '=', 'op_icts.govofficial_id')
            ->pluck('op_icts.op_information_management')
            ->toArray();

        $sumOpIctInformationManagement=array_sum($opIctInfromationManagement);
        $avgOpInformationManagement=0;
        if($countOpGovofficials!==0){
            $avgOpInformationManagement=round(($sumOpIctInformationManagement/($countOpGovofficials*10))*100 , 0);
        }

        $midIctInformationManagement = $govorganizationname->govofficials()
            ->where('employment_layer', 'middle')
            ->join('mid_icts', 'govofficials.id', '=', 'mid_icts.govofficial_id')
            ->pluck('mid_icts.information_management')
            ->toArray();

        $sumMidIctInformationManagement=array_sum($midIctInformationManagement);
        $avgMidInformationManagement=0;
        if($countMidGovofficials!==0){
            $avgMidInformationManagement=round(($sumMidIctInformationManagement/($countMidGovofficials*10))*100 , 0);
        }

        $topIctInformationManagement = $govorganizationname->govofficials()
            ->where('employment_layer', 'top')
            ->join('top_icts', 'govofficials.id', '=', 'top_icts.govofficial_id')
            ->pluck('top_icts.information_management')
            ->toArray();

        $sumTopIctInformationManagement=array_sum($topIctInformationManagement);

        $sumIctInformationManagement=$sumOpIctInformationManagement+$sumMidIctInformationManagement+$sumTopIctInformationManagement;
        $avgIctInformationManagement=0;
        if($countGovOfficials!==0){
            $avgIctInformationManagement=round(($sumIctInformationManagement/($countGovOfficials * 31)) * 100, 0);
        }
        $avgTopInformationManagement=0;
        if($countTopGovofficials!==0){
            $avgTopInformationManagement=round(($sumIctInformationManagement/($countTopGovofficials*11))*100 , 0);
        }

        //Digital Citizenship
        $opIctDigitalCitizenship = $govorganizationname->govofficials()
            ->where('employment_layer', 'operational')
            ->join('op_icts', 'govofficials.id', '=', 'op_icts.govofficial_id')
            ->pluck('op_icts.op_digital_citizenship')
            ->toArray();

        $sumOpIctDigitalCitizenship=array_sum($opIctDigitalCitizenship);
        $avgOpDigitalCitizenship=0;
        if($countOpGovofficials!==0){
            $avgOpDigitalCitizenship=round(($sumOpIctDigitalCitizenship/($countOpGovofficials*36))*100 , 0);
        }

        $midIctDigitalCitizenship = $govorganizationname->govofficials()
            ->where('employment_layer', 'middle')
            ->join('mid_icts', 'govofficials.id', '=', 'mid_icts.govofficial_id')
            ->pluck('mid_icts.digital_citizenship')
            ->toArray();

        $sumMidIctDigitalCitizenship=array_sum($midIctDigitalCitizenship);
        $avgMidDigitalCitizenship=0;
        if($countMidGovofficials!==0){
            $avgMidDigitalCitizenship=round(($sumMidIctDigitalCitizenship/($countMidGovofficials*58))*100 , 0);
        }

        $topIctDigitalCitizenship = $govorganizationname->govofficials()
            ->where('employment_layer', 'top')
            ->join('top_icts', 'govofficials.id', '=', 'top_icts.govofficial_id')
            ->pluck('top_icts.digital_citizenship')
            ->toArray();

        $sumTopIctDigitalCitizenship=array_sum($topIctDigitalCitizenship);

        $sumIctDigitalCitizenship=$sumOpIctInformationManagement+$sumMidIctDigitalCitizenship+$sumTopIctDigitalCitizenship;
        $avgIctDigitalCitizenship=0;
        if($countGovOfficials!==0){
            $avgIctDigitalCitizenship=round(($sumIctDigitalCitizenship/($countGovOfficials * 159)) * 100, 0);
        }
        $avgTopDigitalCitizenship=0;
        if($countTopGovofficials!==0){
            $avgTopDigitalCitizenship=round(($sumTopIctDigitalCitizenship/($countTopGovofficials*65))*100 , 0);
        }

        $overallIct = [
            ['Category', 'Percentage'],
            ['ICT In Workplace', (int) ($avgIctInWorkplace?? 0)],
            ['Information Management', (int) ($avgIctInformationManagement ?? 0)],
            ['Digital Citizenship', (int) ($avgIctDigitalCitizenship ?? 0)],
           
        ];

        $overallIctTop = [
            ['Category', 'Percentage'],
            ['ICT In Workplace', (int) ($avgTopIctInWorkplace?? 0)],
            ['Information Management', (int) ($avgTopInformationManagement ?? 0)],
            ['Digital Citizenship', (int) ($avgTopDigitalCitizenship ?? 0)],
        ];

        $overallIctMid = [
            ['Category', 'Percentage'],
            ['ICT In Workplace', (int) ($avgMidIctInWorkplace?? 0)],
            ['Information Management', (int) ($avgMidInformationManagement ?? 0)],
            ['Digital Citizenship', (int) ($avgMidDigitalCitizenship ?? 0)],
        ];

        $overallIctOp = [
            ['Category', 'Percentage'],
            ['ICT In Workplace', (int) ($avgOpIctInWorkplace?? 0)],
            ['Information Management', (int) ($avgOpInformationManagement ?? 0)],
            ['Digital Citizenship', (int) ($avgOpDigitalCitizenship ?? 0)],
        ];

        $opChangeManagement = $govorganizationname->govofficials()
            ->where('employment_layer', 'operational')
            ->join('op_digital_governments', 'govofficials.id', '=', 'op_digital_governments.govofficial_id')
            ->pluck('op_digital_governments.op_change_management')
            ->toArray();

        $opGovofficials = $govorganizationname->govofficials()
            ->where('employment_layer', 'operational')
            ->get()
            ->toArray();

        $sumOpChangeManagement=array_sum($opChangeManagement);
        $countOpGovofficials=count($opGovofficials);
        $avgOpChangeManagement=0;
        if($countOpGovofficials!==0){
            $avgOpChangeManagement=round(($sumOpChangeManagement/($countOpGovofficials*11))*100 , 0);
        }

        $midIctChangeManagement = $govorganizationname->govofficials()
            ->where('employment_layer', 'middle')
            ->join('mid_digital_governments', 'govofficials.id', '=', 'mid_digital_governments.govofficial_id')
            ->pluck('mid_digital_governments.mid_change_management')
            ->toArray();

        $midGovofficials = $govorganizationname->govofficials()
            ->where('employment_layer', 'middle')
            ->get()
            ->toArray();
        
        $sumMidChangeManagement=array_sum($midIctChangeManagement);
        $countMidGovofficials=count($midGovofficials);
        $avgMidChangeManagement=0;
        if($countMidGovofficials!==0){
            $avgMidChangeManagement=round(($sumMidChangeManagement/($countMidGovofficials*18))*100 , 0);
        }

        $topChangeManagement = $govorganizationname->govofficials()
            ->where('employment_layer', 'top')
            ->join('top_digital_governments', 'govofficials.id', '=', 'top_digital_governments.govofficial_id')
            ->pluck('top_digital_governments.change_management')
            ->toArray();
        
        $topGovofficials = $govorganizationname->govofficials()
            ->where('employment_layer', 'top')
            ->get()
            ->toArray();

        $sumTopChangeManagement=array_sum($topChangeManagement);
        $countTopGovofficials=count($topGovofficials);
        $avgTopChangeManagement=0;
        if($countTopGovofficials!==0){
            $avgTopChangeManagement=round(($sumTopChangeManagement/($countTopGovofficials*13))*100 , 0);
        }

        $sumChangeManagement=$sumOpChangeManagement+$sumMidChangeManagement+$sumTopChangeManagement;
        $avgChangeManagement=0;
        if($countGovOfficials!==0){
            $avgChangeManagement=round(($sumChangeManagement/($countGovOfficials * 42)) * 100, 0);
        }

        //Project Management
        $midProjectManagement = $govorganizationname->govofficials()
            ->where('employment_layer', 'middle')
            ->join('mid_digital_governments', 'govofficials.id', '=', 'mid_digital_governments.govofficial_id')
            ->pluck('mid_digital_governments.mid_project_management')
            ->toArray();
        
        $sumMidProjectManagement=array_sum($midProjectManagement);
        $countMidGovofficials=count($midGovofficials);
        $avgMidProjectManagement=0;
        if($countMidGovofficials!==0){
            $avgMidProjectManagement=round(($sumMidProjectManagement/($countMidGovofficials*12))*100 , 0);
        }

        $topProjectManagement = $govorganizationname->govofficials()
            ->where('employment_layer', 'top')
            ->join('top_digital_governments', 'govofficials.id', '=', 'top_digital_governments.govofficial_id')
            ->pluck('top_digital_governments.project_management')
            ->toArray();

        $sumTopProjectManagement=array_sum($topProjectManagement);
        $countTopGovofficials=count($topGovofficials);
        $avgTopProjectManagement=0;
        if($countTopGovofficials!==0){
            $avgTopProjectManagement=round(($sumTopProjectManagement/($countTopGovofficials*23))*100 , 0);
        }

        $sumProjectManagement=$sumMidProjectManagement+$sumTopProjectManagement;
        $avgProjectManagement=0;
        if($countGovOfficials!==0){
            $avgProjectManagement=round(($sumProjectManagement/($countGovOfficials * 55)) * 100, 0);
        }

        //Collaboration
        $opCollaboration = $govorganizationname->govofficials()
            ->where('employment_layer', 'operational')
            ->join('op_digital_governments', 'govofficials.id', '=', 'op_digital_governments.govofficial_id')
            ->pluck('op_digital_governments.op_collaboration')
            ->toArray();
        
        $sumOpCollaboration=array_sum($opCollaboration);
        $countOpGovofficials=count($opGovofficials);
        $avgOpCollaboration=0;
        if($countOpGovofficials!==0){
            $avgOpCollaboration=round(($sumOpCollaboration/($countOpGovofficials*11))*100 , 0);
        }

        $midCollaboration = $govorganizationname->govofficials()
            ->where('employment_layer', 'middle')
            ->join('mid_digital_governments', 'govofficials.id', '=', 'mid_digital_governments.govofficial_id')
            ->pluck('mid_digital_governments.mid_collaboration')
            ->toArray();
        
        $sumMidCollaboration=array_sum($midCollaboration);
        $countMidGovofficials=count($midGovofficials);
        $avgMidCollaboration=0;
        if($countMidGovofficials!==0){
            $avgMidCollaboration=round(($sumMidCollaboration/($countMidGovofficials*12))*100 , 0);
        }

        $topCollaboration = $govorganizationname->govofficials()
            ->where('employment_layer', 'top')
            ->join('top_digital_governments', 'govofficials.id', '=', 'top_digital_governments.govofficial_id')
            ->pluck('top_digital_governments.collaboration')
            ->toArray();

        $sumTopCollaboration=array_sum($topCollaboration);
        $countTopGovofficials=count($topGovofficials);
        $avgTopCollaboration=0;
        if($countTopGovofficials!==0){
            $avgTopCollaboration=round(($sumTopCollaboration/($countTopGovofficials*22))*100 , 0);
        }

        $sumCollaboration=$sumMidCollaboration+$sumTopCollaboration;
        $avgCollaboration=0;
        if($countGovOfficials!==0){
            $avgCollaboration=round(($sumCollaboration/($countGovOfficials * 45)) * 100, 0);
        }

        //Orientation
        $opOrientation = $govorganizationname->govofficials()
            ->where('employment_layer', 'operational')
            ->join('op_digital_governments', 'govofficials.id', '=', 'op_digital_governments.govofficial_id')
            ->pluck('op_digital_governments.op_orientation')
            ->toArray();
        
        $sumOpOrientation=array_sum($opOrientation);
        $countOpGovofficials=count($opGovofficials);
        $avgOpOrientation=0;
        if($countOpGovofficials!==0){
            $avgOpOrientation=round(($sumOpOrientation/($countOpGovofficials*12))*100 , 0);
        }

        $midOrientation = $govorganizationname->govofficials()
        ->where('employment_layer', 'middle')
        ->join('mid_digital_governments', 'govofficials.id', '=', 'mid_digital_governments.govofficial_id')
        ->pluck('mid_digital_governments.mid_orientation')
        ->toArray();
    
        $sumMidOrientation=array_sum($midOrientation);
        $countMidGovofficials=count($midGovofficials);
        $avgMidOrientation=0;
        if($countMidGovofficials!==0){
            $avgMidOrientation=round(($sumMidOrientation/($countMidGovofficials*14))*100 , 0);
        }

        $topOrientation = $govorganizationname->govofficials()
            ->where('employment_layer', 'top')
            ->join('top_digital_governments', 'govofficials.id', '=', 'top_digital_governments.govofficial_id')
            ->pluck('top_digital_governments.orientation')
            ->toArray();

        $sumTopOrientation=array_sum($topOrientation);
        $countTopGovofficials=count($topGovofficials);
        $avgTopOrientation=0;
        if($countTopGovofficials!==0){
            $avgTopOrientation=round(($sumTopOrientation/($countTopGovofficials*14))*100 , 0);
        }

        $sumOrientation=$sumOpOrientation+$sumMidOrientation+$sumTopOrientation;
        $avgOrientation=0;
        if($countGovOfficials!==0){
            $avgOrientation=round(($sumOrientation/($countGovOfficials * 40)) * 100, 0);
        }

        //Quality Management
        $opQualityManagement = $govorganizationname->govofficials()
            ->where('employment_layer', 'operational')
            ->join('op_digital_governments', 'govofficials.id', '=', 'op_digital_governments.govofficial_id')
            ->pluck('op_digital_governments.op_quality_management')
            ->toArray();
        
        $sumOpQualityManagement=array_sum($opQualityManagement);
        $countOpGovofficials=count($opGovofficials);
        $avgOpQualityManagement=0;
        if($countOpGovofficials!==0){
            $avgOpQualityManagement=round(($sumOpQualityManagement/($countOpGovofficials*18))*100 , 0);
        }

        $midQualityManagement = $govorganizationname->govofficials()
            ->where('employment_layer', 'middle')
            ->join('mid_digital_governments', 'govofficials.id', '=', 'mid_digital_governments.govofficial_id')
            ->pluck('mid_digital_governments.mid_quality_management')
            ->toArray();
    
        $sumMidQualityManagement=array_sum($midQualityManagement);
        $countMidGovofficials=count($midGovofficials);
        $avgMidQualityManagement=0;
        if($countMidGovofficials!==0){
            $avgMidQualityManagement=round(($sumMidQualityManagement/($countMidGovofficials*15))*100 , 0);
        }

        $topQualityManagement = $govorganizationname->govofficials()
            ->where('employment_layer', 'top')
            ->join('top_digital_governments', 'govofficials.id', '=', 'top_digital_governments.govofficial_id')
            ->pluck('top_digital_governments.quality_management')
            ->toArray();

        $sumTopQualityManagement=array_sum($topQualityManagement);
        $countTopGovofficials=count($topGovofficials);
        $avgTopQualityManagement=0;
        if($countTopGovofficials!==0){
            $avgTopQualityManagement=round(($sumTopQualityManagement/($countTopGovofficials*20))*100 , 0);
        }

        $sumQualityManagement=$sumOpQualityManagement+$sumMidQualityManagement+$sumTopQualityManagement;
        $avgQualityManagement=0;
        if($countGovOfficials!==0){
            $avgQualityManagement=round(($sumQualityManagement/($countGovOfficials * 53)) * 100, 0);
        }

        //Initiative
        $opInitiative = $govorganizationname->govofficials()
            ->where('employment_layer', 'operational')
            ->join('op_digital_governments', 'govofficials.id', '=', 'op_digital_governments.govofficial_id')
            ->pluck('op_digital_governments.op_initiative')
            ->toArray();
        
        $sumOpInitiative=array_sum($opInitiative);
        $countOpGovofficials=count($opGovofficials);
        $avgOpInitiative=0;
        if($countOpGovofficials!==0){
            $avgOpInitiative=round(($sumOpInitiative/($countOpGovofficials*48))*100 , 0);
        }

        $midInitiative = $govorganizationname->govofficials()
            ->where('employment_layer', 'middle')
            ->join('mid_digital_governments', 'govofficials.id', '=', 'mid_digital_governments.govofficial_id')
            ->pluck('mid_digital_governments.mid_initiative')
            ->toArray();
    
        $sumMidInitiative=array_sum($midInitiative);
        $countMidGovofficials=count($midGovofficials);
        $avgMidInitiative=0;
        if($countMidGovofficials!==0){
            $avgMidInitiative=round(($sumMidInitiative/($countMidGovofficials*29))*100 , 0);
        }

        $sumInitiative=$sumOpInitiative+$sumMidInitiative;
        $avgInitiative=0;
        if($countGovOfficials!==0){
            $avgInitiative=round(($sumInitiative/($countGovOfficials * 53)) * 100, 0);
        }

        $overallDigitalGovernment = [
            ['Category', 'Percentage'],
            ['Change Management', (int) ($avgChangeManagement?? 0)],
            ['Project and Program Management', (int) ($avgProjectManagement ?? 0)],
            ['Collaboration and Partnership', (int) ($avgCollaboration ?? 0)],
            ['Results Orientation', (int) ($avgOrientation ?? 0)],
            ['Quality Management', (int) ($avgQualityManagement ?? 0)],
            ['Execute digital government initiatives', (int) ($avgInitiative ?? 0)],
        ];


        return view('admin.CompetancyAssessment.govOrganization.ict',compact('govorganizationname','overallDigitalGovernment','countOpIctInprogress','countOpIct','countMidIctInprogress','countMidIct','countTopIctInprogress','countTopIct','overallIctOp','overallIctMid','overallIctTop','overallIct','countIctInprogress','countIct','govorganizationname'));
    }

    public function govDigitalGovernment(String $id){
        $govorganizationname=Govorganizationname::find($id);

        $countGovOfficials = $govorganizationname->govofficials->count();

        $operationalGovofficials = $govorganizationname->govofficials()
                            ->where('employment_layer', 'operational')
                            ->get();

        $countOperationalGovofficials=count($operationalGovofficials);

        $opDigitalGovernmentOfficials=$operationalGovofficials -> has('opDigitalGovernment');

        $countOpDigitalGovernment=0;
        $countOpDigitalGovernmentInprogress=0;
        if($opDigitalGovernmentOfficials==true){
        foreach ($operationalGovofficials as $operationalGovofficial) {
            if ($operationalGovofficial) {
                $hasOpDigitalGovernmentData = $operationalGovofficial->opDigitalGovernment ? $operationalGovofficial->opDigitalGovernment->exists() : false;

                if ($hasOpDigitalGovernmentData) {
                    $govofficialOpDigitalGovernment[] = $operationalGovofficial;
                } 
            }
        }

        $countOpDigitalGovernment=count($govofficialOpDigitalGovernment);
        $countOpDigitalGovernmentInprogress=$countOperationalGovofficials - $countOpDigitalGovernment;
        }

        $midGovofficials = $govorganizationname->govofficials()
                            ->where('employment_layer', 'middle')
                            ->get();
        $countMidGovofficials=count($midGovofficials);

        
        $midGovofficials2 = $govorganizationname->govofficials()
                            ->where('employment_layer', 'middle')
                            ->exists();

        $countMidDigitalGovernment=0;
        $countMidDigitalGovernmentInprogress=0;
        if($midGovofficials2==true){
        foreach ($midGovofficials as $midGovofficial) {
            if ($midGovofficial) {
                $hasMidDigitalGovernmentData = $midGovofficial->midDigitalGovernment ? $midGovofficial->midDigitalGovernment->exists() : false;

                if ($hasMidDigitalGovernmentData) {
                    $govofficialMidDigitalGovernment[] = $midGovofficial;
                } 
                
            }
        }

        $countMidDigitalGovernment=count($govofficialMidDigitalGovernment);
        $countMidDigitalGovernmentInprogress=$countMidGovofficials - $countMidDigitalGovernment;
        }

        $topGovofficials = $govorganizationname->govofficials()
                            ->where('employment_layer', 'top')
                            ->get();
        $countTopGovofficials=count($topGovofficials);

        
        $topGovofficials2 = $govorganizationname->govofficials()
                            ->where('employment_layer', 'top')
                            ->exists();

        $topDigitalGovernmentOfficials=$topGovofficials -> has('topDigitalGovernment');
        $countTopDigitalGovernment=0;     
        $countTopDigitalGovernmentInprogress=0;               
        if($topDigitalGovernmentOfficials==true){
        foreach ($topGovofficials as $topGovofficial) {
            if ($topGovofficial) {
                $hasTopDigitalGovernmentData = $topGovofficial->topDigitalGovernment ? $topGovofficial->topDigitalGovernment->exists() : false;

                if ($hasTopDigitalGovernmentData) {
                    $govofficialTopDigitalGovernment[] = $topGovofficial;
                } 
                
            }
        }

        $countTopDigitalGovernment=count($govofficialTopDigitalGovernment);
        $countTopDigitalGovernmentInprogress=$countTopGovofficials - $countTopDigitalGovernment;
        }
        $countDigitalGovernment=$countOpDigitalGovernment+$countMidDigitalGovernment+$countTopDigitalGovernment;
        $countDigitalGovernmentInprogress=$countOpDigitalGovernmentInprogress+$countMidDigitalGovernmentInprogress+$countTopDigitalGovernmentInprogress;

        //Change Management
        $opChangeManagement = $govorganizationname->govofficials()
            ->where('employment_layer', 'operational')
            ->join('op_digital_governments', 'govofficials.id', '=', 'op_digital_governments.govofficial_id')
            ->pluck('op_digital_governments.op_change_management')
            ->toArray();

        $opGovofficials = $govorganizationname->govofficials()
            ->where('employment_layer', 'operational')
            ->get()
            ->toArray();

        $sumOpChangeManagement=array_sum($opChangeManagement);
        $countOpGovofficials=count($opGovofficials);
        $avgOpChangeManagement=0;
        if($countOpGovofficials!==0){
            $avgOpChangeManagement=round(($sumOpChangeManagement/($countOpGovofficials*11))*100 , 0);
        }

        $midIctChangeManagement = $govorganizationname->govofficials()
            ->where('employment_layer', 'middle')
            ->join('mid_digital_governments', 'govofficials.id', '=', 'mid_digital_governments.govofficial_id')
            ->pluck('mid_digital_governments.mid_change_management')
            ->toArray();

        $midGovofficials = $govorganizationname->govofficials()
            ->where('employment_layer', 'middle')
            ->get()
            ->toArray();
        
        $sumMidChangeManagement=array_sum($midIctChangeManagement);
        $countMidGovofficials=count($midGovofficials);
        $avgMidChangeManagement=0;
        if($countMidGovofficials!==0){
            $avgMidChangeManagement=round(($sumMidChangeManagement/($countMidGovofficials*18))*100 , 0);
        }

        $topChangeManagement = $govorganizationname->govofficials()
            ->where('employment_layer', 'top')
            ->join('top_digital_governments', 'govofficials.id', '=', 'top_digital_governments.govofficial_id')
            ->pluck('top_digital_governments.change_management')
            ->toArray();
        
        $topGovofficials = $govorganizationname->govofficials()
            ->where('employment_layer', 'top')
            ->get()
            ->toArray();

        $sumTopChangeManagement=array_sum($topChangeManagement);
        $countTopGovofficials=count($topGovofficials);
        $avgTopChangeManagement=0;
        if($countTopGovofficials!==0){
            $avgTopChangeManagement=round(($sumTopChangeManagement/($countTopGovofficials*13))*100 , 0);
        }

        $sumChangeManagement=$sumOpChangeManagement+$sumMidChangeManagement+$sumTopChangeManagement;
        $avgChangeManagement=0;
        if($countGovOfficials!==0){
            $avgChangeManagement=round(($sumChangeManagement/($countGovOfficials * 42)) * 100, 0);
        }

        //Project Management
        $midProjectManagement = $govorganizationname->govofficials()
            ->where('employment_layer', 'middle')
            ->join('mid_digital_governments', 'govofficials.id', '=', 'mid_digital_governments.govofficial_id')
            ->pluck('mid_digital_governments.mid_project_management')
            ->toArray();
        
        $sumMidProjectManagement=array_sum($midProjectManagement);
        $countMidGovofficials=count($midGovofficials);
        $avgMidProjectManagement=0;
        if($countMidGovofficials!==0){
            $avgMidProjectManagement=round(($sumMidProjectManagement/($countMidGovofficials*12))*100 , 0);
        }

        $topProjectManagement = $govorganizationname->govofficials()
            ->where('employment_layer', 'top')
            ->join('top_digital_governments', 'govofficials.id', '=', 'top_digital_governments.govofficial_id')
            ->pluck('top_digital_governments.project_management')
            ->toArray();

        $sumTopProjectManagement=array_sum($topProjectManagement);
        $countTopGovofficials=count($topGovofficials);
        $avgTopProjectManagement=0;
        if($countTopGovofficials!==0){
            $avgTopProjectManagement=round(($sumTopProjectManagement/($countTopGovofficials*23))*100 , 0);
        }

        $sumProjectManagement=$sumMidProjectManagement+$sumTopProjectManagement;
        $avgProjectManagement=0;
        if($countGovOfficials!==0){
            $avgProjectManagement=round(($sumProjectManagement/($countGovOfficials * 55)) * 100, 0);
        }

        //Collaboration
        $opCollaboration = $govorganizationname->govofficials()
            ->where('employment_layer', 'operational')
            ->join('op_digital_governments', 'govofficials.id', '=', 'op_digital_governments.govofficial_id')
            ->pluck('op_digital_governments.op_collaboration')
            ->toArray();
        
        $sumOpCollaboration=array_sum($opCollaboration);
        $countOpGovofficials=count($opGovofficials);
        $avgOpCollaboration=0;
        if($countOpGovofficials!==0){
            $avgOpCollaboration=round(($sumOpCollaboration/($countOpGovofficials*11))*100 , 0);
        }

        $midCollaboration = $govorganizationname->govofficials()
            ->where('employment_layer', 'middle')
            ->join('mid_digital_governments', 'govofficials.id', '=', 'mid_digital_governments.govofficial_id')
            ->pluck('mid_digital_governments.mid_collaboration')
            ->toArray();
        
        $sumMidCollaboration=array_sum($midCollaboration);
        $countMidGovofficials=count($midGovofficials);
        $avgMidCollaboration=0;
        if($countMidGovofficials!==0){
            $avgMidCollaboration=round(($sumMidCollaboration/($countMidGovofficials*12))*100 , 0);
        }

        $topCollaboration = $govorganizationname->govofficials()
            ->where('employment_layer', 'top')
            ->join('top_digital_governments', 'govofficials.id', '=', 'top_digital_governments.govofficial_id')
            ->pluck('top_digital_governments.collaboration')
            ->toArray();

        $sumTopCollaboration=array_sum($topCollaboration);
        $countTopGovofficials=count($topGovofficials);
        $avgTopCollaboration=0;
        if($countTopGovofficials!==0){
            $avgTopCollaboration=round(($sumTopCollaboration/($countTopGovofficials*22))*100 , 0);
        }

        $sumCollaboration=$sumMidCollaboration+$sumTopCollaboration;
        $avgCollaboration=0;
        if($countGovOfficials!==0){
            $avgCollaboration=round(($sumCollaboration/($countGovOfficials * 45)) * 100, 0);
        }

        //Orientation
        $opOrientation = $govorganizationname->govofficials()
            ->where('employment_layer', 'operational')
            ->join('op_digital_governments', 'govofficials.id', '=', 'op_digital_governments.govofficial_id')
            ->pluck('op_digital_governments.op_orientation')
            ->toArray();
        
        $sumOpOrientation=array_sum($opOrientation);
        $countOpGovofficials=count($opGovofficials);
        $avgOpOrientation=0;
        if($countOpGovofficials!==0){
            $avgOpOrientation=round(($sumOpOrientation/($countOpGovofficials*12))*100 , 0);
        }

        $midOrientation = $govorganizationname->govofficials()
        ->where('employment_layer', 'middle')
        ->join('mid_digital_governments', 'govofficials.id', '=', 'mid_digital_governments.govofficial_id')
        ->pluck('mid_digital_governments.mid_orientation')
        ->toArray();
    
        $sumMidOrientation=array_sum($midOrientation);
        $countMidGovofficials=count($midGovofficials);
        $avgMidOrientation=0;
        if($countMidGovofficials!==0){
            $avgMidOrientation=round(($sumMidOrientation/($countMidGovofficials*14))*100 , 0);
        }

        $topOrientation = $govorganizationname->govofficials()
            ->where('employment_layer', 'top')
            ->join('top_digital_governments', 'govofficials.id', '=', 'top_digital_governments.govofficial_id')
            ->pluck('top_digital_governments.orientation')
            ->toArray();

        $sumTopOrientation=array_sum($topOrientation);
        $countTopGovofficials=count($topGovofficials);
        $avgTopOrientation=0;
        if($countTopGovofficials!==0){
            $avgTopOrientation=round(($sumTopOrientation/($countTopGovofficials*14))*100 , 0);
        }

        $sumOrientation=$sumOpOrientation+$sumMidOrientation+$sumTopOrientation;
        $avgOrientation=0;
        if($countGovOfficials!==0){
            $avgOrientation=round(($sumOrientation/($countGovOfficials * 40)) * 100, 0);
        }

        //Quality Management
        $opQualityManagement = $govorganizationname->govofficials()
            ->where('employment_layer', 'operational')
            ->join('op_digital_governments', 'govofficials.id', '=', 'op_digital_governments.govofficial_id')
            ->pluck('op_digital_governments.op_quality_management')
            ->toArray();
        
        $sumOpQualityManagement=array_sum($opQualityManagement);
        $countOpGovofficials=count($opGovofficials);
        $avgOpQualityManagement=0;
        if($countOpGovofficials!==0){
            $avgOpQualityManagement=round(($sumOpQualityManagement/($countOpGovofficials*18))*100 , 0);
        }

        $midQualityManagement = $govorganizationname->govofficials()
            ->where('employment_layer', 'middle')
            ->join('mid_digital_governments', 'govofficials.id', '=', 'mid_digital_governments.govofficial_id')
            ->pluck('mid_digital_governments.mid_quality_management')
            ->toArray();
    
        $sumMidQualityManagement=array_sum($midQualityManagement);
        $countMidGovofficials=count($midGovofficials);
        $avgMidQualityManagement=0;
        if($countMidGovofficials!==0){
            $avgMidQualityManagement=round(($sumMidQualityManagement/($countMidGovofficials*15))*100 , 0);
        }

        $topQualityManagement = $govorganizationname->govofficials()
            ->where('employment_layer', 'top')
            ->join('top_digital_governments', 'govofficials.id', '=', 'top_digital_governments.govofficial_id')
            ->pluck('top_digital_governments.quality_management')
            ->toArray();

        $sumTopQualityManagement=array_sum($topQualityManagement);
        $countTopGovofficials=count($topGovofficials);
        $avgTopQualityManagement=0;
        if($countTopGovofficials!==0){
            $avgTopQualityManagement=round(($sumTopQualityManagement/($countTopGovofficials*20))*100 , 0);
        }

        $sumQualityManagement=$sumOpQualityManagement+$sumMidQualityManagement+$sumTopQualityManagement;
        $avgQualityManagement=0;
        if($countGovOfficials!==0){
            $avgQualityManagement=round(($sumQualityManagement/($countGovOfficials * 53)) * 100, 0);
        }

        //Initiative
        $opInitiative = $govorganizationname->govofficials()
            ->where('employment_layer', 'operational')
            ->join('op_digital_governments', 'govofficials.id', '=', 'op_digital_governments.govofficial_id')
            ->pluck('op_digital_governments.op_initiative')
            ->toArray();
        
        $sumOpInitiative=array_sum($opInitiative);
        $countOpGovofficials=count($opGovofficials);
        $avgOpInitiative=round(($sumOpInitiative/($countOpGovofficials*48))*100 , 0);

        $midInitiative = $govorganizationname->govofficials()
            ->where('employment_layer', 'middle')
            ->join('mid_digital_governments', 'govofficials.id', '=', 'mid_digital_governments.govofficial_id')
            ->pluck('mid_digital_governments.mid_initiative')
            ->toArray();
    
        $sumMidInitiative=array_sum($midInitiative);
        $countMidGovofficials=count($midGovofficials);
        $avgMidInitiative=0;
        if($countMidGovofficials!==0){
            $avgMidInitiative=round(($sumMidInitiative/($countMidGovofficials*29))*100 , 0);
        }

        $sumInitiative=$sumOpInitiative+$sumMidInitiative;
        $avgInitiative=0;
        if($countGovOfficials!==0){
            $avgInitiative=round(($sumInitiative/($countGovOfficials * 53)) * 100, 0);
        }

        $overallDigitalGovernment = [
            ['Category', 'Percentage'],
            ['Change Management', (int) ($avgChangeManagement?? 0)],
            ['Project and Program Management', (int) ($avgProjectManagement ?? 0)],
            ['Collaboration and Partnership', (int) ($avgCollaboration ?? 0)],
            ['Results Orientation', (int) ($avgOrientation ?? 0)],
            ['Quality Management', (int) ($avgQualityManagement ?? 0)],
            ['Execute digital government initiatives', (int) ($avgInitiative ?? 0)],
        ];

        $overallDigitalGovernmentTop = [
            ['Category', 'Percentage'],
            ['Change Management', (int) ($avgTopChangeManagement?? 0)],
            ['Project Management', (int) ($avgTopProjectManagement ?? 0)],
            ['Collaboration and Partnership', (int) ($avgTopCollaboration ?? 0)],
            ['Results Orientation', (int) ($avgTopOrientation ?? 0)],
            ['Quality Management', (int) ($avgTopQualityManagement ?? 0)],
        ];

        $overallDigitalGovernmentMid = [
            ['Category', 'Percentage'],
            ['Change Management', (int) ($avgMidChangeManagement?? 0)],
            ['Project Management', (int) ($avgMidProjectManagement ?? 0)],
            ['Collaboration and Partnership', (int) ($avgMidCollaboration ?? 0)],
            ['Results Orientation', (int) ($avgMidOrientation ?? 0)],
            ['Quality Management', (int) ($avgMidQualityManagement ?? 0)],
            ['Initiatives', (int) ($avgMidInitiative ?? 0)],
        ];

        $overallDigitalGovernmentOp = [
            ['Category', 'Percentage'],
            ['Change Management', (int) ($avgOpChangeManagement?? 0)],
            ['Collaboration and Partnership', (int) ($avgOpCollaboration ?? 0)],
            ['Results Orientation', (int) ($avgOpOrientation ?? 0)],
            ['Quality Management', (int) ($avgOpQualityManagement ?? 0)],
            ['Initiatives', (int) ($avgOpInitiative ?? 0)],
        ];

        return view('admin.CompetancyAssessment.govOrganization.digitalGovernment',compact('govorganizationname','countTopDigitalGovernmentInprogress','countTopDigitalGovernment','countMidDigitalGovernmentInprogress','countMidDigitalGovernment','countOpDigitalGovernmentInprogress','countOpDigitalGovernment','overallDigitalGovernmentOp','overallDigitalGovernmentMid','overallDigitalGovernmentTop','overallDigitalGovernment','countDigitalGovernment','countDigitalGovernmentInprogress'));
    }

    public function govManagement(String $id){
        $govorganizationname=Govorganizationname::find($id);

        $countGovOfficials = $govorganizationname->govofficials->count();

        $operationalGovofficials = $govorganizationname->govofficials()
                            ->where('employment_layer', 'operational')
                            ->get();

        $operationalGovofficials2 = $govorganizationname->govofficials()
                            ->where('employment_layer', 'operational')
                            ->exists();
        $opManagementGovofficials = $operationalGovofficials
                            ->has('opManagement');
                            
        $countOperationalGovofficials=count($operationalGovofficials);

        $countOpManagement=0;
        $countOpManagementInprogress=0;
        if($opManagementGovofficials ==true){
        foreach ($operationalGovofficials as $operationalGovofficial) {
            if ($operationalGovofficial) {
                $hasOpManagementData = $operationalGovofficial->opManagement ? $operationalGovofficial->opManagement->exists() : false;

                if ($hasOpManagementData) {
                    $govofficialOpManagement[] = $operationalGovofficial;
                } 
            }
        }

        $countOpManagement=count($govofficialOpManagement);
        $countOpManagementInprogress=$countOperationalGovofficials - $countOpManagement;
        }
        $midGovofficials = $govorganizationname->govofficials()
                            ->where('employment_layer', 'middle')
                            ->get();
        $countMidGovofficials=count($midGovofficials);

        $midGovofficials2 = $govorganizationname->govofficials()
                            ->where('employment_layer', 'middle')
                            ->exists();

        $midManagementGovofficials = $midGovofficials
                            ->has('midManagement');

        $countMidManagement=0;
        $countMidManagementInprogress=0;
        if($midManagementGovofficials==true){
        foreach ($midGovofficials as $midGovofficial) {
            if ($midGovofficial) {
                $hasMidManagementData = $midGovofficial->midManagement ? $midGovofficial->midManagement->exists() : false;

                if ($hasMidManagementData) {
                    $govofficialMidManagement[] = $midGovofficial;
                } 
                
            }
        }

        $countMidManagement=count($govofficialMidManagement);
        $countMidManagementInprogress=$countMidGovofficials - $countMidManagement;
        }

        $topGovofficials = $govorganizationname->govofficials()
                            ->where('employment_layer', 'top')
                            ->get();
        $countTopGovofficials=count($topGovofficials);

        $topManagementGovofficials=$topGovofficials
                            ->has('topManagement');

        $countTopManagement=0;
        $countTopManagementInprogress=0;
        if($topManagementGovofficials==true){
        foreach ($topGovofficials as $topGovofficial) {
            if ($topGovofficial) {
                $hasTopManagementData = $topGovofficial->topManagement ? $topGovofficial->topManagement->exists() : false;

                if ($hasTopManagementData) {
                    $govofficialTopManagement[] = $topGovofficial;
                } 
                
            }
        }

        $countTopManagement=count($govofficialTopManagement);
        $countTopManagementInprogress=$countTopGovofficials - $countTopManagement;
        }
        $countManagement=$countOpManagement+$countMidManagement+$countTopManagement;
        $countManagementInprogress=$countOpManagementInprogress+$countMidManagementInprogress+$countTopManagementInprogress;

        //Communication
        $opCommunication = $govorganizationname->govofficials()
            ->where('employment_layer', 'operational')
            ->join('op_management', 'govofficials.id', '=', 'op_management.govofficial_id')
            ->pluck('op_management.op_communication')
            ->toArray();

        $opGovofficials = $govorganizationname->govofficials()
            ->where('employment_layer', 'operational')
            ->get()
            ->toArray();

        $sumOpCommunication=array_sum($opCommunication);
        $countOpGovofficials=count($opGovofficials);
        $avgOpCommunication=0;
        if($countOpGovofficials!==0){
            $avgOpCommunication=round(($sumOpCommunication/($countOpGovofficials*28))*100 , 0);
        }

        $midIctCommunication = $govorganizationname->govofficials()
            ->where('employment_layer', 'middle')
            ->join('mid_management', 'govofficials.id', '=', 'mid_management.govofficial_id')
            ->pluck('mid_management.mid_communication')
            ->toArray();

        $midGovofficials = $govorganizationname->govofficials()
            ->where('employment_layer', 'middle')
            ->get()
            ->toArray();
        
        $sumMidCommunication=array_sum($midIctCommunication);
        $countMidGovofficials=count($midGovofficials);
        $avgMidCommunication=0;
        if($countMidGovofficials!==0){
            $avgMidCommunication=round(($sumMidCommunication/($countMidGovofficials*12))*100 , 0);
        }

        $topCommunication = $govorganizationname->govofficials()
            ->where('employment_layer', 'top')
            ->join('top_management', 'govofficials.id', '=', 'top_management.govofficial_id')
            ->pluck('top_management.communication')
            ->toArray();
        
        $topGovofficials = $govorganizationname->govofficials()
            ->where('employment_layer', 'top')
            ->get()
            ->toArray();

        $sumTopCommunication=array_sum($topCommunication);
        $countTopGovofficials=count($topGovofficials);
        $avgTopCommunication=0;
        if($countTopGovofficials!==0){
            $avgTopCommunication=round(($sumTopCommunication/($countTopGovofficials*18))*100 , 0);
        }

        $sumCommunication=$sumOpCommunication+$sumMidCommunication+$sumTopCommunication;
        $avgCommunication=0;
        if($countGovOfficials!==0){
            $avgCommunication=round(($sumCommunication/($countGovOfficials * 48)) * 100, 0);
        }

        //Workplace Management
        $opWorkplaceManagement = $govorganizationname->govofficials()
            ->where('employment_layer', 'operational')
            ->join('op_management', 'govofficials.id', '=', 'op_management.govofficial_id')
            ->pluck('op_management.op_workplace_management')
            ->toArray();
        
        $sumOpWorkplaceManagement=array_sum($opWorkplaceManagement);
        $countOpGovofficials=count($opGovofficials);
        $avgOpWorkplaceManagement=0;
        if($countOpGovofficials!==0){
            $avgOpWorkplaceManagement=round(($sumOpWorkplaceManagement/($countOpGovofficials*12))*100 , 0);
        }

        $midWorkplaceManagement = $govorganizationname->govofficials()
            ->where('employment_layer', 'middle')
            ->join('mid_management', 'govofficials.id', '=', 'mid_management.govofficial_id')
            ->pluck('mid_management.mid_workplace_management')
            ->toArray();
    
        $sumMidWorkplaceManagement=array_sum($midWorkplaceManagement);
        $countMidGovofficials=count($midGovofficials);
        $avgMidWorkplaceManagement=0;
        if($countMidGovofficials!==0){
            $avgMidWorkplaceManagement=round(($sumMidWorkplaceManagement/($countMidGovofficials*10))*100 , 0);
        }

        $topWorkplaceManagement = $govorganizationname->govofficials()
            ->where('employment_layer', 'top')
            ->join('top_management', 'govofficials.id', '=', 'top_management.govofficial_id')
            ->pluck('top_management.workplace_management')
            ->toArray();

        $sumTopWorkplaceManagement=array_sum($topWorkplaceManagement);
        $countTopGovofficials=count($topGovofficials);
        $avgTopWorkplaceManagement=0;
        if($countTopGovofficials!==0){
            $avgTopWorkplaceManagement=round(($sumTopWorkplaceManagement/($countTopGovofficials*12))*100 , 0);
        }

        $sumWorkplaceManagement=$sumOpWorkplaceManagement+$sumMidWorkplaceManagement+$sumTopWorkplaceManagement;
        $avgWorkplaceManagement=0;
        if($countGovOfficials!==0){
            $avgWorkplaceManagement=round(($sumWorkplaceManagement/($countGovOfficials * 34)) * 100, 0);
        }

        //Decision Making
        $midDecisionMaking = $govorganizationname->govofficials()
            ->where('employment_layer', 'middle')
            ->join('mid_management', 'govofficials.id', '=', 'mid_management.govofficial_id')
            ->pluck('mid_management.mid_decision_making')
            ->toArray();
    
        $sumMidDecisionMaking=array_sum($midDecisionMaking);
        $countMidGovofficials=count($midGovofficials);
        $avgMidDecisionMaking=0;
        if($countMidGovofficials!==0){
            $avgMidDecisionMaking=round(($sumMidDecisionMaking/($countMidGovofficials*19))*100 , 0);
        }

        $topDecisionMaking = $govorganizationname->govofficials()
            ->where('employment_layer', 'top')
            ->join('top_management', 'govofficials.id', '=', 'top_management.govofficial_id')
            ->pluck('top_management.decision_making')
            ->toArray();

        $sumTopDecisionMaking=array_sum($topDecisionMaking);
        $countTopGovofficials=count($topGovofficials);
        $avgTopDecisionMaking=0;
        if($countTopGovofficials!==0){
            $avgTopDecisionMaking=round(($sumTopDecisionMaking/($countTopGovofficials*10))*100 , 0);
        }

        $sumDecisionMaking=$sumMidDecisionMaking+$sumTopDecisionMaking;
        $avgDecisionMaking=0;
        if($countGovOfficials!==0){
            $avgDecisionMaking=round(($sumDecisionMaking/($countGovOfficials * 29)) * 100, 0);
        }

        //Stakeholder
        $opStakeholderManagement = $govorganizationname->govofficials()
            ->where('employment_layer', 'operational')
            ->join('op_management', 'govofficials.id', '=', 'op_management.govofficial_id')
            ->pluck('op_management.op_stakeholder_management')
            ->toArray();
        
        $sumOpStakeholderManagement=array_sum($opStakeholderManagement);
        $countOpGovofficials=count($opGovofficials);
        $avgOpStakeholderManagement=0;
        if($countOpGovofficials!==0){
            $avgOpStakeholderManagement=round(($sumOpStakeholderManagement/($countOpGovofficials*24))*100 , 0);
        }

        $midStakeholderManagement = $govorganizationname->govofficials()
            ->where('employment_layer', 'middle')
            ->join('mid_management', 'govofficials.id', '=', 'mid_management.govofficial_id')
            ->pluck('mid_management.mid_stakeholder')
            ->toArray();
    
        $sumMidStakeholderManagement=array_sum($midStakeholderManagement);
        $countMidGovofficials=count($midGovofficials);
        $avgMidStakeholderManagement=0;
        if($countMidGovofficials!==0){
            $avgMidStakeholderManagement=round(($sumMidStakeholderManagement/($countMidGovofficials*25))*100 , 0);
        }

        $topStakeholderManagement = $govorganizationname->govofficials()
            ->where('employment_layer', 'top')
            ->join('top_management', 'govofficials.id', '=', 'top_management.govofficial_id')
            ->pluck('top_management.stakeholder_management')
            ->toArray();

        $sumTopStakeholderManagement=array_sum($topStakeholderManagement);
        $countTopGovofficials=count($topGovofficials);
        $avgTopStakeholderManagement=0;
        if($countTopGovofficials!==0){
            $avgTopStakeholderManagement=round(($sumTopStakeholderManagement/($countTopGovofficials*14))*100 , 0);
        }

        $sumStakeholderManagement=$sumOpStakeholderManagement+$sumMidStakeholderManagement+$sumTopStakeholderManagement;
        $avgStakeholderManagement=0;
        if($countGovOfficials!==0){
            $avgStakeholderManagement=round(($sumStakeholderManagement/($countGovOfficials * 63)) * 100, 0);
        }

        //Teamwork
        $opTeamwork = $govorganizationname->govofficials()
            ->where('employment_layer', 'operational')
            ->join('op_management', 'govofficials.id', '=', 'op_management.govofficial_id')
            ->pluck('op_management.op_teamwork')
            ->toArray();
        
        $sumOpTeamwork=array_sum($opTeamwork);
        $countOpGovofficials=count($opGovofficials);
        $avgOpTeamwork=0;
        if($countOpGovofficials!==0){
            $avgOpTeamwork=round(($sumOpTeamwork/($countOpGovofficials*24))*100 , 0);
        }

        $midTeamwork = $govorganizationname->govofficials()
            ->where('employment_layer', 'middle')
            ->join('mid_management', 'govofficials.id', '=', 'mid_management.govofficial_id')
            ->pluck('mid_management.mid_team_work')
            ->toArray();
    
        $sumMidTeamwork=array_sum($midTeamwork);
        $countMidGovofficials=count($midGovofficials);
        $avgMidTeamwork=0;
        if($countMidGovofficials!==0){
            $avgMidTeamwork=round(($sumMidTeamwork/($countMidGovofficials*4))*100 , 0);
        }

        $sumTeamwork=$sumOpTeamwork+$sumMidTeamwork;
        $avgTeamwork=0;
        if($countGovOfficials!==0){
            $avgTeamwork=round(($sumTeamwork/($countGovOfficials * 28)) * 100, 0);
        }

        //Personal Development
        $opPersonalDevelopment = $govorganizationname->govofficials()
            ->where('employment_layer', 'operational')
            ->join('op_management', 'govofficials.id', '=', 'op_management.govofficial_id')
            ->pluck('op_management.op_personal_development')
            ->toArray();
        
        $sumOpPersonalDevelopment=array_sum($opPersonalDevelopment);
        $countOpGovofficials=count($opGovofficials);
        $avgOpPersonalDevelopment=0;
        if($countOpGovofficials!==0){
            $avgOpPersonalDevelopment=round(($sumOpPersonalDevelopment/($countOpGovofficials*12))*100 , 0);
        }

        $midPersonalDevelopment = $govorganizationname->govofficials()
            ->where('employment_layer', 'middle')
            ->join('mid_management', 'govofficials.id', '=', 'mid_management.govofficial_id')
            ->pluck('mid_management.mid_personal_development')
            ->toArray();
    
        $sumMidPersonalDevelopment=array_sum($midPersonalDevelopment);
        $countMidGovofficials=count($midGovofficials);
        $avgMidPersonalDevelopment=0;
        if($countMidGovofficials!==0){
            $avgMidPersonalDevelopment=round(($sumMidPersonalDevelopment/($countMidGovofficials*5))*100 , 0);
        }

        $topPersonalDevelopment = $govorganizationname->govofficials()
            ->where('employment_layer', 'top')
            ->join('top_management', 'govofficials.id', '=', 'top_management.govofficial_id')
            ->pluck('top_management.personal_development')
            ->toArray();

        $sumTopPersonalDevelopment=array_sum($topPersonalDevelopment);
        $countTopGovofficials=count($topGovofficials);
        $avgTopPersonalDevelopment=0;
        if($countTopGovofficials!==0){
            $avgTopPersonalDevelopment=round(($sumTopPersonalDevelopment/($countTopGovofficials*6))*100 , 0);
        }

        $sumPersonalDevelopment=$sumOpPersonalDevelopment+$sumMidPersonalDevelopment;
        $avgPersonalDevelopment=0;
        if($countGovOfficials!==0){
            $avgPersonalDevelopment=round(($sumPersonalDevelopment/($countGovOfficials * 23)) * 100, 0);
        }

        //Capacity Building
        $midCapacityBuilding = $govorganizationname->govofficials()
            ->where('employment_layer', 'middle')
            ->join('mid_management', 'govofficials.id', '=', 'mid_management.govofficial_id')
            ->pluck('mid_management.mid_capacity_building')
            ->toArray();

        $sumMidCapacityBuilding=array_sum($midCapacityBuilding);
        $countMidGovofficials=count($midGovofficials);
        $avgMidCapacityBuilding=0;
        if($countMidGovofficials!==0){
            $avgMidCapacityBuilding=round(($sumMidCapacityBuilding/($countMidGovofficials*8))*100 , 0);
        }

        $topCapacityBuilding = $govorganizationname->govofficials()
            ->where('employment_layer', 'top')
            ->join('top_management', 'govofficials.id', '=', 'top_management.govofficial_id')
            ->pluck('top_management.capacity_building')
            ->toArray();

        $sumTopCapacityBuilding=array_sum($topCapacityBuilding);
        $countTopGovofficials=count($topGovofficials);
        $avgTopCapacityBuilding=0;
        if($countTopGovofficials!==0){
            $avgTopCapacityBuilding=round(($sumTopCapacityBuilding/($countTopGovofficials*20))*100 , 0);
        }

        $sumCapacityBuilding=$sumMidCapacityBuilding+$sumTopCapacityBuilding;
        $avgCapacityBuilding=0;
        if($countGovOfficials!==0){
            $avgCapacityBuilding=round(($sumCapacityBuilding/($countGovOfficials * 28)) * 100, 0);
        }

        //Performance Management
        $midPerformanceManagement = $govorganizationname->govofficials()
            ->where('employment_layer', 'middle')
            ->join('mid_management', 'govofficials.id', '=', 'mid_management.govofficial_id')
            ->pluck('mid_management.mid_performance_management')
            ->toArray();

        $sumMidPerformanceManagement=array_sum($midPerformanceManagement);
        $countMidGovofficials=count($midGovofficials);
        $avgMidPerformanceManagement=0;
        if($countMidGovofficials!==0){
            $avgMidPerformanceManagement=round(($sumMidPerformanceManagement/($countMidGovofficials*17))*100 , 0);
        }

        $avgPerformanceManagement=0;
        $sumPerformanceManagement=$sumMidPerformanceManagement;
        if($countGovOfficials!==0){
            $avgPerformanceManagement=round(($sumPerformanceManagement/($countGovOfficials * 17)) * 100, 0);
        }

        //Human Resource
        $topHumanResource = $govorganizationname->govofficials()
            ->where('employment_layer', 'top')
            ->join('top_management', 'govofficials.id', '=', 'top_management.govofficial_id')
            ->pluck('top_management.human_resource')
            ->toArray();

        $sumTopHumanResource=array_sum($topHumanResource);
        $countTopGovofficials=count($topGovofficials);
        $avgTopHumanResource=0;
        if($countTopGovofficials!==0){
            $avgTopHumanResource=round(($sumTopHumanResource/($countTopGovofficials*6))*100 , 0);
        }

        $sumHumanResource=$sumTopHumanResource;
        $avgHumanResource=0;
        if($countGovOfficials!==0){
            $avgHumanResource=round(($sumHumanResource/($countGovOfficials * 6)) * 100, 0);
        }

        $overallManagement = [
            ['Category', 'Percentage'],
            ['Communication', (int) ($avgCommunication?? 0)],
            ['Decision Making', (int) ($avgDecisionMaking?? 0)],
            ['Workplace Management', (int) ($avgWorkplaceManagement?? 0)],
            ['Stakeholder Management', (int) ($avgStakeholderManagement ?? 0)],
            ['Teamwork', (int) ($avgTeamwork ?? 0)],
            ['Personal Development', (int) ($avgPersonalDevelopment ?? 0)],
            ['Capacity Building', (int) ($avgCapacityBuilding ?? 0)],
            ['Performance Management', (int) ($avgPerformanceManagement ?? 0)],
            ['Human Resource', (int) ($avgHumanResource ?? 0)],
        ];

        $overallTop = [
            ['Category', 'Percentage'],
            ['Communication', (int) ($avgTopCommunication?? 0)],
            ['Decision Making', (int) ($avgTopDecisionMaking?? 0)],
            ['Workplace Management', (int) ($avgTopWorkplaceManagement?? 0)],
            ['Stakeholder Management', (int) ($avgTopStakeholderManagement ?? 0)],
            ['Personal Development', (int) ($avgTopPersonalDevelopment ?? 0)],
            ['Capacity Building', (int) ($avgTopCapacityBuilding ?? 0)],
            ['Human Resource', (int) ($avgTopHumanResource ?? 0)],
        ];

        $overallMid = [
            ['Category', 'Percentage'],
            ['Communication', (int) ($avgMidCommunication?? 0)],
            ['Decision Making', (int) ($avgMidDecisionMaking?? 0)],
            ['Workplace Management', (int) ($avgMidWorkplaceManagement?? 0)],
            ['Stakeholder Management', (int) ($avgMidStakeholderManagement ?? 0)],
            ['Teamwork', (int) ($avgMidTeamwork ?? 0)],
            ['Personal Development', (int) ($avgMidPersonalDevelopment ?? 0)],
            ['Capacity Building', (int) ($avgMidCapacityBuilding ?? 0)],
            ['Performance Management', (int) ($avgMidPerformanceManagement ?? 0)],
        ];

        $overallOp = [
            ['Category', 'Percentage'],
            ['Communication', (int) ($avgOpCommunication?? 0)],
            ['Workplace Management', (int) ($avgOpWorkplaceManagement?? 0)],
            ['Stakeholder Management', (int) ($avgOpStakeholderManagement ?? 0)],
            ['Teamwork', (int) ($avgOpTeamwork ?? 0)],
            ['Personal Development', (int) ($avgOpPersonalDevelopment ?? 0)],
        ];

        return view('admin.CompetancyAssessment.govOrganization.management',compact('govorganizationname','countTopManagement','countTopManagementInprogress','countMidManagement','countMidManagementInprogress','countOpManagement','countOpManagementInprogress','overallOp','overallMid','overallTop','overallManagement','countManagement','countManagementInprogress'));
    }

    public function search(Request $request){
        $users = User::get();
    $govofficialCount = Govofficial::count();
    $govofficials = Govofficial::all();

    $opIct = OpIct::all();
    $opDigitalGovernment = OpDigitalGovernment::all();
    $opManagement = OpManagement::all();

    $midIct = MidIct::all();
    $midDigitalGovernment = MidDigitalGovernment::all();
    $midManagement = MidManagement::all();

    $topIct = TopIct::all();
    $topDigitalGovernment = TopDigitalGovernment::all();
    $topManagement = TopManagement::all();

    $govOrganizationIct = DB::table('govofficials')
    ->join('op_icts', 'govofficials.id', '=', 'op_icts.govofficial_id')
    ->select('govofficials.govorganizationname_id as organization_id')
    ->union(DB::table('govofficials')
        ->join('mid_icts', 'govofficials.id', '=', 'mid_icts.govofficial_id')
        ->select('govofficials.govorganizationname_id')
    )
    ->union(DB::table('govofficials')
        ->join('top_icts', 'govofficials.id', '=', 'top_icts.govofficial_id')
        ->select('govofficials.govorganizationname_id')
    )
    ->distinct()
    ->pluck('organization_id');

    $govIctOrgNames = DB::table('govorganizationnames')
    ->whereIn('id', $govOrganizationIct)
    ->pluck('gov_org_name');

    $countGovOrganizationIct = $govOrganizationIct->count();

    $govOrganizationDigitalGovernment = DB::table('govofficials')
    ->join('op_digital_governments', 'govofficials.id', '=', 'op_digital_governments.govofficial_id')
    ->select('govofficials.govorganizationname_id as organization_id')
    ->union(DB::table('govofficials')
        ->join('mid_digital_governments', 'govofficials.id', '=', 'mid_digital_governments.govofficial_id')
        ->select('govofficials.govorganizationname_id')
    )
    ->union(DB::table('govofficials')
        ->join('top_digital_governments', 'govofficials.id', '=', 'top_digital_governments.govofficial_id')
        ->select('govofficials.govorganizationname_id')
    )
    ->distinct()
    ->pluck('organization_id');

    $govDigitalGovernmentOrgNames = DB::table('govorganizationnames')
    ->whereIn('id', $govOrganizationDigitalGovernment)
    ->pluck('gov_org_name');

    $countGovOrganizationDigitalGovernment = $govOrganizationDigitalGovernment->count();

    $govOrganizationManagement = DB::table('govofficials')
    ->join('op_management', 'govofficials.id', '=', 'op_management.govofficial_id')
    ->select('govofficials.govorganizationname_id as organization_id')
    ->union(DB::table('govofficials')
        ->join('mid_management', 'govofficials.id', '=', 'mid_management.govofficial_id')
        ->select('govofficials.govorganizationname_id')
    )
    ->union(DB::table('govofficials')
        ->join('top_management', 'govofficials.id', '=', 'top_management.govofficial_id')
        ->select('govofficials.govorganizationname_id')
    )
    ->distinct()
    ->pluck('organization_id');

    $govManagementOrgNames = DB::table('govorganizationnames')
    ->whereIn('id', $govOrganizationManagement)
    ->pluck('gov_org_name');

    $countGovOrganizationManagement = $govOrganizationManagement->count();

    $assessmentCompletedCount = $opIct->count() + $opDigitalGovernment->count() + $opManagement->count();

    $assessmentInprogress = $govofficialCount - $assessmentCompletedCount;

    $ictCount = $opIct->count() + $midIct->count() + $topIct->count();
    $digitalGovernmentCount = $opDigitalGovernment->count() + $midDigitalGovernment->count() + $topDigitalGovernment->count();

    $avgIctInWorkplace = ($opIct->avg('op_ict_in_workplace') + $midIct->avg('ict_in_workplace') + $topIct->avg('ict_in_workplace'));
    $avgInformationManagement = ($opIct->avg('op_information_management') + $midIct->avg('information_management') + $topIct->avg('information_management'));
    $avgDigitalCitizenship = ($opIct->avg('op_digital_citizenship') + $midIct->avg('digital_citizenship') + $topIct->avg('digital_citizenship'));

    $ictAvg = [
        ['Category', 'Percentage'],
        ['ICT In Workplace', (int) $avgIctInWorkplace],
        ['Information Management', (int) $avgInformationManagement],
        ['Digital Citizenship', (int) $avgDigitalCitizenship],
    ];

    $digitalGovernmentCount = $opDigitalGovernment->count() + $midDigitalGovernment->count() + $topDigitalGovernment->count();

    $avgChangeManagement = ($opDigitalGovernment->avg('op_change_management') + $midDigitalGovernment->avg('mid_change_management'));
    $avgCollaboration = ($opDigitalGovernment->avg('op_collaboration') + $midDigitalGovernment->avg('mid_collaboration') + $topDigitalGovernment->avg('collaboration'));
    $avgOrientation = ($opDigitalGovernment->avg('op_orientation') + $midDigitalGovernment->avg('mid_orientation') + $topDigitalGovernment->avg('orientation'));
    $avgQualityManagement = ($opDigitalGovernment->avg('op_quality_management') + $midDigitalGovernment->avg('mid_quality_management') + $topDigitalGovernment->avg('quality_management'));
    $avgInitiative = ($opDigitalGovernment->avg('op_initiative') + $midDigitalGovernment->avg('mid_initiative'));
    $avgLeadership = $topDigitalGovernment->avg('leadership');

    $digitalGovernmentAvg = [
        ['Category', 'Percentage'],
        ['Change Management', (int) $avgChangeManagement],
        ['Collaboration', (int) $avgCollaboration],
        ['Orientation', (int) $avgOrientation],
        ['Quality Management', (int) $avgQualityManagement],
        ['Initiative', (int) $avgInitiative],
        ['Leadership', (int) $avgLeadership],
    ];

    $ManagementCount = $opManagement->count() + $midManagement->count() + $topManagement->count();

    $avgCommunication = ($opManagement->avg('op_communication') + $midManagement->avg('mid_communication') + $topManagement->avg('communication'));
    $avgWorkplaceManagement = ($opManagement->avg('op_workplace_management') + $midManagement->avg('mid_workplace_management') + $topManagement->avg('workplace_management'));
    $avgDecisionMaking = $midManagement->avg('mid_decision_making') + $topManagement->avg('decision_making');
    $avgStakeholderManagement = ($opManagement->avg('op_stakeholder_management') + $midManagement->avg('mid_stakeholder') + $topManagement->avg('stakeholder_management'));
    $avgTeamwork = ($opManagement->avg('op_teamwork') + $midManagement->avg('mid_team_work'));
    $avgPersonalDevelopment = ($opManagement->avg('op_personal_development') + $midManagement->avg('mid_personal_development') + $topManagement->avg('personal_development'));
    $avgCapacityBuilding = ($midManagement->avg('mid_capacity_building') + $topManagement->avg('capacity_building'));
    $avgPerformanceManagement = $midManagement->avg('mid_performance_management');

    $managementAvg = [
        ['Category', 'Percentage'],
        ['Workplace Management', (int) $avgWorkplaceManagement],
        ['Decision Making', (int) $avgDecisionMaking],
        ['Stakeholder Management', (int) $avgStakeholderManagement],
        ['Teamwork', (int) $avgTeamwork],
        ['Personal Development', (int) $avgPersonalDevelopment],
        ['Capacity Building', (int) $avgCapacityBuilding],
        ['Performance Management', (int) $avgPerformanceManagement],
    ];

        $search = $request->searchText;

        $counts = DB::table('govorganizationnames')
        ->select(
            'govorganizationnames.gov_org_name',
            'govorganizationnames.id as govorganizationname_id',
            'govofficials.id as govofficial_id',
            DB::raw('(SELECT COUNT(*) FROM govofficials WHERE govofficials.govorganizationname_id = govorganizationnames.id) as count')
        )
        ->join('govofficials', 'govorganizationnames.id', '=', 'govofficials.govorganizationname_id')
        ->where(function($query) use ($search) {
            $query->where('govorganizationnames.gov_org_name', 'like', '%' . $search . '%') // Search by name
                ->orWhere('govorganizationnames.id', 'like', '%' . $search . '%'); // Search by ID
        })
        ->get();

        $search2 = $request->searchText2;

        $govOrganizationIct = DB::table('govofficials')
        ->join('op_icts', 'govofficials.id', '=', 'op_icts.govofficial_id')
        ->select('govofficials.govorganizationname_id as organization_id')
        ->union(DB::table('govofficials')
            ->join('mid_icts', 'govofficials.id', '=', 'mid_icts.govofficial_id')
            ->select('govofficials.govorganizationname_id')
        )
        ->union(DB::table('govofficials')
            ->join('top_icts', 'govofficials.id', '=', 'top_icts.govofficial_id')
            ->select('govofficials.govorganizationname_id')
        )
        ->distinct()
        ->pluck('organization_id');
        
        $govIctOrgCounts = DB::table('govorganizationnames')
        ->whereIn('govorganizationnames.id', $govOrganizationIct)
        ->where(function($query) use ($search2) {
            $query->where('govorganizationnames.gov_org_name', 'like', '%' . $search2 . '%') // Search by name
                ->orWhere('govorganizationnames.id', 'like', '%' . $search2 . '%'); // Search by ID
        })
        ->select(
            'govorganizationnames.gov_org_name',
            'govorganizationnames.id as govorganizationname_id',
            DB::raw('(SELECT COUNT(*) FROM govofficials 
                  WHERE govofficials.govorganizationname_id = govorganizationnames.id 
                  AND (EXISTS (SELECT 1 FROM op_icts WHERE op_icts.govofficial_id = govofficials.id) 
                    OR EXISTS (SELECT 1 FROM mid_icts WHERE mid_icts.govofficial_id = govofficials.id) 
                    OR EXISTS (SELECT 1 FROM top_icts WHERE top_icts.govofficial_id = govofficials.id))
                 ) as count')
        )
        ->leftJoin('govofficials', 'govorganizationnames.id', '=', 'govofficials.govorganizationname_id')
        ->groupBy('govorganizationnames.gov_org_name', 'govorganizationnames.id')
        ->get();   

        $search3 = $request->searchText3;

        $govOrganizationDigitalGovernment = DB::table('govofficials')
        ->join('op_digital_governments', 'govofficials.id', '=', 'op_digital_governments.govofficial_id')
        ->select('govofficials.govorganizationname_id as organization_id')
        ->union(DB::table('govofficials')
            ->join('mid_digital_governments', 'govofficials.id', '=', 'mid_digital_governments.govofficial_id')
            ->select('govofficials.govorganizationname_id')
        )
        ->union(DB::table('govofficials')
            ->join('top_digital_governments', 'govofficials.id', '=', 'top_digital_governments.govofficial_id')
            ->select('govofficials.govorganizationname_id')
        )
        ->distinct()
        ->pluck('organization_id');
        
        $govDigitalGovernmentOrgCounts = DB::table('govorganizationnames')
        ->whereIn('govorganizationnames.id', $govOrganizationDigitalGovernment)
        ->where(function($query) use ($search3) {
            $query->where('govorganizationnames.gov_org_name', 'like', '%' . $search3 . '%') // Search by name
                ->orWhere('govorganizationnames.id', 'like', '%' . $search3 . '%'); // Search by ID
        })
        ->select(
            'govorganizationnames.gov_org_name',
            'govorganizationnames.id as govorganizationname_id',
            DB::raw('(SELECT COUNT(*) FROM govofficials 
                  WHERE govofficials.govorganizationname_id = govorganizationnames.id 
                  AND (EXISTS (SELECT 1 FROM op_digital_governments WHERE op_digital_governments.govofficial_id = govofficials.id) 
                    OR EXISTS (SELECT 1 FROM mid_digital_governments WHERE mid_digital_governments.govofficial_id = govofficials.id) 
                    OR EXISTS (SELECT 1 FROM top_digital_governments WHERE top_digital_governments.govofficial_id = govofficials.id))
                 ) as count')
        )
        ->leftJoin('govofficials', 'govorganizationnames.id', '=', 'govofficials.govorganizationname_id')
        ->groupBy('govorganizationnames.gov_org_name', 'govorganizationnames.id')
        ->get(); 

        $search4 = $request->searchText4;

        $govOrganizationManagement = DB::table('govofficials')
        ->join('op_management', 'govofficials.id', '=', 'op_management.govofficial_id')
        ->select('govofficials.govorganizationname_id as organization_id')
        ->union(DB::table('govofficials')
            ->join('mid_management', 'govofficials.id', '=', 'mid_management.govofficial_id')
            ->select('govofficials.govorganizationname_id')
        )
        ->union(DB::table('govofficials')
            ->join('top_management', 'govofficials.id', '=', 'top_management.govofficial_id')
            ->select('govofficials.govorganizationname_id')
        )
        ->distinct()
        ->pluck('organization_id');
        
        $govManagementOrgCounts = DB::table('govorganizationnames')
        ->whereIn('govorganizationnames.id', $govOrganizationManagement)
        ->where(function($query) use ($search4) {
            $query->where('govorganizationnames.gov_org_name', 'like', '%' . $search4 . '%') // Search by name
                ->orWhere('govorganizationnames.id', 'like', '%' . $search4 . '%'); // Search by ID
        })
        ->select(
            'govorganizationnames.gov_org_name',
            'govorganizationnames.id as govorganizationname_id',
            DB::raw('(SELECT COUNT(*) FROM govofficials 
                  WHERE govofficials.govorganizationname_id = govorganizationnames.id 
                  AND (EXISTS (SELECT 1 FROM op_management WHERE op_management.govofficial_id = govofficials.id) 
                    OR EXISTS (SELECT 1 FROM mid_management WHERE mid_management.govofficial_id = govofficials.id) 
                    OR EXISTS (SELECT 1 FROM top_management WHERE top_management.govofficial_id = govofficials.id))
                 ) as count')
        )
        ->leftJoin('govofficials', 'govorganizationnames.id', '=', 'govofficials.govorganizationname_id')
        ->groupBy('govorganizationnames.gov_org_name', 'govorganizationnames.id')
        ->get(); 

        return view('admin.CompetancyAssessment.Overall.dashboard', compact('govManagementOrgCounts','govDigitalGovernmentOrgCounts','govIctOrgCounts','counts','govManagementOrgNames','govDigitalGovernmentOrgNames','govIctOrgNames','countGovOrganizationManagement','countGovOrganizationDigitalGovernment','countGovOrganizationIct','counts', 'users', 'opIct', 'managementAvg', 'ManagementCount', 'digitalGovernmentAvg', 'digitalGovernmentCount', 'ictAvg', 'govofficials', 'digitalGovernmentCount', 'ictCount', 'assessmentInprogress', 'govofficialCount', 'assessmentCompletedCount'));
    }
    
}
