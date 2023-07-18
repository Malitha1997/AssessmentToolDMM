<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\GovernmentOrganizationDetail;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Govorganizationname extends Model
{
    use HasFactory;

    protected $fillable = [
        'gov_org_name'
    ];

    public function governmentOrganizaionDetail(){
        return $this->hasMany(GovernmentOrganizationDetail::class);
    }
}
