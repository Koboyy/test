<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('work_test.product.*', function ($view) {
            $view->with('page', 'Product');
        });
        view()->composer(
            [
                'work_test.product.create', 'work_test.product.edit'
            ],
            'App\Http\ViewComposers\CategoryComposer'
        );
    }
}