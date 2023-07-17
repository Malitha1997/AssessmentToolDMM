<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\GovernmentOrganizationDetail;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GovernmentOrganizationName extends Model
{
    public function governmentOrganizaionDetail(){
        return $this->hasMany(GovernmentOrganizationDetail::class);
    }
}
