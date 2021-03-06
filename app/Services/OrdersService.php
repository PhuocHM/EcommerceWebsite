<?php

namespace App\Services;

use App\Repositories\Eloquent\OrdersRepository;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\OrdersRequest;

class OrdersService
{
    private $ordersRepository;
    public function __construct(OrdersRepository $ordersRepository)
    {
        $this->ordersRepository = $ordersRepository;
    }
    public function getAll($request)
    {
        return $this->ordersRepository->getAll($request);
    }
    public function update($request, $id)
    {
        return $this->ordersRepository->update($request, $id);
    }
    public function store($request)
    {
        return $this->ordersRepository->store($request);
    }
    public function find($id)
    {
        return $this->ordersRepository->find($id);
    }
    public function findbyItem($id)
    {
        return $this->ordersRepository->findbyItem($id);
    }
    public function findbyCustomer()
    {
        return $this->ordersRepository->findbyCustomer();
    }
    public function orderItem($id)
    {
        return $this->ordersRepository->orderItem($id);
    }
    public function destroy($id)
    {
        return $this->ordersRepository->destroy($id);
    }
  
}
