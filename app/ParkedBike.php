<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParkedBike extends Model
{
    protected $table = 'Parked_Bike';
    protected $primaryKey = 'Parked_Bike_ID';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Event_ID', 'Ticket', 'Tag_Number', 'Comment', 'Biker_ID', 'Status',
    ];

    public function Biker()
    {
        return $this->hasMany('App\Biker');
    }
    public function event()
    {
        return $this->belongsToMany('App\Event', 'Event_ID');
    }
}
