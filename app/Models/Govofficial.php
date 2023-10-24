<?php

namespace App\Models;

use App\Models\User;
use App\Models\OpIct;
use App\Models\MidIct;
use App\Models\TopIct;
use App\Models\OpTeamwork;
use App\Models\MidTeamWork;
use App\Models\Operational;
use App\Models\OpInitiative;
use App\Models\OpManagement;
use App\Models\MidInitiative;
use App\Models\MidManagement;
use App\Models\OpOrientation;
use App\Models\TopLeadership;
use App\Models\TopManagement;
use App\Models\MidOrientation;
use App\Models\MidStakeholder;
use App\Models\TopOrientation;
use App\Models\OpCollaboration;
use App\Models\OpCommunication;
use App\Models\MidCollaboration;
use App\Models\MidCommunication;
use App\Models\OpIctInWorkPlace;
use App\Models\TopCollaboration;
use App\Models\TopCommunication;
use App\Models\TopHumanResource;
use App\Models\MidDecisionMaking;
use App\Models\MidIctInWorkplace;
use App\Models\TopDecisionMaking;
use App\Models\TopIctInWorkplace;
use App\Models\OpChangeManagement;
use App\Models\Govorganizationname;
use App\Models\MidCapacityBuilding;
use App\Models\MidChangeManagement;
use App\Models\OpDigitalGovernment;
use App\Models\OpQualityManagement;
use App\Models\TopCapacityBuilding;
use App\Models\TopChangeManagement;
use App\Models\MidDigitalGovernment;
use App\Models\MidProjectManagement;
use App\Models\MidQualityManagement;
use App\Models\OpDigitalCitizenship;
use App\Models\TopDigitalGovernment;
use App\Models\TopQualityManagement;
use App\Models\Govorganizationdetail;
use App\Models\MidDigitalCitizenship;
use App\Models\OpPersonalDevelopment;
use App\Models\OpWorkplaceManagement;
use App\Models\TopDigitalCitizenship;
use App\Models\MidPersonalDevelopment;
use App\Models\MidWorkplaceManagement;
use App\Models\TopPersonalDevelopment;
use App\Models\TopWorkplaceManagement;
use App\Models\OpStakeholderManagement;
use Illuminate\Database\Eloquent\Model;
use App\Models\MidInformationManagement;
use App\Models\MidPerformanceManagement;
use App\Models\OpInformationManagements;
use App\Models\TopInformationManagement;
use App\Models\TopPerformanceManagement;
use App\Models\TopStakeholderManagement;
use App\Models\TopOrganizationalLeadership;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Govofficial extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function govorganizationdetail()
    {
        return $this->belongsTo(Govorganizationdetail::class);
    }

    public function govorganizationname(){
        return $this->belongsTo(Govorganizationname::class);
    }

    public function operational(){
        return $this->hasOne(Operational::class);
    }

    public function opChangeManagement(){
        return $this->hasOne(OpChangeManagement::class);
    }

    public function opCollaboration(){
        return $this->hasOne(OpCollaboration::class);
    }

    public function opOrientation(){
        return $this->hasOne(OpOrientation::class);
    }

    public function opQualityManagement(){
        return $this->hasOne(OpQualityManagement::class);
    }

    public function opInitiative(){
        return $this->hasOne(OpInitiative::class);
    }

    public function opDigitalGovernment(){
        return $this->hasOne(OpDigitalGovernment::class);
    }

    public function opDigitalCitizenship(){
        return $this->hasOne(OpDigitalCitizenship::class);
    }

    public function opIctInWorkPlace(){
        return $this->hasOne(OpIctInWorkPlace::class);
    }

    public function opInformationManagement(){
        return $this->hasOne(OpInformationManagements::class);
    }

    public function opIct(){
        return $this->hasOne(OpIct::class);
    }

    public function opCommunication(){
        return $this->hasOne(OpCommunication::class);
    }

    public function opPersonalDevelopment(){
        return $this->hasOne(OpPersonalDevelopment::class);
    }

    public function opStakeholderManagement(){
        return $this->hasOne(OpStakeholderManagement::class);
    }

    public function opTeamwork(){
        return $this->hasOne(OpTeamwork::class);
    }

    public function opWorkplaceManagement(){
        return $this->hasOne(OpWorkplaceManagement::class);
    }

    public function opManagement(){
        return $this->hasOne(OpManagement::class);
    }

    public function midIctInWorkplace(){
        return $this->hasOne(MidIctInWorkplace::class);
    }

    public function midInformationManagement(){
        return $this->hasOne(MidInformationManagement::class);
    }

    public function midDigitalCitizenship(){
        return $this->hasOne(MidDigitalCitizenship::class);
    }

    public function midIct(){
        return $this->hasOne(MidIct::class);
    }

    public function midChangeManagement(){
        return $this->hasOne(MidChangeManagement::class);
    }

    public function midCollaboration(){
        return $this->hasOne(MidCollaboration::class);
    }

    public function midInitiative(){
        return $this->hasOne(MidInitiative::class);
    }

    public function midOrientation(){
        return $this->hasOne(MidOrientation::class);
    }

    public function midProjectManagement(){
        return $this->hasOne(MidProjectManagement::class);
    }

    public function midQualityManagement(){
        return $this->hasOne(MidQualityManagement::class);
    }

    public function midDigitalGovernment(){
        return $this->hasOne(MidDigitalGovernment::class);
    }

    public function midCommunication(){
        return $this->hasOne(MidCommunication::class);
    }

    public function midWorkplaceManagement(){
        return $this->hasOne(MidWorkplaceManagement::class);
    }

    public function midDecisionMaking(){
        return $this->hasOne(MidDecisionMaking::class);
    }

    public function midCapacityBuilding(){
        return $this->hasOne(MidCapacityBuilding::class);
    }

    public function midStakeholder(){
        return $this->hasOne(MidStakeholder::class);
    }

    public function midPerformanceManagement(){
        return $this->hasOne(MidPerformanceManagement::class);
    }

    public function midTeamWork(){
        return $this->hasOne(MidTeamWork::class);
    }

    public function midPersonalDevelopment(){
        return $this->hasOne(MidPersonalDevelopment::class);
    }

    public function midManagement(){
        return $this->hasOne(MidManagement::class);
    }

    public function topIct(){
        return $this->hasOne(TopIct::class);
    }

    public function topIctInWorkplace(){
        return $this->hasOne(TopIctInWorkplace::class);
    }

    public function topInformationManagement(){
        return $this->hasOne(TopInformationManagement::class);
    }

    public function topDigitalCitizenship(){
        return $this->hasOne(TopDigitalCitizenship::class);
    }

    public function topDigitalGovernment(){
        return $this->hasOne(TopDigitalGovernment::class);
    }

    public function topProjectManagement(){
        return $this->hasOne(TopProjectManagement::class);
    }

    public function topChangeManagement(){
        return $this->hasOne(TopChangeManagement::class);
    }

    public function topCollaboration(){
        return $this->hasOne(TopCollaboration::class);
    }

    public function topOrientation(){
        return $this->hasOne(TopOrientation::class);
    }

    public function topQualityManagement(){
        return $this->hasOne(TopQualityManagement::class);
    }

    public function topLeadership(){
        return $this->hasOne(TopLeadership::class);
    }

    public function topManagement(){
        return $this->hasOne(TopManagement::class);
    }

    public function topOrganizationalLeadership(){
        return $this->hasOne(TopOrganizationalLeadership::class);
    }

    public function topCommunication(){
        return $this->hasOne(TopCommunication::class);
    }

    public function topWorkplaceManagement(){
        return $this->hasOne(TopWorkplaceManagement::class);
    }

    public function topDecisionMaking(){
        return $this->hasOne(TopDecisionMaking::class);
    }

    public function topCapacityBuilding(){
        return $this->hasOne(TopCapacityBuilding::class);
    }

    public function topStakeholder(){
        return $this->hasOne(TopStakeholderManagement::class);
    }

    public function topPerformanceManagement(){
        return $this->hasOne(TopPerformanceManagement::class);
    }

    public function topPersonalDevelopment(){
        return $this->hasOne(TopPersonalDevelopment::class);
    }

    public function topHumanResource(){
        return $this->hasOne(TopHumanResource::class);
    }
}
