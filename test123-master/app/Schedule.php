<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'departure_time', 'arrival_time', 'occupation', 'price', 'destination_id', 'train_id'
    ];

    public function train()
    {
        return $this->belongsTo(Train::class, 'train_id');
    }

    public function destination()
    {
        return $this->belongsTo(Destination::class, 'destination_id');
    }

    public function tickets(){
        return $this->hasMany(\App\Ticket::class);
    }
}
