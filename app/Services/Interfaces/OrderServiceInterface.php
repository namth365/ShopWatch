<?php
namespace App\Services\Interfaces;

use App\Services\Interfaces\ServiceInterface;

interface OrderServiceInterface extends ServiceInterface{
    public function check_out($request);
       

}