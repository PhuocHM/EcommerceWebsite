<?php
namespace App\Services;

use App\Repositories\Eloquent\AttributesRepository;
use App\Repositories\Eloquent\CategoryRepository;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\AttributesRequest;

class AttributesService
{   private $attributesRepository;
    public function __construct(AttributesRepository $attributesRepository){
        $this->attributesRepository = $attributesRepository;
    }

    public function getAll($request)
    {
        return $this->attributesRepository->getAll($request);
    }
    public function update($request, $id)
    {
        return $this->attributesRepository->update($request, $id);
    }
    public function store(AttributesRequest $request){
       
        return $this->attributesRepository->store($request);
    }
    public function create(){
        return $this->attributesRepository->create();
    }
   
    public function edit($id){
        return $this->attributesRepository->edit($id);
    }
    public function destroy($id){
        return $this->attributesRepository->destroy($id);
    }
}