<?php

namespace App\Repositories\Interfaces;

interface StockRepositoryInterface
{
    public function getAll($request);
    public function store($request);
    public function update($request, $id);
    public function find($id);
    public function destroy($id);
    public function employee();
    public function product();
    public function supplier();

}
