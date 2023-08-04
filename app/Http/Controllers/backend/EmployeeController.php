<?php
 
namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Employee;
use App\Models\Person;
 
class EmployeeController extends Controller{

    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */

    public function __construct(){
        $this->middleware('auth');
    }

    public function employee(){
        $employee = Employee::with('person')->with('department')->with('designation')->get();
        $department = Department::get();
        $designation = Designation::get();
        $data = ['employees' => $employee,'departmentList'=>$department,'designationList'=>$designation];
        return view('pages.employee.employee', $data);
    }

    public function saveEmployee(Request $request){

        $request->validate([
            'firstName'      => 'required|string|max:255',
            'lastName'       => 'required|string|max:255',
            'birthDate'      => 'required|string|max:255',
            'gender'         => 'required|string|max:255',
            'department'     => 'required|string|max:255',
            'designation'    => 'required|array|max:255',
        ]);

        $person = Person::create(array_merge($request->all(), ['created_by' => auth()->id()]));
        $employee= $person->employee()->create(['department_id'=>$request->department,'created_by' => auth()->id()]);

        foreach ($request->designation as $designation) {
             $employee->employeeDesignation()->create(['designation_id'=>$designation,'created_by'=>auth()->id()]);
        };
        
        return $employee;


    }
}
