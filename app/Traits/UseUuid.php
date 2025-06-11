<?php

namespace App\Traits;
use Illuminate\Support\Str;

trait UseUuid {
  protected static function bootUseUuid() {
    static::creating(function ($model) {
      if(!$model->getKey()) {
        $model->{$model->getKeyName()} = (string) Str::uuid(); 
      }
    });
  }
  
  public function initializeUseUuid() {
    $this->keyType = 'string';
    $this->incrementing = false;
  }
}