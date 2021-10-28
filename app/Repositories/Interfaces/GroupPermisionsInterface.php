<?php 

namespace App\Repositories\Interfaces;

use App\Http\Requests\groupPermisionsRequest;

Interface GroupPermisionsInterface {

    public function getAll($request);
    public function findbyGroup();
    public function findbyRole();
    public function store($request);
    public function update($request, $id); 
    public function find($id);
    public function destroy($id);
  
}