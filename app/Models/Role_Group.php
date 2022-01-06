<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role_Group extends Model
{
    use HasFactory;
    protected $table = 'role_groups';
    protected $fillable = [
        'id','role_id','group_id'
    ];
    public $timestamp = false;

    public function role(){
        return $this->belongsTo(Role::class,'role_id','id');
    }
    public function group(){
        return $this->belongTo(Group::class,'group_id','id');
    }
}
