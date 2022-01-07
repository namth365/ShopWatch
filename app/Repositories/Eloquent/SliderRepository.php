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
        $sliders = $this->model->get();
        return $sliders;
    }
    public function findById($id){

    }
}