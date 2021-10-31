<?php

namespace App\Repositories\Interfaces;

use App\Http\Requests\CategoryRequest;

interface CategoryInterface
{

    public function getAll($request);
    public function store($request);
    public function update(CategoryRequest $request, $id);
    public function destroy($id);
    public function categories_arr();
    public function create();
    public function edit($id);
    public function create_category();
    public function seach($type, $content);
}
