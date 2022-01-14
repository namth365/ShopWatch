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
    
    public function __construct( CategoryServiceInterface $CategoryService)
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
        return view ('Backend.Admin.Categories.Index',["categories"=>$categories]);
        $categories = DB::table('categories')->count('categories');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() 
    {
        // $categories = $this->CategoryService->create();
        // return view ('Backend.Admin.Categories.Index')->with(compact('categories'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $addCategpries =$this->CategoryService->store($request);
        return redirect()->route('categories.index')->with('status', 'Thêm danh mục thành công !');
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
    public function edit($request,$id)
    {
        $categories = $this->CategoryService->edit($request,$id);
        $params = [
            'categories' => $categories
        ];
        return view('Backend.Admin.Categories.Index', $params);
        
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
        $this->CategoryService->update($request, $id);
        return redirect()->route('categories.index')->with('status', 'Cập nhật danh mục sản phẩm thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    
        $delete_category = $this->CategoryService->destroy($id);
        $delete_category->delete();
        Session::flash('success', 'Xóa thành công');
        return redirect()->route('categories.index');
    
    }
}