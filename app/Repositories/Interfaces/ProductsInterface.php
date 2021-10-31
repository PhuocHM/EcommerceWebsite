<?php

namespace App\Repositories\Interfaces;

use Illuminate\Http\Request;

interface ProductsInterface
{

    public function getAll(Request $request);
    public function getOne($id);
    public function store($request);
    public function update($request, $id);
    public function findDetail($id);
    public function find($id);
    public function destroy($id);
    public function create_category();
    public function create_brand();
}
