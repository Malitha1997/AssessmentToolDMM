<?php

namespace App\Models;

use App\Models\Cdio;
use App\Models\User;
use App\Models\Relatedministry;
use App\Models\TypesOfServices;
use App\Models\Govorganizationname;
use App\Models\Organizationcategory;
use App\Models\PreliminaryAssessment;
use Illuminate\Database\Eloquent\Model;
use App\Models\GovernmentOrganizationName;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Govorganizationdetail extends Model
{
    protected $fillable = [
        'govorganizationname_id',
        'organizationcategory_id',
        'relatedministry_id',
        'gov_org_address',
        'gov_org_email',
        'number_of_employee',
        'gov_org_address',
        'availablity_of_IT_unit',
        'districts_of_operations',
        'phone_number',
        'name_of_the_head',
        'head_email',
        'contact_number_of_the_head',
        'designation',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function preliminaryAssessments(){
        return $this->hasMany(PreliminaryAssessment::class);
    }

    public function relatedministry(){
        return $this->belongsTo(Relatedministry::class);
    }

    public function organizationcategory(){
        return $this->belongsTo(Organizationcategory::class);
    }

    public function typesofservices(){
        return $this->belongsTo(TypesOfServices::class);
    }

    public function cdio(){
        return $this->belongsTo(Cdio::class);
    }

    public function govorganizationname(){
    return $this->belongsTo(Govorganizationname::class);
    }

}
