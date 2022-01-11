<?php 

namespace App\Repositories\Eloquent;
use App\Models\Category;
use App\Repositories\Interfaces\CategoryInterface;
use App\Repositories\Eloquent\EloquentRepository;
use Illuminate\Support\Facades\DB;

class CategoryRepository extends EloquentRepository implements CategoryInterface {

    public function getModel(){
        return Category::class;
    }
    public function getAll($request){
        // $search = $this->CategoryRepository->getAll($request);
        // $search = $request->search;
        // if($search){
        //     $categories = $this->model->where('name','like','%' . $search. '%')->paginate(6);
        // }else{
        //     $categories = $this->model->paginate(6);
        // }

        $categories = $this->model->paginate(6);
        return $categories;
    }
    
   
}