<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    protected $fillable = [
        'brand', 'version', 'number_of_seats', 'type'
    ];

    public function schedules(){
        return $this->hasMany(\App\Schedule::class);
    }
}
