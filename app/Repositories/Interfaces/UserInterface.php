<?php 
namespace App\Repositories\Interfaces;

interface UserInterface extends RepositoryInterface{
    public function update($request,$id);
}