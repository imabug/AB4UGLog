<?php

namespace AB4UGLog;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Model file for the logbook table
 * Used to group QSOs together. For example, a separate logbook can be
 * created for contacts made during a contest.
 */
class LogBook extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'logbooks';

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
