<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class employeeController extends Controller
{
    public function index()
    {
        $employers = Employee::all();
        return view('employee.index', compact('employers'));
    }
    public function store(Request $request)
    {
        $employeeData = [
            'firstname' => $request->input('firstname'),
            'lastname'=> $request->input('lastname'),
            'DOB'=> $request->input('DOB'),
            'phone'=> $request->input('phone')
        ];
        Employee::create($employeeData);
        return redirect('/employee');
    }
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employee.edit', compact('employee'));
    }
    public function update(Request $request, int $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->update($request->all());

        return redirect()->route('employee.index');
    }
    public function destroy(int $id){
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return redirect()->route('employee.index');
    }

}