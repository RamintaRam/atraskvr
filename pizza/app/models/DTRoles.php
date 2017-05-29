<?php

namespace App\models;


/**
 * Class DTRoles
 * @package App\models
 */
class DTRoles extends CoreModel
{
    /**
     * @var table name
     */
    protected $table = 'dt_roles';

    /**
     * @var tables fillables
     */
    protected $fillable = ['id', 'name'];
}
