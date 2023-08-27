<?php

namespace App\Models;

use App\Models\User;
use App\Models\Govorganizationdetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Govofficial extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function govorganizationdetail()
    {
        return $this->belongsTo(Govorganizationdetail::class);
    }
}
