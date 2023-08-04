<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;
use App\Traits\customID;

class Employee extends Model
{
    use HasFactory;
    use Uuid;
    use customID;

    protected $table = 'employees';
    protected $primaryKey = 'employee_id';
    public $timestamps = false;
    protected $fillable = ['person_id','employee_number','department_id','created_by'];
    protected $casts = [
        'date_created' => 'datetime:yyyyMMddTHH:mmzzz ',
    ];

    public function person(){
        return $this->belongsTo(Person::class, 'person_id','person_id');
    }
    
    public function department(){
        return $this->belongsTo(Department::class,'department_id','id');
    }

    public function designation(){
        return $this->belongsToMany(Designation::class,'employee_designation','employee_id','designation_id');
    }

    public function employeeDesignation(){
        return $this->hasMany(EmployeeDesignation::class,'employee_id','employee_id');
    }

}
