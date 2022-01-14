@extends('Backend.Index')

@section('content')

<div class="main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header text-center">Danh sách nhân viên</h1>
		</div>
	</div>
	<nav class="navbar">
		<form class="form-inline" action="#" method="GET" style="display:flex;margin-left: -16px;">
			@csrf
			<input class="form-control mr-sm-2" type="search" placeholder="Tìm danh mục..." name="search" style="height:33px">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
		</form>
	</nav>
	<!--/.row-->
	<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-12">
			<div class="panel panel-primary">
				<!-- <div class="panel-heading">Danh sách sản phẩm</div> -->
				<div class="panel-body">
					<div class="bootstrap-table">
						<div class="table-responsive">
							<a href="" class="btn btn-success"><i class="fas fa-user-plus"></i> Thêm nhân viên</a>
							
							<table class="table table-bordered" style="margin-top:20px;">
								<thead>
									<tr class="bg-primary">
										<th>STT</th>
										<th>Tên nhân viên</th>
										<th>Email</th>
                                        <th>Chức vụ</th>
										<th>Số điện thoại</th>	
										<th>Tùy chọn</th>
									</tr>
								</thead>
								<tbody>
								
									<tr>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										
										<td>
											<a href="" class="btn btn-warning"><i class="far fa-edit"></i></a>
											<form action="" method="post" style="display:inline">
												@csrf
												@method('DELETE')
												<!-- Button trigger modal -->
												<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#pr">
												<i class="far fa-trash-alt"></i>
												</button>

												<!-- Modal -->
												<div class="modal fade" id="pr" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
													<div class="modal-dialog" role="document">
														<div class="modal-content">
															<div class="modal-header">
																<h5 class="modal-title" id="exampleModalLabel">Xóa</h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<div class="modal-body">
																Bạn có muốn xóa ?
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
																<button type="submit" class="btn btn-danger">Xóa</button>
															</div>
														</div>
													</div>
												</div>
											</form>
										</td>
									</tr>
							
								</tbody>
							</table>
						
						</div>
					</div>
				
				</div>
			</div>
		</div>
	</div>
	<!--/.row-->
</div>
@endsection