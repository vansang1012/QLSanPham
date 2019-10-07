<?php


namespace App\Http\Repository\Eloquent;


use App\Employee;
use App\Http\Repository\Contract\EmployeeRepositoryInterface;

class EmployeeRepositoryEloquent extends RepositoryEloquent implements EmployeeRepositoryInterface
{

    public function findById($id)
    {
       return Employee::findorFail($id);
    }

    public function getModel()
    {
       return Employee::class;
    }
}
