<?php 

namespace App\Repositories\Interfaces;

use App\Http\Requests\CategoryRequest;

Interface CategoryInterface {

    public function getAll();
    public function store($request);
    public function update(CategoryRequest $request, $id);
    public function destroy($id);
    public function categories_arr(); 
    public function create(); 
    public function edit($id); 
}