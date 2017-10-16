<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biker extends Model
{
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
}
