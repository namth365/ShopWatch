<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Services\Interfaces\CategoryServiceInterface;
use App\Services\Interfaces\ProductServiceInterface;
use Illuminate\Http\Request;

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
        $categories = $this->CategoryService->getAll($request);
        $products = $this->ProductService->getAll($request);
        $params = [
            'products'=>$products,
            'categories'=>$categories
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
        // $categories = $this->CategoryService->getAll($request);
        // $params = [
        //     'categories'=>$categories
        // ];
        return view ('Backend.Admin.Products.Add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only('name', 'price', 'category_id', 'status','description','supplier','quantity');


        if ($request->hasFile('image')) {
            $get_image          = $request->image;
            //tạo file upload trong public để chạy ảnh
            $path               = 'upload';
            $get_name_image     = $get_image->getClientOriginalName(); //abc.jpg 
            //explode "." [abc,jpg]
            //
            $name_image         = current(explode('.', $get_name_image)); //trả về phần tử thứ 1 của mảng
            //getClientOriginalExtension: tạo đuôi ảnh
            $new_image          = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            //abc nối số ngẫu nhiên từ 0-99, nối "." ->đuôi file jpg
            $get_image->move($path, $new_image); //chuyển file ảnh tới thư mục
            $data['image']   = $new_image;
        }
        // dd($data);
        Product::create($data);
        return redirect()->route('Products.index')->with('success', 'Thêm sản phẩm thành công');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
