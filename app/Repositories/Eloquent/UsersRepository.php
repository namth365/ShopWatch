<?php 

namespace App\Repositories\Eloquent;
use App\Models\User;
use App\Repositories\Interfaces\UserInterface;
use App\Repositories\Eloquent\EloquentRepository;
use Illuminate\Support\Facades\Hash;

class UsersRepository extends EloquentRepository implements UserInterface {

    public function getModel(){
        return User::class;
    }
    public function create($request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        $user->gender = $request->input('gender');
        $user->birthday = $request->input('birthday');
        $user->password = Hash::make($request->input('password'));
        $user->save();
        return $user;
    }
    
   
}