<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Services\Interfaces\CartServiceInterface;
use App\Services\Interfaces\CategoryServiceInterface;
use App\Services\Interfaces\ProductServiceInterface;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $ProductService;
    protected $CategoryService;
    protected $CartService;
    public function __construct(ProductServiceInterface $ProductService, CategoryServiceInterface $CategoryService, CartServiceInterface $CartService)
    {
        $this->ProductService   = $ProductService;
        $this->CategoryService  = $CategoryService;
        $this->CartService      = $CartService;
    }
    public function product_detail($id)
    {
        $code = (empty(session('cart_code'))) ? "" : session('cart_code');
        $cart_code = $this->CartService->cart_code($code);
        if (count($cart_code) === 0) {
            $count = 0;
        } else {
            $count = count($cart_code);
        }
        $categories         = $this->CategoryService->getAll('');
        $product            = $this->ProductService->findById($id);

        $related_products   = $this->ProductService->related_products($product->category_id);
        return view('Frontend.Website.ProductDetail', compact('product', 'categories', 'related_products','count'));
    }
}