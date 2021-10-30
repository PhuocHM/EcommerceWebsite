<?php

namespace App\Repositories\Eloquent;

use App\Models\Admin\Comments;
use App\Repositories\Interfaces\CommentRepositoryInterface;

class CommentRepository implements CommentRepositoryInterface
{
    public function getAll($request)
    {

        $query = Comments::select(['products.name as product_name', 'users.name as user_name', 'content', 'star_value', 'comments.updated_at', 'comments.id'])
            ->join('products', 'products.id', '=', 'comments.product_id')
            ->join('users', 'users.id', '=', 'comments.user_id')
            ->orderBy('comments.id', 'DESC');

        if ($request->comment) {
            $search = $request->comment;

            $query->where('star_value', 'LIKE', '%' . $search . '%')
                ->orWhere('products.name', 'LIKE', '%' . $search . '%')
                ->orWhere('users.name', 'LIKE', '%' . $search . '%');
        }
        return $query->paginate(5);
    }

    public function destroy($id)
    {
        $query = Comments::find($id);
        $query->delete();

        
    }
}
