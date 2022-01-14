<?php

namespace App\Repositories\Eloquent;

use App\Models\User;
use App\Repositories\Interfaces\UserInterface;
use App\Repositories\Eloquent\EloquentRepository;
use Illuminate\Support\Facades\Hash;

class UserRepository extends EloquentRepository implements UserInterface
{
    public function getModel()
    {
        return User::class;
    }
    public function getAll($request)
    {
        $users = $this->model->paginate(6);
        return $users;
    }
    public function create($request)
    {
    }
    public function findById($id)
    {

        return $this->UsersRepository->findById($id);
    }
    public function destroy($id)
    {
        $user = $this->model->find($id);
        $user->delete();
        return $user;
    }
    public function update( $request,$id)
    {
        
        $users = $this->model->find($id);
        // dd($users);
        $users->name     = $request->name;
        
        $users->position = $request->position;
        $users->email    = $request->email;
        $users->password = Hash::make($request->password);
        $users->address  = $request->address;
        $users->gender   = $request->gender;
        $users->birthday = $request->birthday;
        $users->phone    = $request->phone;
        $users->save();
        return $users;
    }
    public function store($request)
    {
        $users           = new User();
        $users->name     = $request->name;
        $users->position = $request->position;
        $users->email    = $request->email;
        $users->password = Hash::make($request->password);
        $users->address  = $request->address;
        $users->gender   = $request->gender;
        $users->birthday = $request->birthday;
        $users->phone    = $request->phone;
        $users->save();
        return $users;
    }
}
