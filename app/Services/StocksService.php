<?php

namespace App\Services;

use App\Repositories\Eloquent\StockRepository;

class StocksService
{
    private $stocksRepository;
    public function __construct(StockRepository $stocksRepository)
    {
        $this->stocksRepository = $stocksRepository;
    }

    public function getAll($request)
    {
        return $this->stocksRepository->getAll($request);
    }
    public function store($request)
    {

        return $this->stocksRepository->store($request);
    }
    public function update($request, $id)
    {
        return $this->stocksRepository->update($request, $id);
    }
    public function find($id)
    {
        return $this->stocksRepository->find($id);
    }
    public function destroy($id)
    {
        return $this->stocksRepository->destroy($id);
    }
    public function supplier()
    {
        return $this->stocksRepository->supplier();
    }
    public function product()
    {
        return $this->stocksRepository->product();
    }
    public function employee()
    {
        return $this->stocksRepository->employee();
    }
}
