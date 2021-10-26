<?php

namespace App\Services;


use Illuminate\Support\Facades\Request;

use App\Repositories\Eloquents\ProductImagesRepository;

class ProductImagesService
{
    private $productImagesRepository;
    public function __construct(ProductImagesRepository $productImagesRepository)
    {
        $this->productImagesRepository = $productImagesRepository;
    }
    public function getAll()
    {
        return $this->productImagesRepository->getAll();
    }
    public function store($request)
    {
        return $this->productImagesRepository->store($request);
    }
    public function update($request, $id)
    {
        return $this->productImagesRepository->update($request, $id);
    }
    public function edit($id)
    {
        return $this->productImagesRepository->edit($id);
    }
    public function destroy($id)
    {
        return $this->productImagesRepository->destroy($id);
    }
    public function search(){
        return $this->productImagesRepository->search();
    }
}
