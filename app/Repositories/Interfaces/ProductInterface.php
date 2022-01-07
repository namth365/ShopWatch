<?php 
namespace App\Repositories\Interfaces;

interface ProductInterface extends RepositoryInterface{
    public function getAll($request);
    public function findById($id);

    
}