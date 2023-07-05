<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PreliminaryAssessmentResult;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PreliminaryAssessmentReport extends Model
{
    public function preliminaryAssessmentResult(){
        return $this->belongsTo(PreliminaryAssessmentResult::class);
    }
}
