<?php

namespace App\Providers;

use App\jenisriasan;
use Illuminate\Support\ServiceProvider;

class dynamictablejenisriasProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*',function($view){
            $view->with('jenisrias_array',jenisriasan::all());
        });
    }
}
