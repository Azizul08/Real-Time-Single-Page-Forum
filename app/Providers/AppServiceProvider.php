<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

<<<<<<< HEAD
use Illuminate\Database\Schema\Builder;
// use Schema;

=======
>>>>>>> b75c1a90df94ab6f4564af9cea7f18a758de2b12
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
<<<<<<< HEAD
        // Schema::defaultStringLength(191);
        Builder::defaultStringLength(191);
=======
>>>>>>> b75c1a90df94ab6f4564af9cea7f18a758de2b12
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
