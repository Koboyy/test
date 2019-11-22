<?php

namespace App\Services;

use App\Services\Contracts\ProductServiceContract;
use App\Repositories\ProductRepository;

class ProductService implements ProductServiceContract
{
    protected $product;

    public function __construct(ProductRepository $product)
    {
        $this->product = $product;
    }

    public function all($columns = ['*'])
    {
        return $this->product->all();
    }

    public function find($id, $columns = ['*'])
    {
        return $this->product->find($id);
    }

    public function create(array $attributes)
    {
        return $this->product->create($attributes);
    }

    public function update(array $attributes, $id)
    {
        return $this->product->find($id)->update($attributes);
    }

    public function delete($id)
    {
        return $this->product->find($id);
    }
}