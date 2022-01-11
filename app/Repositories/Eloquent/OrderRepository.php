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
    public function create($request){

        $order          = new Order();
        $order->name    =   $request->name;
        $order->phone    =   $request->phone;
        $order->email   =   $request->email;
        $order->address =   $request->address;
        $order->gender  =   $request->gender;
        $order->total   =   $request->total;
        $order->save();
       return $order;
    }
    public function getAll($request){
  
    }
    public function check_out($request){

    }
    public function postRegister($request){

    }  
     public function success($request){

    }
}