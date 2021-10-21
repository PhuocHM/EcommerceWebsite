<?php
namespace App\Services;

use App\Repositories\Eloquents\CategoryRepository;

class CategoryService
{   private $categoryRepository;
    public function __construct(CategoryRepository $categoryRepository){
        $this->categoryRepository = $categoryRepository;
    }

    public function getAll()
    {
        return $this->categoryRepository-> all();
       
    }
}