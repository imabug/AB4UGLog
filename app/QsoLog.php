<?php

namespace AB4UGLog;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
        'qsoDate',
        'qsoTime',
        'frequency',
        'name',
        'power',
        'rstSent',
        'rstRecv',
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
    public function callsign()
    {
        return $this->belongsTo('AB4UGLog\Callsign');
    }

    public function mode()
    {
        return $this->hasOne('AB4UGLog\Mode');
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
