<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $fillable = [
        'from', 'to'
    ];

    public function schedules(){
        return $this->hasMany(\App\Schedule::class);
    }

    public function tickets(){
        return $this->hasMany(\App\Ticket::class);
    }
}
