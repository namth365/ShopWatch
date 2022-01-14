<?php

namespace App\Providers;


use App\Repositories\Interfaces\RepositoryInterface;
use App\Repositories\Eloquent\EloquentRepository;

//Category
use App\Services\CategoryService;
use App\Services\Interfaces\CategoryServiceInterface;

use App\Repositories\Eloquent\CategoryRepository;
use App\Repositories\Interfaces\CategoryInterface;



//Product
use App\Services\ProductService;
use App\Services\Interfaces\ProductServiceInterface;

use App\Repositories\Eloquent\ProductRepository;
use App\Repositories\Interfaces\ProductInterface;

//Slider
use App\Services\SliderService;
use App\Services\Interfaces\SliderServiceInterface;

use App\Repositories\Eloquent\SliderRepository;
use App\Repositories\Interfaces\SliderInterface;

//Cart
use App\Services\CartService;
use App\Services\Interfaces\CartServiceInterface;

use App\Repositories\Eloquent\CartRepository;
use App\Repositories\Interfaces\CartInterface;

//Search
use App\Services\SearchService;
use App\Services\Interfaces\SearchServiceInterface;

use App\Repositories\Eloquent\SearchRepository;
use App\Repositories\Interfaces\SearchInterface;

//Order
use App\Services\OrderService;
use App\Services\Interfaces\OrderServiceInterface;

use App\Repositories\Interfaces\OrderInterface;
use App\Repositories\Eloquent\OrderRepository;

//User
use App\Repositories\Eloquent\UsersRepository;
use App\Repositories\Interfaces\UserInterface;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //RepositoryInterface - EloquentRepository
        $this->app->singleton(RepositoryInterface::class, EloquentRepository::class);
         //CategoryInterface - CategoryRepository
        $this->app->singleton(CategoryInterface::class, CategoryRepository::class);
         //ProductInterface - ProductRepository
        $this->app->singleton(ProductInterface::class, ProductRepository::class);
         //SliderInterface - SliderRepository
        $this->app->singleton(SliderInterface::class, SliderRepository::class);
         //CartInterface - CartRepository
        $this->app->singleton(CartInterface::class,CartRepository::class);
        //SearchInterface - SearchRepository
        $this->app->singleton(SearchInterface::class, SearchRepository::class);

        //OrderInterface - OrderRepository
        $this->app->singleton(OrderInterface::class, OrderRepository::class);

        $this->app->singleton(UserInterface::class, UsersRepository::class);
        /* Binding  Service*/
        $this->app->singleton(CategoryServiceInterface::class, CategoryService::class);
        $this->app->singleton(UserServiceInterface::class, UserService::class);
        $this->app->singleton(ProductServiceInterface::class, ProductService::class);
        $this->app->singleton(SliderServiceInterface::class, SliderService::class);
        $this->app->singleton(CartServiceInterface::class, CartService::class);
        $this->app->singleton(SearchServiceInterface::class, SearchService::class);
        $this->app->singleton(OrderServiceInterface::class, OrderService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
    }
}
