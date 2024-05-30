<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Contact;

class EmployeeController extends Controller
{
    public function getEmployee() {
        return response()->json(Employee::all(), 200);
    }

    public function getEmployeebyId($id) {
        $employee = Employee::find($id);
        if(is_null($employee)) {
            return response()->json(['message' => 'Employee Not Found'], 404);
        }

        return response()->json($employee::find($id), 200);
    }

    public function addEmployee(Request $request) {
        $employee = Employee::create($request->all());
        return response($employee, 201);
    }

    public function updateEmployee(Request $request, $id) {
        $employee = Employee::find($id);
        if(is_null($employee)) {
            return response()->json(['message' => 'Employee Not Found'], 404);
        }
        $employee->update($request->all());
        return response($employee, 200);
    }

    public function deleteEmployee(Request $request, $id) {
        $employee = Employee::find($id);
        if(is_null($employee)) {
            return response()->json(['message' => 'Employee Not Found'], 404);
        }
        $employee->delete();
        return response()->json(null, 204);
    }

    public function store(Request $request) {
        $data = Contact::create($request->all());
        return response($data, 201);
    }
}
