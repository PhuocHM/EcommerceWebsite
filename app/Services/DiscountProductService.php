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
    public function getAll($request)
    {
        return $this->discountProductRepository->getAll($request);
    }
    public function create_product(){
        return $this->discountProductRepository->create_product();
    }
    public function create_discount(){
        return $this->discountProductRepository->create_discount();
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