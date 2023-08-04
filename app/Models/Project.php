<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;


public function createdBy(){
   return $this->hasOne(User::class, 'user_id','created_by')->with('person');
    }

public function projectClient(){
    return $this->belongsTo(Client::class, 'client_id','client_id');
}

}

