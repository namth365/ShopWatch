<?php

namespace App\Services;

use App\Repositories\Interfaces\SliderInterface;
use App\Services\Interfaces\SliderServiceInterface;

class SliderService implements SliderServiceInterface
{
    protected $SliderRepository;
    public function __construct(SliderInterface $SliderRepository){
        $this->SliderRepository = $SliderRepository;
    }
    public function getAll($request){

        $sliders = $this->SliderRepository->getAll($request);
        return $sliders;
    }
    public function findById($id){
        return $this->SliderRepository->findById($id);
    }
    public function create($request){
        return $this->SliderRepository->create($request);

    }
    public function store($request){
        return $this->SliderRepository->store($request);

    }
    public function edit($request,$id){
        return $this->SliderRepository->edit($request,$id);

    }
    public function update($request,$id){
        return $this->SliderRepository->update($request,$id);

    }
    public function destroy($id){
        return $this->SliderRepository->destroy($id);
    }
    public function search($request){
        return $this->SliderRepository->search($request);
    }

   
}
