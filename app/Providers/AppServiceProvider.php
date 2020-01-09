<?php

namespace App\Providers;


use App\Repositories\Category\CategoryRepositoryInterface;

use App\Repositories\Order\OrderRepository;
use App\Repositories\Order\OrderRepositoryInterface;
use App\Repositories\OrderDetail\OrderDetailRepository;
use App\Repositories\OrderDetail\OrderDetailRepositoryInterface;
use App\Repositories\Product\ProductRepository;
use App\Repositories\Product\ProductRepositoryInterface;
use App\Repositories\Size\SizeRepository;
use App\Repositories\Size\SizeRepositoryInterface;
use App\Repositories\Suggest\SuggestRepository;
use App\Repositories\Suggest\SuggestRepositoryInterface;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\Size;
class AppServiceProvider extends ServiceProvider
{
    private $categories;
    /**
     * Register any application services.
     *
     * @return void
     *
     */
    public function register()
    {
        $this->app->singleton(
            \App\Repositories\category\CategoryRepositoryInterface::class,
            \App\Repositories\category\CategoryRepository::class
        );
        $this->app->singleton(
            \App\Repositories\user\UserRepositoryInterface::class,
            \App\Repositories\user\UserRepository::class
        );
        $this->app->singleton(
            \App\Repositories\cake\CakeRepositoryInterface::class,
            \App\Repositories\cake\CakeRepository::class
        );
        $this->app->singleton(
            \App\Repositories\image\ImageRepositoryInterface::class,
            \App\Repositories\image\ImageRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->categories = Category::all();

        View::share('categories', $this->categories);
    }
}
