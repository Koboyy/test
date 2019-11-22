<?php

namespace App\Services;

use App\Services\Contracts\CustomerServiceContract;
use App\Repositories\CustomerRepository;

class CustomerService implements CustomerServiceContract
{
    protected $customer;

    public function __construct(CustomerRepository $customer)
    {
        $this->customer = $customer;
    }

    public function all($columns = ['*'])
    {
        return $this->customer->all();
    }

    public function find($id, $columns = ['*'])
    {
        return $this->customer->find($id);
    }

    public function create(array $attributes)
    {
        return $this->customer->create($attributes);
    }

    public function update(array $attributes, $id)
    {
        return $this->customer->find($id)->update($attributes);
    }

    public function delete($id)
    {
        return $this->customer->find($id);
    }
}