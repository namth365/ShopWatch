<?php 

namespace App\Repositories\Eloquent;
use App\Models\Cart;

use App\Repositories\Eloquent\EloquentRepository;
use App\Repositories\Interfaces\CartInterface;

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
}