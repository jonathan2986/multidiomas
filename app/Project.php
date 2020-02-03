<?php

namespace App;
use \Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['slug','user_id','image','thumbnail'];
    
    
    public $translatedAttributes = ['titulo','descripcion'];
}
