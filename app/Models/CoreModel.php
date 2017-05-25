<?php

namespace App\Models;

use App\Http\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CoreModel extends Model
{
    /**
     * Incrementing is set to false
     *
     * @var bool
     */
    public $incrementing = false;
    use SoftDeletes;
    use UuidTrait;


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

    public function getFillable()
    {
        unset($this->fillable[0]);
        return $this->fillable;

    }

    public function getTableName()
    {
        $tableName = substr($this->table, 3);
        return $tableName;
    }
}
