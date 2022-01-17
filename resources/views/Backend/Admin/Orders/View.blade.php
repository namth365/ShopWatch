@extends('Backend.Index')
@section('content')

<h1>Đơn hàng của {{ $order->name }} </h1>

<div class="col-12">
    <div class="card">
        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

            <div class="row">
                <div class="col-lg-6">
                    <table class="table">
                        <tr>
                            <td>Ngày đặt hàng:</td>
                            <td>{{ date('d/m/Y',strtotime($order->created_at)) }}</td>
                        </tr>
                        <tr>
                            <td>Người đặt hàng:</td>
                            <td>{{ $order->name }} </td>
                        </tr>
                        <tr>
                            <td>Số điện thoại người đặt hàng:</td>
                            <td>{{ $order->phone }}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-lg-6">
                    <table class="table">
                        <tr>
                            <td>Tổng giá trị đơn hàng:</td>
                            <td>{{ number_format ($order->total) }}</td>
                        </tr>
                        <tr>
                            <td>Địa Chỉ</td>
                            <td>{{$order->address}} </td>

                        </tr>
                        <tr>
                            <td>Trạng thái đơn hàng:</td>
                            <td>
                                @if ($order->status == 0)
                                Đang chờ
                                @elseif ($order->status == 1)
                                Đang vận chuyển
                                @else
                                Đã hoàn thành
                                @endif
                            </td>

                        </tr>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <table class="table">
                        <thead>
                            <tr class="text-center text-danger">
                                <td>Đơn Hàng</td>
                                <td>Sản Phẩm</td>
                                <td>Hình Ảnh</td>
                                <td>Số Lượng</td>
                                <td>Tổng Tiền</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order->orderitems as $order_item)
                            <tr class="text-center">
                                <td>{{$order_item->order_id }}</td>
                                <td>{{$order_item->product->name}}</td>
                                <td><img src="{{ asset('images/product-details/'.$order_item->product->image) }}" alt=""
                                        style="width: 150px"></td>
                                <td>{{$order_item->product->quantity}}</td>
                                <td>{{ number_format ($order_item->total) }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection