<?php

namespace App\Http\Controllers;

use App\Models\OpIct;
use App\Models\MidIct;
use App\Models\TopIct;
use App\Models\Govofficial;
use App\Models\OpManagement;
use Illuminate\Http\Request;
use App\Models\MidManagement;
use App\Models\TopManagement;
use App\Models\OpDigitalGovernment;
use App\Models\MidDigitalGovernment;
use App\Models\TopDigitalGovernment;

class CompetancyAssessmentController extends Controller
{
    public function operational(){
        $govofficial=Govofficial::all();
        $govofficialCount=count($govofficial);
        $govofficials=Govofficial::all();

        $opIct=OpIct::all();
        $opDigitalGovernment=OpDigitalGovernment::all();
        $opManagement=OpManagement::all();
        $midIct=MidIct::all();
        $midDigitalGovernment=MidDigitalGovernment::all();
        $midManagement=MidManagement::all();
        $topIct=TopIct::all();
        $topDigitalGovernment=TopDigitalGovernment::all();
        $topManagement=TopManagement::all();

        if($opIct && $opDigitalGovernment && $opManagement){
            $assessmentCompletedCount=count($opIct);
        }

        $assessmentInprogress=$govofficialCount-$assessmentCompletedCount;

        if($opIct || $midIct || $topIct){
            $ictCount=count($opIct)+count($midIct)+count($topIct);
        }

        if($opDigitalGovernment || $midDigitalGovernment || $topDigitalGovernment){
            $digitalGovernmentCount=count($opDigitalGovernment)+count($midDigitalGovernment)+count($topDigitalGovernment);
        }

        $avgMidIctInWorkplace=MidIct::avg('ict_in_workplace');
        $avgOpIctInWorkplace=OpIct::avg('op_ict_in_workplace');
        $avgTopIctInWorkplace=TopIct::avg('ict_in_workplace');
        if($avgMidIctInWorkplace || $avgOpIctInWorkplace || $avgTopIctInWorkplace){
            $avgIctInWorkplace=$avgMidIctInWorkplace+$avgOpIctInWorkplace+$avgTopIctInWorkplace;

        }

        $avgMidInformationManagement=MidIct::avg('information_management');
        $avgOpInformationManagement=OpIct::avg('op_information_management');
        $avgTopInformationManagement=TopIct::avg('information_management');
        if($avgMidInformationManagement || $avgOpInformationManagement || $avgTopInformationManagement){
            $avgInformationManagement=$avgMidInformationManagement+$avgOpInformationManagement+$avgTopInformationManagement;
        }

        $avgMidDigitalCitizenship=MidIct::avg('digital_citizenship');
        $avgOpDigitalCitizenship=OpIct::avg('op_digital_citizenship');
        $avgTopDigitalCitizenship=TopIct::avg('digital_citizenship');
        if($avgMidDigitalCitizenship || $avgOpDigitalCitizenship || $avgTopDigitalCitizenship){
            $avgDigitalCitizenship=$avgMidDigitalCitizenship+$avgOpDigitalCitizenship+$avgTopDigitalCitizenship;
        }

        $ictAvg = [
            ['Category', 'Percentage'],
            ['ICT In Workplace', (int) $avgIctInWorkplace],
            ['Information Management', (int) $avgInformationManagement],
            ['Digital Citizenship', (int) $avgDigitalCitizenship],
        ];

        $opIctCount=count($opIct);

        if($opDigitalGovernment || $midDigitalGovernment || $topDigitalGovernment){
            $digitalGovernmentCount=count($opDigitalGovernment)+count($midDigitalGovernment)+count($topDigitalGovernment);
        }

        $avgOpChangeManagement=OpDigitalGovernment::avg('op_change_management');
        $avgMidChangeManagement=MidDigitalGovernment::avg('mid_change_management');
        if($avgMidChangeManagement || $avgOpChangeManagement){
            $avgChangeManagement=$avgMidChangeManagement+$avgOpChangeManagement;
        }

        $avgOpCollaboration=OpDigitalGovernment::avg('op_collaboration');
        $avgMidCollaboration=MidDigitalGovernment::avg('mid_collaboration');
        $avgTopCollaboration=TopDigitalGovernment::avg('collaboration');
        if($avgMidCollaboration || $avgOpCollaboration || $avgTopCollaboration){
            $avgCollaboration=$avgMidCollaboration+$avgOpCollaboration+$avgTopCollaboration;
        }

        $avgOpOrientation=OpDigitalGovernment::avg('op_orientation');
        $avgMidOrientation=MidDigitalGovernment::avg('mid_orientation');
        $avgTopOrientation=TopDigitalGovernment::avg('orientation');
        if($avgMidOrientation || $avgOpOrientation || $avgTopOrientation){
            $avgOrientation=$avgMidOrientation+$avgOpOrientation+$avgTopOrientation;
        }

        $avgOpQualityManagement=OpDigitalGovernment::avg('op_quality_management');
        $avgMidQualityManagement=MidDigitalGovernment::avg('mid_quality_management');
        $avgTopQualityManagement=TopDigitalGovernment::avg('quality_management');
        if($avgMidQualityManagement || $avgOpQualityManagement || $avgTopQualityManagement){
            $avgQualityManagement=$avgMidQualityManagement+$avgOpQualityManagement+$avgTopQualityManagement;
        }

        $avgOpInitiative=OpDigitalGovernment::avg('op_initiative');
        $avgMidInitiative=MidDigitalGovernment::avg('mid_initiative');
        if($avgMidInitiative || $avgOpInitiative){
            $avgInitiative=$avgMidInitiative+$avgOpInitiative;
        }

        $avgTopLeadership=TopDigitalGovernment::avg('leadership');
        if($avgTopLeadership){
            $avgLeadership=$avgTopLeadership;
        }

        $digitalGovernmentAvg = [
            ['Category', 'Percentage'],
            ['Change Management', (int) $avgChangeManagement],
            ['Collaboration', (int) $avgCollaboration],
            ['Orientation', (int) $avgOrientation],
            ['Quality Management', (int) $avgQualityManagement],
            ['Initiative', (int) $avgInitiative],
            ['Leadership', (int) $avgLeadership],
        ];

        if($opManagement || $midManagement || $topManagement){
            $ManagementCount=count($opManagement)+count($midManagement)+count($topManagement);
        }

        $avgOpCommunication=OpManagement::avg('op_communication');
        $avgMidCommunication=MidManagement::avg('mid_communication');
        $avgTopCommunication=TopManagement::avg('communication');
        if($avgMidCommunication || $avgOpCommunication || $avgTopCommunication){
            $avgCommunication=$avgMidCommunication+$avgOpCommunication+$avgTopCommunication;
        }

        // $avgTopOrganizationalLeadership=TopManagement::avg('organizational_leadership');
        // if($avgTopOrganizationalLeadership){
        //     $avgOrganizationalLeadership=$avgTopOrganizationalLeadership;
        // }


        $avgOpWorkplaceManagement=OpManagement::avg('op_workplace_management');
        $avgMidWorkplaceManagement=MidManagement::avg('mid_workplace_management');
        $avgTopWorkplaceManagement=TopManagement::avg('workplace_management');
        if($avgMidWorkplaceManagement || $avgOpWorkplaceManagement || $avgTopWorkplaceManagement){
            $avgWorkplaceManagement=$avgMidWorkplaceManagement+$avgOpWorkplaceManagement+$avgTopWorkplaceManagement;
        }

        $avgMidDecisionMaking=MidManagement::avg('mid_decision_making');
        $avgTopDecisionMaking=TopManagement::avg('decision_making');
        if($avgMidDecisionMaking || $avgTopDecisionMaking){
            $avgDecisionMaking=$avgMidDecisionMaking+$avgTopDecisionMaking;
        }

        $avgOpStakeholderManagement=OpManagement::avg('op_stakeholder_management');
        $avgMidStakeholderManagement=MidManagement::avg('mid_stakeholder');
        $avgTopStakeholderManagement=TopManagement::avg('stakeholder_management');
        if($avgMidStakeholderManagement || $avgTopStakeholderManagement || $avgOpStakeholderManagement){
            $avgStakeholderManagement=$avgOpStakeholderManagement+$avgMidStakeholderManagement+$avgTopStakeholderManagement;
        }

        $avgOpTeamwork=OpManagement::avg('op_teamwork');
        $avgMidTeamwork=MidManagement::avg('mid_team_work');
        if($avgMidTeamwork || $avgOpTeamwork){
            $avgTeamwork=$avgOpTeamwork+$avgMidTeamwork;
        }

        $avgOpPersonalDevelopment=OpManagement::avg('op_personal_development');
        $avgMidPersonalDevelopment=MidManagement::avg('mid_personal_development');
        $avgTopPersonalDevelopment=TopManagement::avg('personal_development');
        if($avgMidPersonalDevelopment || $avgOpPersonalDevelopment || $avgTopPersonalDevelopment){
            $avgPersonalDevelopment=$avgOpPersonalDevelopment+$avgMidPersonalDevelopment+$avgTopPersonalDevelopment;
        }

        $avgMidCapacityBuilding=MidManagement::avg('mid_capacity_building');
        $avgTopCapacityBuilding=TopManagement::avg('capacity_building');
        if($avgMidCapacityBuilding || $avgTopCapacityBuilding){
            $avgCapacityBuilding=$avgMidCapacityBuilding+$avgTopCapacityBuilding;
        }

        $avgMidPerformanceManagement=MidManagement::avg('mid_performance_management');
        if($avgMidPerformanceManagement){
            $avgPerformanceManagement=$avgMidPerformanceManagement;
        }

        $managementAvg = [
            ['Category', 'Percentage'],
            // ['Organizational Leadership', (int) $avgOrganizationalLeadership],
            ['Workplace Management', (int) $avgWorkplaceManagement],
            ['Decision Making', (int) $avgDecisionMaking],
            ['Stakeholder Management', (int) $avgStakeholderManagement],
            ['Teamwork', (int) $avgTeamwork],
            ['Personal Development', (int) $avgPersonalDevelopment],
            ['Capacity Building', (int) $avgCapacityBuilding],
            ['Performance Management', (int) $avgPerformanceManagement],
        ];

        return view('admin.CompetancyAssessment.OperationalLayer.dashboard',compact('opIct','managementAvg','ManagementCount','digitalGovernmentAvg','digitalGovernmentCount','ictAvg','govofficials','digitalGovernmentCount','ictCount','opIctCount','assessmentInprogress','govofficialCount','assessmentCompletedCount'));
    }
}
