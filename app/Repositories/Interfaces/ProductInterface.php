<?php 
namespace App\Repositories\Interfaces;

interface ProductInterface extends RepositoryInterface{
    
    public function getAll($request);
    public function findById($id);
    public function related_products($id);
    public function category($id,$request);
    public function filter_search($orderBy);
    public function store($request);
    public function edit($request, $id);
    // public function productPaginate($col,$type,$number);
    public function destroy($id);
    public function update($request, $id);
    
    
}