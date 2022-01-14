<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class OrderItems extends Model
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
    public function order_items(){
        return $this->hasMany(OrderItems::class,'order_id','id');
    }

}
