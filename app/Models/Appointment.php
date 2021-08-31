<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function setGoalsAttribute($val)
    {
        if($val) {
            $this->attributes['goals'] = json_encode($val);
        }
    }

    public function getGoalsAttribute($val)
    {
        if($val) {
            return json_decode($val);
        }
    }
}
