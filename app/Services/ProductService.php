<?php 

namespace App\Services;

use App\Repositories\Interfaces\ProductInterface;
use App\Services\Interfaces\ProductServiceInterface;

class ProductService implements ProductServiceInterface {

    protected $CategoryRepository;
    public function __construct(ProductInterface $ProductRepository){
        $this->ProductRepository = $ProductRepository;
    }
    public function getAll($request){

        $products = $this->ProductRepository->getAll($request);
        return $products;
    }
    public function findById($id){

    }
    public function create($request){

    }
    public function update($request,$id){

    }
    public function destroy($id){

    }
}
