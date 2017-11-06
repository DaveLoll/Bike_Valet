<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Biker extends Model
{
    use Notifiable;
    protected $table = 'Biker';
    protected $primaryKey = 'Biker_ID';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Biker_Email', 'Biker_Zip', 'Biker_Phone_Number', 'Biker_First_Name', 'Biker_Last_Name',
    ];
    public function routeNotificationForNexmo()
    {
        return $this->Biker_Phone_Number;
    }
}
