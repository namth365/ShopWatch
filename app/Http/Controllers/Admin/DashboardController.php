<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\Slider;
use App\Models\User;
use App\Services\Interfaces\CategoryServiceInterface;
use App\Services\Interfaces\OrderServiceInterface;
use App\Services\Interfaces\ProductServiceInterface;
use App\Services\Interfaces\SliderServiceInterface;
use App\Services\Interfaces\UserServiceInterface;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $ProductService;
    protected $CategoryService;
    protected $UserService;
    protected $OrderService;
    protected $SliderService;

    public function __construct(ProductServiceInterface $ProductService, CategoryServiceInterface $CategoryService,OrderServiceInterface $OrderService,UserServiceInterface $UserService,SliderServiceInterface $SliderService){
      $this->ProductService     = $ProductService;
      $this->CategoryService    = $CategoryService;
      $this->OrderService       = $OrderService;
      $this->UserService        = $UserService;
      $this->SliderService      = $SliderService;

    }
    public function index(){
            // echo __METHOD__;
            // die();
        $categories_count =  Category::count();
        $products_count   =  Product::count();
        $orders_count     =  Order::count();
        $employees_count  =  User::count();
        $sliders_count    =  Slider::count();

        return view('Backend.Admin.Dashboard.Dashboard',compact('categories_count','products_count','orders_count','employees_count','sliders_count'));
    }
}
