<?php 

namespace App\Repositories\Eloquent;
use App\Models\Order;

use App\Repositories\Eloquent\EloquentRepository;
use App\Repositories\Interfaces\OrderInterface;
use Illuminate\Support\Facades\DB;

class OrderRepository extends EloquentRepository implements OrderInterface {

    public function getModel(){
        return Order::class;
    }
    public function getAll($request){
  
    }
}