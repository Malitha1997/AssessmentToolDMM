<?php

namespace App\Models;

use App\Models\Govorganizationdetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Percentage extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer',
        'strategy',
        'technology',
        'operation',
        'culture'
    ];

    public function govorganizationdetail(){
        return $this->belongsTo(Govorganizationdetail::class);
    }
}
