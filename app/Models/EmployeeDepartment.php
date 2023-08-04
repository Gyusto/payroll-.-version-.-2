<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class EmployeeDepartment extends Model
{
    use HasFactory;
    use Uuid;

    public $timestamps = false;
    //protected $fillable = ['employee_id','designation_id','createdBy','dateCreated','uuid'];

}
