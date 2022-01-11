<?php 

namespace App\Services;

use App\Repositories\Interfaces\ProductInterface;
use App\Services\Interfaces\ProductServiceInterface;

class ProductService implements ProductServiceInterface {

    protected $ProductRepository;
    public function __construct(ProductInterface $ProductRepository){
        $this->ProductRepository = $ProductRepository;
    }
    public function getAll($request){

        $products = $this->ProductRepository->getAll($request);
        return $products;
    }
    public function findById($id){
        return $this->ProductRepository->findById($id);
    }
    public function create($request){
         
    }
    public function update($request,$id){

    }
    public function destroy($id){

    }
    public function related_products($id){
       $related_products = $this->ProductRepository->related_products($id);
       return $related_products;
    }
    public function category($id,$request){
        return $this->ProductRepository->category($id,$request);
    }
    public function filter_search($orderBy,$max){
        return  $this->ProductRepository->filter_search($orderBy,$max);
       
    }
}