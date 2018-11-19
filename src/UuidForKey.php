<?php

namespace Oniti\UuidForKey;

use Ramsey\Uuid\Uuid;

trait UuidForKey
{
  public static function bootUuidForKey()
   {
       static::creating(function ($model) {
           $model->{$model->getKeyName()} = (string)($model->getTable().'_'.Uuid::uuid4());
           $model->creating($model);
       });
   }
}
