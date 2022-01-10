<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Services\Interfaces\CartServiceInterface;
use App\Services\Interfaces\CategoryServiceInterface;
use App\Services\Interfaces\ProductServiceInterface;
use App\Services\Interfaces\SliderServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $sliders    = $this->SliderService->getAll($request);
        // dd($categories);
        return view('Frontend.Website.Home',compact('categories','products','count','sliders'));
    }
    public function search(Request $request){
        // dd($request->all());
        $key_word = (empty(session('cart_code'))) ? "" : session('cart_code'); 
        $carts = $this->CartService->cart_code( $key_word );
        if(count($carts) === 0){
            $count = 0;
        }else{
            $count = count($carts);
        }
        $search    = $request->search;
        $categories = $this->CategoryService->getAll($request);
        $sliders    = $this->SliderService->getAll($request);
        $products   = $this->ProductService->getAll($request);
        $products = DB::table('products')->where('name','like','%'.$search.'%')->paginate(6);
       
        return view('Frontend.Website.Home', compact('categories','products','count','sliders'));
    }
  
}