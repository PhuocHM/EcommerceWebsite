<?php

namespace App\Services;

use App\Repositories\Eloquent\UsersRepository;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\UsersRequest;

class UsersService
{
    private $usersRepository;
    public function __construct(UsersRepository $usersRepository)
    {
        $this->usersRepository = $usersRepository;
    }

    public function getAll()
    {
        return $this->usersRepository->getAll();
    }
    public function store($request)
    {
        return $this->usersRepository->store($request);
    }
    public function update($request, $id)
    {
        return $this->usersRepository->update($request, $id);
    }
    public function edit($id)
    {
        return $this->usersRepository->edit($id);
    }
    public function destroy($id)
    {
        return $this->usersRepository->destroy($id);
    }
}
