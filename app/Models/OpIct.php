<?php

namespace App\Models;

use App\Models\Govofficial;
use App\Models\Operational;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OpIct extends Model
{
    use HasFactory;

    protected $fillable = [
        'op_ict_in_workplace',
        'op_information_management',
        'op_digital_citizenship',
        'marks_op_ict',
        'govofficial_id'
    ];

    public function operational(){
        return $this->belongsTo(Operational::class);
    }

    public function govofficial(){
        return $this->belongsTo(Govofficial::class);
    }
}
