<?php 

namespace App\Repositories\Eloquent;
use App\Models\Cart;

use App\Repositories\Eloquent\EloquentRepository;
use App\Repositories\Interfaces\CartInterface;
use Illuminate\Support\Facades\DB;

class CartRepository extends EloquentRepository implements CartInterface {

    public function getModel(){
        return Cart::class;
    }
    public function getAll($request){
        $carts = $this->model->get();
        return $carts;
    }
    public function findById($id){
        return Cart::find($id);
    }
    public function create($data){
      $products = Cart::where('code', $data['code'])->get() ;
      foreach($products as $product){
        if($product->product_id == $data['product_id']){
          $product = Cart::where('code', $data['code'])->where('product_id', $product->product_id)->first();
          $product->quantity = $data['quantity'] + $product->quantity;
          $product->save();
          return $product;
          break;
        }
      }  
      $cart = new Cart();
      $cart->code = $data['code'];
      $cart->quantity = $data['quantity'];
      $cart->price = $data['price'];
      $cart->product_id = $data['product_id'];
      $cart->save();
      return $cart;
    }
    public function cart_code( $value ){
    
        $carts = DB::table('carts')->join('products','carts.product_id','products.id')
        ->select('products.name','products.image','carts.*',DB::raw('(carts.price * carts.quantity) as total'))
        ->where('code',$value)
        ->get();
        return $carts;
    }
}