<?php 

namespace App\Repositories\Interfaces;


Interface UsersInterface {

    public function getAll();
    public function store($request);
    public function update($request, $id);
    public function edit($id); 
    public function destroy($id);
}