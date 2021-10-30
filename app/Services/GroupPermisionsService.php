<?php
namespace App\Services;

use App\Repositories\Eloquent\GroupPermisionsRepository;
use App\Repositories\Eloquent\CategoryRepository;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\GroupPermisionsRequest;

class GroupPermisionsService
{   
    private $groupPermisionsRepository;
    public function __construct(GroupPermisionsRepository $groupPermisionsRepository){
        $this->groupPermisionsRepository = $groupPermisionsRepository;
    }
    public function getAll($request)
    {
        return $this->groupPermisionsRepository->getAll($request);
    }
    public function findbyGroup(){
        return $this->groupPermisionsRepository->findbyGroup();
    }
    public function findbyRole(){
        return $this->groupPermisionsRepository->findbyRole();
    }
    public function store($request)
    {
        return $this->groupPermisionsRepository->store($request);
    }
    public function find($id)
    {
        return $this->groupPermisionsRepository->find($id);
    }
    public function update($request, $id)
    {
        return $this->groupPermisionsRepository->update($request, $id);
    }
    public function destroy($id)
    {
        return $this->groupPermisionsRepository->destroy($id);
    }
  
}