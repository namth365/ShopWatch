<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Services\Interfaces\CartServiceInterface;
use App\Services\Interfaces\CategoryServiceInterface;
use App\Services\Interfaces\ProductServiceInterface;
use Illuminate\Http\Request;

class CartController extends Controller
{
    protected $ProductService;
    protected $CartService;
    protected $CategoryService;

    public function __construct(ProductServiceInterface $ProductService,CartServiceInterface $CartService,CategoryServiceInterface $CategoryService){
        $this->ProductService  = $ProductService;
        $this->CartService     = $CartService;
        $this->CategoryService = $CategoryService;

    }
    public function cart(){
        $value     = (empty(session('cart_code'))) ? "" : session('cart_code'); 
        $cart_code = $this->CartService->cart_code( $value );
        if(count($cart_code) === 0){
            $count = 0;
        }else{
            $count = count($cart_code);
        }
        $total     = $this->CartService->product_total($value);
        $cart_code = $this->CartService->cart_code( $value );
        return view('Frontend.Website.Cart',compact('cart_code','total','count'));
    }
    public function addtoCart(Request $request,$id){
        
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
    public function edit_cart(Request $request){

        $code = (empty(session('cart_code'))) ? "" : session('cart_code'); 
        // dd($request->all());
        $update_cart = $this->CartService->update($request,$code);
        return redirect()->route('cart')->with('success', 'Chỉnh sửa thành công');
    }
    public function destroy($id){
        // $code = (empty(session('cart_code'))) ? "" : session('cart_code'); 
        $delete_cart = $this->CartService->destroy($id);
        return redirect()->route('cart');
    }
    


}
