<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Services\Interfaces\CartServiceInterface;
use App\Services\Interfaces\ProductServiceInterface;
use Illuminate\Http\Request;

class CartController extends Controller
{
    protected $ProductService;
    protected $CartService;

    public function __construct(ProductServiceInterface $ProductService,CartServiceInterface $CartService){
        $this->ProductService  = $ProductService;
        $this->CartService  = $CartService;

    }
    public function cart(){
        $value = (empty(session('cart_code'))) ? "" : session('cart_code');
        
        $cart_code = $this->CartService->cart_code( $value );
    
     
        return view('Frontend.Website.Cart',compact('cart_code'));
    }
    public function addtoCart(Request $request,$id){
        //mã không thay đổi
        $product = $this->ProductService->findById($id);

        if ($request->session()->has('cart_code')) {
            $cart_code = $request->session()->get('cart_code');
        } else {
            //mã tự động
            $cart_code = time();
            $request->session()->put('cart_code', $cart_code);
        }
        // var_dump($request->all());
        $data = $request->all();
        $data['code'] = $cart_code;
        $data['product_id'] = $id;
        $data['price'] = $product->price;
        $addTocart = $this->CartService->create($data);
        return redirect()->route('cart');
 
    }

}
