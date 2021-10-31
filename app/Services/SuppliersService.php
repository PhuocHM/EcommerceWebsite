<?php

namespace App\Services;

use App\Repositories\Eloquent\SuppliersRepository;

class SuppliersService
{
    private $suppliersRepository;
    public function __construct(SuppliersRepository $suppliersRepository){
        $this->suppliersRepository = $suppliersRepository;
    }

    public function getAll($request)
    {
        return $this->suppliersRepository->getAll($request);
    }
    public function store($request)
    {

        return $this->suppliersRepository->store($request);
    }
    public function update($request, $id)
    {
        return $this->suppliersRepository->update($request, $id);
    }
    public function find($id){
        return $this->suppliersRepository->find($id);
    }
    public function destroy($id)
    {
        return $this->suppliersRepository->destroy($id);
    }
}
