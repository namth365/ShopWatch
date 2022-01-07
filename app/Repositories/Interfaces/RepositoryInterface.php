<?php 

namespace App\Repositories\Interfaces;

interface RepositoryInterface {

    public function getAll(Request $request);
    public function findById($id);
    public function create($request);
    public function update($request, $id);
    public function destroy($id);
}