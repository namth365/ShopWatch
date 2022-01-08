<?php 
namespace App\Repositories\Interfaces;

interface CartInterface extends RepositoryInterface{
    
    public function getAll($request);
    public function findById($id);

    
}