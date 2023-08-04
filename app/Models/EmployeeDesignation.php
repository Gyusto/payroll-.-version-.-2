<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class EmployeeDesignation extends Model
{
    use HasFactory;
    use Uuid;

    protected $table = 'employee_designation';
    public $timestamps = false;
    protected $fillable = ['employee_id','designation_id','created_by','date_created','uuid'];

    // public function designation(){
    // return $this->belongsToMay(Designation::class, 'designation_id','id');
    // }

    public function employee(){
        return $this->belongsTo(Employee::class,'employee_id','employee_id');
    }

    // public function employeeDesignation(){
    //     return $this->hasMany(EmployeeDesignation::class, 'designation_id');
    // }
}
