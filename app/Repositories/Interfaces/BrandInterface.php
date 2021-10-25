<?php 

namespace App\Repositories\Interfaces;

use App\Http\Requests\BrandRequest;

Interface BrandInterface {

    public function getAll();
    public function getOne();
    public function store($request);
    public function update(BrandRequest $request, $id);
    public function destroy($id);
    public function search(); 
}