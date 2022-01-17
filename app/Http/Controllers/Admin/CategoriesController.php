<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Services\Interfaces\CategoryServiceInterface;
use App\Services\CategoryService;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    protected $CategoryService;

    public function __construct(CategoryServiceInterface $CategoryService)
    {

        $this->CategoryService  = $CategoryService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = $this->CategoryService->getAll($request);
        // $counts = DB::table('categories')->count('categories');
        return view('Backend.Admin.Categories.Index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
        // $categories = $this->CategoryService->getAll();
        $categories = [];
        return view ('Backend.Admin.Categories.Add')->with(compact('categories'));
        
=======
      
>>>>>>> 48e345b03e531127f37fd6f2e74c92158c3e46b7
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
<<<<<<< HEAD

        // $categories =$this->CategoryService->store($request);

        $addCategpries = $this->CategoryService->store($request);
        return redirect()->route('categories.index')->with('status', 'Thêm danh mục thành công !');
=======
        $this->CategoryService->store($request);
        return redirect()->route('categories.index')->with('success', 'Thêm danh mục'.$request->name.' thành công !');
>>>>>>> 48e345b03e531127f37fd6f2e74c92158c3e46b7
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
<<<<<<< HEAD
        $category = $this->CategoryService->findById($id);
        $params = [
            'category' => $category
        ];
        return view('Backend.Admin.Categories.Edit', $params);
        
=======
        $category = Category::find($id);
        $params = [
            'category' => $category
        ];
        return view('Backend.Admin.Categories.Index', $params);
>>>>>>> 48e345b03e531127f37fd6f2e74c92158c3e46b7
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
<<<<<<< HEAD
        // dd($request->all());
        $category = $this->CategoryService->update($request, $id);
    
        return redirect()->route('categories.index',[
            'category' => $category
        ])->with('status', 'Cập nhật danh mục sản phẩm thành công!');
=======
        $this->CategoryService->update($request, $id);
        return redirect()->route('categories.index')->with('warning','Cập nhật danh mục'.$request->name.'thành công');
>>>>>>> 48e345b03e531127f37fd6f2e74c92158c3e46b7
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
<<<<<<< HEAD
    
        $delete_category = $this->CategoryService->destroy($id);
        $delete_category->delete();
        Session::flash('success', 'Xóa thành công');
        return redirect()->route('categories.index');
    
=======

        $this->CategoryService->destroy($id);
        return redirect()->route('categories.index')->with('danger','Xóa sản phẩm thành công');
>>>>>>> 48e345b03e531127f37fd6f2e74c92158c3e46b7
    }
}
