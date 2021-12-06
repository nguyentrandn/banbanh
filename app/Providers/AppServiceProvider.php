<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\ProductType;
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
     view() -> composer('banhang.layout.header', function($view){
        $loaisp = ProductType::all();
        $view -> with('loaisp', $loaisp);
     }) ;  
    }
}
