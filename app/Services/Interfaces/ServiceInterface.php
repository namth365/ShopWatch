<?php 
namespace App\Services\Interfaces;

interface ServiceInterface {

    public function getAll($request);
    public function findById($id);
    public function create($request);
    public function update($request,$id);
    public function destroy($id);
    public function store($request);
    public function edit($request,$id);

}