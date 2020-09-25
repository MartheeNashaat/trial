<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;


    protected $table = 'products';

    protected $fillable = [
        'name', 'description','color','size'
    ];


    protected $guarded = [
        'stock','img_id','sale_price','price','category_id','brand_id'
    ];

    public function category(){
        return $this->belongsTo(category::class);
    }

    public function brand(){
        return $this->belongsTo(brand::class);
    }
    public function img(){
        return $this->hasMany(productImg::class);
    }

}
