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
     
        $categories = $this->model->paginate(6);
        return $categories;
    }
    public function create($request)
    {
        return Category::orderBy('id', 'DESC')->get();
    }
    public function edit($request,$id)
    {
        return Category::find($request,$id);
    }
    public function store($request)
    {
        $category = new Category();
        $category->name    = $request->name;
        $category->banner  = $request->banner;
        $category->parent_id  = $request->parent_id;

        $category->save();
    }
    public function update($request, $id)
    {
        $category = Category::find($id);
        $category->name  = $request->name;
        $category->banner = $request->banner;
        $category->parent_id  = $request->parent_id;

        $category->save();
    }
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
    return $category;
    }

    public function search($request) {
        $categories      = Category::all();
        $search = $request->search;
        if ($search) {
            $search = str_replace(' ','%', $search);
            $categories = Category::where('name', 'like','%'.$search.'%')->get();
        } else {
            $categories = Category::all();
        }

        return $categories;
    }
}