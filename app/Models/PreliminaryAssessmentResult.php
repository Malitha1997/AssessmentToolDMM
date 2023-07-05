<?php

namespace App\Models;

use App\Models\PreliminaryAssessment;
use Illuminate\Database\Eloquent\Model;
use App\Models\PreliminaryAssessmentReport;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PreliminaryAssessmentResult extends Model
{
    public function preliminaryAssessment(){
          return $this->belongsTo(PreliminaryAssessment::class);
    }

    public function preliminaryAssessmentReport(){
        return $this->hasOne(PreliminaryAssessmentReport::class);
    }
}
