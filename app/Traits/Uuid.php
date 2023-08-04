<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait Uuid
{
    protected static function bootUuid()
    {
      //  parent::bootUuid();

        $creationCallback = function ($model) {
            if (empty($model->uuid))
            {
                $model->uuid= Str::uuid()->toString();
            }
        };

        static::creating($creationCallback);
    }

}
