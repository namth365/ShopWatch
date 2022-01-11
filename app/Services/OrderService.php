<?php 

namespace App\Services;

use App\Repositories\Interfaces\OrderInterface;
use App\Services\Interfaces\OrderServiceInterface;

class OrderService implements OrderServiceInterface {

    protected $OrderRepository;
    public function __construct(OrderServiceInterface $OrderRepository){
        $this->OrderRepository = $OrderRepository;
    }
    public function getAll($request){
        return $this->OrderRepository->getAll($request);
    }
    public function findById($id){
        
    }
    public function create($request){

    }
    public function update($request,$id){

    }
    public function destroy($id){

    }
    public function check_out($request){
        return $this->OrderRepository->check_out($request);
    }
}