<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = DB::table('employees')->orderBy('salary', 'asc')->get();

        $employeesWithSalary400OrIdGreater4 = DB::table('employees')->where('salary', 400)->orWhere('id', '>', 4)->get();

        $employeeWithId3 = DB::table('employees')->find(3);

        $employeeNameWithId5 = DB::table('employees')->where('id', 5)->value('name');

        $employeesSalary400to800OrProgrammers = DB::table('employees')
            ->whereBetween('salary', [400, 800])->orWhere('position', 'программист')->get();

        $totalSalary = DB::table('employees')->sum('salary');

        $salaryByPosition = DB::table('employees')->selectRaw('position, SUM(salary) as total_salary')->groupBy('position')->get();

        $employeesBornOn25th = DB::table('employees')->whereRaw("EXTRACT(DAY FROM birthday) = 25")->get();

        $employeesBornIn1990 = DB::table('employees')->whereRaw("EXTRACT(YEAR FROM birthday) = 1990")->get();
        
        

        return view('employees.index', compact(
            'employees',
            'employeesWithSalary400OrIdGreater4',
            'employeeWithId3',
            'employeeNameWithId5',
            'employeesSalary400to800OrProgrammers',
            'totalSalary',
            'salaryByPosition',
            'employeesBornOn25th',
            'employeesBornIn1990'
        ));
    }
}
