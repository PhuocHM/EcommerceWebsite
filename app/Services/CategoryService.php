<?php
namespace App\Services;

use App\Repositories\Eloquents\CategoryRepository;
use Illuminate\Support\Facades\Request;

class CategoryService
{   private $categoryRepository;
    public function __construct(CategoryRepository $categoryRepository){
        $this->categoryRepository = $categoryRepository;
    }

    public function getAll()
    {
        return $this->categoryRepository->getAll();
       
    }
    public function update(Request $request, $id)
    {
        return $this->categoryRepository->update($request, $id);


    }
}