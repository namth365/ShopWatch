<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Services\Interfaces\CategoryServiceInterface;
use App\Services\Interfaces\ProductServiceInterface;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProductsController extends Controller
{
    protected $ProductService;
    protected $CategoryService;

    public function __construct(ProductServiceInterface $ProductService, CategoryServiceInterface $CategoryService){
      $this->ProductService = $ProductService;
      $this->CategoryService = $CategoryService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = $this->ProductService->getAll($request);
        $params = [
            'products'=>$products
        ];
        return view ('Backend.Admin.Products.Index',$params);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // echo __METHOD__;
        // die();
        $categories = $this->CategoryService->getAll($request);
        $params = [
            'categories'=>$categories
        ];
        return view ('Backend.Admin.Products.Add',$params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
      
       $this->ProductService->store($request);
       return redirect()->route('products.index')->with('success', 'Thêm sản phẩm' .$request->name. 'thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::find($id);
        $categories = Category::all();
        $params = [
            'products' => $products,
            'categories' => $categories
        ];
        return view('Backend.Admin.Products.Edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $this->ProductService->update($request, $id);
        return redirect()->route('products.index')->with('success','Cập nhật'.$request->name.'thành công');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->ProductService->destroy($id);
        return redirect()->route('products.index')->with('success', 'Xóa sản phẩm thành công');
    }
}
