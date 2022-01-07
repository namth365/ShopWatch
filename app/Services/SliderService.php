<?php

namespace App\Services;

use App\Repositories\Interfaces\SliderInterface;

use App\Services\Interfaces\SliderServiceInterface;

class SliderService implements SliderServiceInterface
{

    protected $SilderRepository;
    public function __construct(SliderInterface $SilderRepository)
    {
        $this->SilderRepository = $SilderRepository;
    }
    public function getAll($request)
    {

        $sliders = $this->SliderRepository->getAll($request);
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
}
