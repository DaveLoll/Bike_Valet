<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/*
   Filename:     index.php
   Creator:      Laravel
   Create Date:  20171010
   Purpose:      The application's initial page.
   Log:
                 20171015:     Added new form fields to 'fillable' method./AC
                 20171017      changed variables to lowerCamelCase//AC
                 20171031      Chabged variable names back to underscore//AC
*/


class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'User';
    protected $primaryKey = 'User_ID';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'User_First_Name', 'User_Last_Name', 'email', 'User_Phone_Number', 'password', 'User_Role', 'User_Status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
