<?php
namespace App\Services\Interfaces;

use App\Services\Interfaces\ServiceInterface;

interface SliderServiceInterface extends ServiceInterface{
    public function store($request);
    public function edit($request,$id);
    public function search($request);
}