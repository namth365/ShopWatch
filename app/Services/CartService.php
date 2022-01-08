<?php 

namespace App\Services;

use App\Repositories\Interfaces\CartInterface;
use App\Services\Interfaces\CartServiceInterface;

class CartService implements CartServiceInterface {

    protected $ProductRepository;
    public function __construct(CartInterface $CartRepository){
        $this->CartRepository = $CartRepository;
    }
    public function getAll($request){

        $carts = $this->CartRepository->getAll($request);
        return $carts;
    }
    public function findById($id){
        return $this->CartRepository->findById($id);
    }
    public function create($request){

    }
    public function update($request,$id){

    }
    public function destroy($id){

    }
}