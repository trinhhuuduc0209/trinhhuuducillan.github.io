<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use App\Helper\Cart;
use App\Models\Category;
use View;
use Auth;
use Hash;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // View::share([
        //     'cats' => Category::orderBy('name','ASC')->get(),
        //     'carts' => new Cart(),
        // ]);
        View::composer('*',function($view){
            $view->with([
                'cats' => Category::orderBy('name','ASC')->get(),
                'carts' => new Cart(),
            ]);
        });
        Validator::extend('OldPasswold',function ($attributes,$value,$parameter,$validator){
            return Hash::check($value, Auth::guard('admin')->user()->password);
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
