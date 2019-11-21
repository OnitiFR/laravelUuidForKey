<?php

namespace Oniti\UuidForKey;

use Ramsey\Uuid\Uuid;

trait UuidForKey
{
  public static function bootUuidForKey()
   {
       static::creating(function ($model) {
           $model->{$model->getKeyName()} = $model->getUuid();
       });
   }

   public function getUuid() : string{
       if($this->{$this->getKeyName()}) return $this->{$this->getKeyName()};

       return (string)($this->getTable().'_'.Uuid::uuid4());;
   }
}
