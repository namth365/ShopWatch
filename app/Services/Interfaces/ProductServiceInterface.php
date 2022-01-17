<?php
namespace App\Services\Interfaces;

use App\Services\Interfaces\ServiceInterface;

interface ProductServiceInterface extends ServiceInterface{

    public function related_products($id);
    public function category($id,$request);
    public function filter_search($orderBy,$max);
    public function store($request);
    // public function productPaginate($col,$type,$number);
    public function destroy($id);
    public function update($request, $id);
    public function edit($request, $id);
  

}