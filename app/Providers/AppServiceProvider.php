<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Page;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $footerMenu = Page::all();
        View::share('footerMenu', $footerMenu);
    }
}
