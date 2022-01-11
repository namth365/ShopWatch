<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Services\Interfaces\CartServiceInterface;
use App\Services\Interfaces\OrderServiceInterface;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $CartService;
    protected $OrderService;
    
    public function __construct(CartServiceInterface $CartService,OrderServiceInterface $OrderService){
        $this->OrderService = $OrderService;
        $this->CartService     = $CartService;
    }
    public function check_out(){
        $code = (empty(session('cart_code'))) ? "" : session('cart_code');
        $cart_code = $this->CartService->cart_code($code);
        if (count($cart_code) === 0) {
            $count = 0;
        } else {
            $count = count($cart_code);
        }
        return view('Frontend.Website.Checkout',compact('count'));
    }
}
