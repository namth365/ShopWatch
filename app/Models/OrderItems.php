<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

<<<<<<< HEAD
class OrderItems extends Model
{
    use HasFactory;
    
=======
class Order_Items extends Model
{
    use HasFactory;
    protected $table = 'order_items';
    protected $fillable = [
        'id','quantity','total','order_id','product_id'
    ];
    public $timestamps = false;

    public function product(){
        return $this->belongsTo(Product::class,'product_id','id');
    }
    public function order(){
        return $this->belongsTo(Order::class,'order_id','id');
    }
>>>>>>> dcd9d69fab929836da2d1fb2136ac1c3553e4e58
}
