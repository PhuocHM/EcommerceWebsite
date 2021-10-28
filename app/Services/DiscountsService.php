<?php

namespace App\Services;

use App\Repositories\Eloquent\DiscountsRepository;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\DiscountsRequest;

class DiscountsService
{
    private $discountsRepository;
    public function __construct(DiscountsRepository $discountsRepository)
    {
        $this->discountsRepository = $discountsRepository;
    }

    public function getAll($request)
    {
        return $this->discountsRepository->getAll($request);
    }
    public function store($request)
    {
        return $this->discountsRepository->store($request);
    }
    public function update($request, $id)
    {
        return $this->discountsRepository->update($request, $id);
    }
    public function edit($id)
    {
        return $this->discountsRepository->edit($id);
    }
    public function destroy($id)
    {
        return $this->discountsRepository->destroy($id);
    }
    public function create_discount()
    {
        return $this->discountsRepository->create_discount();
    }
}
