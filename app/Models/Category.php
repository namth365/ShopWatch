<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'categories';
    protected $fillable = [
        'id','name','banner','parent_id'
    ];
    public $timestamps = false;

    public function product(){
        return $this->hasMany(Product::class);
    }
}
