<?php

namespace App\Services;

use App\Repositories\Eloquent\OrderItemsRepository;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\OrderItemsRequest;

class OrderItemsService
{
    private $orderItemsRepository;
    public function __construct(OrderItemsRepository $orderItemsRepository)
    {
        $this->orderItemsRepository = $orderItemsRepository;
    }
    public function getAll($request)
    {
        return $this->orderItemsRepository->getAll($request);
    }
    public function store($request)
    {
        return $this->orderItemsRepository->store($request);
    }
    public function update($request, $id)
    {
        return $this->orderItemsRepository->update($request, $id);
    }
    public function find($id)
    {
        return $this->orderItemsRepository->find($id);
    }
    public function findbyProduct()
    {
        return $this->orderItemsRepository->findbyProduct();
    }
 
    public function destroy($id)
    {
        return $this->orderItemsRepository->destroy($id);
    }
  
}
