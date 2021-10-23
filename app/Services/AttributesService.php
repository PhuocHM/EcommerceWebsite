<?php
namespace App\Services;

use App\Repositories\Eloquents\AttributesRepository;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\AttributesRequest;

class AttributesService
{   private $attributesRepository;
    public function __construct(AttributesRepository $attributesRepository){
        $this->attributesRepository = $attributesRepository;
    }

    public function getAll()
    {
        return $this->attributesRepository->getAll();
    }
    public function update($request, $id)
    {
        return $this->attributesRepository->update($request, $id);
    }
    public function store(AttributesRequest $request){
       
        return $this->attributesRepository->store($request);
    }
}