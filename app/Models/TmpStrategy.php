<?php

namespace App\Models;

use App\Models\Govorganizationdetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TmpStrategy extends Model
{
    use HasFactory;

    protected $fillable=[
        'page4_marks',
        'strategyPercentage',
        'govorganizationdetail_id'
    ];

    public function govorganizationdetail(){
        return $this->belongsTo(Govorganizationdetail::class);
    }
}
