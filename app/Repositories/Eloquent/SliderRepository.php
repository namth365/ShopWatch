<?php 

namespace App\Repositories\Eloquent;
use App\Models\Slider;
use App\Repositories\Interfaces\SliderInterface;
use App\Repositories\Eloquent\EloquentRepository;

class SliderRepository extends EloquentRepository implements SliderInterface {

    public function getModel(){
        return Slider::class;
    }
    public function getAll($request){
        $sliders = $this->model->paginate(6);
        return $sliders;
    }
    public function create($request)
    {
        return Slider::orderBy('id', 'DESC')->get();
    }
    public function edit($request,$id)
    {
        return Slider::find($request,$id);
    }
    public function store($request)
    {
        $slider = new Slider();
        $slider->name    = $request->name;
        $slider->image  = $request->image;

        $slider->save();
    }
    public function update($request, $id)
    {
        $slider = Slider::find($id);
        $slider->name  = $request->name;
        $slider->banner = $request->image;

        $slider->save();
        return redirect()->route('sliders.index')->with('status','Cập nhật Slider thành công');

    }
    public function destroy($id)
    {
        $slider = Slider::find($id);
        $slider->delete();
    return $slider;
    }
}