<?php

namespace App\Models;

use App\Models\User;
use App\Models\Govofficial;
use App\Models\Govorganizationdetail;
use Illuminate\Database\Eloquent\Model;
use App\Models\GovernmentOrganizationDetail;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Govorganizationname extends Model
{
    use HasFactory;

    protected $fillable = [
        'gov_org_name'
    ];

    public function govorganizationdetail(){
        return $this->hasOne(Govorganizationdetail::class);
    }

    public function govofficials()
    {
        return $this->hasMany(GovOfficial::class, 'govorganizationname_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
