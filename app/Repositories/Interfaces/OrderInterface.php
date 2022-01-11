<?php 
namespace App\Repositories\Interfaces;

interface OrderInterface extends RepositoryInterface{
    public function check_out($request);
}