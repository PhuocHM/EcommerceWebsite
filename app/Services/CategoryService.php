<?php
namespace App\Services;

use App\Repositories\Eloquents\CategoryRepository;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\CategoryRequest;

class CategoryService
{   private $categoryRepository;
    public function __construct(CategoryRepository $categoryRepository){
        $this->categoryRepository = $categoryRepository;
    }

    public function getAll()
    {
        return $this->categoryRepository->getAll();
    }
    public function update($request, $id)
    {
        return $this->categoryRepository->update($request, $id);
    }
    public function store(CategoryRequest $request){
       
        return $this->categoryRepository->store($request);
    }
}