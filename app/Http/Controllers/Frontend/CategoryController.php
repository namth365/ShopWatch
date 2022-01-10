<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Services\Interfaces\CartServiceInterface;
use App\Services\Interfaces\CategoryServiceInterface;
use App\Services\Interfaces\ProductServiceInterface;
use App\Services\Interfaces\SliderServiceInterface;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  protected $ProductService;
  protected $CategoryService;
  protected $CartService;
  protected $SliderService;

  public function __construct(ProductServiceInterface $ProductService, CategoryServiceInterface $CategoryService,CartServiceInterface $CartService,SliderServiceInterface $SliderService)
  {
    $this->ProductService   = $ProductService;
    $this->CategoryService  = $CategoryService;
    $this->CartService      = $CartService;
    $this->SliderService      = $SliderService;
  }
  public function category($id, Request $request)
  {
    $code = (empty(session('cart_code'))) ? "" : session('cart_code');
    $cart_code = $this->CartService->cart_code($code);
    if (count($cart_code) === 0) {
      $count = 0;
    } else {
      $count = count($cart_code);
    }
    $products   = $this->ProductService->category($id);
    $categories = $this->CategoryService->getAll($request);
    $sliders   = $this->SliderService->getAll($id);

    return view('Frontend.Website.Home', compact('categories', 'products','count','sliders'));
  }
}
