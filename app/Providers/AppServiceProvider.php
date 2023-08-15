<?php

namespace App\Providers;
use App\Models\Cart;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
    //     $this->app->singleton('cart_deposit', function($app) {

    //         $storage = $app['session']; // laravel session storage
    //         $events = $app['events']; // laravel event handler
    //         $instanceName = 'cart_deposit'; // your cart instance name
    //         $session_key = 'AsASDMCks0ks1'; // your unique session key to hold cart items
    //         return new Cart(
    //             $storage,
    //             $events,
    //             $instanceName,
    //             $session_key
    //         );
    //     });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
    }
}
