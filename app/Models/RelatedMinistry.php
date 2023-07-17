<?php

namespace App\Models;

use App\Models\GovernmentOrganization;
use Illuminate\Database\Eloquent\Model;
use App\Models\GovernmentOrganizationDetail;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RelatedMinistry extends Model
{
    public function governmentOrganizationDetail()
    {
    return $this->belongsTo(GovernmentOrganizationDetail::class);
    }
}


