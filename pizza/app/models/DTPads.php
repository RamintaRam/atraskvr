<?php

namespace App\models;

/**
 * Class DTPads
 * @package App\models
 */
class DTPads extends CoreModel
{
    /**
     * @var table name
     */
    protected $table = 'dt_pads';

    /**
     * @var tables fillables
     */
    protected $fillable = ['id', 'name', 'calories'];
}
