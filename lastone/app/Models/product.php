<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description','color'
    ];


    protected $guarded = [
        'price','stock','img','sale_price','price'
    ];

    public function getCategoryRelation(){
        return $this->belongsTo(category::class);
    }
}
