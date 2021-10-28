<?php

namespace App\Services;

use App\Repositories\Eloquent\GroupsRepository;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\GroupsRequest;

class GroupsService
{
    private $groupsRepository;
    public function __construct(GroupsRepository $groupsRepository)
    {
        $this->groupsRepository = $groupsRepository;
    }
    public function getAll($request)
    {
        return $this->groupsRepository->getAll($request);
    }
    public function store($request)
    {
        return $this->groupsRepository->store($request);
    }
    public function update($request, $id)
    {
        return $this->groupsRepository->update($request, $id);
    }
    public function edit($id)
    {
        return $this->groupsRepository->edit($id);
    }
    public function destroy($id)
    {
        return $this->groupsRepository->destroy($id);
    }
  
}
