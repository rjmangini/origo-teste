<?php

namespace App\Services;

use App\Repositories\CustomerRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class CustomerService
{

    protected $customerRepository;

    public function __construct(CustomerRepository $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function saveCustomerData($data)
    {
        $validator = Validator::make($data, [
            'nome' => 'required',
            'email' => 'required',
            'fone' => 'required',
            'estado' => 'required',
            'cidade' => 'required',
            'nascimento' => 'required',
        ]);

        if ($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        $result = $this->customerRepository->save($data);

        return $result;
    }

    public function getAll()
    {
        return $this->customerRepository->getAllCustomer();
    }

    public function getById($id)
    {
        return $this->customerRepository->getById($id);
    }

    public function updateCustomer($data, $id)
    {
        $validator = Validator::make($data, [
            'nome' => 'required',
            'email' => 'required',
            'fone' => 'required',
            'estado' => 'required',
            'cidade' => 'required',
            'nascimento' => 'required',
        ]);

        if ($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        DB::beginTransaction();

        try {
            $result = $this->customerRepository->update($data, $id);
        } catch (Exception $e) {
            DB::rollback();
            Log::Info($e->getMessage());

            throw new InvalidArgumentException('Impossível atualizar dados');
        }

        DB::commit();

        return $result;
    }

    public function deleteById($id)
    {
        DB::beginTransaction();

        try {
            $result = $this->customerRepository->delete($id);
        } catch (Exception $d) {
            DB::rollback();
            Log::Info($e->getMessage());

            throw new InvalidArgumentException('Impossível excluir dados');
        }

        DB::commit();

        return $result;
    }

}