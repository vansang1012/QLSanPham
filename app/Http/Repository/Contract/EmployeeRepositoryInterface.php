<?php


namespace App\Http\Repository\Contract;


interface EmployeeRepositoryInterface extends RepositoryInterface
{
    public function findById($id);
}
