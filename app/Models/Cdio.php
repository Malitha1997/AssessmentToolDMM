<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\GovernmentOrganizationDetail;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cdio extends Model
{
    public function governmentOrganization(){
        return $this->hasOne(GovernmentOrganizationDetail::class);
    }
}
