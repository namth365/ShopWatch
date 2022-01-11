<?php

namespace App\Repositories\Eloquent;

use App\Models\Product;

use App\Repositories\Eloquent\EloquentRepository;
use App\Repositories\Interfaces\ProductInterface;
use Illuminate\Support\Facades\DB;

class ProductRepository extends EloquentRepository implements ProductInterface
{

    public function getModel()
    {
        return Product::class;
    }
    public function getAll($request)
    {
        $products = $this->model->paginate(6);

        return $products;
    }
    public function findById($id)
    {
        return Product::find($id);
    }
    public function related_products($id)
    {
        $related_product = DB::table('products')->where('category_id', $id)->paginate(3);
        return $related_product;
    }
    public function category($id,$request)
    {
        $search = $request->search;
        if($search){
            $products = $this->model->where('category_id', $id)->where('name','like','%' . $search. '%')->paginate(6);
        }else{
            $products = $this->model->where('category_id', $id)->paginate(6);
        }
        // $category = Product::where('category_id', $id)->paginate(6);
        return $products;
    }
    public function filter_search($orderBy,$max)
    {
        $filter_search = DB::table('products')->where('price','>', "" . $orderBy . "")->where("price","<=", "" . $max . "")->orderBy('price', "ASC")->paginate(6);
       
        return $filter_search;
    }
}
