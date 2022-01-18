<?php 

namespace App\Services;

use App\Repositories\Interfaces\OrderInterface;
use App\Services\Interfaces\OrderServiceInterface;

class OrderService implements OrderServiceInterface {

    protected $OrderRepository;
    public function __construct(OrderInterface $OrderRepository){
        $this->OrderRepository = $OrderRepository;
    }
    public function getAll($request){
        return $this->OrderRepository->getAll($request);
    }
    public function findById($id){
        return $this->OrderRepository->findById($id);
    }
    public function create($request){
        return $this->OrderRepository->create($request);
    }
    public function update($request,$id){

    }
    public function destroy($id){

    }
    public function store($id){

    }
    public function edit($request,$id){

    }
    public function check_out($request){
        return $this->OrderRepository->check_out($request);
    }
    public function postRegister($request){
        return $this->OrderRepository->postRegister($request);
    }
    public function success($request){
        return $this->OrderRepository->success($request);
    }
  
}
