<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LogBook extends Model
{
    use SoftDeletes;

    /**
     * Attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
         'logbook',
     ];

     /**
      * Attributes that should be mutated to dates.
      *
      * @var array
      */
     protected $dates = [
         'created_at',
         'deleted_at',
         'updated_at',
     ];

     /*
      * Relationships
      */
     public function qsolog() {
         return $this->hasMany('\AB4UGLog\QsoLog');
     }
}
