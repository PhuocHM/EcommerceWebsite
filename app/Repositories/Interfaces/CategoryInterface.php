<?php 

namespace App\Repositories\Interfaces;

Interface CategoryInterface {

    public function getAll();
    public function getOne();
    public function store();
    public function update($request, $id);
    public function destroy();
    public function search(); 
}