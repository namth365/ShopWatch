@extends('Backend.Index')

@section('content')

<div class="main">
	<!-- <div class="row">
        <div class="col-lg-12">
            <h1 class="text-center">Sản phẩm</h1>
        </div> -->
	<!-- <div class="container" style="width:600px"> -->
	<div class="container" style="width:800px">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-heading text-center">
						<h1>Chỉnh sửa sản phẩm</h1>
					</div>
					<div class="panel-body">
						<form method="post" enctype="multipart/form-data" action="{{route('products.update', $products->id)}}">
							<div class="row" style="margin-right:15px; margin-left:15px">
								@csrf
								@method('PUT')
								<label>Tên sản phẩm:</label>
								<input type="text" name="name" value="{{ $products->name }}" class="form-control"> <br>
								<div class="error-message">
									@if ($errors->any())
									<p style="color:red">{{ $errors->first('name') }}</p>
									@endif
								</div>

								<label for="">Giá sản phẩm</label>
								<input type="number" name="price" value="{{ $products->price }}" class="form-control" > <br>
								<div class="error-message">
									@if ($errors->any())
									<p style="color:red">{{ $errors->first('price') }}</p>
									@endif
								</div>
								<br>
								<label>Tình trạng</label>
								<select name="status" class="form-control">
									<option value="{{ $products->status }}">{{ $products->status }}</option>
									<option value="Còn hàng">Còn hàng</option>
									<option value="Hết hàng">Hết hàng</option>
								</select>
								<div class="error-message">
									@if ($errors->any())
									<p style="color:red">{{ $errors->first('status') }}</p>
									@endif
								</div>

								<label for="">Mô tả sản phẩm</label>
								<textarea  name="description" value="" >{{ $products->description }}</textarea>
								<div class="error-message">
									@if ($errors->any())
									<p style="color:red">{{ $errors->first('description') }}</p>
									@endif
								</div>

								<label for="">Ảnh</label>
								<img style="width:150px" src="{{asset('images/product-details/'.$products->image)}}" class="thumbnail">
								<input type="file" name="image"  id="upload_file_input" class="form-control">
								<div class="error-message">
									@if ($errors->any())
									<p style="color:red">{{ $errors->first('image') }}</p>
									@endif
								</div>
								<br>
								<label for="">Số lượng</label>
								<input type="number" name="quantity" value="{{ $products->quantity }}" class="form-control" >
								<div class="error-message">
									@if ($errors->any())
									<p style="color:red">{{ $errors->first('quantity') }}</p>
									@endif
								</div>
								<br>
								<label>Danh mục</label>
								<select name="category_id" >
								@if(count($categories) == 0)
										<option style="color:red">Không có dữ liệu</option>
								@else
										<option disabled selected>Chọn loại sản phẩm</option>
								    @foreach($categories as $key => $category)
										<option @if ($category->id == $products->category_id) 
													selected 
											    @endif
													value="{{ $category->id }}">{{ $category->name }}</option>
									@endforeach
								@endif
								</select>
								<div class="error-message">
									@if ($errors->any())
									<p style="color:red">{{ $errors->first('category_id') }}</p>
									@endif
								</div>
								<br>

								<label>Nhà sản xuất</label>
								<input type="text" name="supplier" value="{{ $products->supplier }}" class="form-control">
								<div class="error-message">
									@if ($errors->any())
									<p style="color:red">{{ $errors->first('supplier') }}</p>
									@endif
								</div>
								<br> <br>
								<div class="panel-footer">
									<button type="submit" class="btn btn-success"><i class="far fa-save"></i> Lưu</button>
									<a class="btn btn-danger" href="{{ route('products.index') }}"><i class="fas fa-undo"></i> Hủy</a>
								</div>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection