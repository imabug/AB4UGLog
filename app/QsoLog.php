<?php

namespace AB4UGLog;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Model file for the qsologs table
 * This table tracks all the QSOs.
 */
class QsoLog extends Model
{
    use SoftDeletes;

    /**
     * Table associated with the model.
     *
     * @var string
     */
    protected $table = 'qsologs';

    /**
     * Attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'logbook_id',
        'qsoDate',
        'qsoTime',
        'frequency',
        'callsign_id',
        'name',
        'mode_id',
        'power',
        'rstSent',
        'rstRecv',
        'comment_id',
        'qslstatus_id',
        'lotwqslstatus_id',
        'qsoGroup',
        'cqZone',
        'ituZone',
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
    public function logbook()
    {
      return $this->belongsTo('AB4UG\LogBook');
    }

    public function callsign()
    {
        return $this->belongsTo('AB4UGLog\Callsign');
    }

    public function mode()
    {
        return $this->belongsTo('AB4UGLog\Mode');
    }

    public function comment()
    {
        return $this->hasOne('AB4UGLog\Comment');
    }

    public function qslStatus()
    {
        return $this->hasOne('AB4UGLog\QslStatus');
    }

    public function lotwQslStatus()
    {
        return $this->hasOne('AB4UGLog\LotwQslStatus');
    }
}
