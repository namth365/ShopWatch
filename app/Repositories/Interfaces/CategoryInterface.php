<?php 
namespace App\Repositories\Interfaces;

interface CategoryInterface extends RepositoryInterface{
    
    public function store($request);
    public function edit($request,$id);
    public function search($request);
        
    
}