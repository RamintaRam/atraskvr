<?php

namespace App\Models;


class VRPagesTranslations extends CoreModel
{
    protected $table = 'vr_pages_translations';

    protected $fillable = ['id', 'pages_id', 'languages_id', 'title', 'description_long', 'description_short', 'slug'];

    public function translationsConnections()
    {
        return $this->hasMany(VRPages::class, 'id', 'pages_id');
    }

    public function languagesConnections()
    {
        return $this->hasMany(VRLanguages::class, 'id', 'languages_id');
    }



}


