<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ValetEvent extends Model
{
  protected $table = 'Valet_Event';
  protected $primaryKey = 'Valet_Event_ID';
  protected $fillable = ['Valet_Event_ID', 'User_ID', 'Event_ID', 'created_at', 'updated_at'];

  public function Event()
  {
    return $this->hasMany('App\Event');
  }

  public function User()
  {
    return $this->hasMany('App\User');
  }
}
