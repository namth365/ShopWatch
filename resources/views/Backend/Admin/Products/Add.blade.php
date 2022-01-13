@extends('Backend.Index')

@section('content')

<div class="main">
	<!-- <div class="row">
        <div class="col-lg-12">
            <h1 class="text-center">Sản phẩm</h1>
        </div> -->
	<!-- <div class="container" style="width:600px"> -->
	<div class="container"  style="width:800px">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-heading text-center">
						<h1>Thêm sản phẩm</h1>
					</div>
					<div class="panel-body">
						<form method="post" enctype="multipart/form-data" action="{{route('products.store')}}">
							<div class="row" style="margin-right:15px; margin-left:15px">
								@csrf
								<label>Tên sản phẩm:</label>
								<input type="text" name="name" class="form-control" placeholder="Tên sản phẩm..."> <br>
					
								<label for="">Giá sản phẩm</label>
								<input type="number" name="price" class="form-control" placeholder="Giá sản phẩm..."> <br>
					
								<br>
								<label>Tình trạng</label>
								<select name="status" class="form-control">
									<option value="">--Chọn tình trạng--</option>
									<option value="Còn hàng">Còn hàng</option>
									<option value="Hết hàng">Hết hàng</option>
								</select>

								<label for="">Mô tả sản phẩm</label>
								<textarea required name="description"></textarea>

						
								<label for="">Ảnh</label>
								<input type="file" name="image" id="upload_file_input" class="form-control">
								<br>
								<label for="">Số lượng</label>
								<input type="number" name="quantity" class="form-control" placeholder="Số lượng sản phẩm..."> 
								<br>
								<!-- <label>Danh mục</label>
								<select name="category_id" >
								
									<option value="">Đồng hồ</option>
								
								</select> -->
								<br>
								 
								<label>Nhà sản xuất</label>
								<input type="text" name="supplier" class="form-control" placeholder="Nhà sản xuất..."> 
 								<br>
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