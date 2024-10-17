<?php

use App\Http\Controllers\BranchController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\HRISRoleTypesController;
use App\Http\Controllers\IpSuffixController;
use App\Http\Controllers\OrganizationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('branch', [BranchController::class, 'create'])->name('branch.create');
Route::post('organization', [OrganizationController::class, 'create'])->name('organization.create');
Route::post('department', [DepartmentController::class, 'create'])->name('department.create');

Route::post('create', [HRISRoleTypesController::class, 'create'])->name('hris_type.create');


Route::post('ipsuffix', [IpSuffixController::class, 'create'])->name('ipsuffix.create');

// Finish the EmployeeDetailsController and Add the Create in the EmployeeDetailsController
