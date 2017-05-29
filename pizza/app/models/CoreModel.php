<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Ramsey\Uuid\Uuid;

/**
 * Class CoreModel
 * @package App\models
 */
class CoreModel extends Model
{

    /**
     * Incrementing is set to false
     *
     * @var bool
     */
    public $incrementing = false;

    use SoftDeletes;

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
}

