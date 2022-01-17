@extends('Backend.Index')

@section('content')

<div class="main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header text-center">Danh mục sản phẩm {{$categories->count()}}</h1>
        </div>
    </div>
    <nav class="navbar">
        <a class="btn btn-success" href="{{route('categories.create')}}"><i class="fas fa-file-upload"></i>Thêm</a>
        <form class="form-inline" action="#" method="GET" style="display:flex">
            <input class="form-control mr-sm-2" type="search" placeholder="Tìm danh mục..." name="search"
                style="height:33px">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
        </form>
    </nav>
    @if (Session::has('success'))
    <div class="alert alert-success"> <i class="fas fa-check-square"></i> {{session::get('success')}}</div>
    @endif
    <div class="row">

        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="bg-primary">
                                    <th style="width:40%">Tên danh mục</th>
                                    <th style="width:20%">Banner</th>
                                    <th style="width:20%">Danh mục cha</th>
                                    <th style="width:20%">Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->banner }}</td>
                                    <td>{{ $category->parent_id }}</td>
                                    <td>
                                        <a href="{{route('categories.edit',$category->id)}}"
                                            class="btn btn-warning"><i class="far fa-edit"></i></a>
                                        <form action="{{route('categories.destroy',$category->id)}}" method="post"
                                            style="display:inline">
                                            @csrf
                                            @method('delete')
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#pr-<?php echo $category->id; ?>">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="pr-<?php echo $category->id; ?>" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Xóa</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Bạn có muốn xóa {{$category->name}}?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Hủy</button>
                                                            <button type="submit" class="btn btn-danger">Xóa</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class=" d-flex justify-content-end">
                            {{ $categories->links() }}
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection