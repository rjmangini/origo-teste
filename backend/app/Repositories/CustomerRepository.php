<?php

namespace App\Repositories;

use App\Models\Customer;

class CustomerRepository
{

    protected $customer;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function save($data)
    {
        $customer = new $this->customer;
        
        $customer->nome = $data['nome'];
        $customer->email = $data['email'];
        $customer->fone = $data['fone'];
        $customer->estado = $data['estado'];
        $customer->cidade = $data['cidade'];
        $customer->nascimento = $data['nascimento'];

        $customer->save();

        return $customer->fresh();
    }

    public function getAllCustomer()
    {
        return $this->customer->get();
    }

    public function getById($id)
    {
        return $this->customer
            ->where('id', $id)
            ->get()
            ->first();
    }

    public function update($data, $id) {
        $customer = $this->customer->find($id);

        $customer->nome = $data['nome'];
        $customer->email = $data['email'];
        $customer->fone = $data['fone'];
        $customer->estado = $data['estado'];
        $customer->cidade = $data['cidade'];
        $customer->nascimento = $data['nascimento'];

        $customer->update();

        return $customer;
    }

    public function delete($id)
    {
        $customer = $this->customer->find($id);
        $customer->delete();

        return $customer;
    }

}