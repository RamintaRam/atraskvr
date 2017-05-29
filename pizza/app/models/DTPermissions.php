<?php

namespace App\models;


/**
 * Class DTPermissions
 * @package App\models
 */
class DTPermissions extends CoreModel
{
    /**
     * @var table name
     */
    protected $table = 'dt_permissions';

    /**
     * @var tables fillables
     */
    protected $fillable = ['id', 'name'];
}
