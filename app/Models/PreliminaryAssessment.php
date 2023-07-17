<?php

namespace App\Models;

use App\Models\GovernmentOrganization;
use Illuminate\Database\Eloquent\Model;
use App\Models\PreliminaryAssessmentResult;
use App\Models\GovernmentOrganizationDetail;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PreliminaryAssessment extends Model
{
    public function governmentOrganizationDetail()
    {
        return $this->belongsTo(GovernmentOrganizationDetail::class);
    }

    public function preliminaryAssessmentResults()
    {
        return $this->belongsTo(PreliminaryAssessmentResult::class);
    }
}
