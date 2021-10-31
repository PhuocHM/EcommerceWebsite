<?php

namespace App\Services;


use Illuminate\Support\Facades\Request;

use App\Repositories\Eloquent\ProductImagesRepository;

class ProductImagesService
{
    private $productImagesRepository;
    public function __construct(ProductImagesRepository $productImagesRepository)
    {
        $this->productImagesRepository = $productImagesRepository;
    }
    public function getAll($request)
    {
        return $this->productImagesRepository->getAll($request);
    }
    public function create_product()
    {
        return $this->productImagesRepository->create_product();
    }
    public function store($request)
    {
        return $this->productImagesRepository->store($request);
    }
    public function edit($id)
    {
        return $this->productImagesRepository->edit($id);
    }
    public function update($request, $id)
    {
        return $this->productImagesRepository->update($request, $id);
    }
    public function destroy($id)
    {
        return $this->productImagesRepository->destroy($id);
    }
   
}
