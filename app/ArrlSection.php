<?php

namespace AB4UGLog;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArrlSection extends Model
{
    use SoftDeletes;

    /**
     * Table associated with the model.
     *
     * @var string
     */
    protected $table = 'arrl_sec';

    /**
     * Attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'section',
        'section_name',
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
}
