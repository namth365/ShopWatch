<?php

namespace App\Repositories\Eloquent;

use App\Models\Product;

use App\Repositories\Eloquent\EloquentRepository;
use App\Repositories\Interfaces\ProductInterface;
use Illuminate\Support\Facades\DB;

class ProductRepository extends EloquentRepository implements ProductInterface
{

    public function getModel()
    {
        return Product::class;
    }
    public function getAll($request)
    {
        $products = $this->model->paginate(6);

        return $products;
    }
    public function findById($id)
    {
        return $this->model->find($id);
    }
    public function related_products($id)
    {
        $related_product = DB::table('products')->where('category_id', $id)->paginate(3);
        return $related_product;
    }
    public function category($id, $request)
    {
        $search = $request->search;
        if ($search) {
            $products = $this->model->where('category_id', $id)->where('name', 'like', '%' . $search . '%')->paginate(6);
        } else {
            $products = $this->model->where('category_id', $id)->paginate(6);
        }
        // $category = Product::where('category_id', $id)->paginate(6);
        return $products;
    }
    public function filter_search($orderBy, $max)
    {
        $filter_search = DB::table('products')->where('price', '>', "" . $orderBy . "")->where("price", "<=", "" . $max . "")->orderBy('price', "ASC")->paginate(6);

        return $filter_search;
    }
    public function store($request)
    {
      
        $data = $request->only('name', 'price', 'category_id', 'status','description','supplier','quantity');
        if ($request->hasFile('image')) {
            $get_image          = $request->image;
            //tạo file upload trong public để chạy ảnh
            $path               = 'images/product-details';
            $get_name_image     = $get_image->getClientOriginalName(); //abc.jpg 
            //explode "." [abc,jpg]
            $name_image         = current(explode('.', $get_name_image)); //trả về phần tử thứ 1 của mảng
            //getClientOriginalExtension: tạo đuôi ảnh
            $new_image          = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            //abc nối số ngẫu nhiên từ 0-99, nối "." ->đuôi file jpg
            $get_image->move($path, $new_image); //chuyển file ảnh tới thư mục
            $data['image']   = $new_image;
        }
        // dd($data);
         Product::create($data);
     
        return redirect()->route('products.index')->with('success', 'Thêm sản phẩm'.$request->name. 'thành công');
    }
    public function edit($request, $id)
    {
    }
    public function productPaginate($col,$type,$number){
        $products = Product::orderBy($col,$type)->paginate($number);
        return $products;
    }
    public function destroy($id){
       
        $product = $this->model->find($id);
        $product->delete();
        return $product;
    }
    public function update($request, $id){
        $product =  $this->model->find($id);
        $new_image = $product->image;
        if ($request->hasFile('image')) {
            $get_image          = $request->image;
            $path               = 'images/product-details';
            $get_name_image     = $get_image->getClientOriginalName();
            $name_image         = current(explode('.', $get_name_image));
            $new_image          = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move($path, $new_image);
        }
        $product->name = $request->name;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->supplier = $request->supplier;
        $product->status = $request->status;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->image = $new_image;
        $product->save();
        return redirect()->route('products.index')->with('success', 'Sửa dữ liệu thành công');
    }
 
}
