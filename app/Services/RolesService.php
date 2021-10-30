<?php

namespace App\Services;

use App\Repositories\Eloquent\RolesRepository;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\RolesRequest;

class RolesService
{
    private $rolesRepository;
    public function __construct(RolesRepository $rolesRepository)
    {
        $this->rolesRepository = $rolesRepository;
    }
    public function getAll($request)
    {
        return $this->rolesRepository->getAll($request);
    }
    public function store($request)
    {
        return $this->rolesRepository->store($request);
    }
    public function update($request, $id)
    {
        return $this->rolesRepository->update($request, $id);
    }
    public function edit($id)
    {
        return $this->rolesRepository->edit($id);
    }
    public function destroy($id)
    {
        return $this->rolesRepository->destroy($id);
    }
}
