<?php


namespace App\Http\Service\Impl;


use App\Http\Repository\Contract\EmployeeRepositoryInterface;
use App\Http\Service\EmployeeServiceInterface;

class EmployeeService implements EmployeeServiceInterface
{
    protected $employeeRepository;

    public function __construct(EmployeeRepositoryInterface $employeeRepository)
    {
        $this->employeeRepository = $employeeRepository;
    }

    public function getAll()
    {
        return $this->employeeRepository->getAll();
    }

    public function store($request)
    {
        $data = $request->all();
        $this->employeeRepository->store($data);
        $statusCode = 201;
        $message = "Tao Moi Thanh Cong";

        $result = [
            'statusCode' => $statusCode,
            'message' => $message
        ];
        return $result;
    }

    public function update($request, $id)
    {
        $employee = $this->employeeRepository->findById($id);
        $data = $request->all();
        $this->employeeRepository->update($employee, $data);
        $statusCode = 200;
        $message = "Update Thanh Cong";
        $result = [
            'statusCode' => $statusCode,
            'message' => $message
        ];
        return $result;
    }

    public function destroy($id)
    {
        $employee = $this->employeeRepository->findById($id);
        $this->employeeRepository->destroy($employee);
        $statusCode = 200;
        $message = "Xoa Thanh Cong";
        $result = [
            'statusCode' => $statusCode,
            'message' => $message
        ];
        return $result;
    }

    public function getDetail($id)
    {
        $employee = $this->employeeRepository->findById($id);
        return $employee;
    }
}
