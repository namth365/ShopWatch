<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests\FormExampleRequest;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItems;
use App\Services\Interfaces\CartServiceInterface;
use App\Services\Interfaces\OrderServiceInterface;
use App\Services\Interfaces\SliderServiceInterface;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use App\Providers\RouteServiceProvider;

use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    protected $CartService;
    protected $OrderService;
    protected $SliderService;
    protected $UserService;

    public function __construct(
        CartServiceInterface $CartService,
        OrderServiceInterface $OrderService,
        SliderServiceInterface $SliderService) 
        {
        $this->OrderService    = $OrderService;
        $this->CartService     = $CartService;
        $this->SliderService   = $SliderService;
     }
    public function check_out(Request $request)
    {

        $code = (empty(session('cart_code'))) ? "" : session('cart_code');
        $cart_code = $this->CartService->cart_code($code);
        if (count($cart_code) === 0) {
            $count = 0;
        } else {
            $count = count($cart_code);
        }
        $sliders   = $this->SliderService->getAll($request);
        return view('Frontend.Website.Checkout', compact('cart_code', 'count', 'sliders'));
    }
    public function success($order_id)
    {
        
        $order = Order::find($order_id);
        $order_details = OrderItems::where('order_id', $order_id)->get();
        // dd($order_details);

        return view('Frontend.Website.Success', compact('order', 'order_details'));
    }
    public function postRegister(FormExampleRequest $request)
    {
        //
        $code           = (empty(session('cart_code'))) ? "" : session('cart_code');
        $total          = $this->CartService->product_total($code);
        $request->total = $total->total;

        $orderCurrent   = $this->checkCustomerExist($request->phone, $request->email);

        if ($orderCurrent === 0) {
            // thêm vô cơ sở dữ liệu 
            $addOrders =  $this->OrderService->create($request);
            // lấy id = khi vừa Insert xog
            $order_id = DB::getPdo()->lastInsertId();
        } else {

            $order_id = $orderCurrent->id;
        }
        $cart_code = $this->CartService->cart_code($code);

        //Thêm dữ liệu vào bảng Orders
        //Lưu vào bảng chi tiết đơn hàng
        foreach ($cart_code as $cart) {
            $order_detail = new OrderItems();
            $order_detail->order_id = $order_id;
            $order_detail->product_id = $cart->product_id;
            $order_detail->total = $cart->total;
            $order_detail->quantity =  $cart->quantity;
            $order_detail->save();
        }
        $delete = Cart::where('code', $code)->delete();
        // Chuyển hướng sang trang thành công
        return redirect()->route('success', $order_id)->with('status', 'Tạo đơn hàng thành công');
    }
    public function checkCustomerExist($phone, $email)
    {

        $order = DB::table('orders')->where('phone', '=', $phone)->where('email', '=', $email)->first();

        if ($order) {
            return $order;
        } else {
            return 0;
        }
    }
}
