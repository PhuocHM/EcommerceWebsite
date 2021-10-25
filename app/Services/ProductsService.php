<?php

namespace App\Services;

use App\Repositories\Eloquents\ProductsRepository;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\ProductsRequest;

class ProductsService
{
    private $productsRepository;
    public function __construct(ProductsRepository $productsRepository){
        $this->productsRepository = $productsRepository;
    }


    public function getAll()
    {
        return $this->productsRepository->getAll();
    }
    public function store($request)
    {

        return $this->productsRepository->store($request);
    }
    public function update($request, $id)
    {
        return $this->productsRepository->update($request, $id);
    }
    public function edit($id){
        return $this->productsRepository->edit($id);
    }
    public function destroy($id)
    {
        return $this->productsRepository->destroy($id);
    }
    public function create_category(){
        return $this->productsRepository->create_category();
    }
    public function create_brand(){
        return $this->productsRepository->create_brand();
    }
    public function search(){
        return $this->productsRepository->search();
    }
}
