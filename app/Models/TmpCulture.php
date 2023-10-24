<?php

namespace App\Models;

use App\Models\Govorganizationdetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TmpCulture extends Model
{
    use HasFactory;

    protected $fillable = [
        'page5_marks',
        'culturePercentage',
        'govorganizationdetail_id'
    ];

    public function govorganizationdetail(){
        return $this->belongsTo(Govorganizationdetail::class);
    }
}
