<?php

namespace App\models;


use Illuminate\Database\Eloquent\Model;

/**
 * Class DTUsersRolesConnections
 * @package App\models
 */
class DTUsersRolesConnections extends Model
{
    /**
     * @var table name
     */
    protected $table = 'dt_users_roles_connections';

    /**
     * @var tables fillables
     */
    protected $fillable = ['users_id', 'roles_id'];
    
    /**
     * @var bool
     */
    protected $updated_at = false;

    public function role (  )
    {
        return $this->hasOne(DTRoles::class, 'id', 'roles_id');
    }

}
