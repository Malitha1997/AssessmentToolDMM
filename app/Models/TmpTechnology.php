<?php

namespace App\Models;

use App\Models\Govorganizationdetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TmpTechnology extends Model
{
    use HasFactory;

    protected $fillable = [
        'technologyMarks',
        'technologyPercentage',
        'govorganizationdetail_id'
    ];

    public function govorganizationdetail(){
        return $this->belongsTo(Govorganizationdetail::class);
    }
}
