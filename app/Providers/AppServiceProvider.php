<?php

namespace App\Providers;

/*
   Filename:     register.blade.php
   Creator:      Laravel
   Create Date:  20171010
   Purpose:      Laravel's APp Service Provider page
   Log:
                 20171024:    Added ramdom generated password and shared with all views
 */

use Illuminate\Support\ServiceProvider;
use App\Option;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $password = random_bytes(3);
        var_dump(bin2hex($password);

        view()->share('password', $password );


        //


    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
