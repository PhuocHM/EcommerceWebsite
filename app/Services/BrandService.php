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
    public function getAll()
    {
        return $this->brandRepository->getAll();
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
