<?php

namespace App\Traits;

use Haruncpi\LaravelIdGenerator\IdGenerator;

trait customID
{
    protected static function boot()
    {
        parent::boot();

        $creationCallback = function ($model) {
            if (empty($model->employee_number))
            {
                $model->employee_number= IdGenerator::generate(['table' =>'employees','field'=>'employee_id', 'length' => 6, 'prefix' =>date('ym')]);
            }
        };

        static::creating($creationCallback);
    }

}
