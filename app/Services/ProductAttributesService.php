<?php
namespace App\Services;

use App\Repositories\Eloquents\ProductAttributesRepository;
use App\Repositories\Eloquents\CategoryRepository;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\ProductAttributesRequest;

class ProductAttributesService
{   
    private $productAttributesRepository;
    public function __construct(ProductAttributesRepository $productAttributesRepository){
        $this->productAttributesRepository = $productAttributesRepository;
    }
    public function getAll()
    {
        return $this->productAttributesRepository->getAll();
    }
    public function create_product(){
        return $this->productAttributesRepository->create_product();
    }
    public function create_attribute(){
        return $this->productAttributesRepository->create_attribute();
    }
    public function store($request)
    {
        return $this->productAttributesRepository->store($request);
    }
    public function edit($id)
    {
        return $this->productAttributesRepository->edit($id);
    }
    public function update($request, $id)
    {
        return $this->productAttributesRepository->update($request, $id);
    }
    public function destroy($id)
    {
        return $this->productAttributesRepository->destroy($id);
    }
  
}