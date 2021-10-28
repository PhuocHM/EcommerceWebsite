<?php

namespace App\Services;

use App\Repositories\Eloquent\CustomersRepository;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\CustomersRequest;

class CustomersService
{
    private $customersRepository;
    public function __construct(CustomersRepository $customersRepository){
        $this->customersRepository = $customersRepository;
    }


    public function getAll($request)
    {
        return $this->customersRepository->getAll($request);
    }
    public function store($request)
    {

        return $this->customersRepository->store($request);
    }
    public function update($request, $id)
    {
        return $this->customersRepository->update($request, $id);
    }
    public function edit($id){
        return $this->customersRepository->edit($id);
    }
    public function destroy($id)
    {
        return $this->customersRepository->destroy($id);
    }
    public function create_user(){
        return $this->customersRepository->create_user();
    }
    public function create(){
        return $this->customersRepository->create();
    }
  
}
