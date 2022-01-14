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
        return redirect()->route('categories.index')->with('status','Cập nhật thể loại thành công');

    }
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
    return $category;
    }
}