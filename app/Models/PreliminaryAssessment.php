<?php

namespace App\Models;

use App\Models\GovernmentOrganization;
use Illuminate\Database\Eloquent\Model;
use App\Models\PreliminaryAssessmentResult;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PreliminaryAssessment extends Model
{
    public function governmentOrganization()
    {
        return $this->belongsTo(GovernmentOrganization::class);
    }

    public function preliminaryAssessmentResults()
    {
        return $this->belongsTo(PreliminaryAssessmentResult::class);
    }
}
