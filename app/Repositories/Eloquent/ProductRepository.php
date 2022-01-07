<?php 

namespace App\Repositories\Eloquent;
use App\Models\Product;

use App\Repositories\Eloquent\EloquentRepository;
use App\Repositories\Interfaces\ProductInterface;

class ProductRepository extends EloquentRepository implements ProductInterface {

    public function getModel(){
        return Product::class;
    }
    public function getAll($request){
        $products = $this->model->paginate(6);
        return $products;
    }
    public function findById($id){
        return Product::find($id);
    }
}