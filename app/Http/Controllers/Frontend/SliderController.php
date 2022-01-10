<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Services\Interfaces\CategoryServiceInterface;
use App\Services\Interfaces\SliderServiceInterface;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    protected $CategoryService;
    protected $SliderService;
    public function __construct(SliderServiceInterface $SliderService, CategoryServiceInterface $CategoryService)
    {
      $this->CategoryService  = $CategoryService;
      $this->SliderService      = $SliderService;
    }
    public function category($id, Request $request)
    {
      $categories = $this->CategoryService->getAll($request);
      return view('Frontend.Website.Home', compact('categories'));
    }
    public function slider(Request $request){

        $categories = $this->CategoryService->getAll($request);
        $sliders    = $this->SliderService->getAll($request);
        return view('Frontend.Layouts.Slidebar',compact('sliders'));
    
    }
    
}
