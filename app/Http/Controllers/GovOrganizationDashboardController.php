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

        $avgOpResponse=round(($opResponse / count($opGovofficials))*100 , 0);
        $avgMidResponse=round(($midResponse / count($midGovofficials))*100 , 0);
        $avgTopResponse=round(($topResponse / count($topGovofficials))*100 , 0);

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

        $avgOpIctResponse=round(($opIctResponse / count($opGovofficials)) * 100 , 0);
        $avgOpDigitalGovernmentResponse=round(($opDigitalGovernmentResponse / count($opGovofficials)) * 100 , 0);
        $avgOpManagementResponse=round(($opManagementResponse / count($opGovofficials)) * 100 , 0);

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

        $avgMidIctResponse=round(($midIctResponse / count($midGovofficials)) * 100 , 0);
        $avgMidDigitalGovernmentResponse=round(($midDigitalGovernmentResponse / count($midGovofficials)) * 100 , 0);
        $avgMidManagementResponse=round(($midManagementResponse / count($midGovofficials)) * 100 , 0);

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

        $avgTopIctResponse=round(($topIctResponse / count($topGovofficials)) * 100 , 0);
        $avgTopDigitalGovernmentResponse=round(($topDigitalGovernmentResponse / count($topGovofficials)) * 100 , 0);
        $avgTopManagementResponse=round(($topManagementResponse / count($topGovofficials)) * 100 , 0);
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

        $totIctInWorkplace=array_sum($opIctInWorkplaceData) + array_sum($midIctInWorkplaceData) + array_sum($topIctInWorkplaceData);
        $avgIctInWorkplace= round(($totIctInWorkplace/(110 * count($govofficials))) *100 , 0);

        $totInformationManagement=array_sum($opInformationManagementData) + array_sum($midInformationManagementData) + array_sum($topInformationManagementData);
        $avgInformationManagement= round(($totInformationManagement/(31 * count($govofficials))) *100 , 0);

        $totInformationManagement=array_sum($opInformationManagementData) + array_sum($midInformationManagementData) + array_sum($topInformationManagementData);
        $avgInformationManagement= round(($totInformationManagement/(159 * count($govofficials))) *100 , 0);

        $ictMarks = [
            ['Category', 'Percentage'],
            ['ICT in Workplace', (int) $avgIctInWorkplace],
            ['Information Management', (int) $avgInformationManagement],
            ['Digital Citizenship', (int) $avgInformationManagement],
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

        $totProjectManagement=array_sum($midProjectManagementData) + array_sum($topProjectManagementData);
        $midTopGovofficials=count($midGovofficials)+count($topGovofficials);
        $avgProjectManagement=round(($totProjectManagement / (35 * $midTopGovofficials)),0);

        $totChangeManagement=array_sum($opChangeManagementData) + array_sum($midChangeManagementData) + array_sum($topChangeManagementData);
        $avgChangeManagement=round(($totChangeManagement / (42 * count($govofficials))),0);

        $totCollaboration=array_sum($opCollaborationData) + array_sum($midCollaborationData) + array_sum($topCollaborationData);
        $avgCollaboration=round(($totCollaboration / (57 * count($govofficials))),0);

        $totOrientation=array_sum($opOrientationData) + array_sum($midOrientationData) + array_sum($topOrientationData);
        $avgOrientation=round(($totOrientation / (40 * count($govofficials))),0);

        $totQualityManagement=array_sum($opQualityManagementData) +array_sum($midQualityManagementData) + array_sum($topQualityManagementData);
        $avgQualityManagement=round(($totQualityManagement / (61 * count($govofficials))) , 0);

        $totInitiative=array_sum($opInitiativeData) + array_sum($midInitiativeData);
        $opMidGovofficials=count($opGovofficials)+count($midGovofficials);
        $avgInitiative=round(($totInitiative / (69 * $opMidGovofficials)) , 0);

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
        // $midTopGovofficials=count($midGovofficials)+count($topGovofficials);
        $avgCommunication=round(($totCommunication / (58 * count($govofficials))),0);

        $totWorkplaceManagement=array_sum($opWorkplaceManagementData) + array_sum($midWorkplaceManagementData) + array_sum($topWorkplaceManagementData);
        $avgWorkplaceManagement=round(($totWorkplaceManagement / (34 * count($govofficials))),0);

        $totStakeholder=array_sum($opStakeholderData) + array_sum($midStakeholderData) + array_sum($topStakeholderData);
        $avgStakeholder=round(($totStakeholder / (63 * count($govofficials))),0);
dd($avgStakeholder);
        $totOrientation=array_sum($opOrientationData) + array_sum($midOrientationData) + array_sum($topOrientationData);
        $avgOrientation=round(($totOrientation / (40 * count($govofficials))),0);

        $totQualityManagement=array_sum($opQualityManagementData) +array_sum($midQualityManagementData) + array_sum($topQualityManagementData);
        $avgQualityManagement=round(($totQualityManagement / (61 * count($govofficials))) , 0);

        $totInitiative=array_sum($opInitiativeData) + array_sum($midInitiativeData);
        $opMidGovofficials=count($opGovofficials)+count($midGovofficials);
        $avgInitiative=round(($totInitiative / (69 * $opMidGovofficials)) , 0);



        return view ('govOfficials.dashboard',compact('digitalGovernmentMarks','ictMarks','govofficials','labels','avgLayers','avgTopResponse','avgMidResponse','avgOpResponse','avgTopManagementResponse','avgTopDigitalGovernmentResponse','avgTopIctResponse','avgMidManagementResponse','avgMidDigitalGovernmentResponse','avgMidIctResponse','avgOpManagementResponse','avgOpDigitalGovernmentResponse','avgOpIctResponse','layerResponses','responses','overall','managementCount','digitalGovernmentCount','ictCount','govorgname'));
    }
}
