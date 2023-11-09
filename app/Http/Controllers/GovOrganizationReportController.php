<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GovOrganizationReportController extends Controller
{
    public function report(){
        $govorgname = Auth::user()->govorganizationdetail->govorganizationname->gov_org_name;
        $govorgnameid = Auth::user()->govorganizationdetail->govorganizationname;
        $govofficials = $govorgnameid->govofficials;
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
        $totIctInWorkplace=array_sum($opIctInWorkplaceData) + array_sum($midIctInWorkplaceData) + array_sum($topIctInWorkplaceData);
        $avgIctInWorkplace= round(($totIctInWorkplace/(110 * count($govofficials))) *100 , 0);

        $totInformationManagement=array_sum($opInformationManagementData) + array_sum($midInformationManagementData) + array_sum($topInformationManagementData);
        $avgInformationManagement= round(($totInformationManagement/(31 * count($govofficials))) *100 , 0);

        $totDigitalCitizenship=array_sum($opDigitalCitizenshipData) + array_sum($midDigitalCitizenshipData) + array_sum($topDigitalCitizenshipData);
        $avgDigitalCitizenship= round(($totDigitalCitizenship/(159 * count($govofficials))) *100 , 0);


        $opIctIncomplete=count($opGovofficials)-($opIctComplete+$opIctInProgress);

        $responsesOpIct = [
            ['Category', 'Percentage'],
            ['Registered', (int) count($opGovofficials)],
            ['Assessment Completed', (int) $opIctComplete],
            ['Inprogress', (int) $opIctInProgress],
            ['Not start', (int) $opIctIncomplete],
        ];

        $totOpIctInWorkplace=array_sum($opIctInWorkplaceData);
        $avgOpIctInWorkplace=round(($totOpIctInWorkplace/(54 * count($opGovofficials))),0);

        $totOpInformationManagement=array_sum($opInformationManagementData);
        $avgOpInformationManagement=round(($totOpInformationManagement/(10 * count($opGovofficials))),0);

        $totOpDigitalCitizenship=array_sum($opDigitalCitizenshipData);
        $avgOpDigitalCitizenship=round(($totOpDigitalCitizenship/(36 * count($opGovofficials))),0);

        $ictOp = [
            ['Category', 'Percentage'],
            ['ICT in Workplace', (int) $avgOpIctInWorkplace],
            ['Information Management', (int) $avgOpInformationManagement],
            ['Digital Citizenship', (int) $avgOpDigitalCitizenship],
        ];

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

        $opDigitalGovernmentIncomplete=count($opGovofficials)-($opDigitalGovernmentComplete+$opDigitalGovernmentInProgress);

        $responsesOpDigitalGovernment = [
            ['Category', 'Percentage'],
            ['Registered', (int) count($opGovofficials)],
            ['Assessment Completed', (int) $opDigitalGovernmentComplete],
            ['Inprogress', (int) $opDigitalGovernmentInProgress],
            ['Not start', (int) $opDigitalGovernmentIncomplete],
        ];

        $totOpChangeManagement=array_sum($opChangeManagementData);
        $avgOpChangeManagement=round(($totOpChangeManagement / (11 * count($opGovofficials)))  * 100,0);

        $totOpCollaboration=array_sum($opCollaborationData);
        $avgOpCollaboration=round(($totOpCollaboration / (11 * count($opGovofficials))) * 100,0);

        $totOpOrientation=array_sum($opOrientationData);
        $avgOpOrientation=round(($totOpOrientation / (12 * count($opGovofficials))) * 100,0);

        $totOpQualityManagement=array_sum($opQualityManagementData);
        $avgOpQualityManagement=round(($totOpQualityManagement / (18 * count($opGovofficials))) * 100 , 0);

        $totOpInitiative=array_sum($opInitiativeData);
        $avgOpInitiative=round(($totOpInitiative / (48 * count($opGovofficials))) * 100 , 0);

        $digitalGovernmentOp = [
            ['Category', 'Percentage'],
            ['Change Management', (int) $avgOpChangeManagement],
            ['Collaboration and Partnership', (int) $avgOpCollaboration],
            ['Results Orientation', (int) $avgOpOrientation],
            ['Quality Management', (int) $avgOpQualityManagement],
            ['Execute digital government initiatives', (int) $avgOpInitiative],
        ];

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

        $totOpCommunication=array_sum($opCommunicationData);
        $avgOpCommunication=round(($totOpCommunication / (28 * count($opGovofficials))) * 100,0);

        $totOpWorkplaceManagement=array_sum($opWorkplaceManagementData);
        $avgOpWorkplaceManagement=round(($totOpWorkplaceManagement / (12 * count($opGovofficials))) * 100,0);

        $totOpStakeholder=array_sum($opStakeholderData);
        $avgOpStakeholder=round(($totOpStakeholder / (24 * count($opGovofficials))) * 100,0);

        $totOpTeamwork=array_sum($opTeamworkData);
        $avgOpTeamwork=round(($totOpTeamwork / (24 * count($opGovofficials))) * 100,0);

        $totOpPersonalDevelopment=array_sum($opPersonalDevelopmentData);
        $avgOpPersonalDevelopment=round(($totOpPersonalDevelopment / (12 * count($opGovofficials))) * 100 , 0);

        $opManagementIncomplete=count($opGovofficials)-($opManagementComplete+$opManagementInProgress);

        $responsesOpManagement = [
            ['Category', 'Percentage'],
            ['Registered', (int) count($opGovofficials)],
            ['Assessment Completed', (int) $opManagementComplete],
            ['Inprogress', (int) $opManagementInProgress],
            ['Not start', (int) $opManagementIncomplete],
        ];

        $managementOp = [
            ['Category', 'Percentage'],
            ['Communication', (int) $avgOpCommunication],
            ['Workplace Management', (int) $avgOpWorkplaceManagement],
            ['Stakeholder Management', (int) $avgOpStakeholder],
            ['Teamwork', (int) $avgOpTeamwork],
            ['Personal Development', (int) $avgOpPersonalDevelopment],
        ];

        $midIctIncomplete=count($midGovofficials)-($midIctComplete+$midIctInProgress);

        $totMidIctInWorkplace=array_sum($midIctInWorkplaceData);
        $avgMidIctInWorkplace=round(($totMidIctInWorkplace/(32 * count($midGovofficials))),0);

        $totMidInformationManagement=array_sum($midInformationManagementData);
        $avgMidInformationManagement=round(($totMidInformationManagement/(10 * count($midGovofficials))),0);

        $totMidDigitalCitizenship=array_sum($midDigitalCitizenshipData);
        $avgMidDigitalCitizenship=round(($totMidDigitalCitizenship/(58 * count($midGovofficials))),0);

        
        $responsesMidIct = [
            ['Category', 'Percentage'],
            ['Registered', (int) count($midGovofficials)],
            ['Assessment Completed', (int) $midIctComplete],
            ['Inprogress', (int) $midIctInProgress],
            ['Not start', (int) $midIctIncomplete],
        ];

        $ictMid = [
            ['Category', 'Percentage'],
            ['ICT in Workplace', (int) $avgMidIctInWorkplace],
            ['Information Management', (int) $avgMidInformationManagement],
            ['Digital Citizenship', (int) $avgMidDigitalCitizenship],
        ];

        $midDigitalGovernmentIncomplete=count($midGovofficials)-($midDigitalGovernmentComplete+$midDigitalGovernmentInProgress);

        $totMidProjectManagement=array_sum($midProjectManagementData);
        $avgMidProjectManagement=round(($totMidProjectManagement / (12 * count($midGovofficials))) * 100,0);

        $totMidChangeManagement=array_sum($midChangeManagementData);
        $avgMidChangeManagement=round(($totMidChangeManagement / (18 * count($midGovofficials)))  * 100,0);

        $totMidCollaboration=array_sum($midCollaborationData);
        $avgMidCollaboration=round(($totMidCollaboration / (12 * count($midGovofficials))) * 100,0);

        $totMidOrientation=array_sum($midOrientationData);
        $avgMidOrientation=round(($totMidOrientation / (14 * count($midGovofficials))) * 100,0);

        $totMidQualityManagement=array_sum($midQualityManagementData);
        $avgMidQualityManagement=round(($totMidQualityManagement / (15 * count($midGovofficials))) * 100 , 0);

        $totMidInitiative=array_sum($midInitiativeData);
        $avgMidInitiative=round(($totMidInitiative / (29 * count($midGovofficials))) * 100 , 0);

        $responsesMidDigitalGovernment = [
            ['Category', 'Percentage'],
            ['Registered', (int) count($midGovofficials)],
            ['Assessment Completed', (int) $midDigitalGovernmentComplete],
            ['Inprogress', (int) $midDigitalGovernmentInProgress],
            ['Not start', (int) $midDigitalGovernmentIncomplete],
        ];

        $digitalGovernmentMid = [
            ['Category', 'Percentage'],
            ['Project and Program Management', (int) $avgMidProjectManagement],
            ['Change Management', (int) $avgMidChangeManagement],
            ['Collaboration and Partnership', (int) $avgMidCollaboration],
            ['Results Orientation', (int) $avgMidOrientation],
            ['Quality Management', (int) $avgMidQualityManagement],
            ['Execute digital government initiatives', (int) $avgMidInitiative],
        ];

        $midManagementIncomplete=count($midGovofficials)-($midManagementComplete+$midManagementInProgress);

        $totMidCommunication=array_sum($midCommunicationData) ;
        $avgMidCommunication=round(($totMidCommunication / (12 * count($midGovofficials))) * 100,0);

        $totMidWorkplaceManagement=array_sum($midWorkplaceManagementData);
        $avgMidWorkplaceManagement=round(($totMidWorkplaceManagement / (10 * count($midGovofficials))) * 100,0);

        $totMidStakeholder=array_sum($midStakeholderData);
        $avgMidStakeholder=round(($totMidStakeholder / (25 * count($midGovofficials))) * 100,0);

        $totMidTeamwork=array_sum($midTeamworkData) ;
        $avgMidTeamwork=round(($totMidTeamwork / (4 * count($midGovofficials))) * 100,0);

        $totMidPersonalDevelopment=array_sum($midPersonalDevelopmentData);
        $avgMidPersonalDevelopment=round(($totMidPersonalDevelopment / (5 * count($midGovofficials))) * 100 , 0);

        $totMidDecisionMaking=array_sum($midDecisionMakingData);
        $avgMidDecisionMaking=round(($totMidDecisionMaking / (19 * count($midGovofficials))) * 100 , 0);

        $totMidCapacityBuilding=array_sum($midCapacityBuildingData);
        $avgMidCapacityBuilding=round(($totMidCapacityBuilding / (8 * count($midGovofficials))) * 100 , 0);

        $totMidPerformanceManagement=array_sum($midPerformanceManagementData) ;
        $avgMidPerformanceManagement=round(($totMidPerformanceManagement / (17 * count($midGovofficials))) * 100 , 0);

        $responsesMidManagement = [
            ['Category', 'Percentage'],
            ['Registered', (int) count($midGovofficials)],
            ['Assessment Completed', (int) $midManagementComplete],
            ['Inprogress', (int) $midManagementInProgress],
            ['Not start', (int) $midManagementIncomplete],
        ];

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

        $topIctIncomplete=count($topGovofficials)-($topIctComplete+$topIctInProgress);
        
        $totIctInWorkplace=array_sum($opIctInWorkplaceData) + array_sum($midIctInWorkplaceData) + array_sum($topIctInWorkplaceData);
        $avgIctInWorkplace= round(($totIctInWorkplace/(110 * count($govofficials))) *100 , 0);

        $totInformationManagement=array_sum($opInformationManagementData) + array_sum($midInformationManagementData) + array_sum($topInformationManagementData);
        $avgInformationManagement= round(($totInformationManagement/(31 * count($govofficials))) *100 , 0);

        $totDigitalCitizenship=array_sum($opDigitalCitizenshipData) + array_sum($midDigitalCitizenshipData) + array_sum($topDigitalCitizenshipData);
        $avgDigitalCitizenship= round(($totDigitalCitizenship/(159 * count($govofficials))) *100 , 0);

        $ictMarks = [
            ['Category', 'Percentage'],
            ['ICT in Workplace', (int) $avgIctInWorkplace],
            ['Information Management', (int) $avgInformationManagement],
            ['Digital Citizenship', (int) $avgDigitalCitizenship],
        ];

        $totTopIctInWorkplace=array_sum($topIctInWorkplaceData);
        $avgTopIctInWorkplace=round(($totTopIctInWorkplace/(24 * count($topGovofficials))),0);

        $totTopInformationManagement=array_sum($topInformationManagementData);
        $avgTopInformationManagement=round(($totTopInformationManagement/(11 * count($topGovofficials))),0);

        $totTopDigitalCitizenship=array_sum($topDigitalCitizenshipData);
        $avgTopDigitalCitizenship=round(($totTopDigitalCitizenship/(5 * count($topGovofficials))),0);

        $ictTop = [
            ['Category', 'Percentage'],
            ['ICT in Workplace', (int) $avgTopIctInWorkplace],
            ['Information Management', (int) $avgTopInformationManagement],
            ['Digital Citizenship', (int) $avgTopDigitalCitizenship],
        ];

        $responsesTopIct = [
            ['Category', 'Percentage'],
            ['Registered', (int) count($topGovofficials)],
            ['Assessment Completed', (int) $topIctComplete],
            ['Inprogress', (int) $topIctInProgress],
            ['Not start', (int) $topIctIncomplete],
        ];

        $topDigitalGovernmentIncomplete=count($topGovofficials)-($topDigitalGovernmentComplete+$topDigitalGovernmentInProgress);

        $totTopProjectManagement=array_sum($topProjectManagementData);
        $avgTopProjectManagement=round(($totTopProjectManagement / (23 * count($topGovofficials))) * 100,0);

        $totTopChangeManagement=array_sum($topChangeManagementData);
        $avgTopChangeManagement=round(($totTopChangeManagement / (13 * count($topGovofficials)))  * 100,0);

        $totTopCollaboration=array_sum($topCollaborationData);
        $avgTopCollaboration=round(($totTopCollaboration / (22 * count($topGovofficials))) * 100,0);

        $totTopOrientation=array_sum($topOrientationData);
        $avgTopOrientation=round(($totTopOrientation / (14 * count($topGovofficials))) * 100,0);

        $totTopQualityManagement=array_sum($topQualityManagementData);
        $avgTopQualityManagement=round(($totTopQualityManagement / (28 * count($topGovofficials))) * 100 , 0);

        $responsesTopDigitalGovernment = [
            ['Category', 'Percentage'],
            ['Registered', (int) count($topGovofficials)],
            ['Assessment Completed', (int) $topDigitalGovernmentComplete],
            ['Inprogress', (int) $topDigitalGovernmentInProgress],
            ['Not start', (int) $topDigitalGovernmentIncomplete],
        ];

        $digitalGovernmentTop = [
            ['Category', 'Percentage'],
            ['Project and Program Management', (int) $avgTopProjectManagement],
            ['Change Management', (int) $avgTopChangeManagement],
            ['Collaboration and Partnership', (int) $avgTopCollaboration],
            ['Results Orientation', (int) $avgTopOrientation],
            ['Quality Management', (int) $avgTopQualityManagement],
        ];

        $topManagementIncomplete=count($topGovofficials)-($topManagementComplete+$topManagementInProgress);

        $totTopCommunication=array_sum($topCommunicationData);
        $avgTopCommunication=round(($totTopCommunication / (18 * count($topGovofficials))) * 100,0);

        $totTopWorkplaceManagement=array_sum($topWorkplaceManagementData);
        $avgTopWorkplaceManagement=round(($totTopWorkplaceManagement / (12 * count($topGovofficials))) * 100,0);

        $totTopStakeholder=array_sum($topStakeholderData);
        $avgTopStakeholder=round(($totTopStakeholder / (14 * count($topGovofficials))) * 100,0);

        $totTopPersonalDevelopment=array_sum($topPersonalDevelopmentData);
        $avgTopPersonalDevelopment=round(($totTopPersonalDevelopment / (6 * count($topGovofficials))) * 100 , 0);

        $totTopDecisionMaking=array_sum($topDecisionMakingData);
        $avgTopDecisionMaking=round(($totTopDecisionMaking / (10 * count($topGovofficials))) * 100 , 0);

        $totTopCapacityBuilding=array_sum($topCapacityBuildingData);
        $avgTopCapacityBuilding=round(($totTopCapacityBuilding / (20 * count($topGovofficials))) * 100 , 0);

        $responsesTopManagement = [
            ['Category', 'Percentage'],
            ['Registered', (int) count($topGovofficials)],
            ['Assessment Completed', (int) $topManagementComplete],
            ['Inprogress', (int) $topManagementInProgress],
            ['Not start', (int) $topManagementIncomplete],
        ];

        $managementTop = [
            ['Category', 'Percentage'],
            ['Communication', (int) $avgTopCommunication],
            ['Workplace Management', (int) $avgTopWorkplaceManagement],
            ['Stakeholder Management', (int) $avgTopStakeholder],
            ['Personal Development', (int) $avgTopPersonalDevelopment],
            ['Decision Making', (int) $avgTopDecisionMaking],
            ['Capacity Building', (int) $avgTopCapacityBuilding],
        ];

        

        return view ('govOfficials.report',compact('managementTop','responsesTopManagement','digitalGovernmentTop','responsesTopDigitalGovernment','ictTop','responsesTopIct','managementMid','responsesMidManagement','digitalGovernmentMid','responsesMidDigitalGovernment','ictMid','responsesMidIct','managementOp','responsesOpManagement','digitalGovernmentOp','govorgname','responses','avgLayers','labels','responsesOpIct','ictOp','responsesOpDigitalGovernment'));
    }
}
