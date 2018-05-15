<?php
namespace App\Http\Controllers;
use App\Employee;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function index(){
        $employers = Employee::all();

        return view('getall', compact('employers'));
            }
    //
}
