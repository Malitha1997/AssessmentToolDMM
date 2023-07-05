<?php

namespace App\Models;

use App\Models\User;
use App\Models\PreliminaryAssessment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GovernmentOrganization extends Model
{
    protected $fillable = [
        'gov_org_name',
        'organization_category',
        'number_of_employee',
        'related_ministry',
        'types_of_services_provide',
        'districts_of_operations',
        'phone_number',
        'email',
        'designation',
        'cio_name',
        'cio_email',
        'cio_contact_no'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function preliminaryAssessments()
    {
        return $this->hasMany(PreliminaryAssessment::class);
    }


}
