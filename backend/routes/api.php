<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//All Employees
Route::get('employee', [EmployeeController::class, 'getEmployee']);

//Specific Employees
Route::get('employee/{id}', [EmployeeController::class, 'getEmployeebyId']);

//Add Employee
Route::post('addEmployee', [EmployeeController::class, 'addEmployee']);

//update employee
Route::put('updateEmployee/{id}', [EmployeeController::class, 'updateEmployee']);

//Delete Employee
Route::delete('deleteEmployee/{id}', [EmployeeController::class, 'deleteEmployee']);

//Add Employee
Route::post('store', [EmployeeController::class, 'store']);