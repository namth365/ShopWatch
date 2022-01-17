<?php

namespace App\Services;

use App\Repositories\Interfaces\SliderInterface;
use App\Services\Interfaces\SliderServiceInterface;

class SliderService implements SliderServiceInterface
{
    protected $SliderService;
    public function __construct(SliderInterface $SliderService)
    {
        $this->SliderService = $SliderService;
    }
    public function getAll($request)
    {
    
        $sliders = $this->SliderService->getAll($request);
        return $sliders;
    }
    public function findById($id)
    {
    }
    public function create($request)
    {
    }
    public function update($request, $id)
    {
    }
    public function destroy($id)
    {
    }
    public function edit($request, $id){

    }
    public function store($request){
        
    }
}
