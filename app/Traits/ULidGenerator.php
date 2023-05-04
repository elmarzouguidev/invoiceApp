<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

trait ULidGenerator
{
    public static function bootULidGenerator(): void
    {
        static::creating(function (Model $model) {
            if (Schema::hasColumn($model->getTable(), 'ulid')) {
                $model->ulid = Str::ulid();
            }
        });
    }
}
