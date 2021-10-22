<?php
namespace App\Services;

use App\Repositories\Eloquents\BrandRepository;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\BrandRequest;

class BrandService
{   private $brandRepository;
    public function __construct(BrandRepository $brandRepository){
        $this->brandRepository = $brandRepository;
    }

    public function getAll()
    {
        return $this->brandRepository->getAll();
    }
    public function update($request, $id)
    {
        return $this->brandRepository->update($request, $id);
    }
    public function store(BrandRequest $request){
       
        return $this->BrandRepository->store($request);
    }
}