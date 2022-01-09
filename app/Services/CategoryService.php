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
        
    }
    public function create($request){

    }
    public function update($request,$id){

    }
    public function destroy($id){

    }
}
