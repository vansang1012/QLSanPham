<?php


namespace App\Http\Repository\Eloquent;


use App\Employee;
use App\Http\Repository\Contract\RepositoryInterface;

abstract class RepositoryEloquent implements RepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    public function setModel()
    {
        $this->model = app()->make($this->getModel());
    }

    abstract public function getModel();

    public function getAll()
    {
        return $this->model->all();

    }

    public function store($data)
    {
        $this->model->create($data);
    }

    public function update($obj, $data)
    {
        $obj->update($data);
    }

    public function destroy($obj)
    {
        $obj->delete();
    }
}
