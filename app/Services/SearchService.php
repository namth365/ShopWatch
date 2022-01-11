<?php

namespace App\Services;

use App\Repositories\Interfaces\SearchInterface;
use App\Services\Interfaces\SearchServiceInterface;

class SearchService implements SearchServiceInterface
{
    protected $SearchService;
    public function __construct(SearchInterface $SearchService)
    {
        $this->SearchService = $SearchService;
    }
    public function getAll($request)
    {
        $search = $this->SearchService->getAll($request);
        return $search;
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