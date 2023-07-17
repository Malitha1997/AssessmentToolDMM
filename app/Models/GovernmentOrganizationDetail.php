<?php

namespace App\Models;

use App\Models\Cdio;
use App\Models\User;
use App\Models\RelatedMinistry;
use App\Models\TypesOfServices;
use App\Models\OrganizationCategory;
use App\Models\PreliminaryAssessment;
use Illuminate\Database\Eloquent\Model;
use App\Models\GovernmentOrganizationName;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GovernmentOrganizationDetail extends Model
{
    protected $fillable = [
        'gov_org_name',
        'gov_org_address',
        'gov_org_email',
        'number_of_employee',
        'availablity_of_IT_unit',
        'districts_of_operations',
        'phone_number',
        'name_of_the_head',
        'contact_number_of_the_head',
        'email_of_the_head',
        'designation',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function preliminaryAssessments(){
        return $this->hasMany(PreliminaryAssessment::class);
    }

    public function relatedminitries(){
        return $this->hasMany(RelatedMinistry::class);
    }

    public function organizationcategories(){
        return $this->hasMany(OrganizationCategory::class);
    }

    public function typesofservices(){
        return $this->belongsTo(TypesOfServices::class);
    }

    public function cdio(){
        return $this->belongsTo(Cdio::class);
    }

    public function governmentOrganizationName(){
    return $this->belongsTo(GovernmentOrganizationName::class);
    }

}
