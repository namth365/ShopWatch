<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Services\Interfaces\CategoryServiceInterface;
use App\Services\Interfaces\ProductServiceInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $CategoryService;
    protected $ProductService;

    public function __construct(CategoryServiceInterface $CategoryService,ProductServiceInterface $ProductService){
        $this->CategoryService = $CategoryService;
        $this->ProductService = $ProductService;
    }
    public function index(Request $request)
    {
        $categories = $this->CategoryService->getAll($request);
        $products = $this->ProductService->getAll($request);
        // dd($categories);
        return view('Frontend.Website.Home',compact('categories','products'));
    }

    public function product_detail($id) {
        $categories = $this->CategoryService->getAll('');
        $product = $this->ProductService->findById($id);
        return view('Frontend.Website.ProductDetail',compact('product'));
    }
}