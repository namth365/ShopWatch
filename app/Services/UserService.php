<?php

namespace App\Services;

use App\Repositories\Interfaces\UserInterface;
use App\Services\Interfaces\UserServiceInterface;

class UserService implements UserServiceInterface
{
    protected $UserRepository;
    public function __construct(UserInterface $UserRepository)
    {
        $this->UserRepository = $UserRepository;
    }
    public function getAll($request)
    {
        $users = $this->UserRepository->getAll($request);
        return $users;
    }
    public function findById($id)
    {
        return $this->UserRepository->findById($id);
    }
    public function create($request)
    {
        return $this->UserRepository->create($request);
    }
    public function update($request, $id)
    {
    }
    public function destroy($id)
    {
        return $this->UserRepository->destroy($id);
    }
    public function store($request){
    }
    public function edit($request, $id){
        
    }
}