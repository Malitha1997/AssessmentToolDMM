<?php

namespace App\Models;

use App\Models\GovernmentOrganization;
use Illuminate\Database\Eloquent\Model;
use App\Models\Governmentorganizationdetail;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Relatedministry extends Model
{
    public function governmentOrganizationDetail()
    {
    return $this->belongsTo(Governmentorganizationdetail::class);
    }
}


