<?php

namespace AB4UGLog;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QslStatus extends Model
{
    use SoftDeletes;

    /**
     * Table associated with the model
     *
     * @var string
     */
    protected $table = 'qslstatus';

    /**
     * Attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'qslSent',
        'qslSentDate',
        'qslRecv',
        'qslRecvDate',
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
    public function qso()
    {
        return $this->belongsTo('AB4UGLog\QsoLog');
    }
}
