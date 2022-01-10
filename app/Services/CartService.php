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
        return $this->CartRepository->create($request);
    }
    public function update($request,$id){
        return $this->CartRepository->update($request,$id);
    }
    public function destroy($id){
        return $this->CartRepository->destroy($id);
    }
    public function cart_code( $value ){
        return $this->CartRepository->cart_code($value);
    }
    public function product_total( $code ){
        return $this->CartRepository->product_total($code);
    }
    
    

}