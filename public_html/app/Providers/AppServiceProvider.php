<?php

namespace App\Providers;
use Exception;
use Illuminate\Support\Facades\Auth;
use Studio\Totem\Totem;
use Illuminate\Support\ServiceProvider;
use Symfony\Component\HttpKernel\Exception\HttpException;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Totem::auth(function($request) {
            // return true / false . For e.g.
            if (Auth::user()->role_id > 1) {
                return true;
            } else {
                return abort(401, "You lack the necessary Permissions to access this Page.");
            }
        });
    }

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
