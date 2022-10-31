<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'orders';
    protected $fillable = [
        'id','name','email','address','gender','phone','total'
    ];
    public $timestamps = false;

    public function orderitems(){
        return $this->hasMany(Orderitems::class);
    }
}
