<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'name',

        'name_ru',
        'name_en',



        'url',
        'url_ru',
        'url_en',
        'image',



        'description',

        'description_ru',
        'description_en',



    ];

    public function desc()
    {
        if (config('app.locale') == 'hy') {
            return $this->description;
        }
        if (config('app.locale') == 'ru') {
            return $this->description_ru;
        }
        if (config('app.locale') == 'en') {
            return $this->description_en;
        }

    }
    public function locName()
    {
        if(config('app.locale') == 'hy'){
            return $this->name;
        }
        if(config('app.locale') == 'ru'){
            return $this->name_ru;
        }
        if(config('app.locale') == 'en'){
            return $this->name_en;
        }
    }
    public function urls()
    {
        if(config('app.locale') == 'hy'){
            return $this->url;
        }
        if(config('app.locale') == 'ru'){
            return $this->url_ru;
        }
        if(config('app.locale') == 'en'){
            return $this->url_en;
        }
    }
}
