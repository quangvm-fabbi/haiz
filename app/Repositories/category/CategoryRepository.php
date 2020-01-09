<?php

namespace App\Repositories\category;

use App\Models\Category;
use App\Http\Requests\UserRequest;
use App\Repositories\category\CategoryRepositoryInterface;
use App\Repositories\BaseRepository;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{
    /**
     * Get all of the tasks for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function getModel()
    {
        return Category::class;
    }


}
