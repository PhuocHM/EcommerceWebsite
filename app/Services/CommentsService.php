<?php

namespace App\Services;

use App\Repositories\Eloquent\CommentRepository;

class CommentsService
{
    private $commentRepository;
    public function __construct(CommentRepository $commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }

    public function getAll($request)
    {
        return $this->commentRepository->getAll($request);
    }

    public function destroy($id)
    {
        return $this->commentRepository->destroy($id);
    }
}
