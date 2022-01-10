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
    public function update($request, $id){
      // var_dump($id);
      // dd($request->all());
      $code = (empty(session('cart_code'))) ? "" : session('cart_code'); 
      foreach ($request['product_id'] as $key => $product_id) {
        //tìm sql với điều kiện name = product->id và code = id để lấy được id của sản phẩm,tên sản phẩm  
        $carts = DB::table('carts')->join('products','carts.product_id','products.id')
        ->select('products.name','products.id')
        ->where('products.name',$product_id)
        ->where('code',$id)->first();
        // dd($carts);
        $cart_product = Cart::where('product_id', '=',$carts->id)->where('code', '=', $id)->first();
        // dd($cart_product);
        // dd($request->quantity[$key]);
        $cart_product['quantity'] = $request->quantity[$key];
        $cart_product->save();
       }
       return $cart_product;
   
    }
    public function product_total($code){
      $total = DB::table('carts')->select(DB::raw('sum(price * quantity) as total' ))->where('code', $code)->first();
      return $total;
    }
    public function destroy($id){
      $delete_cart = Cart::findById($id);
      return $delete_cart;
    }
}