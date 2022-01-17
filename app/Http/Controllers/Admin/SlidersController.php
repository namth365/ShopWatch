<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Interfaces\SliderServiceInterface;
use App\Services\SliderService;
use Illuminate\Http\Request;
use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class SlidersController extends Controller
{
    protected $SliderService; 
    public function __construct( SliderServiceInterface $SliderService)
    {
        $this->SliderService = $SliderService;
    } 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sliders = $this->SliderService->getAll($request); 
        return view ('Backend.Admin.Sliders.Index',["sliders"=>$sliders]);
        $sliders = DB::table('sliders')->count('sliders');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sliders = [];
        return view ('Backend.Admin.Sliders.Add')->with(compact('sliders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderRequest $request)
    {
        $addSlider = $this->SliderService->store($request);
        return redirect()->route('sliders.index')->with('status', 'Thêm Slider thành công !');
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
        $slider = $this->SliderService->findById($id);
        return view ('Backend.Admin.Sliders.Edit',['slider' => $slider]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SliderRequest $request, $id)
    {
        $slider = $this->SliderService->update($request, $id);
        return redirect()->route('sliders.index',['slider'=>$slider])->with('status','Cập nhật Slider thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_slider = $this->SliderService->destroy($id);
        $delete_slider->delete();
        Session::flash('success','Xóa thành công');
        return redirect()->route('sliders.index');
    }
}
