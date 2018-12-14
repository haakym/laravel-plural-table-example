<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $newIrregularRules = ['pricing' => 'pricing'];
        
        \Doctrine\Common\Inflector\Inflector::rules('plural', [
            'irregular' => $newIrregularRules
        ]);
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
