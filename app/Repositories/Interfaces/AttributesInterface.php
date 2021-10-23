<?php 

namespace App\Repositories\Interfaces;

use App\Http\Requests\AttributesRequest;

Interface AttributesInterface {

    public function getAll();
    public function getOne();
    public function store($request);
    public function update(AttributesRequest $request, $id);
    public function destroy();
    public function search(); 
}