<?php

namespace App\Http\Controllers;

use App\Models\Govofficial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class GovOrganizationDashboardController extends Controller
{
    public function dashboard(Request $request){
        $govorgname = Auth::user()->govorganizationdetail->govorganizationname->gov_org_name;
        $govorgnameid = Auth::user()->govorganizationdetail->govorganizationname;
        $govofficials = $govorgnameid->govofficials;
        $govofficialIds = $govofficials->pluck('id')->all();

        $search = $request->searchText;

        if ($search) {
            $govofficials2 = Govofficial::whereIn('id', $govofficialIds)
            ->with('user')
            ->when($search, function ($query, $search) {
                $query->where('id', $search)
                    ->orWhereHas('user', function ($subquery) use ($search) {
                        $subquery->where('username', 'like', '%' . $search . '%');
                    });
            })
            ->get();

        } else {
            $govofficials2 = $govorgnameid->govofficials->all();
        }
        
        // dd($govofficials2);
        $opIctsCount = $govorgnameid->govofficials()->whereHas('opIct')->count();
        $midIctsCount = $govorgnameid->govofficials()->whereHas('midIct')->count();
        $topIctsCount = $govorgnameid->govofficials()->whereHas('topIct')->count();
        $ictCount=($opIctsCount ?? 0)+($midIctsCount ?? 0)+($topIctsCount ?? 0);
        
        $opDigitalGovernmentCount = $govorgnameid->govofficials()->whereHas('opDigitalGovernment')->count();
        $midDigitalGovernmentCount = $govorgnameid->govofficials()->whereHas('midDigitalGovernment')->count();
        $topDigitalGovernmentCount = $govorgnameid->govofficials()->whereHas('topDigitalGovernment')->count();
        $digitalGovernmentCount=($opDigitalGovernmentCount ?? 0)+($midDigitalGovernmentCount ?? 0)+($topDigitalGovernmentCount ?? 0);

        $opManagementCount = $govorgnameid->govofficials()->whereHas('opManagement')->count();
        $midManagementCount = $govorgnameid->govofficials()->whereHas('midManagement')->count();
        $topManagementCount = $govorgnameid->govofficials()->whereHas('topManagement')->count();
        $managementCount=($opManagementCount ?? 0)+($midManagementCount ?? 0)+($topManagementCount ?? 0);

        $overall=($ictCount ?? 0)+($digitalGovernmentCount ?? 0)+($managementCount ?? 0);

        $opGovofficials=$govorgnameid->govofficials()->where('employment_layer', 'operational')->get();
        $midGovofficials=$govorgnameid->govofficials()->where('employment_layer', 'middle')->get();
        $topGovofficials=$govorgnameid->govofficials()->where('employment_layer', 'top')->get();

        $opComplete = 0;
        $midComplete = 0;
        $topComplete = 0;

        $opInProgress = 0;
        $midInProgress = 0;
        $topInProgress = 0;

        foreach ($opGovofficials as $opGovofficial){
            if((($opGovofficial->opIct) ?? 0) && (($opGovofficial->opDigitalGovernment) ?? 0) && (($opGovofficial->opManagement) ?? 0)){
                $opComplete++;
            }
            else{
                $opInProgress++; 
            }
        }
        foreach ($midGovofficials as $midGovofficial){
            if((($midGovofficial->midIct) ?? 0) && (($midGovofficial->midDigitalGovernment) ?? 0) && (($midGovofficial->midManagement) ?? 0)){
                $midComplete++;
            }
            else{
                $midInProgress++; 
            }
        }
        foreach ($topGovofficials as $topGovofficial){
            if((($topGovofficial->topIct) ?? 0) && (($topGovofficial->topDigitalGovernment) ?? 0) && (($topGovofficial->topManagement) ?? 0)){
                $topComplete++;
            }
            else{
                $topInProgress++; 
            }
        }

        $totalGovofficials=((count($opGovofficials)) ?? 0)+((count($midGovofficials)) ?? 0)+((count($topGovofficials)) ?? 0);
        $complete=($opComplete ?? 0)+($midComplete ?? 0)+($topComplete ?? 0);
        $inProgress=($opInProgress ?? 0)+($midInProgress ?? 0)+($topInProgress ?? 0);
        $inComplete=$totalGovofficials-($complete+$inProgress);

        $responses = [
            ['Category', 'Percentage'],
            ['Assessment Completed', (int) $complete],
            ['Inprogress', (int) $inProgress],
            ['Not start', (int) $inComplete],
        ];

        $opResponse=0;
        $midResponse=0;
        $topResponse=0;

        foreach ($opGovofficials as $opGovofficial){
            if((($opGovofficial->opIct) ?? 0) || (($opGovofficial->opDigitalGovernment) ?? 0) || (($opGovofficial->opManagement) ?? 0)){
                $opResponse++;
            }
        }

        foreach ($midGovofficials as $midGovofficial){
            if((($midGovofficial->midIct) ?? 0) || (($midGovofficial->midDigitalGovernment) ?? 0) || (($midGovofficial->midManagement) ?? 0)){
                $midResponse++;
            }
        }

        foreach ($topGovofficials as $topGovofficial){
            if((($topGovofficial->topIct) ?? 0) || (($topGovofficial->topDigitalGovernment) ?? 0) || (($topGovofficial->topManagement) ?? 0)){
                $topResponse++;
            }
        }
        $avgOpResponse=0;
        $avgMidResponse=0;
        $avgTopResponse=0;

        if(count($opGovofficials)!==0){
            $avgOpResponse=round(($opResponse / count($opGovofficials))*100 , 0);
        }

        if(count($midGovofficials)){
            $avgMidResponse=round(($midResponse / count($midGovofficials))*100 , 0);
        }

        if(count($topGovofficials)){
            $avgTopResponse=round(($topResponse / count($topGovofficials))*100 , 0);
        }

        $layerResponses = [
            ['Category', 'Percentage'],
            ['Top & 2nd Tier Management', (int) $avgTopResponse],
            ['Middle & Junior Management', (int) $avgMidResponse],
            ['Operational Staff', (int) $avgOpResponse],
        ];

        $opIctResponse=0;
        $opDigitalGovernmentResponse=0;
        $opManagementResponse=0;

        foreach ($opGovofficials as $opGovofficial){
            if((($opGovofficial->opIct) ?? 0) ){
                $opIctResponse++;
            }
        }
        foreach ($opGovofficials as $opGovofficial){
            if((($opGovofficial->opDigitalGovernment) ?? 0) ){
                $opDigitalGovernmentResponse++;
            }
        }
        foreach ($opGovofficials as $opGovofficial){
            if((($opGovofficial->opManagement) ?? 0) ){
                $opManagementResponse++;
            }
        }

        $avgOpIctResponse=0;
        $avgOpDigitalGovernmentResponse=0;
        $avgOpManagementResponse=0;

        if(count($opGovofficials)!==0){
            $avgOpIctResponse=round(($opIctResponse / count($opGovofficials)) * 100 , 0);
        }
        if(count($opGovofficials)!==0){
            $avgOpDigitalGovernmentResponse=round(($opDigitalGovernmentResponse / count($opGovofficials)) * 100 , 0);
        }
        if(count($opGovofficials)!==0){
            $avgOpManagementResponse=round(($opManagementResponse / count($opGovofficials)) * 100 , 0);
        }

        $midIctResponse=0;
        $midDigitalGovernmentResponse=0;
        $midManagementResponse=0;

        foreach ($midGovofficials as $midGovofficial){
            if((($midGovofficial->midIct) ?? 0) ){
                $midIctResponse++;
            }
        }
        foreach ($midGovofficials as $midGovofficial){
            if((($midGovofficial->midDigitalGovernment) ?? 0) ){
                $midDigitalGovernmentResponse++;
            }
        }
        foreach ($midGovofficials as $midGovofficial){
            if((($midGovofficial->midManagement) ?? 0) ){
                $midManagementResponse++;
            }
        }

        $avgMidIctResponse=0;
        $avgMidDigitalGovernmentResponse=0;
        $avgMidManagementResponse=0;

        if(count($midGovofficials)!==0){
            $avgMidIctResponse=round(($midIctResponse / count($midGovofficials)) * 100 , 0);
        }
        if(count($midGovofficials)!==0){
            $avgMidDigitalGovernmentResponse=round(($midDigitalGovernmentResponse / count($midGovofficials)) * 100 , 0);
        }
        if(count($midGovofficials)!==0){
            $avgMidManagementResponse=round(($midManagementResponse / count($midGovofficials)) * 100 , 0);
        }

        $topIctResponse=0;
        $topDigitalGovernmentResponse=0;
        $topManagementResponse=0;

        foreach ($topGovofficials as $topGovofficial){
            if((($topGovofficial->topIct) ?? 0) ){
                $topIctResponse++;
            }
        }
        foreach ($topGovofficials as $topGovofficial){
            if((($topGovofficial->topDigitalGovernment) ?? 0) ){
                $topDigitalGovernmentResponse++;
            }
        }
        foreach ($topGovofficials as $topGovofficial){
            if((($topGovofficial->topManagement) ?? 0) ){
                $topManagementResponse++;
            }
        }

        $avgTopIctResponse=0;
        $avgTopDigitalGovernmentResponse=0;
        $avgTopManagementResponse=0;

        if(count($topGovofficials)!==0){
            $avgTopIctResponse=round(($topIctResponse / count($topGovofficials)) * 100 , 0);
        }
        if(count($topGovofficials)!==0){
            $avgTopDigitalGovernmentResponse=round(($topDigitalGovernmentResponse / count($topGovofficials)) * 100 , 0);
        }
        if(count($topGovofficials)!==0){
            $avgTopManagementResponse=round(($topManagementResponse / count($topGovofficials)) * 100 , 0);
        }

        $avgCdio=0;

        $labels=["Top & 2nd Tier Management","CDIO","Middle & Junior Management","Operational Staff"];
        $avgLayers = [
            (int) $avgTopResponse,
            (int) $avgCdio,
            (int )$avgMidResponse,
            (int) $avgOpResponse,
        ];

        $opIctInWorkplaceData = [];
        $opInformationManagementData = [];
        $opDigitalCitizenshipData = [];

        foreach ($opGovofficials as $opGovofficial) {
            if ($opGovofficial->opIct) {
                $opIctInWorkplaceData[] = $opGovofficial->opIct->op_ict_in_workplace;
                $opInformationManagementData[] = $opGovofficial->opIct->op_information_management;
                $opDigitalCitizenshipData[] = $opGovofficial->opIct->op_digital_citizenship;
            }
        }

        $midIctInWorkplaceData = [];
        $midInformationManagementData = [];
        $midDigitalCitizenshipData = [];

        foreach ($midGovofficials as $midGovofficial) {
            if ($midGovofficial->midIct) {
                $midIctInWorkplaceData[] = $midGovofficial->midIct->ict_in_workplace;
                $midInformationManagementData[] = $midGovofficial->midIct->information_management;
                $midDigitalCitizenshipData[] = $midGovofficial->midIct->digital_citizenship;
            }
        }

        $topIctInWorkplaceData = [];
        $topInformationManagementData = [];
        $topDigitalCitizenshipData = [];

        foreach ($topGovofficials as $topGovofficial) {
            if ($topGovofficial->topIct) {
                $topIctInWorkplaceData[] = $topGovofficial->topIct->ict_in_workplace;
                $topInformationManagementData[] = $topGovofficial->topIct->information_management;
                $topDigitalCitizenshipData[] = $topGovofficial->topIct->digital_citizenship;
            }
        }
        $avgIctInWorkplace=0;
        $totIctInWorkplace=array_sum($opIctInWorkplaceData) + array_sum($midIctInWorkplaceData) + array_sum($topIctInWorkplaceData);
        if(count($govofficials)!==0){
            $avgIctInWorkplace= round(($totIctInWorkplace/(110 * count($govofficials))) *100 , 0);
        }
        $totInformationManagement=array_sum($opInformationManagementData) + array_sum($midInformationManagementData) + array_sum($topInformationManagementData);
        $avgInformationManagement=0;
        if(count($govofficials)!==0){
            $avgInformationManagement= round(($totInformationManagement/(31 * count($govofficials))) *100 , 0);
        }

        $totDigitalCitizenship=array_sum($opDigitalCitizenshipData) + array_sum($midDigitalCitizenshipData) + array_sum($topDigitalCitizenshipData);
        $avgDigitalCitizenship=0;
        if(count($govofficials)!==0){
            $avgDigitalCitizenship= round(($totDigitalCitizenship/(159 * count($govofficials))) *100 , 0);
        }

        $ictMarks = [
            ['Category', 'Percentage'],
            ['ICT in Workplace', (int) $avgIctInWorkplace],
            ['Information Management', (int) $avgInformationManagement],
            ['Digital Citizenship', (int) $avgDigitalCitizenship],
        ];

        $opChangeManagementData = [];
        $opCollaborationData = [];
        $opOrientationData = [];
        $opQualityManagementData = [];
        $opInitiativeData = [];

        foreach ($opGovofficials as $opGovofficial) {
            if ($opGovofficial->opDigitalGovernment) {
                $opChangeManagementData[] = $opGovofficial->opDigitalGovernment->op_change_management;
                $opCollaborationtData[] = $opGovofficial->opDigitalGovernment->op_collaboration;
                $opOrientationData[] = $opGovofficial->opDigitalGovernment->op_orientation;
                $opQualityManagementData[] = $opGovofficial->opDigitalGovernment->op_quality_management;
                $opInitiativeData[] = $opGovofficial->opDigitalGovernment->op_initiative;
            }
        }

        $midProjectManagementData = [];
        $midChangeManagementData = [];
        $midCollaborationData = [];
        $midOrientationData = [];
        $midQualityManagementData = [];
        $midInitiativeData = [];

        foreach ($midGovofficials as $midGovofficial) {
            if ($midGovofficial->midDigitalGovernment) {
                $midProjectManagementData[] = $midGovofficial->midDigitalGovernment->mid_project_management;
                $midChangeManagementData[] = $midGovofficial->midDigitalGovernment->mid_change_management;
                $midCollaborationData[] = $midGovofficial->midDigitalGovernment->mid_collaboration;
                $midOrientationData[] = $midGovofficial->midDigitalGovernment->mid_orientation;
                $midQualityManagementData[] = $midGovofficial->midDigitalGovernment->mid_quality_management;
                $midInitiativeData[] = $midGovofficial->midDigitalGovernment->mid_initiative;
            }
        }

        $topProjectManagementData = [];
        $topChangeManagementData = [];
        $topCollaborationtData = [];
        $topOrientationData = [];
        $topQualityManagementData = [];
        

        foreach ($topGovofficials as $topGovofficial) {
            if ($topGovofficial->topDigitalGovernment) {
                $topProjectManagementData[] = $topGovofficial->topDigitalGovernment->project_management;
                $topChangeManagementData[] = $topGovofficial->topDigitalGovernment->change_management;
                $topCollaborationData[] = $topGovofficial->topDigitalGovernment->collaboration;
                $topOrientationData[] = $topGovofficial->topDigitalGovernment->orientation;
                $topQualityManagementData[] = $topGovofficial->topDigitalGovernment->quality_management;
            }
        }

        $totProjectManagement=array_sum($midProjectManagementData) ?? 0 + array_sum($topProjectManagementData) ?? 0;
        $midTopGovofficials=count($midGovofficials) ?? 0+count($topGovofficials) ?? 0;
        $avgProjectManagement=0;
        if($midTopGovofficials!==0){
            $avgProjectManagement=round(($totProjectManagement / (35 * $midTopGovofficials)) * 100,0);
        }

        $totChangeManagement=array_sum($opChangeManagementData) ?? 0 + array_sum($midChangeManagementData) ?? 0 + array_sum($topChangeManagementData) ?? 0;
        $avgChangeManagement=0;
        if(count($govofficials)!==0){
            $avgChangeManagement=round(($totChangeManagement / (42 * count($govofficials)))  * 100,0);
        }

        $totCollaboration=array_sum($opCollaborationData) ?? 0 + array_sum($midCollaborationData) ??0 + array_sum($topCollaborationData) ?? 0;
        $avgCollaboration=0;
        if(count($govofficials)!==0){
            $avgCollaboration=round(($totCollaboration / (57 * count($govofficials))) * 100,0);
        }

        $totOrientation=array_sum($opOrientationData) ?? 0 + array_sum($midOrientationData) ?? 0 + array_sum($topOrientationData) ?? 0;
        $avgOrientation=0;
        if(count($govofficials)!==0){
            $avgOrientation=round(($totOrientation / (40 * count($govofficials))) * 100,0);
        }

        $totQualityManagement=array_sum($opQualityManagementData) ?? 0 +array_sum($midQualityManagementData) ?? 0 + array_sum($topQualityManagementData) ?? 0;
        $avgQualityManagement=0;
        if(count($govofficials)!==0){
            $avgQualityManagement=round(($totQualityManagement / (61 * count($govofficials))) * 100 , 0);
        }

        $totInitiative=array_sum($opInitiativeData) ?? 0 + array_sum($midInitiativeData) ?? 0;
        $opMidGovofficials=count($opGovofficials) ?? 0 +count($midGovofficials) ?? 0;
        $avgInitiative=0;
        if($opMidGovofficials!==0){
            $avgInitiative=round(($totInitiative / (69 * $opMidGovofficials)) * 100 , 0);
        }

        $digitalGovernmentMarks = [
            ['Category', 'Percentage'],
            ['Project and Program Management', (int) $avgProjectManagement],
            ['Change Management', (int) $avgChangeManagement],
            ['Collaboration and Partnership', (int) $avgCollaboration],
            ['Results Orientation', (int) $avgOrientation],
            ['Quality Management', (int) $avgQualityManagement],
            ['Execute digital government initiatives', (int) $avgInitiative],
        ];

        $opCommunicationData = [];
        $opWorkplaceManagementData = [];
        $opStakeholderData = [];
        $opTeamworkData = [];
        $opPersonalDevelopmentData = [];

        foreach ($opGovofficials as $opGovofficial) {
            if ($opGovofficial->opManagement) {
                $opCommunicationData[] = $opGovofficial->opManagement->op_communication;
                $opWorkplaceManagementtData[] = $opGovofficial->opManagement->op_workplace_management;
                $opStakeholderData[] = $opGovofficial->opManagement->op_stakeholder_management;
                $opTeamworkData[] = $opGovofficial->opManagement->op_teamwork;
                $opPersonalDevelopmentData[] = $opGovofficial->opManagement->op_personal_development;
            }
        }

        $midCommunicationData = [];
        $midWorkplaceManagementData = [];
        $midStakeholderData = [];
        $midTeamworkData = [];
        $midPersonalDevelopmentData = [];
        $midDecisionMakingData = [];
        $midCapacityBuildingData = [];
        $midPerformanceManagementData = [];

        foreach ($midGovofficials as $midGovofficial) {
            if ($midGovofficial->midManagement) {
                $midCommunicationData[] = $midGovofficial->midManagement->mid_communication;
                $midWorkplaceManagementtData[] = $midGovofficial->midManagement->mid_workplace_management;
                $midStakeholderData[] = $midGovofficial->midManagement->mid_stakeholder_management;
                $midTeamworkData[] = $midGovofficial->midManagement->mid_teamwork;
                $midPersonalDevelmidmentData[] = $midGovofficial->midManagement->mid_personal_development;
                $midDecisionMakingData[] = $midGovofficial->midManagement->mid_decision_making;
                $midCapacityBuildingData[] = $midGovofficial->midManagement->mid_capacity_building;
                $midPerformanceManagementData[] = $midGovofficial->midManagement->mid_performance_management;
            }
        }

        $topCommunicationData = [];
        $topWorkplaceManagementData = [];
        $topStakeholderData = [];
        $topPersonalDevelopmentData = [];
        $topDecisionMakingData = [];
        $topCapacityBuildingData = [];

        foreach ($topGovofficials as $topGovofficial) {
            if ($topGovofficial->topManagement) {
                $topCommunicationData[] = $topGovofficial->topManagement->communication;
                $topWorkplaceManagementtData[] = $topGovofficial->topManagement->workplace_management;
                $topStakeholderData[] = $topGovofficial->topManagement->stakeholder_management;
                $topPersonalDeveltopmentData[] = $topGovofficial->topManagement->personal_development;
                $topDecisionMakingData[] = $topGovofficial->topManagement->decision_making;
                $topCapacityBuildingData[] = $topGovofficial->topManagement->capacity_building;
            }
        }

        $totCommunication=array_sum($opCommunicationData) + array_sum($midCommunicationData) + array_sum($topCommunicationData);
        $avgCommunication=0;
        if(count($govofficials)!==0){
            $avgCommunication=round(($totCommunication / (58 * count($govofficials))) * 100,0);
        }

        $totWorkplaceManagement=array_sum($opWorkplaceManagementData) + array_sum($midWorkplaceManagementData) + array_sum($topWorkplaceManagementData);
        $avgWorkplaceManagement=0;
        if(count($govofficials)!==0){
            $avgWorkplaceManagement=round(($totWorkplaceManagement / (34 * count($govofficials))) * 100,0);
        }

        $totStakeholder=array_sum($opStakeholderData) + array_sum($midStakeholderData) + array_sum($topStakeholderData);
        $avgStakeholder=0;
        if(count($govofficials)!==0){
            $avgStakeholder=round(($totStakeholder / (63 * count($govofficials))) * 100,0);
        }

        $totTeamwork=array_sum($opTeamworkData) + array_sum($midTeamworkData) ;
        $opMidGovofficials=count($opGovofficials ?? 0)+count($midGovofficials ?? 0);
        $avgTeamwork=0;
        if($opMidGovofficials!==0){
            $avgTeamwork=round(($totTeamwork / (28 * $opMidGovofficials)) * 100,0);
        }

        $totPersonalDevelopment=array_sum($opPersonalDevelopmentData) +array_sum($midPersonalDevelopmentData) + array_sum($topPersonalDevelopmentData);
        $avgPersonalDevelopment=0;
        if(count($govofficials)!==0){
            $avgPersonalDevelopment=round(($totPersonalDevelopment / (23 * count($govofficials))) * 100 , 0);
        }

        $totDecisionMaking=array_sum($midDecisionMakingData) + array_sum($topDecisionMakingData);
        $midTopGovofficials=count($midGovofficials ?? 0)+count($topGovofficials ?? 0);
        $avgDecisionMaking=0;
        if($midTopGovofficials!==0){
            $avgDecisionMaking=round(($totDecisionMaking / (29 * $midTopGovofficials)) * 100 , 0);
        }

        $totCapacityBuilding=array_sum($midCapacityBuildingData) + array_sum($topCapacityBuildingData);
        $avgCapacityBuilding=0;
        if($midTopGovofficials!==0){
            $avgCapacityBuilding=round(($totCapacityBuilding / (29 * $midTopGovofficials)) * 100 , 0);
        }

        $totPerformanceManagement=array_sum($midPerformanceManagementData) ;
        $avgPerformanceManagement=0;
        if(count($midGovofficials)!==0){
            $avgPerformanceManagement=round(($totPerformanceManagement / (17 * count($midGovofficials))) * 100 , 0);
        }

        $managementMarks = [
            ['Category', 'Percentage'],
            ['Communication', (int) $avgCommunication],
            ['Workplace Management', (int) $avgWorkplaceManagement],
            ['Stakeholder Management', (int) $avgStakeholder],
            ['Teamwork', (int) $avgTeamwork],
            ['Personal Development', (int) $avgPersonalDevelopment],
            ['Decision Making', (int) $avgDecisionMaking],
            ['Capacity Building', (int) $avgCapacityBuilding],
            ['Performance Management', (int) $avgPerformanceManagement],
        ];

        return view ('govOfficials.dashboard',compact('govofficials2','managementMarks','digitalGovernmentMarks','ictMarks','govofficials','labels','avgLayers','avgTopResponse','avgMidResponse','avgOpResponse','avgTopManagementResponse','avgTopDigitalGovernmentResponse','avgTopIctResponse','avgMidManagementResponse','avgMidDigitalGovernmentResponse','avgMidIctResponse','avgOpManagementResponse','avgOpDigitalGovernmentResponse','avgOpIctResponse','layerResponses','responses','overall','managementCount','digitalGovernmentCount','ictCount','govorgname'));
    }

    public function layerDashboard(Request $request){
        $govorgname = Auth::user()->govorganizationdetail->govorganizationname->gov_org_name;
        $govorgnameid = Auth::user()->govorganizationdetail->govorganizationname;
        $govofficials = $govorgnameid->govofficials;
        $govofficialIds = $govofficials->pluck('id')->all();

        $search = $request->searchText;

        if ($search) {
            $govofficials2 = Govofficial::whereIn('id', $govofficialIds)
            ->with('user') // Eager load the user relationship
            ->when($search, function ($query, $search) {
                $query->where('id', $search)
                    ->orWhereHas('user', function ($subquery) use ($search) {
                        $subquery->where('username', 'like', '%' . $search . '%');
                    });
            })
            ->get();

        } else {
            $govofficials2 = $govorgnameid->govofficials->all();
        }

        $opIctsCount = $govorgnameid->govofficials()->whereHas('opIct')->count();
        $midIctsCount = $govorgnameid->govofficials()->whereHas('midIct')->count();
        $topIctsCount = $govorgnameid->govofficials()->whereHas('topIct')->count();
        $ictCount=($opIctsCount ?? 0)+($midIctsCount ?? 0)+($topIctsCount ?? 0);

        $opDigitalGovernmentCount = $govorgnameid->govofficials()->whereHas('opDigitalGovernment')->count();
        $midDigitalGovernmentCount = $govorgnameid->govofficials()->whereHas('midDigitalGovernment')->count();
        $topDigitalGovernmentCount = $govorgnameid->govofficials()->whereHas('topDigitalGovernment')->count();
        $digitalGovernmentCount=($opDigitalGovernmentCount ?? 0)+($midDigitalGovernmentCount ?? 0)+($topDigitalGovernmentCount ?? 0);

        $opManagementCount = $govorgnameid->govofficials()->whereHas('opManagement')->count();
        $midManagementCount = $govorgnameid->govofficials()->whereHas('midManagement')->count();
        $topManagementCount = $govorgnameid->govofficials()->whereHas('topManagement')->count();
        $managementCount=($opManagementCount ?? 0)+($midManagementCount ?? 0)+($topManagementCount ?? 0);

        $overall=($ictCount ?? 0)+($digitalGovernmentCount ?? 0)+($managementCount ?? 0);

        $opGovofficials=$govorgnameid->govofficials()->where('employment_layer', 'operational')->get();
        $midGovofficials=$govorgnameid->govofficials()->where('employment_layer', 'middle')->get();
        $topGovofficials=$govorgnameid->govofficials()->where('employment_layer', 'top')->get();

        //ICT Assessment
        $opIctComplete = 0;
        $midIctComplete = 0;
        $topIctComplete = 0;

        $opIctInProgress = 0;
        $midIctInProgress = 0;
        $topIctInProgress = 0;

        foreach ($opGovofficials as $opGovofficial){
            if((($opGovofficial->opIct) ?? 0)){
                $opIctComplete++;
            }
            else{
                $opIctInProgress++; 
            }
        }
        foreach ($midGovofficials as $midGovofficial){
            if((($midGovofficial->midIct) ?? 0)){
                $midIctComplete++;
            }
            else{
                $midIctInProgress++; 
            }
        }
        foreach ($topGovofficials as $topGovofficial){
            if((($topGovofficial->topIct) ?? 0)){
                $topIctComplete++;
            }
            else{
                $topIctInProgress++; 
            }
        }

        $totalGovofficials=((count($opGovofficials)) ?? 0)+((count($midGovofficials)) ?? 0)+((count($topGovofficials)) ?? 0);
        $ictResponses=($opIctComplete ?? 0)+($midIctComplete ?? 0)+($topIctComplete ?? 0);
        $ictInProgress=($opIctInProgress ?? 0)+($midIctInProgress ?? 0)+($topIctInProgress ?? 0);

        $opIctInWorkplaceData = [];
        $opInformationManagementData = [];
        $opDigitalCitizenshipData = [];

        foreach ($opGovofficials as $opGovofficial) {
            if ($opGovofficial->opIct) {
                $opIctInWorkplaceData[] = $opGovofficial->opIct->op_ict_in_workplace;
                $opInformationManagementData[] = $opGovofficial->opIct->op_information_management;
                $opDigitalCitizenshipData[] = $opGovofficial->opIct->op_digital_citizenship;
            }
        }

        $midIctInWorkplaceData = [];
        $midInformationManagementData = [];
        $midDigitalCitizenshipData = [];

        foreach ($midGovofficials as $midGovofficial) {
            if ($midGovofficial->midIct) {
                $midIctInWorkplaceData[] = $midGovofficial->midIct->ict_in_workplace;
                $midInformationManagementData[] = $midGovofficial->midIct->information_management;
                $midDigitalCitizenshipData[] = $midGovofficial->midIct->digital_citizenship;
            }
        }

        $topIctInWorkplaceData = [];
        $topInformationManagementData = [];
        $topDigitalCitizenshipData = [];

        foreach ($topGovofficials as $topGovofficial) {
            if ($topGovofficial->topIct) {
                $topIctInWorkplaceData[] = $topGovofficial->topIct->ict_in_workplace;
                $topInformationManagementData[] = $topGovofficial->topIct->information_management;
                $topDigitalCitizenshipData[] = $topGovofficial->topIct->digital_citizenship;
            }
        }

        $totIctInWorkplace=array_sum($opIctInWorkplaceData) ?? 0 + array_sum($midIctInWorkplaceData) ?? 0 + array_sum($topIctInWorkplaceData) ?? 0;
        $avgIctInWorkplace=0;
        if(count($govofficials)!==0){
            $avgIctInWorkplace= round(($totIctInWorkplace/(110 * count($govofficials))) *100 , 0);
        }

        $totInformationManagement=array_sum($opInformationManagementData) ?? 0 + array_sum($midInformationManagementData) ?? 0 + array_sum($topInformationManagementData) ?? 0;
        $avgInformationManagement=0;
        if(count($govofficials)!==0){
            $avgInformationManagement= round(($totInformationManagement/(31 * count($govofficials))) *100 , 0);
        }

        $totDigitalCitizenship=array_sum($opDigitalCitizenshipData) ?? 0 + array_sum($midDigitalCitizenshipData) ?? 0 + array_sum($topDigitalCitizenshipData) ?? 0;
        $avgDigitalCitizenship=0;
        if(count($govofficials)!==0){
            $avgDigitalCitizenship= round(($totDigitalCitizenship/(159 * count($govofficials))) *100 , 0);
        }

        $ictMarks = [
            ['Category', 'Percentage'],
            ['ICT in Workplace', (int) $avgIctInWorkplace],
            ['Information Management', (int) $avgInformationManagement],
            ['Digital Citizenship', (int) $avgDigitalCitizenship],
        ];

        $topIctIncomplete=count($topGovofficials)-($topIctComplete+$topIctInProgress);

        $totTopIctInWorkplace=array_sum($topIctInWorkplaceData) ?? 0;
        $avgTopIctInWorkplace=0;
        if(count($topGovofficials)!==0){
            $avgTopIctInWorkplace=round(($totTopIctInWorkplace/(24 * count($topGovofficials))),0);
        }

        $totTopInformationManagement=array_sum($topInformationManagementData) ?? 0;
        $avgTopInformationManagement=0;
        if(count($topGovofficials)!==0){
            $avgTopInformationManagement=round(($totTopInformationManagement/(11 * count($topGovofficials))),0);
        }

        $totTopDigitalCitizenship=array_sum($topDigitalCitizenshipData) ?? 0;
        $avgTopDigitalCitizenship=0;
        if(count($topGovofficials)!==0){
            $avgTopDigitalCitizenship=round(($totTopDigitalCitizenship/(5 * count($topGovofficials))),0);
        }

        $ictTop = [
            ['Category', 'Percentage'],
            ['ICT in Workplace', (int) $avgTopIctInWorkplace],
            ['Information Management', (int) $avgTopInformationManagement],
            ['Digital Citizenship', (int) $avgTopDigitalCitizenship],
        ];

        $midIctIncomplete=count($midGovofficials)-($midIctComplete+$midIctInProgress);

        $totMidIctInWorkplace=array_sum($midIctInWorkplaceData) ?? 0;
        $avgMidIctInWorkplace=0;
        if(count($midGovofficials)!==0){
            $avgMidIctInWorkplace=round(($totMidIctInWorkplace/(32 * count($midGovofficials))),0);
        }

        $totMidInformationManagement=array_sum($midInformationManagementData) ?? 0;
        $avgMidInformationManagement=0;
        if(count($midGovofficials)!==0){
            $avgMidInformationManagement=round(($totMidInformationManagement/(10 * count($midGovofficials))),0);
        }

        $totMidDigitalCitizenship=array_sum($midDigitalCitizenshipData) ?? 0;
        $avgMidDigitalCitizenship=0;
        if(count($midGovofficials)!==0){
            $avgMidDigitalCitizenship=round(($totMidDigitalCitizenship/(58 * count($midGovofficials))),0);
        }

        $ictMid = [
            ['Category', 'Percentage'],
            ['ICT in Workplace', (int) $avgMidIctInWorkplace],
            ['Information Management', (int) $avgMidInformationManagement],
            ['Digital Citizenship', (int) $avgMidDigitalCitizenship],
        ];

        $opIctIncomplete=count($opGovofficials)-($opIctComplete+$opIctInProgress);

        $totOpIctInWorkplace=array_sum($opIctInWorkplaceData) ?? 0;
        $avgOpIctInWorkplace=0;
        if(count($opGovofficials)!==0){
            $avgOpIctInWorkplace=round(($totOpIctInWorkplace/(54 * count($opGovofficials))),0);
        }

        $totOpInformationManagement=array_sum($opInformationManagementData) ?? 0;
        $avgOpInformationManagement=0;
        if(count($opGovofficials)!==0){
            $avgOpInformationManagement=round(($totOpInformationManagement/(10 * count($opGovofficials))),0);
        }

        $totOpDigitalCitizenship=array_sum($opDigitalCitizenshipData) ?? 0;
        $avgOpDigitalCitizenship=0;
        if(count($opGovofficials)!==0){
            $avgOpDigitalCitizenship=round(($totOpDigitalCitizenship/(36 * count($opGovofficials))),0);
        }

        $ictOp = [
            ['Category', 'Percentage'],
            ['ICT in Workplace', (int) $avgOpIctInWorkplace],
            ['Information Management', (int) $avgOpInformationManagement],
            ['Digital Citizenship', (int) $avgOpDigitalCitizenship],
        ];

        //Digital Government Assessment
        $opDigitalGovernmentComplete = 0;
        $midDigitalGovernmentComplete = 0;
        $topDigitalGovernmentComplete = 0;

        $opDigitalGovernmentInProgress = 0;
        $midDigitalGovernmentInProgress = 0;
        $topDigitalGovernmentInProgress = 0;

        foreach ($opGovofficials as $opGovofficial){
            if((($opGovofficial->opDigitalGovernment) ?? 0)){
                $opDigitalGovernmentComplete++;
            }
            else{
                $opDigitalGovernmentInProgress++; 
            }
        }
        foreach ($midGovofficials as $midGovofficial){
            if((($midGovofficial->midDigitalGovernment) ?? 0)){
                $midDigitalGovernmentComplete++;
            }
            else{
                $midDigitalGovernmentInProgress++; 
            }
        }
        foreach ($topGovofficials as $topGovofficial){
            if((($topGovofficial->topDigitalGovernment) ?? 0)){
                $topDigitalGovernmentComplete++;
            }
            else{
                $topDigitalGovernmentInProgress++; 
            }
        }

        $digitalGovernmentResponses=($opDigitalGovernmentComplete ?? 0)+($midDigitalGovernmentComplete ?? 0)+($topDigitalGovernmentComplete ?? 0);
        $digitalGovernmentInProgress=($opDigitalGovernmentInProgress ?? 0)+($midDigitalGovernmentInProgress ?? 0)+($topDigitalGovernmentInProgress ?? 0);

        $opChangeManagementData = [];
        $opCollaborationData = [];
        $opOrientationData = [];
        $opQualityManagementData = [];
        $opInitiativeData = [];

        foreach ($opGovofficials as $opGovofficial) {
            if ($opGovofficial->opDigitalGovernment) {
                $opChangeManagementData[] = $opGovofficial->opDigitalGovernment->op_change_management;
                $opCollaborationtData[] = $opGovofficial->opDigitalGovernment->op_collaboration;
                $opOrientationData[] = $opGovofficial->opDigitalGovernment->op_orientation;
                $opQualityManagementData[] = $opGovofficial->opDigitalGovernment->op_quality_management;
                $opInitiativeData[] = $opGovofficial->opDigitalGovernment->op_initiative;
            }
        }

        $midProjectManagementData = [];
        $midChangeManagementData = [];
        $midCollaborationData = [];
        $midOrientationData = [];
        $midQualityManagementData = [];
        $midInitiativeData = [];

        foreach ($midGovofficials as $midGovofficial) {
            if ($midGovofficial->midDigitalGovernment) {
                $midProjectManagementData[] = $midGovofficial->midDigitalGovernment->mid_project_management;
                $midChangeManagementData[] = $midGovofficial->midDigitalGovernment->mid_change_management;
                $midCollaborationData[] = $midGovofficial->midDigitalGovernment->mid_collaboration;
                $midOrientationData[] = $midGovofficial->midDigitalGovernment->mid_orientation;
                $midQualityManagementData[] = $midGovofficial->midDigitalGovernment->mid_quality_management;
                $midInitiativeData[] = $midGovofficial->midDigitalGovernment->mid_initiative;
            }
        }

        $topProjectManagementData = [];
        $topChangeManagementData = [];
        $topCollaborationData = [];
        $topOrientationData = [];
        $topQualityManagementData = [];
        

        foreach ($topGovofficials as $topGovofficial) {
            if ($topGovofficial->topDigitalGovernment) {
                $topProjectManagementData[] = $topGovofficial->topDigitalGovernment->project_management;
                $topChangeManagementData[] = $topGovofficial->topDigitalGovernment->change_management;
                $topCollaborationData[] = $topGovofficial->topDigitalGovernment->collaboration;
                $topOrientationData[] = $topGovofficial->topDigitalGovernment->orientation;
                $topQualityManagementData[] = $topGovofficial->topDigitalGovernment->quality_management;
            }
        }

        $totProjectManagement=array_sum($midProjectManagementData) ?? 0 + array_sum($topProjectManagementData) ?? 0;
        $midTopGovofficials=count($midGovofficials)+count($topGovofficials);
        $avgProjectManagement=0;
        if($midTopGovofficials!==0){
            $avgProjectManagement=round(($totProjectManagement / (35 * $midTopGovofficials)) * 100,0);
        }

        $totChangeManagement=array_sum($opChangeManagementData) ?? 0 + array_sum($midChangeManagementData) ?? 0 + array_sum($topChangeManagementData) ?? 0;
        $avgChangeManagement=0;
        if(count($govofficials)!==0){
            $avgChangeManagement=round(($totChangeManagement / (42 * count($govofficials)))  * 100,0);
        }

        $totCollaboration=array_sum($opCollaborationData) ?? 0 + array_sum($midCollaborationData) ?? 0 + array_sum($topCollaborationData) ?? 0;
        $avgCollaboration=0;
        if(count($govofficials)!==0){
            $avgCollaboration=round(($totCollaboration / (57 * count($govofficials))) * 100,0);
        }

        $totOrientation=array_sum($opOrientationData) ?? 0 + array_sum($midOrientationData) ?? 0 + array_sum($topOrientationData) ?? 0;
        $avgOrientation=0;
        if(count($govofficials)!==0){
            $avgOrientation=round(($totOrientation / (40 * count($govofficials))) * 100,0);
        }

        $totQualityManagement=array_sum($opQualityManagementData) ?? 0 +array_sum($midQualityManagementData) ?? 0 + array_sum($topQualityManagementData) ?? 0;
        $avgQualityManagement=0;
        if(count($govofficials)!==0){
            $avgQualityManagement=round(($totQualityManagement / (61 * count($govofficials))) * 100 , 0);
        }

        $totInitiative=array_sum($opInitiativeData) ?? 0 + array_sum($midInitiativeData) ?? 0;
        $opMidGovofficials=count($opGovofficials)+count($midGovofficials);
        $avgInitiative=0;
        if($opMidGovofficials!==0){
            $avgInitiative=round(($totInitiative / (69 * $opMidGovofficials)) * 100 , 0);
        }

        $digitalGovernmentMarks = [
            ['Category', 'Percentage'],
            ['Project and Program Management', (int) $avgProjectManagement],
            ['Change Management', (int) $avgChangeManagement],
            ['Collaboration and Partnership', (int) $avgCollaboration],
            ['Results Orientation', (int) $avgOrientation],
            ['Quality Management', (int) $avgQualityManagement],
            ['Execute digital government initiatives', (int) $avgInitiative],
        ];

        $topDigitalGovernmentIncomplete=count($topGovofficials)-($topDigitalGovernmentComplete+$topDigitalGovernmentInProgress);

        $totTopProjectManagement=array_sum($topProjectManagementData) ?? 0;
        $avgTopProjectManagement=0;
        if(count($topGovofficials)!==0){
            $avgTopProjectManagement=round(($totTopProjectManagement / (23 * count($topGovofficials))) * 100,0);
        }

        $totTopChangeManagement=array_sum($topChangeManagementData) ?? 0;
        $avgTopChangeManagement=0;
        if(count($topGovofficials)!==0){
            $avgTopChangeManagement=round(($totTopChangeManagement / (13 * count($topGovofficials)))  * 100,0);
        }

        $totTopCollaboration=array_sum($topCollaborationData) ?? 0;
        $avgTopCollaboration=0;
        if(count($topGovofficials)!==0){
            $avgTopCollaboration=round(($totTopCollaboration / (22 * count($topGovofficials))) * 100,0);
        }

        $totTopOrientation=array_sum($topOrientationData) ?? 0;
        $avgTopOrientation=0;
        if(count($topGovofficials)!==0){
            $avgTopOrientation=round(($totTopOrientation / (14 * count($topGovofficials))) * 100,0);
        }

        $totTopQualityManagement=array_sum($topQualityManagementData) ?? 0;
        $avgTopQualityManagement=0;
        if(count($topGovofficials)!==0){
            $avgTopQualityManagement=round(($totTopQualityManagement / (28 * count($topGovofficials))) * 100 , 0);
        }

        $digitalGovernmentTop = [
            ['Category', 'Percentage'],
            ['Project and Program Management', (int) $avgTopProjectManagement],
            ['Change Management', (int) $avgTopChangeManagement],
            ['Collaboration and Partnership', (int) $avgTopCollaboration],
            ['Results Orientation', (int) $avgTopOrientation],
            ['Quality Management', (int) $avgTopQualityManagement],
        ];

        $midDigitalGovernmentIncomplete=count($midGovofficials)-($midDigitalGovernmentComplete+$midDigitalGovernmentInProgress);

        $totMidProjectManagement=array_sum($midProjectManagementData) ?? 0;
        $avgMidProjectManagement=0;
        if(count($midGovofficials)!==0){
            $avgMidProjectManagement=round(($totMidProjectManagement / (12 * count($midGovofficials))) * 100,0);
        }

        $totMidChangeManagement=array_sum($midChangeManagementData) ?? 0;
        $avgMidChangeManagement=0;
        if(count($midGovofficials)!==0){
            $avgMidChangeManagement=round(($totMidChangeManagement / (18 * count($midGovofficials)))  * 100,0);
        }

        $totMidCollaboration=array_sum($midCollaborationData) ?? 0;
        $avgMidCollaboration=0;
        if(count($midGovofficials)!==0){
            $avgMidCollaboration=round(($totMidCollaboration / (12 * count($midGovofficials))) * 100,0);
        }

        $totMidOrientation=array_sum($midOrientationData) ?? 0;
        $avgMidOrientation=0;
        if(count($midGovofficials)!==0){
            $avgMidOrientation=round(($totMidOrientation / (14 * count($midGovofficials))) * 100,0);
        }

        $totMidQualityManagement=array_sum($midQualityManagementData) ?? 0;
        $avgMidQualityManagement=0;
        if(count($midGovofficials)!==0){
            $avgMidQualityManagement=round(($totMidQualityManagement / (15 * count($midGovofficials))) * 100 , 0);
        }

        $totMidInitiative=array_sum($midInitiativeData) ?? 0;
        $avgMidInitiative=0;
        if(count($midGovofficials)!==0){
            $avgMidInitiative=round(($totMidInitiative / (29 * count($midGovofficials))) * 100 , 0);
        }

        $digitalGovernmentMid = [
            ['Category', 'Percentage'],
            ['Project and Program Management', (int) $avgMidProjectManagement],
            ['Change Management', (int) $avgMidChangeManagement],
            ['Collaboration and Partnership', (int) $avgMidCollaboration],
            ['Results Orientation', (int) $avgMidOrientation],
            ['Quality Management', (int) $avgMidQualityManagement],
            ['Execute digital government initiatives', (int) $avgMidInitiative],
        ];

        $opDigitalGovernmentIncomplete=count($opGovofficials)-($opDigitalGovernmentComplete+$opDigitalGovernmentInProgress);

        $totOpChangeManagement=array_sum($opChangeManagementData) ?? 0;
        $avgOpChangeManagement=0;
        if(count($opGovofficials)!==0){
            $avgOpChangeManagement=round(($totOpChangeManagement / (11 * count($opGovofficials)))  * 100,0);
        }

        $totOpCollaboration=array_sum($opCollaborationData) ?? 0;
        $avgOpCollaboration=0;
        if(count($opGovofficials)!==0){
            $avgOpCollaboration=round(($totOpCollaboration / (11 * count($opGovofficials))) * 100,0);
        }

        $totOpOrientation=array_sum($opOrientationData) ?? 0;
        $avgOpOrientation=0;
        if(count($opGovofficials)!==0){
            $avgOpOrientation=round(($totOpOrientation / (12 * count($opGovofficials))) * 100,0);
        }

        $totOpQualityManagement=array_sum($opQualityManagementData) ?? 0;
        $avgOpQualityManagement=0;
        if(count($opGovofficials)!==0){
            $avgOpQualityManagement=round(($totOpQualityManagement / (18 * count($opGovofficials))) * 100 , 0);
        }

        $totOpInitiative=array_sum($opInitiativeData) ?? 0;
        if(count($opGovofficials)!==0){
            $avgOpInitiative=round(($totOpInitiative / (48 * count($opGovofficials))) * 100 , 0);
        }

        $digitalGovernmentOp = [
            ['Category', 'Percentage'],
            ['Change Management', (int) $avgOpChangeManagement],
            ['Collaboration and Partnership', (int) $avgOpCollaboration],
            ['Results Orientation', (int) $avgOpOrientation],
            ['Quality Management', (int) $avgOpQualityManagement],
            ['Execute digital government initiatives', (int) $avgOpInitiative],
        ];

        //Management Assessment
        $opManagementComplete = 0;
        $midManagementComplete = 0;
        $topManagementComplete = 0;

        $opManagementInProgress = 0;
        $midManagementInProgress = 0;
        $topManagementInProgress = 0;

        foreach ($opGovofficials as $opGovofficial){
            if((($opGovofficial->opManagement) ?? 0)){
                $opManagementComplete++;
            }
            else{
                $opManagementInProgress++; 
            }
        }
        foreach ($midGovofficials as $midGovofficial){
            if((($midGovofficial->midManagement) ?? 0)){
                $midManagementComplete++;
            }
            else{
                $midManagementInProgress++; 
            }
        }
        foreach ($topGovofficials as $topGovofficial){
            if((($topGovofficial->topManagement) ?? 0)){
                $topManagementComplete++;
            }
            else{
                $topManagementInProgress++; 
            }
        }

        $digitalGovernmentResponses=($opManagementComplete ?? 0)+($midManagementComplete ?? 0)+($topManagementComplete ?? 0);
        $digitalGovernmentInProgress=($opManagementInProgress ?? 0)+($midManagementInProgress ?? 0)+($topManagementInProgress ?? 0);

        $opCommunicationData = [];
        $opWorkplaceManagementData = [];
        $opStakeholderData = [];
        $opTeamworkData = [];
        $opPersonalDevelopmentData = [];

        foreach ($opGovofficials as $opGovofficial) {
            if ($opGovofficial->opManagement) {
                $opCommunicationData[] = $opGovofficial->opManagement->op_communication;
                $opWorkplaceManagementtData[] = $opGovofficial->opManagement->op_workplace_management;
                $opStakeholderData[] = $opGovofficial->opManagement->op_stakeholder_management;
                $opTeamworkData[] = $opGovofficial->opManagement->op_teamwork;
                $opPersonalDevelopmentData[] = $opGovofficial->opManagement->op_personal_development;
            }
        }

        $midCommunicationData = [];
        $midWorkplaceManagementData = [];
        $midStakeholderData = [];
        $midTeamworkData = [];
        $midPersonalDevelopmentData = [];
        $midDecisionMakingData = [];
        $midCapacityBuildingData = [];
        $midPerformanceManagementData = [];

        foreach ($midGovofficials as $midGovofficial) {
            if ($midGovofficial->midManagement) {
                $midCommunicationData[] = $midGovofficial->midManagement->mid_communication;
                $midWorkplaceManagementtData[] = $midGovofficial->midManagement->mid_workplace_management;
                $midStakeholderData[] = $midGovofficial->midManagement->mid_stakeholder_management;
                $midTeamworkData[] = $midGovofficial->midManagement->mid_teamwork;
                $midPersonalDevelmidmentData[] = $midGovofficial->midManagement->mid_personal_development;
                $midDecisionMakingData[] = $midGovofficial->midManagement->mid_decision_making;
                $midCapacityBuildingData[] = $midGovofficial->midManagement->mid_capacity_building;
                $midPerformanceManagementData[] = $midGovofficial->midManagement->mid_performance_management;
            }
        }

        $topCommunicationData = [];
        $topWorkplaceManagementData = [];
        $topStakeholderData = [];
        $topPersonalDevelopmentData = [];
        $topDecisionMakingData = [];
        $topCapacityBuildingData = [];

        foreach ($topGovofficials as $topGovofficial) {
            if ($topGovofficial->topManagement) {
                $topCommunicationData[] = $topGovofficial->topManagement->communication;
                $topWorkplaceManagementtData[] = $topGovofficial->topManagement->workplace_management;
                $topStakeholderData[] = $topGovofficial->topManagement->stakeholder_management;
                $topPersonalDeveltopmentData[] = $topGovofficial->topManagement->personal_development;
                $topDecisionMakingData[] = $topGovofficial->topManagement->decision_making;
                $topCapacityBuildingData[] = $topGovofficial->topManagement->capacity_building;
            }
        }

        $totCommunication=array_sum($opCommunicationData) ?? 0 + array_sum($midCommunicationData) ?? 0 + array_sum($topCommunicationData) ?? 0;
        $avgCommunication=0;
        if(count($govofficials)!==0){
            $avgCommunication=round(($totCommunication / (58 * count($govofficials))) * 100,0);
        }

        $totWorkplaceManagement=array_sum($opWorkplaceManagementData) ?? 0 + array_sum($midWorkplaceManagementData) ?? 0 + array_sum($topWorkplaceManagementData) ?? 0;
        $avgWorkplaceManagement=0;
        if(count($govofficials)!==0){
            $avgWorkplaceManagement=round(($totWorkplaceManagement / (34 * count($govofficials))) * 100,0);
        }

        $totStakeholder=array_sum($opStakeholderData) ?? 0 + array_sum($midStakeholderData) ?? 0 + array_sum($topStakeholderData) ?? 0;
        $avgStakeholder=0;
        if(count($govofficials)!==0){
            $avgStakeholder=round(($totStakeholder / (63 * count($govofficials))) * 100,0);
        }

        $totTeamwork=array_sum($opTeamworkData) ?? 0 + array_sum($midTeamworkData) ?? 0 ;
        $opMidGovofficials=count($opGovofficials ?? 0)+count($midGovofficials ?? 0);
        $avgTeamwork=0;
        if($opMidGovofficials!==0){
            $avgTeamwork=round(($totTeamwork / (28 * $opMidGovofficials)) * 100,0);
        }

        $totPersonalDevelopment=array_sum($opPersonalDevelopmentData) ?? 0 +array_sum($midPersonalDevelopmentData) ?? 0 + array_sum($topPersonalDevelopmentData) ?? 0;
        $avgPersonalDevelopment=0;
        if(count($govofficials)!==0){
            $avgPersonalDevelopment=round(($totPersonalDevelopment / (23 * count($govofficials))) * 100 , 0);
        }

        $totDecisionMaking=array_sum($midDecisionMakingData) ?? 0 + array_sum($topDecisionMakingData) ?? 0;
        $midTopGovofficials=count($midGovofficials ?? 0)+count($topGovofficials ?? 0);
        $avgDecisionMaking=0;
        if($midTopGovofficials!==0){
            $avgDecisionMaking=round(($totDecisionMaking / (29 * $midTopGovofficials)) * 100 , 0);
        }

        $totCapacityBuilding=array_sum($midCapacityBuildingData) ?? 0 + array_sum($topCapacityBuildingData) ?? 0;
        $avgCapacityBuilding=0;
        if($midTopGovofficials!==0){
            $avgCapacityBuilding=round(($totCapacityBuilding / (29 * $midTopGovofficials)) * 100 , 0);
        }

        $totPerformanceManagement=array_sum($midPerformanceManagementData) ?? 0;
        $avgPerformanceManagement=0;
        if(count($midGovofficials)!==0){
            $avgPerformanceManagement=round(($totPerformanceManagement / (17 * count($midGovofficials))) * 100 , 0);
        }

        $managementMarks = [
            ['Category', 'Percentage'],
            ['Communication', (int) $avgCommunication],
            ['Workplace Management', (int) $avgWorkplaceManagement],
            ['Stakeholder Management', (int) $avgStakeholder],
            ['Teamwork', (int) $avgTeamwork],
            ['Personal Development', (int) $avgPersonalDevelopment],
            ['Decision Making', (int) $avgDecisionMaking],
            ['Capacity Building', (int) $avgCapacityBuilding],
            ['Performance Management', (int) $avgPerformanceManagement],
        ];

        $topManagementIncomplete=count($topGovofficials)-($topManagementComplete+$topManagementInProgress);

        $totTopCommunication=array_sum($topCommunicationData) ?? 0;
        $avgTopCommunication=0;
        if(count($topGovofficials)!==0){
            $avgTopCommunication=round(($totTopCommunication / (18 * count($topGovofficials))) * 100,0);
        }

        $totTopWorkplaceManagement=array_sum($topWorkplaceManagementData) ?? 0;
        $avgTopWorkplaceManagement=0;
        if(count($topGovofficials)){
            $avgTopWorkplaceManagement=round(($totTopWorkplaceManagement / (12 * count($topGovofficials))) * 100,0);
        }

        $totTopStakeholder=array_sum($topStakeholderData) ?? 0;
        $avgTopStakeholder=0;
        if(count($topGovofficials)!==0){
            $avgTopStakeholder=round(($totTopStakeholder / (14 * count($topGovofficials))) * 100,0);
        }

        $totTopPersonalDevelopment=array_sum($topPersonalDevelopmentData) ?? 0;
        $avgTopPersonalDevelopment=0;
        if(count($topGovofficials)!==0){
            $avgTopPersonalDevelopment=round(($totTopPersonalDevelopment / (6 * count($topGovofficials))) * 100 , 0);
        }

        $totTopDecisionMaking=array_sum($topDecisionMakingData) ?? 0;
        $avgTopDecisionMaking=0;
        if(count($topGovofficials)!==0){
            $avgTopDecisionMaking=round(($totTopDecisionMaking / (10 * count($topGovofficials))) * 100 , 0);
        }

        $totTopCapacityBuilding=array_sum($topCapacityBuildingData) ?? 0;
        $avgTopCapacityBuilding=0;
        if(count($topGovofficials)!==0){
            $avgTopCapacityBuilding=round(($totTopCapacityBuilding / (20 * count($topGovofficials))) * 100 , 0);
        }

        $managementTop = [
            ['Category', 'Percentage'],
            ['Communication', (int) $avgTopCommunication],
            ['Workplace Management', (int) $avgTopWorkplaceManagement],
            ['Stakeholder Management', (int) $avgTopStakeholder],
            ['Personal Development', (int) $avgTopPersonalDevelopment],
            ['Decision Making', (int) $avgTopDecisionMaking],
            ['Capacity Building', (int) $avgTopCapacityBuilding],
        ];

        $midManagementIncomplete=count($midGovofficials)-($midManagementComplete+$midManagementInProgress);

        $totMidCommunication=array_sum($midCommunicationData) ?? 0;
        $avgMidCommunication=0;
        if(count($midGovofficials)!==0){
            $avgMidCommunication=round(($totMidCommunication / (12 * count($midGovofficials))) * 100,0);
        }

        $totMidWorkplaceManagement=array_sum($midWorkplaceManagementData) ?? 0;
        $avgMidWorkplaceManagement=0;
        if(count($midGovofficials)){
            $avgMidWorkplaceManagement=round(($totMidWorkplaceManagement / (10 * count($midGovofficials))) * 100,0);
        }

        $totMidStakeholder=array_sum($midStakeholderData) ?? 0;
        $avgMidStakeholder=0;
        if(count($midGovofficials)!==0){
            $avgMidStakeholder=round(($totMidStakeholder / (25 * count($midGovofficials))) * 100,0);
        }

        $totMidTeamwork=array_sum($midTeamworkData) ?? 0;
        $avgMidTeamwork=0;
        if(count($midGovofficials)!==0){
            $avgMidTeamwork=round(($totMidTeamwork / (4 * count($midGovofficials))) * 100,0);
        }

        $totMidPersonalDevelopment=array_sum($midPersonalDevelopmentData) ?? 0;
        $avgMidPersonalDevelopment=0;
        if(count($midGovofficials)!==0){
            $avgMidPersonalDevelopment=round(($totMidPersonalDevelopment / (5 * count($midGovofficials))) * 100 , 0);
        }

        $totMidDecisionMaking=array_sum($midDecisionMakingData) ?? 0;
        $avgMidDecisionMaking=0;
        if(count($midGovofficials)!==0){
            $avgMidDecisionMaking=round(($totMidDecisionMaking / (19 * count($midGovofficials))) * 100 , 0);
        }

        $totMidCapacityBuilding=array_sum($midCapacityBuildingData) ?? 0;
        $avgMidCapacityBuilding=0;
        if(count($midGovofficials)!==0){
            $avgMidCapacityBuilding=round(($totMidCapacityBuilding / (8 * count($midGovofficials))) * 100 , 0);
        }

        $totMidPerformanceManagement=array_sum($midPerformanceManagementData) ?? 0;
        $avgMidPerformanceManagement=0;
        if(count($midGovofficials)!==0){
            $avgMidPerformanceManagement=round(($totMidPerformanceManagement / (17 * count($midGovofficials))) * 100 , 0);
        }

        $managementMid = [
            ['Category', 'Percentage'],
            ['Communication', (int) $avgMidCommunication],
            ['Workplace Management', (int) $avgMidWorkplaceManagement],
            ['Stakeholder Management', (int) $avgMidStakeholder],
            ['Teamwork', (int) $avgMidTeamwork],
            ['Personal Development', (int) $avgMidPersonalDevelopment],
            ['Decision Making', (int) $avgMidDecisionMaking],
            ['Capacity Building', (int) $avgMidCapacityBuilding],
            ['Performance Management', (int) $avgMidPerformanceManagement],
        ];

        $totOpCommunication=array_sum($opCommunicationData) ?? 0;
        $avgOpCommunication=0;
        if(count($opGovofficials)!==0){
            $avgOpCommunication=round(($totOpCommunication / (28 * count($opGovofficials))) * 100,0);
        }

        $totOpWorkplaceManagement=array_sum($opWorkplaceManagementData) ?? 0;
        $avgOpWorkplaceManagement=0;
        if(count($opGovofficials)!==0){
            $avgOpWorkplaceManagement=round(($totOpWorkplaceManagement / (12 * count($opGovofficials))) * 100,0);
        }

        $totOpStakeholder=array_sum($opStakeholderData) ?? 0;
        $avgOpStakeholder=0;
        if(count($opGovofficials)){
            $avgOpStakeholder=round(($totOpStakeholder / (24 * count($opGovofficials))) * 100,0);
        }

        $totOpTeamwork=array_sum($opTeamworkData) ?? 0;
        $avgOpTeamwork=0;
        if(count($opGovofficials)!==0){
            $avgOpTeamwork=round(($totOpTeamwork / (24 * count($opGovofficials))) * 100,0);
        }

        $totOpPersonalDevelopment=array_sum($opPersonalDevelopmentData) ?? 0;
        $avgOpPersonalDevelopment=0;
        if(count($opGovofficials)!==0){
            $avgOpPersonalDevelopment=round(($totOpPersonalDevelopment / (12 * count($opGovofficials))) * 100 , 0);
        }

        $managementOp = [
            ['Category', 'Percentage'],
            ['Communication', (int) $avgOpCommunication],
            ['Workplace Management', (int) $avgOpWorkplaceManagement],
            ['Stakeholder Management', (int) $avgOpStakeholder],
            ['Teamwork', (int) $avgOpTeamwork],
            ['Personal Development', (int) $avgOpPersonalDevelopment],
        ];

        $opManagementIncomplete=count($opGovofficials)-($opManagementComplete+$opManagementInProgress);

        return view('govOfficials.layerResults',compact('govofficials2','managementOp','opManagementIncomplete','opManagementInProgress','opManagementComplete','managementMid','midManagementIncomplete','midManagementInProgress','midManagementComplete','managementTop','topManagementIncomplete','topManagementInProgress','topManagementComplete','managementMarks','digitalGovernmentInProgress','digitalGovernmentResponses','digitalGovernmentOp','opDigitalGovernmentIncomplete','opDigitalGovernmentInProgress','opDigitalGovernmentComplete','digitalGovernmentMid','midDigitalGovernmentIncomplete','midDigitalGovernmentInProgress','midDigitalGovernmentComplete','digitalGovernmentTop','topDigitalGovernmentIncomplete','topDigitalGovernmentInProgress','topDigitalGovernmentComplete','digitalGovernmentMarks','digitalGovernmentInProgress','digitalGovernmentResponses','ictOp','opIctIncomplete','opIctComplete','opIctInProgress','ictMid','midIctIncomplete','midIctComplete','midIctInProgress','ictTop','topIctIncomplete','topIctComplete','topIctInProgress','ictMarks','ictResponses','ictInProgress','govofficials'));
    }
}
