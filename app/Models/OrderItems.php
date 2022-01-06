<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
