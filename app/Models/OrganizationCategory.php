<?php

namespace App\Models;

use App\Models\GovernmentOrganization;
use Illuminate\Database\Eloquent\Model;
use App\Models\GovernmentOrganizationDetail;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrganizationCategory extends Model
{
    public function governmentOrganization()
    {
    return $this->belongsTo(GovernmentOrganizationDetail::class);
    }
}
