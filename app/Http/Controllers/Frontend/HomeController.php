<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Services\Interfaces\CartServiceInterface;
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

    public function __construct(CategoryServiceInterface $CategoryService,ProductServiceInterface $ProductService,SliderServiceInterface $SliderService,CartServiceInterface $CartService){
        $this->CategoryService = $CategoryService;
        $this->ProductService  = $ProductService;
        $this->SliderService   = $SliderService;
        $this->CartService     = $CartService;
    }
    public function index(Request $request)
    {
        $code = (empty(session('cart_code'))) ? "" : session('cart_code'); 
        $cart_code = $this->CartService->cart_code( $code );
        if(count($cart_code) === 0){
            $count = 0;
        }else{
            $count = count($cart_code);
        }
        
        $categories = $this->CategoryService->getAll($request);
        $products   = $this->ProductService->getAll($request);
        // dd($categories);
        return view('Frontend.Website.Home',compact('categories','products','count'));
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
 
}