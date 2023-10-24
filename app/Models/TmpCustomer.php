<?php

namespace App\Models;

use App\Models\Govorganizationdetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TmpCustomer extends Model
{
    use HasFactory;

    protected $fillable = [
        'page2_marks',
        'customerPercentage',
        'govorganizationdetail_id'
    ];

    public function govorganizationdetail(){
        return $this->belongsTo(Govorganizationdetail::class);
    }
}
