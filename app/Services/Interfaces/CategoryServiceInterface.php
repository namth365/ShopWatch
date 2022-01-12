<?php
namespace App\Services\Interfaces;

use App\Services\Interfaces\ServiceInterface;

interface CategoryServiceInterface extends ServiceInterface{
    public function store($request);
    public function edit($request,$id);
}