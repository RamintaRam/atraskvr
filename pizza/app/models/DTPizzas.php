<?php

namespace App\models;


/**
 * Class DTPizzas
 * @package App\models
 */
class DTPizzas extends CoreModel
{
    /**
     * @var table name
     */
    protected $table = 'dt_pizzas';

    /**
     * @var tables fillables
     */
    protected $fillable = ['id', 'name', 'calories', 'pads_id', 'cheeses_id', 'user_id', 'comment'];

    public function connection (  )
    {
        return $this->belongsToMany(DTIngredients::class, 'dt_pizzas_ingredients_connections', 'pizzas_id', 'ingredients_id');
    }

    public function pizzasConnections (  )
    {
        return $this->hasMany(DTPizzasIngredientsConnections::class, 'pizzas_id', 'id')
            ->with(['ingredient']);
    }

    public function ground (  )
    {
        return $this->hasOne(DTPads::class, 'id', 'pads_id');
    }

    public function cheese (  )
    {
        return $this->hasOne(DTCheeses::class, 'id', 'cheeses_id');
    }
}
