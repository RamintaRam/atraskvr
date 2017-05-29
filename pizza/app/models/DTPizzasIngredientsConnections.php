<?php

namespace App\models;


use Illuminate\Database\Eloquent\Model;

/**
 * Class DTPizzasIngredientsConnections
 * @package App\models
 */
class DTPizzasIngredientsConnections extends Model
{
    /**
     * @var table name
     */
    protected $table = 'dt_pizzas_ingredients_connections';

    /**
     * @var tables fillables
     */
    protected $fillable = ['pizzas_id', 'ingredients_id'];

    /**
     * @var bool
     */
    protected $updated_at = false;

    public function ingredient (  )
    {
        return $this->hasOne(DTIngredients::class, 'id', 'ingredients_id');
    }
}
