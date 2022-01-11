<?php

namespace App\Services;

use App\Repositories\Interfaces\UserInterface;
use App\Services\Interfaces\UserServiceInterface;

class UserService implements UserServiceInterface
{
    protected $UserInterface;
    public function __construct(UserInterface $UserInterface)
    {
        $this->UserInterface = $UserInterface;
    }
    public function getAll($request)
    {
    
        $sliders = $this->UserInterface->getAll($request);
        return $sliders;
    }
    public function findById($id)
    {
    }
    public function create($request)
    {
        return $this->UserInterface->create($request);
    }
    public function update($request, $id)
    {
    }
    public function destroy($id)
    {
    }
}