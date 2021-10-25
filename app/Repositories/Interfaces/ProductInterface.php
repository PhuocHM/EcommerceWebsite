<?php 

namespace App\Repositories\Interfaces;

use App\Http\Requests\ProductRequest;

Interface ProductInterface {

    public function getAll();
    public function getOne();
    public function store($request);
    public function update(ProductRequest $request, $id);
    public function destroy($id);
    public function search(); 
    public function findByCategory($category_id);
    public function findByBrand($brand_id);
}