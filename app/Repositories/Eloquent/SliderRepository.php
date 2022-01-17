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
     
        $sliders = $this->model->paginate(10);
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
        if ($request->hasFile('image'))
        {
            $get_image          = $request->image;
            $path               ='images/sliders/';
            $get_name_image     = $get_image->getClientOriginalName();
            $name_image         = current(explode('.', $get_name_image));
            $new_image          = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path, $new_image);
            $slider->image       = $new_image;
        }
        $slider->save();
    }
    public function update($request, $id)
    {
        $slider = Slider::find($id);
        $slider->name  = $request->name;
        $slider->image = $request->image;
        $get_image = $request->image;
        if ($request->hasFile('image')) {
            $path ='images/sliders/'.$slider->image;
            $path ='images/sliders/';
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path,$new_image);
            $slider->image = $new_image;
            $data['slider_image'] =$new_image;
        }
        $slider->save();
    }
    public function destroy($id)
    {
        $slider = Slider::find($id);
        $slider->delete();
    return $slider;
    }
    public function search($request) {
        $sliders      = Slider::all();
        $search = $request->search;
        if ($search) {
            $search = str_replace(' ','%', $search);
            $sliders = Slider::where('name', 'like','%'.$search.'%')->get();
        } else {
            $sliders = Slider::all();
        }

        return $sliders;
    }

}