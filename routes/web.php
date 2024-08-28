<?php

use App\Http\Controllers\DesignationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\manageEmployeeController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\viewEmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');



    // Admin Routes (Accessible only by admin users)
    // Route::group(['middleware' => ['auth', 'IsAdmin']], function () {
         // department


         Route::get('/organization/department', [OrganizationController::class, 'department'])->name('organization.department');

         Route::get('/Organization/department', [OrganizationController::class, 'member'])->name('organization.member');

        Route::post('/Organization/department/store', [OrganizationController::class, 'store'])->name('organization.department.store');
        Route::get('/Organization/delete/{id}', [OrganizationController::class, 'delete'])->name('Organization.delete');
        Route::get('/Organization/edit/{id}', [OrganizationController::class, 'edit'])->name('Organization.edit');
        Route::put('/Organization/update/{id}', [OrganizationController::class, 'update'])->name('Organization.update');
        Route::get('/Organization/Search/Department', [OrganizationController::class, 'searchDepartment'])->name('searchDepartment');




                 // designation
        Route::get('/Organization/designation', [DesignationController::class, 'designation'])->name('organization.designation');
        Route::post('/Organization/designation/store', [DesignationController::class, 'designationStore'])->name('organization.designation.store');
        Route::get('/Organization/designationList', [DesignationController::class, 'designationList'])->name('organization.designationList');
        Route::get('/designation/delete/{id}', [DesignationController::class, 'delete'])->name('designation.delete');
        Route::get('/designation/edit/{id}', [DesignationController::class, 'edit'])->name('designation.edit');
        Route::put('/Designation/update/{id}', [DesignationController::class, 'update'])->name('Designation.update');
        Route::get('/Designation/Search/Designation', [DesignationController::class, 'searchDesignation'])->name('searchDesignation');


        // Leave
        Route::get('/Leave/LeaveStatus', [LeaveController::class, 'leaveList'])->name('leave.leaveStatus');
        Route::get('/Leave/allLeaveReport', [LeaveController::class, 'allLeaveReport'])->name('allLeaveReport');
        Route::get('/searchLeaveList', [LeaveController::class, 'searchLeaveList'])->name('searchLeaveList');

        // Approve,, Reject Leaveorganization.designationList
        Route::get('/leave/approve/{id}',  [LeaveController::class, 'approveLeave'])->name('leave.approve');
        Route::get('/leave/reject/{id}',  [LeaveController::class, 'rejectLeave'])->name('leave.reject');

        // Leave Type
        Route::get('/Leave/LeaveType', [LeaveController::class, 'leaveType'])->name('leave.leaveType');
        Route::post('/Leave/LeaveType/store', [LeaveController::class, 'leaveStore'])->name('leave.leaveType.store');
        Route::get('/LeaveType/delete/{id}', [LeaveController::class, 'LeaveDelete'])->name('leave.leaveType.delete');
        Route::get('/LeaveType/edit/{id}', [LeaveController::class, 'leaveEdit'])->name('leave.leaveType.edit');
        Route::put('/designation/update/{id}', [LeaveController::class, 'LeaveUpdate'])->name('leave.leaveType.update');

   
        // User updated
        Route::get('/users', [UserController::class, 'list'])->name('users.list');
        Route::get('/users/create/{employeeId}', [UserController::class, 'createForm'])->name('users.create');
        Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
        Route::get('/users/{id}', [UserController::class, 'userProfile'])->name('users.profile.view');
        Route::get('/user/delete/{id}', [UserController::class, 'userDelete'])->name('delete');
        Route::get('/user/edit/{id}', [UserController::class, 'userEdit'])->name('edit');
        Route::put('/user/update/{id}', [UserController::class, 'userUpdate'])->name('update');
        Route::get('/search-user', [UserController::class, 'searchUser'])->name('searchUser');

        // message info
        Route::get('/contactUs/Message', [HomeController::class, 'message'])->name('message');
    // });


    // Employee route

    // Route::group(['middleware' => ['auth', 'IsEmployee']], function () {


        // Leave Routes for Employee
        Route::get('/Leave/LeaveForm', [LeaveController::class, 'leave'])->name('leave.leaveForm');
        Route::post('/Leave/store', [LeaveController::class, 'store'])->name('leave.store');
        Route::get('/Leave/myLeave', [LeaveController::class, 'myLeave'])->name('leave.myLeave');
        Route::get('/Leave/myLeaveBalance', [LeaveController::class, 'showLeaveBalance'])->name('leave.myLeaveBalance');
        Route::get('/Leave/myLeaveReport', [LeaveController::class, 'myLeaveReport'])->name('myLeaveReport');
        Route::get('/searchMyLeave', [LeaveController::class, 'searchMyLeave'])->name('searchMyLeave');
        // user profile
        Route::get('/myProfile', [UserController::class, 'myProfile'])->name('profile');

    // });


    // Employee Management
    Route::get('/Employee/addEmployee', [manageEmployeeController::class, 'addEmployee'])->name('manageEmployee.addEmployee');
    Route::post('/manageEmployee/addEmployee/store', [manageEmployeeController::class, 'store'])->name('manageEmployee.addEmployee.store');
    Route::get('/Employee/viewEmployee', [viewEmployeeController::class, 'viewEmployee'])->name('manageEmployee.ViewEmployee');
    Route::get('/Employee/delete/{id}', [viewEmployeeController::class, 'delete'])->name('Employee.delete');
    Route::get('Employee/edit/{id}', [viewEmployeeController::class, 'edit'])->name('Employee.edit');
    Route::put('/Employee/update/{id}', [viewEmployeeController::class, 'update'])->name('Employee.update');
    Route::get('/Employee/profile/{id}', [viewEmployeeController::class, 'profile'])->name('Employee.profile');
    Route::get('/search-employee', [viewEmployeeController::class, 'search'])->name('employee.search');