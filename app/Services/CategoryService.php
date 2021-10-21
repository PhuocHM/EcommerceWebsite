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
<<<<<<< HEAD
=======
        return $this->categoryRepository->getAll();
>>>>>>> a25be43838facfef03679184a5c16c77fe471dbf
       
        return $this->categoryRepository-> all();
      

    }
    public function update(Request $request, $id)
    {
        return $this->categoryRepository->update($request, $id);


    }
}