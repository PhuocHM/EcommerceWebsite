<?php 

namespace App\Repositories\Interfaces;

Interface CategoryInterface {

    public function getAll();
    public function getOne();
    public function store($request);
    public function update(CategoryRequest$request, $id);
    public function destroy();
    public function search(); 
}