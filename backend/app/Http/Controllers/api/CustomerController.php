<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Services\CustomerService;
use Exception;

class CustomerController extends Controller
{
    protected $customerService;

    public function __construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }

    public function index()
    {
        $result = ['status' => 200];

        try {
            $result['data'] = $this->customerService->getAll();
        } catch (Exception $e) {
            $result = [
                'status' => 500,
                'error' => $e->getMessage()
            ];
        }

        return response()->json($result['data'], $result['status']);
    }

    public function store(Request $request)
    {
        $data = $request->only([
            'nome',
            'email',
            'fone',
            'estado',
            'cidade',
            'nascimento',
        ]);

        $result = ['status' => 200];

        try {
            $result['data'] = $this->customerService->saveCustomerData($data);
        } catch (Exception $e) {
            $result = [
                'status' => 500,
                'error' => $e->getMessage()
            ];
        }

        return response()->json($result['data'], $result['status']);
    }

    public function show($id)
    {
        $result = ['status' => 200];

        try {
            $result['data'] = $this->customerService->getById($id);
        } catch (Exception $e) {
            $result = [
                'status' => 500,
                'erro' => $e->getMessage()
            ];
        }

        return response()->json($result['data'], $result['status']);
    }

    public function update(Request $request, $id)
    {
        $data = $request->only([
            'nome',
            'email',
            'fone',
            'estado',
            'cidade',
            'nascimento',
        ]);

        $result = ['status' => 200];

        try {
            $result['data'] = $this->customerService->updateCustomer($data, $id);
        } catch (Exception $e) {
            $result = [
                'status' => 500,
                'error' => $e->getMessage()
            ];
        }

        return response()->json($result['data'], $result['status']);
    }

    public function destroy($id)
    {
        $result = ['status' => 200];

        try {
            $result['data'] = $this->customerService->deleteById($id);
        } catch (Exception $e) {
            $result = [
                'status' => 500,
                'error' => $e->getMessage()
            ];
        }

        return response()->json($result['data'], $resul['status']);
    }

}
