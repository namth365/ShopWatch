<?php 

namespace App\Repositories\Eloquent;
use App\Models\Product;

use App\Repositories\Eloquent\EloquentRepository;
use App\Repositories\Interfaces\SearchInterface;

class SearchRepository extends EloquentRepository implements SearchInterface {

    public function getModel(){
        return Product::class;
    }

    public function search($request){
       
    }
    
    
}