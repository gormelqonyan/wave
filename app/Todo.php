<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = ['text','photo'];

    public function locName(){
        if(config('app.locale') == 'hy'){
            return $this->text;
        }
        if(config('app.locale') == 'ru'){
            return $this->text_ru;
        } if(config('app.locale') == 'en'){
            return $this->text_en;
        }
    }
}
