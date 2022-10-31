<?php 
namespace App\Repositories\Interfaces;

interface SearchInterface extends RepositoryInterface{
    public function search($request);
}