<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productImg extends Model
{
    use HasFactory;
    protected $table = 'product_imgs';
    protected $fillable = [
        'slug'
    ];

    public function product(){
        return $this->belongsTo(product::class);
    }

}
