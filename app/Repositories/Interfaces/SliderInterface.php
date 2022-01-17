<?php 
namespace App\Repositories\Interfaces;

interface SliderInterface extends RepositoryInterface{
    public function store($request);
    public function edit($request,$id);
}