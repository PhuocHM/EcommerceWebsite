<?php

namespace App\Services;

use App\Repositories\Eloquent\GroupsRepository;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\GroupsRequest;

class GroupsService
{
    private $GroupsRepository;
    public function __construct(GroupsRepository $GroupsRepository)
    {
        $this->GroupsRepository = $GroupsRepository;
    }
    public function getAll($request)
    {
        return $this->GroupsRepository->getAll($request);
    }
    public function store($request)
    {
        return $this->GroupsRepository->store($request);
    }
    public function update($request, $id)
    {
        return $this->GroupsRepository->update($request, $id);
    }
    public function edit($id)
    {
        return $this->GroupsRepository->edit($id);
    }
    public function destroy($id)
    {
        return $this->GroupsRepository->destroy($id);
    }
  
}
