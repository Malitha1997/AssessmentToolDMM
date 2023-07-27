<?php

namespace App\Models;

use App\Models\Govorganizationdetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Operation extends Model
{
    use HasFactory;

    public function govorganizationdetail(){
        return $this->belongsTo(Govorganizationdetail::class);
    }
}
