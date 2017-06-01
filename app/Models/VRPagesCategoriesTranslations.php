<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VRPagesCategoriesTranslations extends Model
{
    protected $table = 'vr_pages_categories_translations';

    protected $fillable = ['id', 'categories_id', 'language_id', 'name', 'slug'];
}
