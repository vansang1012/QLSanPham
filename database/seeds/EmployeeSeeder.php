<?php

use App\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employee=new Employee();
        $employee->name="Sang";
        $employee->staff="Quan lY";
        $employee->dob='1991/10/12';
        $employee->save();


        $employee=new Employee();
        $employee->name="Duc";
        $employee->staff="Bao Ve";
        $employee->dob='1993/10/12';
        $employee->save();
    }
}
