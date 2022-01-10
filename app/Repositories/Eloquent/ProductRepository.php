<?php 

namespace App\Repositories\Eloquent;
use App\Models\Product;

use App\Repositories\Eloquent\EloquentRepository;
use App\Repositories\Interfaces\ProductInterface;
use Illuminate\Support\Facades\DB;

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
    public function related_products($id){
        $related_product = DB::table('products')->where('category_id',$id)->paginate(3);
        return $related_product;
    }
    public function category($id){
        $category = Product::where('category_id',$id)->get();
        return $category;
    }
}