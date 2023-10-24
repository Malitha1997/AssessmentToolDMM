<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Govorganizationdetail;

class Resource extends Model
{
    use HasFactory;

    public function govorganizationdetail(){
        return $this->belongsTo(Govorganizationdetail::class);
    }
}
