<?php
namespace App\Services\Interfaces;

use App\Services\Interfaces\ServiceInterface;

interface CartServiceInterface extends ServiceInterface{
    public function cart_code( $value );
    public function product_total( $code );
}