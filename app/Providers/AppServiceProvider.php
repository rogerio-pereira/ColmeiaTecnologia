<?php

namespace App\Providers;

use App\Models\PostCategory;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
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
        Schema::defaultStringLength(191);

        $url = str_replace('http://', '', Request::url());
        $url = str_replace('https://', '', $url);

        $url_array = explode('.', $url);

        if($url_array[0] == 'blog') {
            $postCategory = new PostCategory();

            $categories = $postCategory->all();
            View::share('categoriesList', $categories);
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
