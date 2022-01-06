<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table = 'roles';
    protected $fillable = [
        'id','name','display_name'
    ];
    public $timestamps = false;

    public function role_group(){
        return $this->hasMany(Role_Group::class);
    }
}
