<?php 

namespace App\Services;

use App\Repositories\Interfaces\CategoryInterface;
use App\Services\Interfaces\CategoryServiceInterface;

class CategoryService implements CategoryServiceInterface {

    protected $CategoryRepository;
    public function __construct(CategoryInterface $CategoryRepository){
        $this->CategoryRepository = $CategoryRepository;
    }
    public function getAll($request){

        $categories = $this->CategoryRepository->getAll($request);
        return $categories;
    }
    public function findById($id){
        return $this->CategoryRepository->findById($id);
    }
    public function create($request){
        return $this->CategoryRepository->create($request);

    }
    public function store($request){
        return $this->CategoryRepository->store($request);

    }
    public function edit($request,$id){
        return $this->CategoryRepository->edit($request,$id);

    }
    public function update($request,$id){
        return $this->CategoryRepository->update($request,$id);

    }
    public function destroy($id){
        return $this->CategoryRepository->destroy($id);
    }
   

}
