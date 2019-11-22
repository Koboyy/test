<?php

namespace App\Services;

use App\Services\Contracts\CategoryServiceContract;
use App\Repositories\CategoryRepository;

class CategoryService implements CategoryServiceContract
{
    protected $categories;

    public function __construct(CategoryRepository $categories)
    {
        $this->categories = $categories;
    }

    public function all($columns = ['*'])
    {
        return $this->categories->all();
    }

    public function find($id, $columns = ['*'])
    {
        return $this->categories->find($id);
    }

    public function create(array $attributes)
    {
        return $this->categories->create($attributes);
    }

    public function update(array $attributes, $id)
    {
        return $this->categories->find($id)->update($attributes);
    }

    public function delete($id)
    {
        return $this->categories->find($id);
    }
}