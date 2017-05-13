<?php

namespace AB4UGLog;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LotwQslStatus extends Model
{
    use SoftDeletes;

    /**
     * Table associated with the model.
     *
     * @var string
     */
    protected $table = 'lotw_qslstatus';

    /**
     * Attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lotwSent',
        'lotwSentDate',
        'lotwRecv',
        'lotwRecvDate',
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
