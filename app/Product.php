<?php

namespace inventory_vue;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'quantity' , 'serial' , 'manufacture_id' , 'description_id' , 'location_id','category_id', 'brand_id', 'status'
    ];
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    public function manufacture(){
        return $this->belongsTo(Menufacture::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function description(){
        return $this->belongsTo(Description::class);
    }
    public function location(){
        return $this->belongsTo(Location::class);
    }
    
}
