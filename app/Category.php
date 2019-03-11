<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class Category extends Model

{

    protected $fillable = [
        'name',
        'url',
        'url_ru',
        'url_en',
        'name_ru',
        'name_en',
        'parent_id',
        'description_ru',
        'description',
        'description_en',
        'image'
    ];







    public function products()

    {

        return $this->hasMany( Product::class);

    }
    public function childrens()

    {

        return $this->hasMany( Category::class,'parent_id');

    }
    public function parent(){
        return $this->belongsTo( Category::class, 'parent_id' );
    }
    public function locName()

    {
        if(config('app.locale') == 'hy'){
            return $this->name;
        }
        if(config('app.locale') == 'ru'){
            return $this->name_ru;
        } if(config('app.locale') == 'en'){
            return $this->name_en;
        }

    }
    public function desc()

    {
        if(config('app.locale') == 'hy'){
            return $this->description;
        }
        if(config('app.locale') == 'ru'){
            return $this->description_ru;
        } if(config('app.locale') == 'en'){
            return $this->description_en;
        }

    }
    public function urls()

    {
        if(config('app.locale') == 'hy'){
            return $this->url;
        }
        if(config('app.locale') == 'ru'){
            return $this->url_ru;
        } if(config('app.locale') == 'en'){
            return $this->url_en;
        }

    }



    public function getNameAttribute($value)

    {

        return ucfirst($value);

    }

}

