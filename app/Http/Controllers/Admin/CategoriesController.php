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
        return view('Backend.Admin.Categories.Index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $categories = $this->CategoryService->getAll();
        $categories = [];
        return view ('Backend.Admin.Categories.Add')->with(compact('categories'));
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {

        $addCategpries = $this->CategoryService->store($request);
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
    public function edit($id)
    {

        $category = $this->CategoryService->findById($id);
        $params = [
            'category' => $category
        ];
        return view('Backend.Admin.Categories.Edit', $params);
        

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
        // dd($request->all());
        $category = $this->CategoryService->update($request, $id);
    
        return redirect()->route('categories.index',[
            'category' => $category
        ])->with('status', 'Cập nhật danh mục sản phẩm thành công!');

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

    public function search($request) {
        $categories = $this->CategoryService->search($request);
        return redirect()->route('categories.index',[
            'categories' => $categories
        ]);
    }
}