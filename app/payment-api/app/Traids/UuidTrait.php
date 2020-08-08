<?php

namespace App\Traids;

use Ramsey\Uuid\Uuid;

trait UuidTrait
{
    public static function boot(){
        parent::boot();
        self::creating(function ($model) {
            $model->uuid = (string)Uuid::uuid4();
        });
    }
}