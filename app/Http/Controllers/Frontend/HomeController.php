<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Services\Interfaces\CategoryServiceInterface;
use App\Services\Interfaces\ProductServiceInterface;
use App\Services\Interfaces\SliderServiceInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $CategoryService;
    protected $ProductService;
    protected $SliderService;
    protected $CartService;

    public function __construct(CategoryServiceInterface $CategoryService,ProductServiceInterface $ProductService,SliderServiceInterface $SliderService){
        $this->CategoryService = $CategoryService;
        $this->ProductService  = $ProductService;
        $this->SliderService   = $SliderService;
    }
    public function index(Request $request)
    {
        $categories = $this->CategoryService->getAll($request);
        $products   = $this->ProductService->getAll($request);
        // dd($categories);
        return view('Frontend.Website.Home',compact('categories','products'));
    }

    public function slider(Request $request){
        $categories = $this->CategoryService->getAll($request);
        $products   = $this->ProductService->getAll($request);
        $sliders    = $this->SliderService->getAll($request);
        return view('Frontend.Layouts.Slidebar',compact('sliders'));
    }
    public function product_detail($id) {
        $categories         = $this->CategoryService->getAll('');
        $product            = $this->ProductService->findById($id);
        $related_products   = $this->ProductService->related_products($product->category_id);
        return view('Frontend.Website.ProductDetail',compact('product','categories','related_products'));
    }
    public function cart(){
        return view('Frontend.Website.Cart');
    }
}

