<?php

namespace App\models;


/**
 * Class DTIngredients
 * @package App\models
 */
class DTIngredients extends CoreModel
{
    /**
     * @var table name
     */
    protected $table = 'dt_ingredients';

    /**
     * @var tables fillables
     */
    protected $fillable = ['id', 'name', 'calories'];


}
