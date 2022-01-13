<?php
namespace App\Services\Interfaces;

use App\Services\Interfaces\ServiceInterface;

interface OrderServiceInterface extends ServiceInterface{
    public function check_out($request);
    public function postRegister($request);
    public function success($request);
    public function store($request);
    public function edit($request,$id);

}