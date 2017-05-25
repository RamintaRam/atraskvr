<?php

namespace App\Models;


use Symfony\Component\HttpKernel\EventListener\ValidateRequestListener;

class VRPages extends CoreModel
{
    protected $table = 'vr_pages';

    protected $fillable = ['id', 'pages_categories_id', 'cover_image_id'];

    public static function create($data)
    {
    }


    public function pagesConnections ()
    {
        return $this->hasMany(VRPagesTranslations::class, 'pages_id', 'id')
            ->with(['languages']);
    }

    public function languages ()
    {
        return $this->belongsToMany(VRLanguages::class, 'vr_pages_translations', '	pages_id', 'languages_id');
    }


}
