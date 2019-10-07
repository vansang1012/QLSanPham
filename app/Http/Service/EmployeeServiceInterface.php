<?php


namespace App\Http\Service;


interface EmployeeServiceInterface
{
public function getAll();
public function store($request);
public function update($request,$id);
public function destroy($id);
public function getDetail($id);
}
