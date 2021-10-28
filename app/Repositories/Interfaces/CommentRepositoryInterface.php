<?php

namespace App\Repositories\Interfaces;

interface CommentRepositoryInterface
{
    public function getAll($request);
    public function destroy($id);
}
