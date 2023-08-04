<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class Person extends Model
{
    use HasFactory;
    use Uuid;

    protected $table ='person';
    public $timestamps = false;
    protected $primaryKey = 'person_id';
    protected $fillable = ['firstName', 'lastName','birthDate', 'lastName','gender','created_by','uuid'];
    // protected $hidden = [
    //     'person_id',
    //     'user_id',
    //     'createBy'
    // ];

    public function employee(){
        return $this->hasOne(Employee::class,'person_id','person_id');
    }

    public function department(){
        return $this->belongsTo(Department::class,'department_id','id');
    }
}

