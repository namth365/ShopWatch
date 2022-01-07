<?php

namespace App\Providers;


use App\Repositories\Interfaces\RepositoryInterface;
use App\Repositories\Eloquent\EloquentRepository;

//Category
use App\Services\CategoryService;
use App\Services\Interfaces\CategoryServiceInterface;

use App\Repositories\Eloquent\CategoryRepository;
use App\Repositories\Interfaces\CategoryInterface;



//product
use App\Services\ProductService;
use App\Services\Interfaces\ProductServiceInterface;

use App\Repositories\Eloquent\ProductRepository;
use App\Repositories\Interfaces\ProductInterface;

//slider
use App\Services\SliderService;
use App\Services\Interfaces\SliderServiceInterface;

use App\Repositories\Eloquent\SliderRepository;
use App\Repositories\Interfaces\SliderInterface;

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
        $this->app->singleton(ProductInterface::class, ProductRepository::class);
        $this->app->singleton(SliderInterface::class, SliderRepository::class);
        /* Binding  Service*/
        $this->app->singleton(CategoryServiceInterface::class, CategoryService::class);
        $this->app->singleton(ProductServiceInterface::class, ProductService::class);
        $this->app->singleton(SliderServiceInterface::class, SliderService::class);
       
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
