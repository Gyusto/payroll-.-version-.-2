<?php
 
namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Department;
 
class DepartmentController extends Controller{

    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */

    public function __construct(){
        $this->middleware('auth');
    }

    public function department(){
        $department = Department::get();
        $data = ['department'=>$department];
        return view('pages.department.department',$data);
    }


}
