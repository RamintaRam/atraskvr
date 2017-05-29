<?php

namespace App\models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Ramsey\Uuid\Uuid;

/**
 * Class DTUsers
 * @package App\models
 */
class DTUsers extends Authenticatable
{
    use Notifiable;

    use SoftDeletes;

    public $incrementing = false;

    /**
     * @var table name
     */
    protected $table = 'dt_users';

    /**
     * @var tables fillables
     */
    protected $fillable = ['id', 'name', 'email', 'phone', 'password'];

    /**
     * Automatically generates and adds UUID to model
     */
    protected static function boot() {
        parent::boot();
        static::creating(function($model) {
            if(!isset($model->attributes['id'])) {
                $model->attributes['id'] = Uuid::uuid4();
            } else {
                $model->{$model->getKeyName()} = $model->attributes['id'];
            }
        });
    }

    public function getFillable() {

        unset($this->fillable[0]);
        return $this->fillable;

    }

    public function getTableName()
    {
        $tableName = substr($this->table, 3);
        return $tableName;
    }

    public function connection (  )
    {
        return $this->belongsToMany(DTRoles::class, 'dt_users_roles_connections', 'users_id', 'roles_id');
    }

    public function rolesConnections (  )
    {
        return $this->hasMany(DTUsersRolesConnections::class, 'users_id', 'id')
            ->with(['role']);
    }
}
