<?php

namespace App\Http\Controllers\Auth;
/*
   Filename:     RegisterController.php
   Creator:      Laravel
   Create Date:  20171010
   Purpose:      Controls Laravel's Registration Page.
   Log:
                 20171014:    Added new form elements to validator and user//AC
                 20171017:    Changed variables to lowerCamelCase//AC
*/



use App\User;
use App\Http\Controllers\Controller;
use App\Mail\ChangePassword;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }



    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'userFirstName' => 'required|string|max:255',
            'userLastName' => 'required|string|max:255',
            'userPhoneNumber' => 'required|string',
            'email' => 'required|string|email|max:255|unique:users',
            'userRole' => 'required|in:lead,standard,admin',
            'password' => 'required|string|min:6|confirmed',
            'userStatus' => 'required|in:preregistered,registered,terminated',
        ]);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'userFirstName' => $data['userFirstName'],
            'userLastName' => $data['userLastName'],
            'userPhoneNumber' => $data['userPhoneNumber'],
            'email' => $data['email'],
            'userRole' => $data['userRole'],
            'password' => bcrypt($data['password']),
            'userStatus' => $data('userStatus'),
        ]);




        auth()->login($user);

        \Mail::to($user)->send(new ChangePassword($user));

    }
}
