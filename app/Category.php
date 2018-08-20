<?php

namespace inventory_vue;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function products(){
        return $this->hasMany(Product::Class);
    }
}
