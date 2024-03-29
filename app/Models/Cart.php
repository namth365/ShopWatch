<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'carts';
    protected $fillable = [
       'id','code','quantity','price','product_id'
   ];
   public $timestamps = false;
   
   public function product(){
       return $this->hasMany(Product::class);
   }
}
