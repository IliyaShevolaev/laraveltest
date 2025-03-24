<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employees = [
            [
                'name' => 'Дима',
                'birthday' => '1988-03-25',
                'position' => 'дизайнер',
                'salary' => 400,
            ],
            [
                'name' => 'Петя',
                'birthday' => '1989-03-26',
                'position' => 'дизайнер',
                'salary' => 500,
            ],
            [
                'name' => 'Вася',
                'birthday' => '1990-05-26',
                'position' => 'верстальщик',
                'salary' => 500,
            ],
            [
                'name' => 'Коля',
                'birthday' => '1990-03-25',
                'position' => 'верстальщик',
                'salary' => 1000,
            ],
            [
                'name' => 'Иван',
                'birthday' => '1991-05-27',
                'position' => 'программист',
                'salary' => 500,
            ],
            [
                'name' => 'Кирилл',
                'birthday' => '1990-06-27',
                'position' => 'программист',
                'salary' => 1000,
            ],
        ];

        foreach ($employees as $employee) {
            Employee::create($employee);
        }
    }
}
