<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Services\Interfaces\CategoryServiceInterface;
use App\Services\Interfaces\ProductServiceInterface;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $ProductService;
    protected $CategoryService;
    public function __construct(ProductServiceInterface $ProductService,CategoryServiceInterface $CategoryService){
        $this->ProductService  = $ProductService;
        $this->CategoryService  = $CategoryService;
    }
  public function category($id,Request $request){
        $products = $this->ProductService->category($id);
        $categories = $this->CategoryService->getAll($request);
        return view('Frontend.Website.Home',compact('categories','products'));

  }
}
