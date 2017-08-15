<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Session;
use App\Topic;
use App\PublishCompany;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Schema::defaultStringLength(191);
        if (\Schema::hasTable('topics')) {
            $topics = Topic::all();
            view()->share('topics',$topics);
        }

        if (\Schema::hasTable('publish_companies')) {
            $publishs = PublishCompany::all();
            view()->share('publishs',$publishs);
        }
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
