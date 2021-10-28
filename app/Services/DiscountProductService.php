<?php
namespace App\Services;

use App\Repositories\Eloquent\DiscountProductRepository;
use Illuminate\Support\Facades\Request;


class DiscountProductService
{   
    private $discountProductRepository;
    public function __construct(DiscountProductRepository $discountProductRepository){
        $this->discountProductRepository = $discountProductRepository;
    }
    public function getAll()
    {
        return $this->discountProductRepository->getAll();
    }
    public function create_product(){
        return $this->discountProductRepository->create_product();
    }
    public function create_attribute(){
        return $this->discountProductRepository->create_attribute();
    }
    public function store($request)
    {
        return $this->discountProductRepository->store($request);
    }
    public function edit($id)
    {
        return $this->discountProductRepository->edit($id);
    }
    public function update($request, $id)
    {
        return $this->discountProductRepository->update($request, $id);
    }
    public function destroy($id)
    {
        return $this->discountProductRepository->destroy($id);
    }
  
}