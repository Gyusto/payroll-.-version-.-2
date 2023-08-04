<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\HomeController;
use App\Http\Controllers\backend\EmployeeController;
use App\Http\Controllers\backend\HolidaysController;
use App\Http\Controllers\backend\LeavesController;
use App\Http\Controllers\backend\DesignationController;
use App\Http\Controllers\backend\DepartmentController;
use App\Http\Controllers\backend\ProjectController;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/** for side bar menu active */
function set_active( $route ) {
    if( is_array( $route ) ){
        return in_array(Request::path(), $route) ? 'active' : '';
    }
    return Request::path() == $route ? 'active' : '';
}

Route::get('/', function () {
    return view('index');
});

Route::group(['middleware'=>'auth'],function()
{
    Route::get('home',function()
    {
        return view('home');
    });
    Route::get('home',function()
    {
        return view('home');
    });
});

//Auth::routes();
Route::controller(LoginController::class)->group(function () {
    Route::post('/', 'login')->name('login');
});

//--------- For Testing---------//
Route::view('app','layouts.app');
Route::view('test','test');


// ----------------------------- main dashboard ------------------------------//
Route::controller(HomeController::class)->group(function () {
    Route::get('/home', 'index')->name('home');
});


// ----------------------------- Employees------------------------------//
Route::controller(EmployeeController::class)->group(function () {
    Route::get('/employee', 'employee')->name('employee');
    Route::post('/employee', 'saveEmployee')->name('employee');
});

// ----------------------------- Holidays------------------------------//
Route::controller(HolidaysController::class)->group(function () {
    Route::get('/holidays', 'holidays')->name('holidays');
});

// ----------------------------- Leaves------------------------------//
Route::controller(LeavesController::class)->group(function () {
    Route::get('/leaves', 'leaves')->name('leaves');
});
// ----------------------------- Departments------------------------------//
Route::controller(DepartmentController::class)->group(function () {
    Route::get('/department', 'department')->name('department');
});

// ----------------------------- Designation------------------------------//
Route::controller(DesignationController::class)->group(function () {
    Route::get('/designation', 'designation')->name('designation');
});

// ----------------------------- Projects------------------------------//
Route::controller(ProjectController::class)->group(function () {
    Route::get('/project', 'projects')->name('project');
    Route::get('/project/{uuid}', 'projectDetails')->name('project.details');
    Route::get('autocomplete', 'testAPI')->name('autocomplete');
});
