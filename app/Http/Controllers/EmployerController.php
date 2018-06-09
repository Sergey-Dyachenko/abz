<?php
namespace App\Http\Controllers;
use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployerController extends Controller
{
    public function index(){
        $employers = DB::table('employees')
            ->join('titles', 'titles.id', '=', 'employees.title_id')
            ->select('employees.first_name', 'employees.last_name', 'employees.hire_date', 'titles.title')
            ->get();
       // dd($employers);
        return view('getall', compact('employers'));
            }
    //
}
