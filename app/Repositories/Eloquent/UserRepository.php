<?php 

namespace App\Repositories\Eloquent;
use App\Models\User;
use App\Repositories\Interfaces\UserInterface;
use App\Repositories\Eloquent\EloquentRepository;
use Illuminate\Support\Facades\Hash;

class UserRepository extends EloquentRepository implements UserInterface 
{
    public function getModel(){
        return User::class;
    }
    public function getAll($request){
        $users = $this->model->paginate(6);
        return $users;
    }
    public function create($request)
    {
       
    }
    public function findById($id){

        return $this->UsersRepository->findById($id);
    }
    public function destroy($id){
        
    }
    public function update($id, $request){

    }
    
   
}