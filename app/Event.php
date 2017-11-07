<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
  protected $table = 'Event';
  protected $primaryKey = 'Event_ID';
  protected $fillable = ['Event_ID', 'Event_Name', 'Event_Start_Time', 'Event_Stop_Time', 'Event_Address', 'Event_Address_2',
    'Event_City', 'Event_State', 'Event_Zip', 'Event_Status'];
}
