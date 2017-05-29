<?php

namespace App\models;


use Illuminate\Database\Eloquent\Model;

/**
 * Class DTRolesPermissionsConnections
 * @package App\models
 */
class DTRolesPermissionsConnections extends Model
{
    /**
     * @var table name
     */
    protected $table = 'dt_roles_permissions_connections';

    /**
     * @var tables fillables
     */
    protected $fillable = ['permissions_id', 'roles_id'];

    /**
     * @var bool
     */
    protected $updated_at = false;

}
