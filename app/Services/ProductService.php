<?php
namespace App\Services;

use App\Repositories\Eloquents\ProductRepository;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\ProductRequest;

class ProductService
{  
    private $productRepository;
    public function __construct(ProductRepository $productRepository){
        $this->productRepository = $productRepository;
    }
    public function getAll()
    {
        return $this->productRepository->getAll();
    }
    public function create()
    {
        return $this->productRepository->create();
    }
    public function store(ProductRequest $request)
    {  
        return $this->productRepository->store($request);
    }
    public function update($request, $id)
    {
        return $this->productRepository->update($request, $id);
    }
    public function findByCategory($category_id)
    {
        return $this->productRepository->findByCategory($category_id);
    }
    public function findByBrand($brand_id)
    {
        return $this->productRepository->findByBrand($brand_id);
    }
}