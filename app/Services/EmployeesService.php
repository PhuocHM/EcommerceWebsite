<?php

namespace App\Services;

use App\Repositories\Eloquent\EmployeesRepository;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\EmployeesRequest;

class EmployeesService
{
    private $employeesRepository;
    public function __construct(EmployeesRepository $employeesRepository)
    {
        $this->employeesRepository = $employeesRepository;
    }
    public function getAll($request)
    {
        return $this->employeesRepository->getAll($request);
    }
    public function store($request)
    {
        return $this->employeesRepository->store($request);
    }
    public function update($request, $id)
    {
        return $this->employeesRepository->update($request, $id);
    }
    public function edit($id)
    {
        return $this->employeesRepository->edit($id);
    }
    public function destroy($id)
    {
        return $this->employeesRepository->destroy($id);
    }
    public function create_group()
    {
        return $this->employeesRepository->create_group();
    }
}
