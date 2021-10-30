<?php
namespace App\Services;

use App\Repositories\Eloquent\CategoryRepository;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\CategoryRequest;

class CategoryService
{   private $categoryRepository;
    public function __construct(CategoryRepository $categoryRepository){
        $this->categoryRepository = $categoryRepository;
    }

    public function getAll($request)
    {
        return $this->categoryRepository->getAll($request);
    }
    public function update($request, $id)
    {
        return $this->categoryRepository->update($request, $id);
    }
    public function store(CategoryRequest $request){
       
        return $this->categoryRepository->store($request);
    }
    public function categories_arr()
    {
        return $this->categoryRepository->categories_arr();
    }
    public function create()
    {
        return $this->categoryRepository->create();
    }
    public function destroy($id)
    {
        return $this->categoryRepository->destroy($id);
    }
    public function edit($id)
    {
        return $this->categoryRepository->edit($id);
    }
    public function create_category()
    {
        return $this->categoryRepository->create_category();
    }
}