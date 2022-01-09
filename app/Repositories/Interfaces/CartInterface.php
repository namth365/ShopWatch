<?php 
namespace App\Repositories\Interfaces;

interface CartInterface extends RepositoryInterface{
    
    public function getAll($request);
    public function findById($id);
    public function cart_code( $value );
    public function product_total($code);
    
}