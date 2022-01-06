<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'products';
    protected $fillable = [
        'id','name','image','price','quantity','status','supplier','description','category_id'
    ];
    public $timestamps = false;

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
