<?php

namespace App\Services;

use App\Repositories\Eloquent\BrandRepository;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\BrandRequest;

class BrandService
{
    private $brandRepository;
    public function __construct(BrandRepository $brandRepository)
    {
        $this->brandRepository = $brandRepository;
    }
<<<<<<< HEAD
    public function getAll()
=======

    public function getAll($request)
>>>>>>> 1d4cf6aed43cf356a003079ba87243748a2618ee
    {
        return $this->brandRepository->getAll($request);
    }
    public function store($request)
    {
        return $this->brandRepository->store($request);
    }
    public function update($request, $id)
    {
        return $this->brandRepository->update($request, $id);
    }
    public function edit($id)
    {
        return $this->brandRepository->edit($id);
    }
    public function destroy($id)
    {
        return $this->brandRepository->destroy($id);
    }
}
