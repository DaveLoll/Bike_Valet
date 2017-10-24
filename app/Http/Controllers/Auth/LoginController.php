<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

/*
   Filename:     LoginController.php
   Creator:      Laravel
   Create Date:  20171017
   Purpose:      Controls Laravel's Login Process.
   Log:
                 20171019:    Added logic to send user to reset password if userStatus is Preregistered.//AC
*/





class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

   /* $userStatus = 'preRegistered';*/

    protected $redirectTo = 'home';


   /* $userStatus = 'Registered';
    protected $redirectTo = '/volunteerWelcome';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
