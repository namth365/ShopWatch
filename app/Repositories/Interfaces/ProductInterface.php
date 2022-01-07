<?php 
namespace App\Repositories\Interfaces;

interface ProductInterface extends RepositoryInterface{
    public function getAll(Request $request);
    public function findById($id);

    
}