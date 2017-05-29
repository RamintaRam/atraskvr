<?php

namespace App\models;

/**
 * Class DTCheeses
 * @package App\models
 *
 */
class DTCheeses extends CoreModel
{
    /**
     * @var table name
     */
    protected $table = 'dt_cheeses';

    /**
     * @var tables fillables
     */
    protected $fillable = ['id', 'name', 'calories'];
}
