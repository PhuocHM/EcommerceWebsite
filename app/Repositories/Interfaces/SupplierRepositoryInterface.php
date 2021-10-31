<?php

namespace App\Repositories\Interfaces;

interface SupplierRepositoryInterface
{
    public function getAll($request);
    public function store($request);
    public function update($request, $id);
    public function find($id);
    public function destroy($id);
}
