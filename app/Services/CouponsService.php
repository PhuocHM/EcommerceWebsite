<?php

namespace App\Services;

use App\Repositories\Eloquent\CouponsRepository;

class CouponsService
{
    private $couponsRepository;
    public function __construct(CouponsRepository $couponsRepository){
        $this->couponsRepository = $couponsRepository;
    }

    public function getAll($request)
    {
        return $this->couponsRepository->getAll($request);
    }
    public function store($request)
    {

        return $this->couponsRepository->store($request);
    }
    public function update($request, $id)
    {
        return $this->couponsRepository->update($request, $id);
    }
    public function find($id){
        return $this->couponsRepository->find($id);
    }
    public function destroy($id)
    {
        return $this->couponsRepository->destroy($id);
    }
}
